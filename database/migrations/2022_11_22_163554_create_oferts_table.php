<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferts', function (Blueprint $table) {
            $table->id();
            $table->string("nempresa");
            $table->string("logo");

            $table->date("expiracion");
            $table->string("ubicacion");
            $table->string("moneda");
            $table->decimal("salario",19,2,true);

            $table->string("aempresa");
            $table->string("npuesto");
            $table->string("contrato");

            $table->string("experiencia");
            $table->string("sexo");
            $table->integer("edad",false, true);
            $table->string("vehiculo");
            $table->string("pais");
            $table->string("departamento");
            $table->string("descripcion");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oferts');
    }
};
