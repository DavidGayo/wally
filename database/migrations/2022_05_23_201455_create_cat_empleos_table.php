<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_empleos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empleo',100);
            $table->text('descripcion_empleo')->nullable();
            $table->unsignedBigInteger('usuario_creo_id');
            $table->timestamps();

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
        Schema::dropIfExists('cat_empleos');
    }
}
