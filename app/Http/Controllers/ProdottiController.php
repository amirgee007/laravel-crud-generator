<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProdottiRequest;
use App\Http\Requests\UpdateProdottiRequest;
use App\Repositories\ProdottiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProdottiController extends AppBaseController
{
    /** @var  ProdottiRepository */
    private $prodottiRepository;

    public function __construct(ProdottiRepository $prodottiRepo)
    {
        $this->prodottiRepository = $prodottiRepo;
    }

    /**
     * Display a listing of the Prodotti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prodottiRepository->pushCriteria(new RequestCriteria($request));
        $prodottis = $this->prodottiRepository->all();

        return view('prodottis.index')
            ->with('prodottis', $prodottis);
    }

    /**
     * Show the form for creating a new Prodotti.
     *
     * @return Response
     */
    public function create()
    {
        return view('prodottis.create');
    }

    /**
     * Store a newly created Prodotti in storage.
     *
     * @param CreateProdottiRequest $request
     *
     * @return Response
     */
    public function store(CreateProdottiRequest $request)
    {
        $input = $request->all();

        $prodotti = $this->prodottiRepository->create($input);

        Flash::success('Prodotti saved successfully.');

        return redirect(route('prodottis.index'));
    }

    /**
     * Display the specified Prodotti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prodotti = $this->prodottiRepository->findWithoutFail($id);

        if (empty($prodotti)) {
            Flash::error('Prodotti not found');

            return redirect(route('prodottis.index'));
        }

        return view('prodottis.show')->with('prodotti', $prodotti);
    }

    /**
     * Show the form for editing the specified Prodotti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prodotti = $this->prodottiRepository->findWithoutFail($id);

        if (empty($prodotti)) {
            Flash::error('Prodotti not found');

            return redirect(route('prodottis.index'));
        }

        return view('prodottis.edit')->with('prodotti', $prodotti);
    }

    /**
     * Update the specified Prodotti in storage.
     *
     * @param  int              $id
     * @param UpdateProdottiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProdottiRequest $request)
    {
        $prodotti = $this->prodottiRepository->findWithoutFail($id);

        if (empty($prodotti)) {
            Flash::error('Prodotti not found');

            return redirect(route('prodottis.index'));
        }

        $prodotti = $this->prodottiRepository->update($request->all(), $id);

        Flash::success('Prodotti updated successfully.');

        return redirect(route('prodottis.index'));
    }

    /**
     * Remove the specified Prodotti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prodotti = $this->prodottiRepository->findWithoutFail($id);

        if (empty($prodotti)) {
            Flash::error('Prodotti not found');

            return redirect(route('prodottis.index'));
        }

        $this->prodottiRepository->delete($id);

        Flash::success('Prodotti deleted successfully.');

        return redirect(route('prodottis.index'));
    }
}
