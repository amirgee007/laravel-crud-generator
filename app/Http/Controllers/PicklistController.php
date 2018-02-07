<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePicklistRequest;
use App\Http\Requests\UpdatePicklistRequest;
use App\Repositories\PicklistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PicklistController extends AppBaseController
{
    /** @var  PicklistRepository */
    private $picklistRepository;

    public function __construct(PicklistRepository $picklistRepo)
    {
        $this->picklistRepository = $picklistRepo;
    }

    /**
     * Display a listing of the Picklist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->picklistRepository->pushCriteria(new RequestCriteria($request));
        $picklists = $this->picklistRepository->all();

        return view('picklists.index')
            ->with('picklists', $picklists);
    }

    /**
     * Show the form for creating a new Picklist.
     *
     * @return Response
     */
    public function create()
    {
        return view('picklists.create');
    }

    /**
     * Store a newly created Picklist in storage.
     *
     * @param CreatePicklistRequest $request
     *
     * @return Response
     */
    public function store(CreatePicklistRequest $request)
    {
        $input = $request->all();

        $picklist = $this->picklistRepository->create($input);

        Flash::success('Picklist saved successfully.');

        return redirect(route('picklists.index'));
    }

    /**
     * Display the specified Picklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $picklist = $this->picklistRepository->findWithoutFail($id);

        if (empty($picklist)) {
            Flash::error('Picklist not found');

            return redirect(route('picklists.index'));
        }

        return view('picklists.show')->with('picklist', $picklist);
    }

    /**
     * Show the form for editing the specified Picklist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $picklist = $this->picklistRepository->findWithoutFail($id);

        if (empty($picklist)) {
            Flash::error('Picklist not found');

            return redirect(route('picklists.index'));
        }

        return view('picklists.edit')->with('picklist', $picklist);
    }

    /**
     * Update the specified Picklist in storage.
     *
     * @param  int              $id
     * @param UpdatePicklistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePicklistRequest $request)
    {
        $picklist = $this->picklistRepository->findWithoutFail($id);

        if (empty($picklist)) {
            Flash::error('Picklist not found');

            return redirect(route('picklists.index'));
        }

        $picklist = $this->picklistRepository->update($request->all(), $id);

        Flash::success('Picklist updated successfully.');

        return redirect(route('picklists.index'));
    }

    /**
     * Remove the specified Picklist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $picklist = $this->picklistRepository->findWithoutFail($id);

        if (empty($picklist)) {
            Flash::error('Picklist not found');

            return redirect(route('picklists.index'));
        }

        $this->picklistRepository->delete($id);

        Flash::success('Picklist deleted successfully.');

        return redirect(route('picklists.index'));
    }
}
