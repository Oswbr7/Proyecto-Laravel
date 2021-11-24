<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Maestros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('maestros', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigInteger('clase_id')->unsigned();
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('domicilio');
            $table->string('horario');
            $table->timestamps();
            $table->foreign('clase_id')->references('id')->on('clases')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
