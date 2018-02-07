<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePiattiRequest;
use App\Http\Requests\UpdatePiattiRequest;
use App\Repositories\PiattiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PiattiController extends AppBaseController
{
    /** @var  PiattiRepository */
    private $piattiRepository;

    public function __construct(PiattiRepository $piattiRepo)
    {
        $this->piattiRepository = $piattiRepo;
    }

    /**
     * Display a listing of the Piatti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->piattiRepository->pushCriteria(new RequestCriteria($request));
        $piattis = $this->piattiRepository->all();

        return view('piattis.index')
            ->with('piattis', $piattis);
    }

    /**
     * Show the form for creating a new Piatti.
     *
     * @return Response
     */
    public function create()
    {
        return view('piattis.create');
    }

    /**
     * Store a newly created Piatti in storage.
     *
     * @param CreatePiattiRequest $request
     *
     * @return Response
     */
    public function store(CreatePiattiRequest $request)
    {
        $input = $request->all();

        $piatti = $this->piattiRepository->create($input);

        Flash::success('Piatti saved successfully.');

        return redirect(route('piattis.index'));
    }

    /**
     * Display the specified Piatti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $piatti = $this->piattiRepository->findWithoutFail($id);

        if (empty($piatti)) {
            Flash::error('Piatti not found');

            return redirect(route('piattis.index'));
        }

        return view('piattis.show')->with('piatti', $piatti);
    }

    /**
     * Show the form for editing the specified Piatti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $piatti = $this->piattiRepository->findWithoutFail($id);

        if (empty($piatti)) {
            Flash::error('Piatti not found');

            return redirect(route('piattis.index'));
        }

        return view('piattis.edit')->with('piatti', $piatti);
    }

    /**
     * Update the specified Piatti in storage.
     *
     * @param  int              $id
     * @param UpdatePiattiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePiattiRequest $request)
    {
        $piatti = $this->piattiRepository->findWithoutFail($id);

        if (empty($piatti)) {
            Flash::error('Piatti not found');

            return redirect(route('piattis.index'));
        }

        $piatti = $this->piattiRepository->update($request->all(), $id);

        Flash::success('Piatti updated successfully.');

        return redirect(route('piattis.index'));
    }

    /**
     * Remove the specified Piatti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $piatti = $this->piattiRepository->findWithoutFail($id);

        if (empty($piatti)) {
            Flash::error('Piatti not found');

            return redirect(route('piattis.index'));
        }

        $this->piattiRepository->delete($id);

        Flash::success('Piatti deleted successfully.');

        return redirect(route('piattis.index'));
    }
}
