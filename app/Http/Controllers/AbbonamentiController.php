<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbbonamentiRequest;
use App\Http\Requests\UpdateAbbonamentiRequest;
use App\Repositories\AbbonamentiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbbonamentiController extends AppBaseController
{
    /** @var  AbbonamentiRepository */
    private $abbonamentiRepository;

    public function __construct(AbbonamentiRepository $abbonamentiRepo)
    {
        $this->abbonamentiRepository = $abbonamentiRepo;
    }

    /**
     * Display a listing of the Abbonamenti.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->abbonamentiRepository->pushCriteria(new RequestCriteria($request));
        $abbonamentis = $this->abbonamentiRepository->all();

        return view('abbonamentis.index')
            ->with('abbonamentis', $abbonamentis);
    }

    /**
     * Show the form for creating a new Abbonamenti.
     *
     * @return Response
     */
    public function create()
    {
        return view('abbonamentis.create');
    }

    /**
     * Store a newly created Abbonamenti in storage.
     *
     * @param CreateAbbonamentiRequest $request
     *
     * @return Response
     */
    public function store(CreateAbbonamentiRequest $request)
    {
        $input = $request->all();

        $abbonamenti = $this->abbonamentiRepository->create($input);

        Flash::success('Abbonamenti saved successfully.');

        return redirect(route('abbonamentis.index'));
    }

    /**
     * Display the specified Abbonamenti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $abbonamenti = $this->abbonamentiRepository->findWithoutFail($id);

        if (empty($abbonamenti)) {
            Flash::error('Abbonamenti not found');

            return redirect(route('abbonamentis.index'));
        }

        return view('abbonamentis.show')->with('abbonamenti', $abbonamenti);
    }

    /**
     * Show the form for editing the specified Abbonamenti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $abbonamenti = $this->abbonamentiRepository->findWithoutFail($id);

        if (empty($abbonamenti)) {
            Flash::error('Abbonamenti not found');

            return redirect(route('abbonamentis.index'));
        }

        return view('abbonamentis.edit')->with('abbonamenti', $abbonamenti);
    }

    /**
     * Update the specified Abbonamenti in storage.
     *
     * @param  int              $id
     * @param UpdateAbbonamentiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbbonamentiRequest $request)
    {
        $abbonamenti = $this->abbonamentiRepository->findWithoutFail($id);

        if (empty($abbonamenti)) {
            Flash::error('Abbonamenti not found');

            return redirect(route('abbonamentis.index'));
        }

        $abbonamenti = $this->abbonamentiRepository->update($request->all(), $id);

        Flash::success('Abbonamenti updated successfully.');

        return redirect(route('abbonamentis.index'));
    }

    /**
     * Remove the specified Abbonamenti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $abbonamenti = $this->abbonamentiRepository->findWithoutFail($id);

        if (empty($abbonamenti)) {
            Flash::error('Abbonamenti not found');

            return redirect(route('abbonamentis.index'));
        }

        $this->abbonamentiRepository->delete($id);

        Flash::success('Abbonamenti deleted successfully.');

        return redirect(route('abbonamentis.index'));
    }
}
