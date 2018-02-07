<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePiattiPicklistRequest;
use App\Http\Requests\UpdatePiattiPicklistRequest;
use App\Repositories\PiattiPicklistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PiattiPicklistController extends AppBaseController
{
    /** @var  PiattiPicklistRepository */
    private $piattiPicklistRepository;

    public function __construct(PiattiPicklistRepository $piattiPicklistRepo)
    {
        $this->piattiPicklistRepository = $piattiPicklistRepo;
    }

    /**
     * Display a listing of the PiattiPicklist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->piattiPicklistRepository->pushCriteria(new RequestCriteria($request));
        $piattiPicklists = $this->piattiPicklistRepository->all();

        return view('piatti_picklists.index')
            ->with('piattiPicklists', $piattiPicklists);
    }

    /**
     * Show the form for creating a new PiattiPicklist.
     *
     * @return Response
     */
    public function create()
    {
        return view('piatti_picklists.create');
    }

    /**
     * Store a newly created PiattiPicklist in storage.
     *
     * @param CreatePiattiPicklistRequest $request
     *
     * @return Response
     */
    public function store(CreatePiattiPicklistRequest $request)
    {
        $input = $request->all();

        $piattiPicklist = $this->piattiPicklistRepository->create($input);

        Flash::success('Piatti Picklist saved successfully.');

        return redirect(route('piattiPicklists.index'));
    }

    /**
     * Display the specified PiattiPicklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $piattiPicklist = $this->piattiPicklistRepository->findWithoutFail($id);

        if (empty($piattiPicklist)) {
            Flash::error('Piatti Picklist not found');

            return redirect(route('piattiPicklists.index'));
        }

        return view('piatti_picklists.show')->with('piattiPicklist', $piattiPicklist);
    }

    /**
     * Show the form for editing the specified PiattiPicklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $piattiPicklist = $this->piattiPicklistRepository->findWithoutFail($id);

        if (empty($piattiPicklist)) {
            Flash::error('Piatti Picklist not found');

            return redirect(route('piattiPicklists.index'));
        }

        return view('piatti_picklists.edit')->with('piattiPicklist', $piattiPicklist);
    }

    /**
     * Update the specified PiattiPicklist in storage.
     *
     * @param  int              $id
     * @param UpdatePiattiPicklistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePiattiPicklistRequest $request)
    {
        $piattiPicklist = $this->piattiPicklistRepository->findWithoutFail($id);

        if (empty($piattiPicklist)) {
            Flash::error('Piatti Picklist not found');

            return redirect(route('piattiPicklists.index'));
        }

        $piattiPicklist = $this->piattiPicklistRepository->update($request->all(), $id);

        Flash::success('Piatti Picklist updated successfully.');

        return redirect(route('piattiPicklists.index'));
    }

    /**
     * Remove the specified PiattiPicklist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $piattiPicklist = $this->piattiPicklistRepository->findWithoutFail($id);

        if (empty($piattiPicklist)) {
            Flash::error('Piatti Picklist not found');

            return redirect(route('piattiPicklists.index'));
        }

        $this->piattiPicklistRepository->delete($id);

        Flash::success('Piatti Picklist deleted successfully.');

        return redirect(route('piattiPicklists.index'));
    }
}
