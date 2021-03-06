<?php

namespace App\Http\Controllers;

use App\DataTables\JuridicaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJuridicaRequest;
use App\Http\Requests\UpdateJuridicaRequest;
use App\Repositories\JuridicaRepository;
use App\Models\Endereco;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JuridicaController extends AppBaseController
{
    /** @var  JuridicaRepository */
    private $juridicaRepository;

    public function __construct(JuridicaRepository $juridicaRepo)
    {
        $this->juridicaRepository = $juridicaRepo;
    }

    /**
     * Display a listing of the Juridica.
     *
     * @param JuridicaDataTable $juridicaDataTable
     * @return Response
     */
    public function index(JuridicaDataTable $juridicaDataTable)
    {
        return $juridicaDataTable->render('juridicas.index');
    }

    /**
     * Show the form for creating a new Juridica.
     *
     * @return Response
     */
    public function create()
    {
        $enderecos = Endereco::orderBy('logradouro','asc')->pluck('logradouro','id')->all();

        return view('juridicas.create', compact('enderecos'));
    }

    /**
     * Store a newly created Juridica in storage.
     *
     * @param CreateJuridicaRequest $request
     *
     * @return Response
     */
    public function store(CreateJuridicaRequest $request)
    {
        $input = $request->all();

        $data_abertura = $input['data_abertura'];
        $date = str_replace('/', '-', $data_abertura);
        $input['data_abertura'] = date('Y-m-d', strtotime($date));

        $juridica = $this->juridicaRepository->create($input);

        Flash::success('Pessoa jurídica cadastrada com sucesso.');

        return redirect(route('juridicas.index'));
    }

    /**
     * Display the specified Juridica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $juridica = $this->juridicaRepository->find($id);

        if (empty($juridica)) {
            Flash::error('Pessoa jurídica não encontrada');

            return redirect(route('juridicas.index'));
        }

        return view('juridicas.show')->with('juridica', $juridica);
    }

    /**
     * Show the form for editing the specified Juridica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $juridica = $this->juridicaRepository->find($id);

        if (empty($juridica)) {
            Flash::error('Pessoa jurídica não encontrada');

            return redirect(route('juridicas.index'));
        }

        $enderecos = Endereco::orderBy('logradouro','asc')->pluck('logradouro','id')->all();

        return view('juridicas.edit', compact('juridica', 'enderecos'));
    }

    /**
     * Update the specified Juridica in storage.
     *
     * @param  int              $id
     * @param UpdateJuridicaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJuridicaRequest $request)
    {
        $juridica = $this->juridicaRepository->find($id);

        if (empty($juridica)) {
            Flash::error('Pessoa jurídica não encontrada');

            return redirect(route('juridicas.index'));
        }

        $juridica = $this->juridicaRepository->update($request->all(), $id);

        Flash::success('Pessoa jurídica atualizada com sucesso.');

        return redirect(route('juridicas.index'));
    }

    /**
     * Remove the specified Juridica from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $juridica = $this->juridicaRepository->find($id);

        if (empty($juridica)) {
            Flash::error('Pessoa jurídica não encontrada');

            return redirect(route('juridicas.index'));
        }

        $this->juridicaRepository->delete($id);

        Flash::success('Pessoa jurídica excluída com sucesso.');

        return redirect(route('juridicas.index'));
    }
}
