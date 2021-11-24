<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            
            $table->engine = "InnoDB";
            
            $table->bigIncrements('id');
            $table->bigInteger('maestro_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('domicilio');
            $table->timestamps();
            $table->foreign('maestro_id')->references('id')->on('maestros')->onDelete("cascade");
            
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
