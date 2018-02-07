<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdiniProdottiRequest;
use App\Http\Requests\UpdateOrdiniProdottiRequest;
use App\Repositories\OrdiniProdottiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrdiniProdottiController extends AppBaseController
{
    /** @var  OrdiniProdottiRepository */
    private $ordiniProdottiRepository;

    public function __construct(OrdiniProdottiRepository $ordiniProdottiRepo)
    {
        $this->ordiniProdottiRepository = $ordiniProdottiRepo;
    }

    /**
     * Display a listing of the OrdiniProdotti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordiniProdottiRepository->pushCriteria(new RequestCriteria($request));
        $ordiniProdottis = $this->ordiniProdottiRepository->all();

        return view('ordini_prodottis.index')
            ->with('ordiniProdottis', $ordiniProdottis);
    }

    /**
     * Show the form for creating a new OrdiniProdotti.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordini_prodottis.create');
    }

    /**
     * Store a newly created OrdiniProdotti in storage.
     *
     * @param CreateOrdiniProdottiRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdiniProdottiRequest $request)
    {
        $input = $request->all();

        $ordiniProdotti = $this->ordiniProdottiRepository->create($input);

        Flash::success('Ordini Prodotti saved successfully.');

        return redirect(route('ordiniProdottis.index'));
    }

    /**
     * Display the specified OrdiniProdotti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordiniProdotti = $this->ordiniProdottiRepository->findWithoutFail($id);

        if (empty($ordiniProdotti)) {
            Flash::error('Ordini Prodotti not found');

            return redirect(route('ordiniProdottis.index'));
        }

        return view('ordini_prodottis.show')->with('ordiniProdotti', $ordiniProdotti);
    }

    /**
     * Show the form for editing the specified OrdiniProdotti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordiniProdotti = $this->ordiniProdottiRepository->findWithoutFail($id);

        if (empty($ordiniProdotti)) {
            Flash::error('Ordini Prodotti not found');

            return redirect(route('ordiniProdottis.index'));
        }

        return view('ordini_prodottis.edit')->with('ordiniProdotti', $ordiniProdotti);
    }

    /**
     * Update the specified OrdiniProdotti in storage.
     *
     * @param  int              $id
     * @param UpdateOrdiniProdottiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdiniProdottiRequest $request)
    {
        $ordiniProdotti = $this->ordiniProdottiRepository->findWithoutFail($id);

        if (empty($ordiniProdotti)) {
            Flash::error('Ordini Prodotti not found');

            return redirect(route('ordiniProdottis.index'));
        }

        $ordiniProdotti = $this->ordiniProdottiRepository->update($request->all(), $id);

        Flash::success('Ordini Prodotti updated successfully.');

        return redirect(route('ordiniProdottis.index'));
    }

    /**
     * Remove the specified OrdiniProdotti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordiniProdotti = $this->ordiniProdottiRepository->findWithoutFail($id);

        if (empty($ordiniProdotti)) {
            Flash::error('Ordini Prodotti not found');

            return redirect(route('ordiniProdottis.index'));
        }

        $this->ordiniProdottiRepository->delete($id);

        Flash::success('Ordini Prodotti deleted successfully.');

        return redirect(route('ordiniProdottis.index'));
    }
}
