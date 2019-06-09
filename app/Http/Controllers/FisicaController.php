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

        $data_nascimento = $input['data_nascimento'];
        $date = str_replace('/', '-', $data_nascimento);
        $input['data_nascimento'] = date('Y-m-d', strtotime($date));

        $fisica = $this->fisicaRepository->create($input);

        Flash::success('Pessoa Física salva com sucesso.');

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
            Flash::error('Pessoa física não encontrada.');

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
            Flash::error('Pessoa física não encontrada.');

            return redirect(route('fisicas.index'));
        }

        $enderecos = Endereco::orderBy('logradouro','asc')->pluck('logradouro','id')->all();

        return view('fisicas.edit', compact('fisica', 'enderecos'));
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
            Flash::error('Pessoa física não encontrada.');

            return redirect(route('fisicas.index'));
        }

        $input = $request->all();

        $data_nascimento = $input['data_nascimento'];
        $date = str_replace('/', '-', $data_nascimento);
        $input['data_nascimento'] = date('Y-m-d', strtotime($date));

        $fisica = $this->fisicaRepository->update($input, $id);

        Flash::success('Pessoa física atualizada com sucesso.');

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
            Flash::error('Pessoa física não encontrada.');

            return redirect(route('fisicas.index'));
        }

        $this->fisicaRepository->delete($id);

        Flash::success('Pessoa física excluída com sucesso.');

        return redirect(route('fisicas.index'));
    }
}
