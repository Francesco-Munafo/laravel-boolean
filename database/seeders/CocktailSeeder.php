<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cocktails =

            [

                [
                    'name' => 'Mojito',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/metwgh1606770327.jpg',
                    'instruction' => 'Muddle mint leaves with sugar and lime juice. Add a splash of soda water and fill the glass with cracked ice. Pour the rum and top with soda water. Garnish and serve with straw.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Rum',
                            'quantity' => '2-3 oz'
                        ],
                        [
                            'name' => 'Lime juice',
                            'quantity' => '1 Lime'
                        ],
                        [
                            'name' => 'Sugar',
                            'quantity' => '2 tsp'
                        ],
                        [
                            'name' => 'Mint',
                            'quantity' => '2-4 leaves'
                        ],
                        [
                            'name' => 'Soda',
                            'quantity' => 'qb'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC', 'USA', 'ASIA', 'VEGAN', 'BRUNCH', 'HANGOVER', 'MILD'],
                ],
                [
                    'name' => 'Mojito',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/metwgh1606770327.jpg',
                    'instruction' => 'Muddle mint leaves with sugar and lime juice.
                Add a splash of soda water and fill the glass with cracked ice.
                Pour the rum and top with soda water.
                Garnish and serve with straw.',
                    'category' => 'Alcoholic',
                    'ingredients' =>
                    [
                        [
                            'name' => 'Rum',
                            'quantity' => '2/3 oz'
                        ],
                        [
                            'name' => 'Lime juice',
                            'quantity' => '1 Lime'
                        ],
                        [
                            'name' => 'Sugar',
                            'quantity' => '2 tsp'
                        ],
                        [
                            'name' => 'Mint',
                            'quantity' => '2/4 leaves'
                        ],
                        [
                            'name' => 'Soda',
                            'quantity' => 'qb'
                        ],
                    ],

                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC', 'USA', 'ASIA', 'VEGAN', 'BRUNCH', 'HANGOVER', 'MILD']
                ],
                [
                    'name' => 'Sex on the beach',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/fi67641668420787.jpg',
                    'instruction' => 'Build all ingredients in a highball glass filled with ice. Garnish with orange slice.',
                    'category' => 'Ordinary Drink',
                    'ingredients' =>
                    [
                        [
                            'name' => 'Vodka',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Peach schnapps',
                            'quantity' => '3/4 oz'
                        ],
                        [
                            'name' => 'Cranberry juice',
                            'quantity' => 'qb'
                        ],
                        [
                            'name' => 'Orange juice',
                            'quantity' => 'qb'
                        ],

                    ],

                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC']


                ],
                [
                    'name' => 'Negroni',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/qgdu971561574065.jpg',
                    'instruction' => 'Stir into glass over ice, garnish and serve.',
                    'category' => 'Ordinary Drink',
                    'ingredients' =>
                    [
                        [
                            'name' => 'Gin',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Campari',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'CSweet Vermouth',
                            'quantity' => '1 oz'
                        ],


                    ],

                    'tags' => ['IBA', 'CLASSIC']


                ],
            ];




        for ($i = 0; $i < 20; $i++) {
            $new_cocktail = new Cocktail();
        }
    }
}
