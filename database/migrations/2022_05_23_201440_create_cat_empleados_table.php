<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empleado',200);
            $table->string('direccion_empleado',200)->nullable();
            $table->unsignedBigInteger('estatus_id');
            $table->unsignedBigInteger('usuario_creo_id');
            $table->timestamps();

            $table->foreign('estatus_id')->references('id')->on('cat_estatus')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('cat_empleados');
    }
}
