<?php

namespace App\Http\Controllers;

use App\DataTables\FisicaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFisicaRequest;
use App\Http\Requests\UpdateFisicaRequest;
use App\Repositories\FisicaRepository;
use App\Models\Endereco;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FisicaController extends AppBaseController
{
    /** @var  FisicaRepository */
    private $fisicaRepository;

    public function __construct(FisicaRepository $fisicaRepo)
    {
        $this->fisicaRepository = $fisicaRepo;
    }

    /**
     * Display a listing of the Fisica.
     *
     * @param FisicaDataTable $fisicaDataTable
     * @return Response
     */
    public function index(FisicaDataTable $fisicaDataTable)
    {
        return $fisicaDataTable->render('fisicas.index');
    }

    /**
     * Show the form for creating a new Fisica.
     *
     * @return Response
     */
    public function create()
    {
        $enderecos = Endereco::orderBy('logradouro','asc')->pluck('logradouro','id')->all();

        return view('fisicas.create', compact('enderecos'));
    }

    /**
     * Store a newly created Fisica in storage.
     *
     * @param CreateFisicaRequest $request
     *
     * @return Response
     */
    public function store(CreateFisicaRequest $request)
    {
        $input = $request->all();

        $fisica = $this->fisicaRepository->create($input);

        Flash::success('Fisica saved successfully.');

        return redirect(route('fisicas.index'));
    }

    /**
     * Display the specified Fisica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fisica = $this->fisicaRepository->find($id);

        if (empty($fisica)) {
            Flash::error('Fisica not found');

            return redirect(route('fisicas.index'));
        }

        return view('fisicas.show')->with('fisica', $fisica);
    }

    /**
     * Show the form for editing the specified Fisica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fisica = $this->fisicaRepository->find($id);

        if (empty($fisica)) {
            Flash::error('Fisica not found');

            return redirect(route('fisicas.index'));
        }

        return view('fisicas.edit')->with('fisica', $fisica);
    }

    /**
     * Update the specified Fisica in storage.
     *
     * @param  int              $id
     * @param UpdateFisicaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFisicaRequest $request)
    {
        $fisica = $this->fisicaRepository->find($id);

        if (empty($fisica)) {
            Flash::error('Fisica not found');

            return redirect(route('fisicas.index'));
        }

        $fisica = $this->fisicaRepository->update($request->all(), $id);

        Flash::success('Fisica updated successfully.');

        return redirect(route('fisicas.index'));
    }

    /**
     * Remove the specified Fisica from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fisica = $this->fisicaRepository->find($id);

        if (empty($fisica)) {
            Flash::error('Fisica not found');

            return redirect(route('fisicas.index'));
        }

        $this->fisicaRepository->delete($id);

        Flash::success('Fisica deleted successfully.');

        return redirect(route('fisicas.index'));
    }
}
