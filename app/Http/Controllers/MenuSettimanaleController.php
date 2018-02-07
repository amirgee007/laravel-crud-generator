<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMenuSettimanaleRequest;
use App\Http\Requests\UpdateMenuSettimanaleRequest;
use App\Repositories\MenuSettimanaleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MenuSettimanaleController extends AppBaseController
{
    /** @var  MenuSettimanaleRepository */
    private $menuSettimanaleRepository;

    public function __construct(MenuSettimanaleRepository $menuSettimanaleRepo)
    {
        $this->menuSettimanaleRepository = $menuSettimanaleRepo;
    }

    /**
     * Display a listing of the MenuSettimanale.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->menuSettimanaleRepository->pushCriteria(new RequestCriteria($request));
        $menuSettimanales = $this->menuSettimanaleRepository->all();

        return view('menu_settimanales.index')
            ->with('menuSettimanales', $menuSettimanales);
    }

    /**
     * Show the form for creating a new MenuSettimanale.
     *
     * @return Response
     */
    public function create()
    {
        return view('menu_settimanales.create');
    }

    /**
     * Store a newly created MenuSettimanale in storage.
     *
     * @param CreateMenuSettimanaleRequest $request
     *
     * @return Response
     */
    public function store(CreateMenuSettimanaleRequest $request)
    {
        $input = $request->all();

        $menuSettimanale = $this->menuSettimanaleRepository->create($input);

        Flash::success('Menu Settimanale saved successfully.');

        return redirect(route('menuSettimanales.index'));
    }

    /**
     * Display the specified MenuSettimanale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menuSettimanale = $this->menuSettimanaleRepository->findWithoutFail($id);

        if (empty($menuSettimanale)) {
            Flash::error('Menu Settimanale not found');

            return redirect(route('menuSettimanales.index'));
        }

        return view('menu_settimanales.show')->with('menuSettimanale', $menuSettimanale);
    }

    /**
     * Show the form for editing the specified MenuSettimanale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menuSettimanale = $this->menuSettimanaleRepository->findWithoutFail($id);

        if (empty($menuSettimanale)) {
            Flash::error('Menu Settimanale not found');

            return redirect(route('menuSettimanales.index'));
        }

        return view('menu_settimanales.edit')->with('menuSettimanale', $menuSettimanale);
    }

    /**
     * Update the specified MenuSettimanale in storage.
     *
     * @param  int              $id
     * @param UpdateMenuSettimanaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenuSettimanaleRequest $request)
    {
        $menuSettimanale = $this->menuSettimanaleRepository->findWithoutFail($id);

        if (empty($menuSettimanale)) {
            Flash::error('Menu Settimanale not found');

            return redirect(route('menuSettimanales.index'));
        }

        $menuSettimanale = $this->menuSettimanaleRepository->update($request->all(), $id);

        Flash::success('Menu Settimanale updated successfully.');

        return redirect(route('menuSettimanales.index'));
    }

    /**
     * Remove the specified MenuSettimanale from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $menuSettimanale = $this->menuSettimanaleRepository->findWithoutFail($id);

        if (empty($menuSettimanale)) {
            Flash::error('Menu Settimanale not found');

            return redirect(route('menuSettimanales.index'));
        }

        $this->menuSettimanaleRepository->delete($id);

        Flash::success('Menu Settimanale deleted successfully.');

        return redirect(route('menuSettimanales.index'));
    }
}
