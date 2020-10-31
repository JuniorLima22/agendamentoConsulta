<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->integer('idPaciente');
            // $table->integer('idFuncionario');
            // $table->integer('idUsuario');
            // $table->string('canalAtendimento', 45);
            // $table->date('dataAgendamento');
            // $table->time('horaAgendamento');
            // $table->float('valorConsulta', 8, 2);
            // $table->string('observacao', 255);
            // $table->string('statusConsulta', 25);
            // $table->timestamps();

            $table->bigIncrements('id');
            $table->string('nomePaciente', 100);
            $table->string('telefone', 25);
            $table->string('email', 100);
            $table->string('canalAtendimento', 45);
            $table->string('cpf');
            $table->date('dataNascimento');
            $table->string('genero', 45);

            $table->string('nomeMedico', 45);
            $table->string('especialidadeMedica', 45);
            $table->string('tipoConsulta', 45);
            $table->string('convenioMedico', 45);
            $table->float('valorConsulta', 8, 2);
            $table->date('dataAgendamento');
            $table->time('horaAgendamento');
            $table->string('observacao', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
