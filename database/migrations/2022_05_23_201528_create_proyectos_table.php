<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proyecto',100);
            $table->text('descripcion_proyecto');
            $table->double('gasto',8,2)->nullable()->default(0.0);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
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
        Schema::dropIfExists('proyectos');
    }
}
