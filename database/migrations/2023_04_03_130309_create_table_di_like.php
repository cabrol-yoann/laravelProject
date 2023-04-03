<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDiLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_dislike', function (Blueprint $table) {
            $table->Integer('SauceId')                  //Id de la sauce
            ->foreign('SauceId')
            ->references('SauceId')
            ->on('Sauces');
            $table->Integer('UserId')                   //Id de l'utilisateur qui a disliké la sauce
            ->foreign('UserId')
            ->references('UserId')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_dislike');
    }
}
