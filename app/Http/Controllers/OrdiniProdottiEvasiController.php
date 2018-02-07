<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdiniProdottiEvasiRequest;
use App\Http\Requests\UpdateOrdiniProdottiEvasiRequest;
use App\Repositories\OrdiniProdottiEvasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrdiniProdottiEvasiController extends AppBaseController
{
    /** @var  OrdiniProdottiEvasiRepository */
    private $ordiniProdottiEvasiRepository;

    public function __construct(OrdiniProdottiEvasiRepository $ordiniProdottiEvasiRepo)
    {
        $this->ordiniProdottiEvasiRepository = $ordiniProdottiEvasiRepo;
    }

    /**
     * Display a listing of the OrdiniProdottiEvasi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordiniProdottiEvasiRepository->pushCriteria(new RequestCriteria($request));
        $ordiniProdottiEvasis = $this->ordiniProdottiEvasiRepository->all();

        return view('ordini_prodotti_evasis.index')
            ->with('ordiniProdottiEvasis', $ordiniProdottiEvasis);
    }

    /**
     * Show the form for creating a new OrdiniProdottiEvasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordini_prodotti_evasis.create');
    }

    /**
     * Store a newly created OrdiniProdottiEvasi in storage.
     *
     * @param CreateOrdiniProdottiEvasiRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdiniProdottiEvasiRequest $request)
    {
        $input = $request->all();

        $ordiniProdottiEvasi = $this->ordiniProdottiEvasiRepository->create($input);

        Flash::success('Ordini Prodotti Evasi saved successfully.');

        return redirect(route('ordiniProdottiEvasis.index'));
    }

    /**
     * Display the specified OrdiniProdottiEvasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordiniProdottiEvasi = $this->ordiniProdottiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniProdottiEvasi)) {
            Flash::error('Ordini Prodotti Evasi not found');

            return redirect(route('ordiniProdottiEvasis.index'));
        }

        return view('ordini_prodotti_evasis.show')->with('ordiniProdottiEvasi', $ordiniProdottiEvasi);
    }

    /**
     * Show the form for editing the specified OrdiniProdottiEvasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordiniProdottiEvasi = $this->ordiniProdottiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniProdottiEvasi)) {
            Flash::error('Ordini Prodotti Evasi not found');

            return redirect(route('ordiniProdottiEvasis.index'));
        }

        return view('ordini_prodotti_evasis.edit')->with('ordiniProdottiEvasi', $ordiniProdottiEvasi);
    }

    /**
     * Update the specified OrdiniProdottiEvasi in storage.
     *
     * @param  int              $id
     * @param UpdateOrdiniProdottiEvasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdiniProdottiEvasiRequest $request)
    {
        $ordiniProdottiEvasi = $this->ordiniProdottiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniProdottiEvasi)) {
            Flash::error('Ordini Prodotti Evasi not found');

            return redirect(route('ordiniProdottiEvasis.index'));
        }

        $ordiniProdottiEvasi = $this->ordiniProdottiEvasiRepository->update($request->all(), $id);

        Flash::success('Ordini Prodotti Evasi updated successfully.');

        return redirect(route('ordiniProdottiEvasis.index'));
    }

    /**
     * Remove the specified OrdiniProdottiEvasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordiniProdottiEvasi = $this->ordiniProdottiEvasiRepository->findWithoutFail($id);

        if (empty($ordiniProdottiEvasi)) {
            Flash::error('Ordini Prodotti Evasi not found');

            return redirect(route('ordiniProdottiEvasis.index'));
        }

        $this->ordiniProdottiEvasiRepository->delete($id);

        Flash::success('Ordini Prodotti Evasi deleted successfully.');

        return redirect(route('ordiniProdottiEvasis.index'));
    }
}
