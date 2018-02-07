<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdiniDatiEvasiRequest;
use App\Http\Requests\UpdateOrdiniDatiEvasiRequest;
use App\Repositories\OrdiniDatiEvasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrdiniDatiEvasiController extends AppBaseController
{
    /** @var  OrdiniDatiEvasiRepository */
    private $ordiniDatiEvasiRepository;

    public function __construct(OrdiniDatiEvasiRepository $ordiniDatiEvasiRepo)
    {
        $this->ordiniDatiEvasiRepository = $ordiniDatiEvasiRepo;
    }

    /**
     * Display a listing of the OrdiniDatiEvasi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordiniDatiEvasiRepository->pushCriteria(new RequestCriteria($request));
        $ordiniDatiEvasis = $this->ordiniDatiEvasiRepository->all();

        return view('ordini_dati_evasis.index')
            ->with('ordiniDatiEvasis', $ordiniDatiEvasis);
    }

    /**
     * Show the form for creating a new OrdiniDatiEvasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordini_dati_evasis.create');
    }

    /**
     * Store a newly created OrdiniDatiEvasi in storage.
     *
     * @param CreateOrdiniDatiEvasiRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdiniDatiEvasiRequest $request)
    {
        $input = $request->all();

        $ordiniDatiEvasi = $this->ordiniDatiEvasiRepository->create($input);

        Flash::success('Ordini Dati Evasi saved successfully.');

        return redirect(route('ordiniDatiEvasis.index'));
    }

    /**
     * Display the specified OrdiniDatiEvasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordiniDatiEvasi = $this->ordiniDatiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasi)) {
            Flash::error('Ordini Dati Evasi not found');

            return redirect(route('ordiniDatiEvasis.index'));
        }

        return view('ordini_dati_evasis.show')->with('ordiniDatiEvasi', $ordiniDatiEvasi);
    }

    /**
     * Show the form for editing the specified OrdiniDatiEvasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordiniDatiEvasi = $this->ordiniDatiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasi)) {
            Flash::error('Ordini Dati Evasi not found');

            return redirect(route('ordiniDatiEvasis.index'));
        }

        return view('ordini_dati_evasis.edit')->with('ordiniDatiEvasi', $ordiniDatiEvasi);
    }

    /**
     * Update the specified OrdiniDatiEvasi in storage.
     *
     * @param  int              $id
     * @param UpdateOrdiniDatiEvasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdiniDatiEvasiRequest $request)
    {
        $ordiniDatiEvasi = $this->ordiniDatiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasi)) {
            Flash::error('Ordini Dati Evasi not found');

            return redirect(route('ordiniDatiEvasis.index'));
        }

        $ordiniDatiEvasi = $this->ordiniDatiEvasiRepository->update($request->all(), $id);

        Flash::success('Ordini Dati Evasi updated successfully.');

        return redirect(route('ordiniDatiEvasis.index'));
    }

    /**
     * Remove the specified OrdiniDatiEvasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordiniDatiEvasi = $this->ordiniDatiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasi)) {
            Flash::error('Ordini Dati Evasi not found');

            return redirect(route('ordiniDatiEvasis.index'));
        }

        $this->ordiniDatiEvasiRepository->delete($id);

        Flash::success('Ordini Dati Evasi deleted successfully.');

        return redirect(route('ordiniDatiEvasis.index'));
    }
}
