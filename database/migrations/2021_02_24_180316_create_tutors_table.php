<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombreEmpresa");
            $table->enum("tipoDocumento", ["pasaporte", "dni", "nie"]);
            $table->string("numeroDocumento");
            $table->string("nombre");
            $table->string("primerApellido");
            $table->string("segundoApellido");
            $table->enum("paisDocumento", ["España", "Francia", "Inglaterra"])->nullable();
            $table->enum("provincia", ["Baleares", "Bearn", "Yorkshire"])->nullable();
            $table->enum("municipio", ["Palma", "Llucmajor", "Londres"])->nullable();
            $table->enum("estado", ["activo", "inactivo"]);
            $table->integer("numeroTelefono");
            $table->string("email");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
