<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('dia');
            $table->string('descricao');
            $table->integer('a_familia_id')->unsigned();
            $table->foreign('a_familia_id')->references('id')->on('familias');
            $table->integer('a_membro_id')->nullable()->unsigned();
            $table->foreign('a_membro_id')->references('id')->on('membros');
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
        Schema::dropIfExists('atividades');
    }
}
