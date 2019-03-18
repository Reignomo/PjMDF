<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('lifestyle'); #1 - Fitness, 2 - Saúdavel, 3 - Hippie, 4 - Religiósa, 5 - Ativistas, 6 - Conservadora, 7 - Outros
            $table->string('descricao');
            $table->string('imagem');
            $table->integer('f_user_creator_id')->unsigned();
            $table->foreign('f_user_creator_id')->references('id')->on('users');
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
        Schema::dropIfExists('familias');
    }
}
