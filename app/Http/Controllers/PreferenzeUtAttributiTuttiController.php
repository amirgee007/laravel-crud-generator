<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreferenzeUtAttributiTuttiRequest;
use App\Http\Requests\UpdatePreferenzeUtAttributiTuttiRequest;
use App\Repositories\PreferenzeUtAttributiTuttiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PreferenzeUtAttributiTuttiController extends AppBaseController
{
    /** @var  PreferenzeUtAttributiTuttiRepository */
    private $preferenzeUtAttributiTuttiRepository;

    public function __construct(PreferenzeUtAttributiTuttiRepository $preferenzeUtAttributiTuttiRepo)
    {
        $this->preferenzeUtAttributiTuttiRepository = $preferenzeUtAttributiTuttiRepo;
    }

    /**
     * Display a listing of the PreferenzeUtAttributiTutti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->preferenzeUtAttributiTuttiRepository->pushCriteria(new RequestCriteria($request));
        $preferenzeUtAttributiTuttis = $this->preferenzeUtAttributiTuttiRepository->all();

        return view('preferenze_ut_attributi_tuttis.index')
            ->with('preferenzeUtAttributiTuttis', $preferenzeUtAttributiTuttis);
    }

    /**
     * Show the form for creating a new PreferenzeUtAttributiTutti.
     *
     * @return Response
     */
    public function create()
    {
        return view('preferenze_ut_attributi_tuttis.create');
    }

    /**
     * Store a newly created PreferenzeUtAttributiTutti in storage.
     *
     * @param CreatePreferenzeUtAttributiTuttiRequest $request
     *
     * @return Response
     */
    public function store(CreatePreferenzeUtAttributiTuttiRequest $request)
    {
        $input = $request->all();

        $preferenzeUtAttributiTutti = $this->preferenzeUtAttributiTuttiRepository->create($input);

        Flash::success('Preferenze Ut Attributi Tutti saved successfully.');

        return redirect(route('preferenzeUtAttributiTuttis.index'));
    }

    /**
     * Display the specified PreferenzeUtAttributiTutti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preferenzeUtAttributiTutti = $this->preferenzeUtAttributiTuttiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributiTutti)) {
            Flash::error('Preferenze Ut Attributi Tutti not found');

            return redirect(route('preferenzeUtAttributiTuttis.index'));
        }

        return view('preferenze_ut_attributi_tuttis.show')->with('preferenzeUtAttributiTutti', $preferenzeUtAttributiTutti);
    }

    /**
     * Show the form for editing the specified PreferenzeUtAttributiTutti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preferenzeUtAttributiTutti = $this->preferenzeUtAttributiTuttiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributiTutti)) {
            Flash::error('Preferenze Ut Attributi Tutti not found');

            return redirect(route('preferenzeUtAttributiTuttis.index'));
        }

        return view('preferenze_ut_attributi_tuttis.edit')->with('preferenzeUtAttributiTutti', $preferenzeUtAttributiTutti);
    }

    /**
     * Update the specified PreferenzeUtAttributiTutti in storage.
     *
     * @param  int              $id
     * @param UpdatePreferenzeUtAttributiTuttiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreferenzeUtAttributiTuttiRequest $request)
    {
        $preferenzeUtAttributiTutti = $this->preferenzeUtAttributiTuttiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributiTutti)) {
            Flash::error('Preferenze Ut Attributi Tutti not found');

            return redirect(route('preferenzeUtAttributiTuttis.index'));
        }

        $preferenzeUtAttributiTutti = $this->preferenzeUtAttributiTuttiRepository->update($request->all(), $id);

        Flash::success('Preferenze Ut Attributi Tutti updated successfully.');

        return redirect(route('preferenzeUtAttributiTuttis.index'));
    }

    /**
     * Remove the specified PreferenzeUtAttributiTutti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preferenzeUtAttributiTutti = $this->preferenzeUtAttributiTuttiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributiTutti)) {
            Flash::error('Preferenze Ut Attributi Tutti not found');

            return redirect(route('preferenzeUtAttributiTuttis.index'));
        }

        $this->preferenzeUtAttributiTuttiRepository->delete($id);

        Flash::success('Preferenze Ut Attributi Tutti deleted successfully.');

        return redirect(route('preferenzeUtAttributiTuttis.index'));
    }
}
