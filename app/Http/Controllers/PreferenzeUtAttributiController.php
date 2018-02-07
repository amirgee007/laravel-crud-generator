<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreferenzeUtAttributiRequest;
use App\Http\Requests\UpdatePreferenzeUtAttributiRequest;
use App\Repositories\PreferenzeUtAttributiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PreferenzeUtAttributiController extends AppBaseController
{
    /** @var  PreferenzeUtAttributiRepository */
    private $preferenzeUtAttributiRepository;

    public function __construct(PreferenzeUtAttributiRepository $preferenzeUtAttributiRepo)
    {
        $this->preferenzeUtAttributiRepository = $preferenzeUtAttributiRepo;
    }

    /**
     * Display a listing of the PreferenzeUtAttributi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->preferenzeUtAttributiRepository->pushCriteria(new RequestCriteria($request));
        $preferenzeUtAttributis = $this->preferenzeUtAttributiRepository->all();

        return view('preferenze_ut_attributis.index')
            ->with('preferenzeUtAttributis', $preferenzeUtAttributis);
    }

    /**
     * Show the form for creating a new PreferenzeUtAttributi.
     *
     * @return Response
     */
    public function create()
    {
        return view('preferenze_ut_attributis.create');
    }

    /**
     * Store a newly created PreferenzeUtAttributi in storage.
     *
     * @param CreatePreferenzeUtAttributiRequest $request
     *
     * @return Response
     */
    public function store(CreatePreferenzeUtAttributiRequest $request)
    {
        $input = $request->all();

        $preferenzeUtAttributi = $this->preferenzeUtAttributiRepository->create($input);

        Flash::success('Preferenze Ut Attributi saved successfully.');

        return redirect(route('preferenzeUtAttributis.index'));
    }

    /**
     * Display the specified PreferenzeUtAttributi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preferenzeUtAttributi = $this->preferenzeUtAttributiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributi)) {
            Flash::error('Preferenze Ut Attributi not found');

            return redirect(route('preferenzeUtAttributis.index'));
        }

        return view('preferenze_ut_attributis.show')->with('preferenzeUtAttributi', $preferenzeUtAttributi);
    }

    /**
     * Show the form for editing the specified PreferenzeUtAttributi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preferenzeUtAttributi = $this->preferenzeUtAttributiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributi)) {
            Flash::error('Preferenze Ut Attributi not found');

            return redirect(route('preferenzeUtAttributis.index'));
        }

        return view('preferenze_ut_attributis.edit')->with('preferenzeUtAttributi', $preferenzeUtAttributi);
    }

    /**
     * Update the specified PreferenzeUtAttributi in storage.
     *
     * @param  int              $id
     * @param UpdatePreferenzeUtAttributiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreferenzeUtAttributiRequest $request)
    {
        $preferenzeUtAttributi = $this->preferenzeUtAttributiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributi)) {
            Flash::error('Preferenze Ut Attributi not found');

            return redirect(route('preferenzeUtAttributis.index'));
        }

        $preferenzeUtAttributi = $this->preferenzeUtAttributiRepository->update($request->all(), $id);

        Flash::success('Preferenze Ut Attributi updated successfully.');

        return redirect(route('preferenzeUtAttributis.index'));
    }

    /**
     * Remove the specified PreferenzeUtAttributi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preferenzeUtAttributi = $this->preferenzeUtAttributiRepository->findWithoutFail($id);

        if (empty($preferenzeUtAttributi)) {
            Flash::error('Preferenze Ut Attributi not found');

            return redirect(route('preferenzeUtAttributis.index'));
        }

        $this->preferenzeUtAttributiRepository->delete($id);

        Flash::success('Preferenze Ut Attributi deleted successfully.');

        return redirect(route('preferenzeUtAttributis.index'));
    }
}
