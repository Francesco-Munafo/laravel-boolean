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
                [
                    'name' => 'Negroni',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/qgdu971561574065.jpg',
                    'instruction' => 'Build into a rocks glass with ice. Stir.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Gin',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Campari',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Sweet vermouth',
                            'quantity' => '1 oz'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],
                ],
                [
                    'name' => 'Whiskey Sour',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/hbkfsh1589574990.jpg',
                    'instruction' => 'Shake all ingredients with ice. Strain into a rocks glass.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Bourbon',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '3/4 oz'
                        ],
                        [
                            'name' => 'Simple syrup',
                            'quantity' => '1/2 oz'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],
                ],
                [
                    'name' => 'Moscow Mule',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/3pylqc1504370988.jpg',
                    'instruction' => 'Combine vodka and ginger beer in a copper mug filled with ice. Add lime juice. Stir gently and garnish with a lime slice.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Vodka',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Ginger beer',
                            'quantity' => '4 oz'
                        ],
                        [
                            'name' => 'Lime juice',
                            'quantity' => '1 oz'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],
                ],
                [
                    'name' => 'Old Fashioned',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/vrwquq1478252802.jpg',
                    'instruction' => 'Muddle sugar with bitters and water in a rocks glass. Fill the glass with ice cubes and add bourbon. Stir well.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Bourbon',
                            'quantity' => '4.5 cl'
                        ],
                        [
                            'name' => 'Sugar cube',
                            'quantity' => '1'
                        ],
                        [
                            'name' => 'Angostura bitters',
                            'quantity' => '2 dashes'
                        ],
                        [
                            'name' => 'Water',
                            'quantity' => '1 splash'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],

                ],
                [
                    'name' => 'Manhattan',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/hz7p4t1589575281.jpg',
                    'instruction' => 'Stirred over ice, strained into a chilled glass, garnished, and served up.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Rye whiskey',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Sweet vermouth',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Angostura bitters',
                            'quantity' => '2 dashes'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],
                ],
                [
                    'name' => 'Tom Collins',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/6ck9yi1589574317.jpg',
                    'instruction' => 'Shake all ingredients with ice and strain into a highball glass. Top with club soda. Garnish with a cherry and an orange slice.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Gin',
                            'quantity' => '1 1/2 oz'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Simple syrup',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Club soda',
                            'quantity' => 'qb'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],
                ],
                [
                    'name' => 'Daiquiri',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/usuuur1439906797.jpg',
                    'instruction' => 'Shake all ingredients with ice and strain into a chilled martini glass.',
                    'category' => 'Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'White rum',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Lime juice',
                            'quantity' => '3/4 oz'
                        ],
                        [
                            'name' => 'Simple syrup',
                            'quantity' => '1/2 oz'
                        ],
                    ],
                    'tags' => ['IBA', 'CONTEMPORARYCLASSIC'],
                ],

                //Analcoholics

                [
                    'name' => 'Virgin Mojito',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/5noda61589575158.jpg',
                    'instruction' => 'Muddle mint leaves with sugar and lime juice. Add a splash of soda water and fill the glass with cracked ice. Top with soda water. Garnish and serve with straw.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
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
                            'name' => 'Soda water',
                            'quantity' => 'qb'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'SUMMER', 'REFRESHING'],
                ],
                [
                    'name' => 'Virgin Piña Colada',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/trnk601566080275.jpg',
                    'instruction' => 'Blend all ingredients with ice until smooth. Pour into a chilled glass and garnish with a pineapple slice.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Pineapple juice',
                            'quantity' => '3 oz'
                        ],
                        [
                            'name' => 'Coconut cream',
                            'quantity' => '3 oz'
                        ],
                        [
                            'name' => 'Ice',
                            'quantity' => '1 cup'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'TROPICAL', 'CREAMY'],
                ],
                [
                    'name' => 'Virgin Mary',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/5tj99r1606853978.jpg',
                    'instruction' => 'Build all ingredients in a mixing glass with ice, then pour into a highball glass. Garnish with a celery stick and a lemon wedge.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Tomato juice',
                            'quantity' => '3 oz'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Worcestershire sauce',
                            'quantity' => '1 dash'
                        ],
                        [
                            'name' => 'Tabasco sauce',
                            'quantity' => '1 dash'
                        ],
                        [
                            'name' => 'Salt',
                            'quantity' => 'Salt rim'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'SPICY', 'VEGETABLE'],
                ],
                [
                    'name' => 'Shirley Temple',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/ib0b7g1587892477.jpg',
                    'instruction' => 'Pour the grenadine into the bottom of a highball glass. Add ice and fill with ginger ale. Garnish with a cherry and an orange slice.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Grenadine',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Ginger ale',
                            'quantity' => '4 oz'
                        ],
                        [
                            'name' => 'Cherry',
                            'quantity' => '1'
                        ],
                        [
                            'name' => 'Orange slice',
                            'quantity' => '1'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'KIDS'],
                ],
                [
                    'name' => 'Virgin Colada',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/5yhd3n1571687385.jpg',
                    'instruction' => 'Blend all ingredients with ice until smooth. Pour into a chilled glass and garnish with a pineapple slice.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Pineapple juice',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Coconut cream',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Cream',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Ice',
                            'quantity' => '1 cup'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'TROPICAL', 'CREAMY'],
                ],
                [
                    'name' => 'Roy Rogers',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/qprxpu1454515125.jpg',
                    'instruction' => 'Build in a highball glass with ice. Garnish with a cherry and an orange slice.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Cola',
                            'quantity' => 'Cola'
                        ],
                        [
                            'name' => 'Grenadine',
                            'quantity' => '1/2 oz'
                        ],
                        [
                            'name' => 'Cherry',
                            'quantity' => '1'
                        ],
                        [
                            'name' => 'Orange slice',
                            'quantity' => '1'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'KIDS'],
                ],
                [
                    'name' => 'Blue Lagoon',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/vvop4w1493069934.jpg',
                    'instruction' => 'Pour the ingredients into a highball glass with ice. Garnish with an orange slice.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Lemonade',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Sprite',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Blue Curacao',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Orange slice',
                            'quantity' => '1'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'SUMMER', 'BLUE'],
                ],
                [
                    'name' => 'Fruit Punch',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/b53a64b5c78548f819d084cf2a1723fe.jpg',
                    'instruction' => 'Mix all ingredients in a punch bowl and serve.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Pineapple juice',
                            'quantity' => '4 oz'
                        ],
                        [
                            'name' => 'Orange juice',
                            'quantity' => '4 oz'
                        ],
                        [
                            'name' => 'Cranberry juice',
                            'quantity' => '4 oz'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Sprite',
                            'quantity' => '2 oz'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'FRUITY', 'PUNCH'],
                ],
                [
                    'name' => 'Cinderella',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/akv2fq1504388679.jpg',
                    'instruction' => 'Shake well, strain into a large cocktail glass.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Orange juice',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Pineapple juice',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Cream',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Lemon juice',
                            'quantity' => '1 dash'
                        ],
                        [
                            'name' => 'Grenadine',
                            'quantity' => '1/2 oz'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'FRUITY', 'SWEET'],
                ],
                [
                    'name' => 'Sunset Cooler',
                    'image' => 'https://www.thecocktaildb.com/images/media/drink/qtxspv1472669835.jpg',
                    'instruction' => 'Fill a shaker with ice cubes. Add orange juice, cranberry juice, and pineapple juice. Shake well and strain into a highball glass filled with ice. Garnish with an orange slice and a cherry.',
                    'category' => 'Non-Alcoholic',
                    'ingredients' => [
                        [
                            'name' => 'Orange juice',
                            'quantity' => '3 oz'
                        ],
                        [
                            'name' => 'Cranberry juice',
                            'quantity' => '2 oz'
                        ],
                        [
                            'name' => 'Pineapple juice',
                            'quantity' => '1 oz'
                        ],
                        [
                            'name' => 'Ice',
                            'quantity' => 'Cubed'
                        ],
                    ],
                    'tags' => ['MOCKTAIL', 'FRUITY', 'REFRESHING'],
                ]
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
