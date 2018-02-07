<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRistorantiRequest;
use App\Http\Requests\UpdateRistorantiRequest;
use App\Repositories\RistorantiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RistorantiController extends AppBaseController
{
    /** @var  RistorantiRepository */
    private $ristorantiRepository;

    public function __construct(RistorantiRepository $ristorantiRepo)
    {
        $this->ristorantiRepository = $ristorantiRepo;
    }

    /**
     * Display a listing of the Ristoranti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ristorantiRepository->pushCriteria(new RequestCriteria($request));
        $ristorantis = $this->ristorantiRepository->all();

        return view('ristorantis.index')
            ->with('ristorantis', $ristorantis);
    }

    /**
     * Show the form for creating a new Ristoranti.
     *
     * @return Response
     */
    public function create()
    {
        return view('ristorantis.create');
    }

    /**
     * Store a newly created Ristoranti in storage.
     *
     * @param CreateRistorantiRequest $request
     *
     * @return Response
     */
    public function store(CreateRistorantiRequest $request)
    {
        $input = $request->all();

        $ristoranti = $this->ristorantiRepository->create($input);

        Flash::success('Ristoranti saved successfully.');

        return redirect(route('ristorantis.index'));
    }

    /**
     * Display the specified Ristoranti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ristoranti = $this->ristorantiRepository->findWithoutFail($id);

        if (empty($ristoranti)) {
            Flash::error('Ristoranti not found');

            return redirect(route('ristorantis.index'));
        }

        return view('ristorantis.show')->with('ristoranti', $ristoranti);
    }

    /**
     * Show the form for editing the specified Ristoranti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ristoranti = $this->ristorantiRepository->findWithoutFail($id);

        if (empty($ristoranti)) {
            Flash::error('Ristoranti not found');

            return redirect(route('ristorantis.index'));
        }

        return view('ristorantis.edit')->with('ristoranti', $ristoranti);
    }

    /**
     * Update the specified Ristoranti in storage.
     *
     * @param  int              $id
     * @param UpdateRistorantiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRistorantiRequest $request)
    {
        $ristoranti = $this->ristorantiRepository->findWithoutFail($id);

        if (empty($ristoranti)) {
            Flash::error('Ristoranti not found');

            return redirect(route('ristorantis.index'));
        }

        $ristoranti = $this->ristorantiRepository->update($request->all(), $id);

        Flash::success('Ristoranti updated successfully.');

        return redirect(route('ristorantis.index'));
    }

    /**
     * Remove the specified Ristoranti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ristoranti = $this->ristorantiRepository->findWithoutFail($id);

        if (empty($ristoranti)) {
            Flash::error('Ristoranti not found');

            return redirect(route('ristorantis.index'));
        }

        $this->ristorantiRepository->delete($id);

        Flash::success('Ristoranti deleted successfully.');

        return redirect(route('ristorantis.index'));
    }
}
