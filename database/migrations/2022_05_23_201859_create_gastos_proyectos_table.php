<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos_proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->double('precio_unitario',8,2)->nullable();
            $table->unsignedInteger('cantidad');
            $table->double('total',8,2)->nullable();
            $table->unsignedBigInteger('usuario_creo_id');
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('cat_productos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('gastos_proyectos');
    }
}
