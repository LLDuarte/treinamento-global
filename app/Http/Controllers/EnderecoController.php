<?php

namespace App\Http\Controllers;

use App\DataTables\EnderecoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEnderecoRequest;
use App\Http\Requests\UpdateEnderecoRequest;
use App\Repositories\EnderecoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EnderecoController extends AppBaseController
{
    /** @var  EnderecoRepository */
    private $enderecoRepository;

    public function __construct(EnderecoRepository $enderecoRepo)
    {
        $this->enderecoRepository = $enderecoRepo;
    }

    /**
     * Display a listing of the Endereco.
     *
     * @param EnderecoDataTable $enderecoDataTable
     * @return Response
     */
    public function index(EnderecoDataTable $enderecoDataTable)
    {
        return $enderecoDataTable->render('enderecos.index');
    }

    /**
     * Show the form for creating a new Endereco.
     *
     * @return Response
     */
    public function create()
    {
        return view('enderecos.create');
    }

    /**
     * Store a newly created Endereco in storage.
     *
     * @param CreateEnderecoRequest $request
     *
     * @return Response
     */
    public function store(CreateEnderecoRequest $request)
    {
        $input = $request->all();

        $endereco = $this->enderecoRepository->create($input);

        Flash::success('Endereco saved successfully.');

        return redirect(route('enderecos.index'));
    }

    /**
     * Display the specified Endereco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $endereco = $this->enderecoRepository->find($id);

        if (empty($endereco)) {
            Flash::error('Endereco not found');

            return redirect(route('enderecos.index'));
        }

        return view('enderecos.show')->with('endereco', $endereco);
    }

    /**
     * Show the form for editing the specified Endereco.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $endereco = $this->enderecoRepository->find($id);

        if (empty($endereco)) {
            Flash::error('Endereco not found');

            return redirect(route('enderecos.index'));
        }

        return view('enderecos.edit')->with('endereco', $endereco);
    }

    /**
     * Update the specified Endereco in storage.
     *
     * @param  int              $id
     * @param UpdateEnderecoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnderecoRequest $request)
    {
        $endereco = $this->enderecoRepository->find($id);

        if (empty($endereco)) {
            Flash::error('Endereco not found');

            return redirect(route('enderecos.index'));
        }

        $endereco = $this->enderecoRepository->update($request->all(), $id);

        Flash::success('Endereco updated successfully.');

        return redirect(route('enderecos.index'));
    }

    /**
     * Remove the specified Endereco from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $endereco = $this->enderecoRepository->find($id);

        if (empty($endereco)) {
            Flash::error('Endereco not found');

            return redirect(route('enderecos.index'));
        }

        $this->enderecoRepository->delete($id);

        Flash::success('Endereco deleted successfully.');

        return redirect(route('enderecos.index'));
    }
}
