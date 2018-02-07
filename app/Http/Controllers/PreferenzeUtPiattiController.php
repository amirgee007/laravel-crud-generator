<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreferenzeUtPiattiRequest;
use App\Http\Requests\UpdatePreferenzeUtPiattiRequest;
use App\Repositories\PreferenzeUtPiattiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PreferenzeUtPiattiController extends AppBaseController
{
    /** @var  PreferenzeUtPiattiRepository */
    private $preferenzeUtPiattiRepository;

    public function __construct(PreferenzeUtPiattiRepository $preferenzeUtPiattiRepo)
    {
        $this->preferenzeUtPiattiRepository = $preferenzeUtPiattiRepo;
    }

    /**
     * Display a listing of the PreferenzeUtPiatti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->preferenzeUtPiattiRepository->pushCriteria(new RequestCriteria($request));
        $preferenzeUtPiattis = $this->preferenzeUtPiattiRepository->all();

        return view('preferenze_ut_piattis.index')
            ->with('preferenzeUtPiattis', $preferenzeUtPiattis);
    }

    /**
     * Show the form for creating a new PreferenzeUtPiatti.
     *
     * @return Response
     */
    public function create()
    {
        return view('preferenze_ut_piattis.create');
    }

    /**
     * Store a newly created PreferenzeUtPiatti in storage.
     *
     * @param CreatePreferenzeUtPiattiRequest $request
     *
     * @return Response
     */
    public function store(CreatePreferenzeUtPiattiRequest $request)
    {
        $input = $request->all();

        $preferenzeUtPiatti = $this->preferenzeUtPiattiRepository->create($input);

        Flash::success('Preferenze Ut Piatti saved successfully.');

        return redirect(route('preferenzeUtPiattis.index'));
    }

    /**
     * Display the specified PreferenzeUtPiatti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preferenzeUtPiatti = $this->preferenzeUtPiattiRepository->findWithoutFail($id);

        if (empty($preferenzeUtPiatti)) {
            Flash::error('Preferenze Ut Piatti not found');

            return redirect(route('preferenzeUtPiattis.index'));
        }

        return view('preferenze_ut_piattis.show')->with('preferenzeUtPiatti', $preferenzeUtPiatti);
    }

    /**
     * Show the form for editing the specified PreferenzeUtPiatti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preferenzeUtPiatti = $this->preferenzeUtPiattiRepository->findWithoutFail($id);

        if (empty($preferenzeUtPiatti)) {
            Flash::error('Preferenze Ut Piatti not found');

            return redirect(route('preferenzeUtPiattis.index'));
        }

        return view('preferenze_ut_piattis.edit')->with('preferenzeUtPiatti', $preferenzeUtPiatti);
    }

    /**
     * Update the specified PreferenzeUtPiatti in storage.
     *
     * @param  int              $id
     * @param UpdatePreferenzeUtPiattiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreferenzeUtPiattiRequest $request)
    {
        $preferenzeUtPiatti = $this->preferenzeUtPiattiRepository->findWithoutFail($id);

        if (empty($preferenzeUtPiatti)) {
            Flash::error('Preferenze Ut Piatti not found');

            return redirect(route('preferenzeUtPiattis.index'));
        }

        $preferenzeUtPiatti = $this->preferenzeUtPiattiRepository->update($request->all(), $id);

        Flash::success('Preferenze Ut Piatti updated successfully.');

        return redirect(route('preferenzeUtPiattis.index'));
    }

    /**
     * Remove the specified PreferenzeUtPiatti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preferenzeUtPiatti = $this->preferenzeUtPiattiRepository->findWithoutFail($id);

        if (empty($preferenzeUtPiatti)) {
            Flash::error('Preferenze Ut Piatti not found');

            return redirect(route('preferenzeUtPiattis.index'));
        }

        $this->preferenzeUtPiattiRepository->delete($id);

        Flash::success('Preferenze Ut Piatti deleted successfully.');

        return redirect(route('preferenzeUtPiattis.index'));
    }
}
