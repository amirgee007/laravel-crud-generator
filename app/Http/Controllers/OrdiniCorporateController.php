<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrdiniCorporateRequest;
use App\Http\Requests\UpdateOrdiniCorporateRequest;
use App\Repositories\OrdiniCorporateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrdiniCorporateController extends AppBaseController
{
    /** @var  OrdiniCorporateRepository */
    private $ordiniCorporateRepository;

    public function __construct(OrdiniCorporateRepository $ordiniCorporateRepo)
    {
        $this->ordiniCorporateRepository = $ordiniCorporateRepo;
    }

    /**
     * Display a listing of the OrdiniCorporate.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ordiniCorporateRepository->pushCriteria(new RequestCriteria($request));
        $ordiniCorporates = $this->ordiniCorporateRepository->all();

        return view('ordini_corporates.index')
            ->with('ordiniCorporates', $ordiniCorporates);
    }

    /**
     * Show the form for creating a new OrdiniCorporate.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordini_corporates.create');
    }

    /**
     * Store a newly created OrdiniCorporate in storage.
     *
     * @param CreateOrdiniCorporateRequest $request
     *
     * @return Response
     */
    public function store(CreateOrdiniCorporateRequest $request)
    {
        $input = $request->all();

        $ordiniCorporate = $this->ordiniCorporateRepository->create($input);

        Flash::success('Ordini Corporate saved successfully.');

        return redirect(route('ordiniCorporates.index'));
    }

    /**
     * Display the specified OrdiniCorporate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordiniCorporate = $this->ordiniCorporateRepository->findWithoutFail($id);

        if (empty($ordiniCorporate)) {
            Flash::error('Ordini Corporate not found');

            return redirect(route('ordiniCorporates.index'));
        }

        return view('ordini_corporates.show')->with('ordiniCorporate', $ordiniCorporate);
    }

    /**
     * Show the form for editing the specified OrdiniCorporate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordiniCorporate = $this->ordiniCorporateRepository->findWithoutFail($id);

        if (empty($ordiniCorporate)) {
            Flash::error('Ordini Corporate not found');

            return redirect(route('ordiniCorporates.index'));
        }

        return view('ordini_corporates.edit')->with('ordiniCorporate', $ordiniCorporate);
    }

    /**
     * Update the specified OrdiniCorporate in storage.
     *
     * @param  int              $id
     * @param UpdateOrdiniCorporateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrdiniCorporateRequest $request)
    {
        $ordiniCorporate = $this->ordiniCorporateRepository->findWithoutFail($id);

        if (empty($ordiniCorporate)) {
            Flash::error('Ordini Corporate not found');

            return redirect(route('ordiniCorporates.index'));
        }

        $ordiniCorporate = $this->ordiniCorporateRepository->update($request->all(), $id);

        Flash::success('Ordini Corporate updated successfully.');

        return redirect(route('ordiniCorporates.index'));
    }

    /**
     * Remove the specified OrdiniCorporate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordiniCorporate = $this->ordiniCorporateRepository->findWithoutFail($id);

        if (empty($ordiniCorporate)) {
            Flash::error('Ordini Corporate not found');

            return redirect(route('ordiniCorporates.index'));
        }

        $this->ordiniCorporateRepository->delete($id);

        Flash::success('Ordini Corporate deleted successfully.');

        return redirect(route('ordiniCorporates.index'));
    }
}
