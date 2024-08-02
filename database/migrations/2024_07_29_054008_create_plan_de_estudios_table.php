<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanDeEstudiosTable extends Migration
{
    public function up()
    {
        Schema::create('plan_de_estudios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('siglas');
            $table->integer('num_periodos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_de_estudios');
    }
}
