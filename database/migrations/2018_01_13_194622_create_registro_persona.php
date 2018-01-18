<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_persona', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre',12);
            $table->string('nombre2',12);
            $table->string('apellido',12);
            $table->string('apellido2',12);


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
        Schema::dropIfExists('registro_persona');
    }
}
