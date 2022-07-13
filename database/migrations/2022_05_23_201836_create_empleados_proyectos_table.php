<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->unsignedBigInteger('empleo_id');
            $table->double('precio_hora',8,2)->nullable();
            $table->unsignedInteger('horas')->nullable();
            $table->unsignedInteger('dias')->nullable();
            $table->double('total',8,2)->nullable();
            $table->unsignedBigInteger('usuario_creo_id');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('cat_empleados')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('empleo_id')->references('id')->on('cat_empleos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('usuario_creo_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_proyectos');
    }
}
