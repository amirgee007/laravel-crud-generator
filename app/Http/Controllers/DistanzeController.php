<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDistanzeRequest;
use App\Http\Requests\UpdateDistanzeRequest;
use App\Repositories\DistanzeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DistanzeController extends AppBaseController
{
    /** @var  DistanzeRepository */
    private $distanzeRepository;

    public function __construct(DistanzeRepository $distanzeRepo)
    {
        $this->distanzeRepository = $distanzeRepo;
    }

    /**
     * Display a listing of the Distanze.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->distanzeRepository->pushCriteria(new RequestCriteria($request));
        $distanzes = $this->distanzeRepository->all();

        return view('distanzes.index')
            ->with('distanzes', $distanzes);
    }

    /**
     * Show the form for creating a new Distanze.
     *
     * @return Response
     */
    public function create()
    {
        return view('distanzes.create');
    }

    /**
     * Store a newly created Distanze in storage.
     *
     * @param CreateDistanzeRequest $request
     *
     * @return Response
     */
    public function store(CreateDistanzeRequest $request)
    {
        $input = $request->all();

        $distanze = $this->distanzeRepository->create($input);

        Flash::success('Distanze saved successfully.');

        return redirect(route('distanzes.index'));
    }

    /**
     * Display the specified Distanze.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $distanze = $this->distanzeRepository->findWithoutFail($id);

        if (empty($distanze)) {
            Flash::error('Distanze not found');

            return redirect(route('distanzes.index'));
        }

        return view('distanzes.show')->with('distanze', $distanze);
    }

    /**
     * Show the form for editing the specified Distanze.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $distanze = $this->distanzeRepository->findWithoutFail($id);

        if (empty($distanze)) {
            Flash::error('Distanze not found');

            return redirect(route('distanzes.index'));
        }

        return view('distanzes.edit')->with('distanze', $distanze);
    }

    /**
     * Update the specified Distanze in storage.
     *
     * @param  int              $id
     * @param UpdateDistanzeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDistanzeRequest $request)
    {
        $distanze = $this->distanzeRepository->findWithoutFail($id);

        if (empty($distanze)) {
            Flash::error('Distanze not found');

            return redirect(route('distanzes.index'));
        }

        $distanze = $this->distanzeRepository->update($request->all(), $id);

        Flash::success('Distanze updated successfully.');

        return redirect(route('distanzes.index'));
    }

    /**
     * Remove the specified Distanze from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $distanze = $this->distanzeRepository->findWithoutFail($id);

        if (empty($distanze)) {
            Flash::error('Distanze not found');

            return redirect(route('distanzes.index'));
        }

        $this->distanzeRepository->delete($id);

        Flash::success('Distanze deleted successfully.');

        return redirect(route('distanzes.index'));
    }
}
