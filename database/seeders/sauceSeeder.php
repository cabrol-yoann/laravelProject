<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class sauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sauces')->insert([
            [
                'SauceId' => 1,
                'UserId' => 1,
                'Nom' => 'Sauce 1',
                'Fabricant' => 'Fabricant 1',
                'Description' => 'Description 1',
                'IngredientPrincipale' => 'IngredientPrincipale 1',
                'URL' => 'URL 1',
                'Puissance' => 1,
                'Likes' => 1,
                'Dislikes' => 1,
            ],
            [
                'SauceId' => 2,
                'UserId' => 2,
                'Nom' => 'Sauce 2',
                'Fabricant' => 'Fabricant 2',
                'Description' => 'Description 2',
                'IngredientPrincipale' => 'IngredientPrincipale 2',
                'URL' => 'URL 2',
                'Puissance' => 2,
                'Likes' => 2,
                'Dislikes' => 2,
            ],
            [
                'SauceId' => 3,
                'UserId' => 3,
                'Nom' => 'Sauce 3',
                'Fabricant' => 'Fabricant 3',
                'Description' => 'Description 3',
                'IngredientPrincipale' => 'IngredientPrincipale 3',
                'URL' => 'URL 3',
                'Puissance' => 3,
                'Likes' => 3,
                'Dislikes' => 3,
            ],
            [
                'SauceId' => 4,
                'UserId' => 4,
                'Nom' => 'Sauce 4',
                'Fabricant' => 'Fabricant 4',
                'Description' => 'Description 4',
                'IngredientPrincipale' => 'IngredientPrincipale 4',
                'URL' => 'URL 4',
                'Puissance' => 4,
                'Likes' => 4,
                'Dislikes' => 4,
            ],
            [
                'SauceId' => 5,
                'UserId' => 5,
                'Nom' => 'Sauce 5',
                'Fabricant' => 'Fabricant 5',
                'Description' => 'Description 5',
                'IngredientPrincipale' => 'IngredientPrincipale 5',
                'URL' => 'URL 5',
                'Puissance' => 5,
                'Likes' => 5,
                'Dislikes' => 5,
            ]
        ]);
    }
}
