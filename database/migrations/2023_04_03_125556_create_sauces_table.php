<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauces', function (Blueprint $table) {
            $table->Integer('SauceId');                         //Id de la sauce
            $table->String('UserId')                           //Id de l'utilisateur qui a créé la sauce
            ->foreign('UserId')
            ->references('UserId')
            ->on('users')
            ;
            $table->String('Nom');                             //Nom de la sauce
            $table->String('Fabricant');                       //Fabricant de la sauce
            $table->String('Description');                     //Description de la sauce
            $table->String('IngredientPrincipale');            //Ingrédient principale de la sauce
            $table->String('URL');                             //URL de l'image de la sauce
            $table->Integer('Puissance');                       //Puissance de la sauce de 0 à 10
            $table->Integer('Likes');                           //Nombre de likes de la sauce
            $table->Integer('Dislikes');                        //Nombre de dislikes de la sauce
            $table->primary('SauceId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sauces');
    }
}
