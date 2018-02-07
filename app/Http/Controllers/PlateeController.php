<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlateeRequest;
use App\Http\Requests\UpdatePlateeRequest;
use App\Repositories\PlateeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PlateeController extends AppBaseController
{
    /** @var  PlateeRepository */
    private $plateeRepository;

    public function __construct(PlateeRepository $plateeRepo)
    {
        $this->plateeRepository = $plateeRepo;
    }

    /**
     * Display a listing of the Platee.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->plateeRepository->pushCriteria(new RequestCriteria($request));
        $platees = $this->plateeRepository->all();

        return view('platees.index')
            ->with('platees', $platees);
    }

    /**
     * Show the form for creating a new Platee.
     *
     * @return Response
     */
    public function create()
    {
        return view('platees.create');
    }

    /**
     * Store a newly created Platee in storage.
     *
     * @param CreatePlateeRequest $request
     *
     * @return Response
     */
    public function store(CreatePlateeRequest $request)
    {
        $input = $request->all();

        $platee = $this->plateeRepository->create($input);

        Flash::success('Platee saved successfully.');

        return redirect(route('platees.index'));
    }

    /**
     * Display the specified Platee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $platee = $this->plateeRepository->findWithoutFail($id);

        if (empty($platee)) {
            Flash::error('Platee not found');

            return redirect(route('platees.index'));
        }

        return view('platees.show')->with('platee', $platee);
    }

    /**
     * Show the form for editing the specified Platee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $platee = $this->plateeRepository->findWithoutFail($id);

        if (empty($platee)) {
            Flash::error('Platee not found');

            return redirect(route('platees.index'));
        }

        return view('platees.edit')->with('platee', $platee);
    }

    /**
     * Update the specified Platee in storage.
     *
     * @param  int              $id
     * @param UpdatePlateeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlateeRequest $request)
    {
        $platee = $this->plateeRepository->findWithoutFail($id);

        if (empty($platee)) {
            Flash::error('Platee not found');

            return redirect(route('platees.index'));
        }

        $platee = $this->plateeRepository->update($request->all(), $id);

        Flash::success('Platee updated successfully.');

        return redirect(route('platees.index'));
    }

    /**
     * Remove the specified Platee from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $platee = $this->plateeRepository->findWithoutFail($id);

        if (empty($platee)) {
            Flash::error('Platee not found');

            return redirect(route('platees.index'));
        }

        $this->plateeRepository->delete($id);

        Flash::success('Platee deleted successfully.');

        return redirect(route('platees.index'));
    }
}
