<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdiniDatiRequest;
use App\Http\Requests\UpdateOrdiniDatiRequest;
use App\Repositories\OrdiniDatiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrdiniDatiController extends AppBaseController
{
    /** @var  OrdiniDatiRepository */
    private $ordiniDatiRepository;

    public function __construct(OrdiniDatiRepository $ordiniDatiRepo)
    {
        $this->ordiniDatiRepository = $ordiniDatiRepo;
    }

    /**
     * Display a listing of the OrdiniDati.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordiniDatiRepository->pushCriteria(new RequestCriteria($request));
        $ordiniDatis = $this->ordiniDatiRepository->all();

        return view('ordini_datis.index')
            ->with('ordiniDatis', $ordiniDatis);
    }

    /**
     * Show the form for creating a new OrdiniDati.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordini_datis.create');
    }

    /**
     * Store a newly created OrdiniDati in storage.
     *
     * @param CreateOrdiniDatiRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdiniDatiRequest $request)
    {
        $input = $request->all();

        $ordiniDati = $this->ordiniDatiRepository->create($input);

        Flash::success('Ordini Dati saved successfully.');

        return redirect(route('ordiniDatis.index'));
    }

    /**
     * Display the specified OrdiniDati.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordiniDati = $this->ordiniDatiRepository->findWithoutFail($id);

        if (empty($ordiniDati)) {
            Flash::error('Ordini Dati not found');

            return redirect(route('ordiniDatis.index'));
        }

        return view('ordini_datis.show')->with('ordiniDati', $ordiniDati);
    }

    /**
     * Show the form for editing the specified OrdiniDati.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordiniDati = $this->ordiniDatiRepository->findWithoutFail($id);

        if (empty($ordiniDati)) {
            Flash::error('Ordini Dati not found');

            return redirect(route('ordiniDatis.index'));
        }

        return view('ordini_datis.edit')->with('ordiniDati', $ordiniDati);
    }

    /**
     * Update the specified OrdiniDati in storage.
     *
     * @param  int              $id
     * @param UpdateOrdiniDatiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdiniDatiRequest $request)
    {
        $ordiniDati = $this->ordiniDatiRepository->findWithoutFail($id);

        if (empty($ordiniDati)) {
            Flash::error('Ordini Dati not found');

            return redirect(route('ordiniDatis.index'));
        }

        $ordiniDati = $this->ordiniDatiRepository->update($request->all(), $id);

        Flash::success('Ordini Dati updated successfully.');

        return redirect(route('ordiniDatis.index'));
    }

    /**
     * Remove the specified OrdiniDati from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordiniDati = $this->ordiniDatiRepository->findWithoutFail($id);

        if (empty($ordiniDati)) {
            Flash::error('Ordini Dati not found');

            return redirect(route('ordiniDatis.index'));
        }

        $this->ordiniDatiRepository->delete($id);

        Flash::success('Ordini Dati deleted successfully.');

        return redirect(route('ordiniDatis.index'));
    }
}
