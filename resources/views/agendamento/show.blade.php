@extends('layouts.app')
@section('title', 'Paciente: '. $agendamento->nomePaciente)
@section('content')
<br><br>
	<!-- <a href="">
		<img src="dist/img/logo-agendamento.png" width="276" height="112" alt="">
	</a> -->
<div class="row">
  <div class="col-md-12">
    <div class="card border-dark shadow-lg">
      <div class="card-header text-center text-white bg-dark">
        AGENDAMENTO DO PACIENTE
      </div>
      <div class="card-body">
      	<h5 class="card-title">Paciente</h5>
      	<form>
      		<div class="form-group">
      		  <label for="paciente">Nome</label>
      		  <input type="text" class="form-control" id="paciente" value="{{strtoupper($agendamento->nomePaciente)}}" readonly="readonly">
      		</div>

      	  <div class="form-row">
      	    <div class="form-group col-md-4">
      	      <label for="telefone">Telefone</label>
      	      <input type="text" class="form-control" id="telefone" value="{{$agendamento->telefone}}" readonly="readonly">
      	    </div>
      	    <div class="form-group col-md-4">
      	      <label for="email">Email</label>
      	      <input type="email" class="form-control" id="email" value="{{$agendamento->email}}" readonly="readonly">
      	    </div>
      	    <div class="form-group col-md-4">
      	      <label for="canal-atendimento">Canal de Atendimento</label>
      	      <input type="text" class="form-control" id="canal-atendimento" value="{{$agendamento->canalAtendimento}}" readonly="readonly">
      	    </div>
      	  </div>

      	  <div class="form-row">
      	    <div class="form-group col-md-4">
      	      <label for="cpf">CPF</label>
      	      <input type="text" class="form-control" id="cpf" value="{{$agendamento->cpf}}" readonly="readonly">
      	    </div>
      	    <div class="form-group col-md-4">
      	      <label for="nascimento">Nascimento</label>
      	      <input type="date" class="form-control" id="nascimento" value="{{$agendamento->dataNascimento}}" readonly="readonly">
      	    </div>
            <div class="form-group col-md-4">
              <label for="genero">Gênero</label>
              <input type="text" class="form-control" id="genero" value="{{$agendamento->genero}}" readonly="readonly">
            </div>
      	  </div>

      	  <hr>

      	  <h5 class="card-title">Consulta</h5>
      	  <div class="form-row">
      	    <div class="form-group col-md-6">
      	      <label for="medico">Médico</label>
      	      <input type="text" class="form-control" id="medico" value="{{$agendamento->nomeMedico}}" readonly="readonly">
      	    </div>
            <div class="form-group col-md-6">
              <label for="especialidade">Especialidade</label>
              <input type="text" class="form-control" id="especialidade" value="{{$agendamento->especialidadeMedica}}" readonly="readonly">
            </div>
      	  </div>

      	  <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tipo-consulta">Tipo de Consulta</label>
              <input type="text" class="form-control" id="tipo-consulta" value="{{$agendamento->tipoConsulta}}" readonly="readonly">
            </div>
      	    <div class="form-group col-md-6">
      	      <label for="convenio">Convênio</label>
      	      <input type="text" class="form-control" id="convenio" value="{{$agendamento->convenioMedico}}" readonly="readonly">
      	    </div>
      	  </div>

      	  <div class="form-row">
      	    <div class="form-group col-md-4">
      	      <label for="data-agendamento">Data Consulta</label>
      	      <input type="date" class="form-control" id="data-agendamento" value="{{$agendamento->dataAgendamento}}" readonly="readonly">
      	    </div>
      	    <div class="form-group col-md-4">
      	      <label for="horario-consulta">Horário da Consulta</label>
      	      <input type="time" class="form-control" id="horario-consulta" value="{{date('H:i', strtotime($agendamento->horaAgendamento))}}" readonly="readonly">
      	    </div>
            <div class="form-group col-md-4">
              <label for="valor-consulta">Valor da Consulta</label>
              <input type="text" class="form-control" id="valor-consulta" value="{{$agendamento->valorConsulta}}" readonly="readonly">
            </div>
      	  </div>
      	  
      	  <div class="form-group">
      	    <label for="observacao">Observação</label>
      	    <textarea class="form-control" id="observacao" rows="3" readonly="readonly">{{$agendamento->observacao}}</textarea>
      	  </div>

					<a href="/agendamento/{{$agendamento->id}}/edit" class="btn btn-secondary">Editar Agendamento</a>
      	  <a href="javascript:history.go(-1)" class="btn btn-light">Voltar</a>
      	</form>
      </div>
      <div class="card-footer text-muted text-white text-center bg-dark">
        CUIDANDO DE VOCÊ :)
      </div>
    </div>
  </div>
</div>
@endsection