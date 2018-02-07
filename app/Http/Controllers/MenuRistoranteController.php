<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMenuRistoranteRequest;
use App\Http\Requests\UpdateMenuRistoranteRequest;
use App\Repositories\MenuRistoranteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MenuRistoranteController extends AppBaseController
{
    /** @var  MenuRistoranteRepository */
    private $menuRistoranteRepository;

    public function __construct(MenuRistoranteRepository $menuRistoranteRepo)
    {
        $this->menuRistoranteRepository = $menuRistoranteRepo;
    }

    /**
     * Display a listing of the MenuRistorante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->menuRistoranteRepository->pushCriteria(new RequestCriteria($request));
        $menuRistorantes = $this->menuRistoranteRepository->all();

        return view('menu_ristorantes.index')
            ->with('menuRistorantes', $menuRistorantes);
    }

    /**
     * Show the form for creating a new MenuRistorante.
     *
     * @return Response
     */
    public function create()
    {
        return view('menu_ristorantes.create');
    }

    /**
     * Store a newly created MenuRistorante in storage.
     *
     * @param CreateMenuRistoranteRequest $request
     *
     * @return Response
     */
    public function store(CreateMenuRistoranteRequest $request)
    {
        $input = $request->all();

        $menuRistorante = $this->menuRistoranteRepository->create($input);

        Flash::success('Menu Ristorante saved successfully.');

        return redirect(route('menuRistorantes.index'));
    }

    /**
     * Display the specified MenuRistorante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menuRistorante = $this->menuRistoranteRepository->findWithoutFail($id);

        if (empty($menuRistorante)) {
            Flash::error('Menu Ristorante not found');

            return redirect(route('menuRistorantes.index'));
        }

        return view('menu_ristorantes.show')->with('menuRistorante', $menuRistorante);
    }

    /**
     * Show the form for editing the specified MenuRistorante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menuRistorante = $this->menuRistoranteRepository->findWithoutFail($id);

        if (empty($menuRistorante)) {
            Flash::error('Menu Ristorante not found');

            return redirect(route('menuRistorantes.index'));
        }

        return view('menu_ristorantes.edit')->with('menuRistorante', $menuRistorante);
    }

    /**
     * Update the specified MenuRistorante in storage.
     *
     * @param  int              $id
     * @param UpdateMenuRistoranteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenuRistoranteRequest $request)
    {
        $menuRistorante = $this->menuRistoranteRepository->findWithoutFail($id);

        if (empty($menuRistorante)) {
            Flash::error('Menu Ristorante not found');

            return redirect(route('menuRistorantes.index'));
        }

        $menuRistorante = $this->menuRistoranteRepository->update($request->all(), $id);

        Flash::success('Menu Ristorante updated successfully.');

        return redirect(route('menuRistorantes.index'));
    }

    /**
     * Remove the specified MenuRistorante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $menuRistorante = $this->menuRistoranteRepository->findWithoutFail($id);

        if (empty($menuRistorante)) {
            Flash::error('Menu Ristorante not found');

            return redirect(route('menuRistorantes.index'));
        }

        $this->menuRistoranteRepository->delete($id);

        Flash::success('Menu Ristorante deleted successfully.');

        return redirect(route('menuRistorantes.index'));
    }
}
