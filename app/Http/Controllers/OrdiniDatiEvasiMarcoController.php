<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdiniDatiEvasiMarcoRequest;
use App\Http\Requests\UpdateOrdiniDatiEvasiMarcoRequest;
use App\Repositories\OrdiniDatiEvasiMarcoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrdiniDatiEvasiMarcoController extends AppBaseController
{
    /** @var  OrdiniDatiEvasiMarcoRepository */
    private $ordiniDatiEvasiMarcoRepository;

    public function __construct(OrdiniDatiEvasiMarcoRepository $ordiniDatiEvasiMarcoRepo)
    {
        $this->ordiniDatiEvasiMarcoRepository = $ordiniDatiEvasiMarcoRepo;
    }

    /**
     * Display a listing of the OrdiniDatiEvasiMarco.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordiniDatiEvasiMarcoRepository->pushCriteria(new RequestCriteria($request));
        $ordiniDatiEvasiMarcos = $this->ordiniDatiEvasiMarcoRepository->all();

        return view('ordini_dati_evasi_marcos.index')
            ->with('ordiniDatiEvasiMarcos', $ordiniDatiEvasiMarcos);
    }

    /**
     * Show the form for creating a new OrdiniDatiEvasiMarco.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordini_dati_evasi_marcos.create');
    }

    /**
     * Store a newly created OrdiniDatiEvasiMarco in storage.
     *
     * @param CreateOrdiniDatiEvasiMarcoRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdiniDatiEvasiMarcoRequest $request)
    {
        $input = $request->all();

        $ordiniDatiEvasiMarco = $this->ordiniDatiEvasiMarcoRepository->create($input);

        Flash::success('Ordini Dati Evasi Marco saved successfully.');

        return redirect(route('ordiniDatiEvasiMarcos.index'));
    }

    /**
     * Display the specified OrdiniDatiEvasiMarco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordiniDatiEvasiMarco = $this->ordiniDatiEvasiMarcoRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasiMarco)) {
            Flash::error('Ordini Dati Evasi Marco not found');

            return redirect(route('ordiniDatiEvasiMarcos.index'));
        }

        return view('ordini_dati_evasi_marcos.show')->with('ordiniDatiEvasiMarco', $ordiniDatiEvasiMarco);
    }

    /**
     * Show the form for editing the specified OrdiniDatiEvasiMarco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordiniDatiEvasiMarco = $this->ordiniDatiEvasiMarcoRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasiMarco)) {
            Flash::error('Ordini Dati Evasi Marco not found');

            return redirect(route('ordiniDatiEvasiMarcos.index'));
        }

        return view('ordini_dati_evasi_marcos.edit')->with('ordiniDatiEvasiMarco', $ordiniDatiEvasiMarco);
    }

    /**
     * Update the specified OrdiniDatiEvasiMarco in storage.
     *
     * @param  int              $id
     * @param UpdateOrdiniDatiEvasiMarcoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdiniDatiEvasiMarcoRequest $request)
    {
        $ordiniDatiEvasiMarco = $this->ordiniDatiEvasiMarcoRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasiMarco)) {
            Flash::error('Ordini Dati Evasi Marco not found');

            return redirect(route('ordiniDatiEvasiMarcos.index'));
        }

        $ordiniDatiEvasiMarco = $this->ordiniDatiEvasiMarcoRepository->update($request->all(), $id);

        Flash::success('Ordini Dati Evasi Marco updated successfully.');

        return redirect(route('ordiniDatiEvasiMarcos.index'));
    }

    /**
     * Remove the specified OrdiniDatiEvasiMarco from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordiniDatiEvasiMarco = $this->ordiniDatiEvasiMarcoRepository->findWithoutFail($id);

        if (empty($ordiniDatiEvasiMarco)) {
            Flash::error('Ordini Dati Evasi Marco not found');

            return redirect(route('ordiniDatiEvasiMarcos.index'));
        }

        $this->ordiniDatiEvasiMarcoRepository->delete($id);

        Flash::success('Ordini Dati Evasi Marco deleted successfully.');

        return redirect(route('ordiniDatiEvasiMarcos.index'));
    }
}
