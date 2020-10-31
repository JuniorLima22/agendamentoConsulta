<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agendamento;

use Session;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamento.index', compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validadando dados do formulário
        $this->validate($request, [
          'nomePaciente' => 'required|unique:agendamentos|min:3',
          'cpf' => 'required|min:11',
        ]);

        // Cadastrando agendamento
        $agendamento = new Agendamento();
        $agendamento->nomePaciente = $request->input('nomePaciente');
        $agendamento->telefone = $request->input('telefone');
        $agendamento->email = $request->input('email');
        $agendamento->canalAtendimento = $request->input('canalAtendimento');
        $agendamento->cpf = $request->input('cpf');
        $agendamento->dataNascimento = $request->input('dataNascimento');
        $agendamento->genero = $request->input('genero');
        $agendamento->nomeMedico = $request->input('nomeMedico');
        $agendamento->especialidadeMedica = $request->input('especialidadeMedica');
        $agendamento->tipoConsulta = $request->input('tipoConsulta');
        $agendamento->convenioMedico = $request->input('convenioMedico');
        $agendamento->dataAgendamento = $request->input('dataAgendamento');
        $agendamento->horaAgendamento = $request->input('horaAgendamento');
        $agendamento->valorConsulta = $request->input('valorConsulta');
        $agendamento->observacao = $request->input('observacao');

        if ($agendamento->save()) {
            return redirect('agendamento');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agendamento = Agendamento::find($id);
        return view('agendamento.show', compact('agendamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agendamento = Agendamento::find($id);
        return view('agendamento.edit', compact('agendamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validadando dados do formulário
        $this->validate($request, [
          'nomePaciente' => 'required|min:3',
          'cpf' => 'required|min:11',
        ]);

        // Alterando agendamento
        $agendamento = Agendamento::find($id);
        $agendamento->nomePaciente = $request->input('nomePaciente');
        $agendamento->telefone = $request->input('telefone');
        $agendamento->email = $request->input('email');
        $agendamento->canalAtendimento = $request->input('canalAtendimento');
        $agendamento->cpf = $request->input('cpf');
        $agendamento->dataNascimento = $request->input('dataNascimento');
        $agendamento->genero = $request->input('genero');
        $agendamento->nomeMedico = $request->input('nomeMedico');
        $agendamento->especialidadeMedica = $request->input('especialidadeMedica');
        $agendamento->tipoConsulta = $request->input('tipoConsulta');
        $agendamento->convenioMedico = $request->input('convenioMedico');
        $agendamento->dataAgendamento = $request->input('dataAgendamento');
        $agendamento->horaAgendamento = $request->input('horaAgendamento');
        $agendamento->valorConsulta = $request->input('valorConsulta');
        $agendamento->observacao = $request->input('observacao');

        if ($agendamento->save()) {
            Session::flash('mensagem', 'Agendamento da Consulta alterado com sucesso');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
