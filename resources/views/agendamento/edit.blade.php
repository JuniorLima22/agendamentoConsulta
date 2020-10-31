@extends('layouts.app')
@section('title', 'Alteração de Consulta: '. $agendamento->nomePaciente)
@section('content')
<br>
<div class="row">
  <div class="col-md-12">
    @if(count($errors) > 0 )
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
          @foreach($errors->all() as $error)
            <li> {{$error}} </li>
          @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

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
        ALTERAÇÃO DE AGENDAMENTO DE CONSULTA
      </div>
      <div class="card-body">
      	<h5 class="card-title">Paciente</h5>
        {{Form::open(['route' => ['agendamento.update', $agendamento->id], 'method'=>'PUT'])}}
      		<div class="form-group">
            {{Form::label('nomePaciente', 'Nome')}}
            {{Form::text('nomePaciente', $agendamento->nomePaciente, ['class'=>'form-control', 'required', 'placeholder'=>'Nome'])}}
      		</div>

      	  <div class="form-row">
      	    <div class="form-group col-md-4">
              {{Form::label('telefone', 'Telefone')}}
              {{Form::text('telefone', $agendamento->telefone, ['class'=>'form-control', 'required', 'placeholder'=>'(88) 9-9999.9999'])}}
      	    </div>
      	    <div class="form-group col-md-4">
              {{Form::label('email', 'Email')}}
              {{Form::text('email', $agendamento->email, ['class'=>'form-control', 'required', 'placeholder'=>'exemplo@gmail.com'])}}
      	    </div>
      	    <div class="form-group col-md-4">
              {{Form::label('canalAtendimento', 'Canal de Atendimento')}}
              {{Form::select('canalAtendimento', ['Telefone' => 'Telefone', 'WhatsApp' => 'WhatsApp', 'Telegram' => 'Telegram', 'WebChat' => 'WebChat'], $agendamento->canalAtendimento, ['class'=>'form-control', 'placeholder' => 'Selecione...'])}}
      	    </div>
      	  </div>

      	  <div class="form-row">
      	    <div class="form-group col-md-4">
      	      {{Form::label('cpf', 'CPF')}}
              {{Form::text('cpf', $agendamento->cpf, ['class'=>'form-control', 'required', 'placeholder'=>'999.999.999-99'])}}
      	    </div>
      	    <div class="form-group col-md-4">
              {{Form::label('dataNascimento', 'Nascimento')}}
              {{Form::date('dataNascimento', $agendamento->dataNascimento, ['class'=>'form-control', 'required'])}}
      	    </div>
            <div class="form-group col-md-4">
              {{Form::label('genero', 'Gênero')}}
              {{Form::select('genero', ['Masculino' => 'Masculino', 'Feminino' => 'Feminino'], $agendamento->genero, ['class'=>'form-control', 'placeholder' => 'Selecione...'])}}
            </div>
      	  </div>

      	  <hr>

      	  <h5 class="card-title">Consulta</h5>
      	  <div class="form-row">
      	    <div class="form-group col-md-6">
              {{Form::label('nomeMedico', 'Médico')}}
              {{Form::select('nomeMedico', ['Dr. Michael' => 'Dr. Michael', 'Dr. Carlos' => 'Dr. Carlos', 'Dr. Ana' => 'Dr. Ana'], $agendamento->nomeMedico, ['class'=>'form-control', 'placeholder' => 'Selecione...'])}}
      	    </div>
            <div class="form-group col-md-6">
              {{Form::label('especialidadeMedica', 'Especialidade')}}
              {{Form::select('especialidadeMedica', ['Clínico Geral' => 'Clínico Geral', 'Ortopedista' => 'Ortopedista', 'Pedriatria' => 'Pedriatria', 'Psicólogo' => 'Psicólogo'], $agendamento->especialidadeMedica, ['class'=>'form-control', 'placeholder' => 'Selecione...'])}}
            </div>
      	  </div>

      	  <div class="form-row">
            <div class="form-group col-md-6">
              {{Form::label('tipoConsulta', 'Tipo de Consulta')}}
              {{Form::select('tipoConsulta', ['Primeira Consulta' => 'Primeira Consulta', 'Retorno' => 'Retorno', 'Por Encaminhamento' => 'Por Encaminhamento', 'Pré-Natal' => 'Pré-Natal', 'Pós-Cirúrgico' => 'Pós-Cirúrgico'], $agendamento->tipoConsulta, ['class'=>'form-control', 'placeholder' => 'Selecione...'])}}
            </div>
      	    <div class="form-group col-md-6">
      	      {{Form::label('convenioMedico', 'Convênio')}}
              {{Form::select('convenioMedico', ['Particular' => 'Particular', 'Bradesco' => 'Bradesco', 'Caixa' => 'Caixa', 'Unimed' => 'Unimed', 'São Camilo' => 'São Camilo'], $agendamento->convenioMedico, ['class'=>'form-control', 'placeholder' => 'Selecione...'])}}
      	    </div>
      	  </div>

      	  <div class="form-row">
      	    <div class="form-group col-md-4">
      	      {{Form::label('dataAgendamento', 'Data Consulta')}}
              {{Form::date('dataAgendamento', $agendamento->dataAgendamento, ['class'=>'form-control', 'required'])}}
      	    </div>
      	    <div class="form-group col-md-4">
              {{Form::label('horaAgendamento', 'Horário da Consulta')}}
              {{Form::time('horaAgendamento', $agendamento->horaAgendamento, ['class'=>'form-control', 'required'])}}
      	    </div>

            <div class="col-md-4">
              {{Form::label('valorConsulta', 'Valor da Consulta')}}
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">R$</span>
                </div>
                {{Form::text('valorConsulta', $agendamento->valorConsulta, ['class'=>'form-control', 'required', 'placeholder'=>'00,00'])}}
              </div>
            </div>
      	  </div>
      	  
      	  <div class="form-group">
            {{Form::label('observacao', 'Observação')}}
            {{Form::textarea('observacao', $agendamento->observacao, ['row'=>2, 'class'=>'form-control',  'placeholder'=>'Observação'])}}
      	  </div>

          {{Form::submit('Salvar Alteração', ['class'=>'btn btn-success'])}}
          <a href="/agendamento" class="btn btn-outline-secondary">Voltar</a>
        {{Form::close()}}
      	</form>
      </div>
      <div class="card-footer text-muted text-white text-center bg-dark">
        CUIDANDO DE VOCÊ :)
      </div>
    </div>
  </div>
</div>
@endsection