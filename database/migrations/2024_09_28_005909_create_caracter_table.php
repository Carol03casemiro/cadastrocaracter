<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    public function up()
    {
        Schema::create('caracter', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('personagem');
            $table->string('element');
            $table->string('classe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('caracter');
    }
}
