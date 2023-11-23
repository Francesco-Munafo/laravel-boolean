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
                    'name' => 'Long Island Tea',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/nkwr4c1606770558.jpg',
                    'instruction' => 'Combine all ingredients (except cola) and pour over ice in a highball glass. Add the splash of cola for color. Decorate with a slice of lemone and serve ',
                    'category' => 'Alcoholic',
                    'ingredients' =>
                    [
                        [
                            'name' => 'Vodka',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Rum',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Gin',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Tequila',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '1/2 lemon'
                        ],
                        [
                            'name' => 'Cola',
                            'quantity' => '1 splash'
                        ],
                    ],

                    'tags' => ['STRONG', 'ASIA', 'STRONGFLAVOR', 'BRUNCH', 'VEGETARIAN', 'SOUR']
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
                [
                    'name' => 'Gin lemon',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/6gdohq1681212476.jpg',
                    'instruction' => 'For the preparation of the gin lemon you will not need the shaker. Fill the tumbler with ice, pour the gin and lemonade over it. Gently mix and decorate with a slice of lemon. Those who prefer can also add a few mint leaves. Your gin lemon is ready to be served.',
                    'category' => 'Ordinary Drink',
                    'ingredients' =>
                    [
                        [
                            'name' => 'Gin',
                            'quantity' => '6 cl'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '8 cl'
                        ],
                        [
                            'name' => 'Lemon peel',
                            'quantity' => '1 slice'
                        ],
                        [
                            'name' => 'Cubes Ice',
                            'quantity' => 'qb'
                        ],

                    ],

                    'tags' => ['SIMPLE', 'CLASSIC', 'REFRESHING']


                ],
            ];




        foreach ($cocktails as $cocktail) {
            $new_cocktail = new Cocktail();
            $new_cocktail->name = $cocktail['name'];
            $new_cocktail->image = $cocktail['image'];
            $new_cocktail->instruction = $cocktail['instruction'];
            $new_cocktail->category = $cocktail['category'];
            $new_cocktail->ingredients = $cocktail['ingredients'];
            $new_cocktail->tags = $cocktail['tags'];
            $new_cocktail->save();
        }
    }
}
