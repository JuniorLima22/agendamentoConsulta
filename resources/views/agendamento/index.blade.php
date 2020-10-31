@extends('layouts.app')
@section('title', 'Lista de Agendamentos')
@section('content')
<br>
<div class="row">
  <div class="col-md-12">
    @if(Session::has('mensagem'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensagem')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <div class="card border-dark shadow-lg">
      <div class="card-header text-center text-white bg-dark">
        LISTA DE AGENDAMENTOS
      </div>
      <div class="card-body table-responsive">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Paciente</th>
              <th scope="col">Médico</th>
              <th scope="col">Especialidade</th>
              <th scope="col">Agendamento da Consulta</th>
              <th scope="col">Tipo de Consulta</th>
              <th colspan="2" scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($agendamentos as $agendamento)
              <tr>
                <th scope="row">{{$agendamento->id}}</th>
                <td>{{$agendamento->nomePaciente}}</td>
                <td>{{$agendamento->nomeMedico}}</td>
                <td>{{$agendamento->especialidadeMedica}}</td>
                <td>{{date('d/m/Y', strtotime($agendamento->dataAgendamento))}}  {{date('H:i', strtotime($agendamento->horaAgendamento))}}h</td>
                <td>{{$agendamento->tipoConsulta}}</td>
                <td>
                  <a href="/agendamento/{{$agendamento->id}}" class="btn btn-success">Visualizar</a>
                  <a href="/agendamento/{{$agendamento->id}}/edit" class="btn btn-secondary">Editar</a>
                  <!-- <a href="/agendamento/{{$agendamento->id}}/destroy" class="btn btn-danger">Excluir</a> -->
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
      <div class="card-footer text-muted text-white text-center bg-dark">
        TOTAL ENCONTRADOS: {{count($agendamentos)}}
      </div>
    </div>
  </div>
</div>
@endsection
