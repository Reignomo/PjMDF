<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedalhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medalhas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pontuacao'); #o usúario ganha medalhas de acordo com a quantidade de pontuações - Pontuação 0-50: Aspirante - Pontuação 50-100: Guerreiro - Pontuação 100-150 Perito - Pontuação: 150-200 Mestre
            $table->integer('m_user_id')->unsigned();
            $table->foreign('m_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('medalhas');
    }
}
