<?php

namespace App\DataFixtures;

use App\Entity\Cocktail;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cocktailsData = [
            [
                'name' => 'Mojito',
                'description' => 'Un cocktail cubain rafraîchissant à base de rhum, menthe et citron vert.',
                'instructions' => 'Écrasez la menthe avec le sucre et le citron vert. Ajoutez le rhum, complétez avec de l’eau gazeuse et de la glace pilée.',
                'image_url' => 'https://example.com/images/mojito.jpg',
                'ingredients' => [
                    'Rhum blanc 50ml',
                    'Citron vert 1/2',
                    'Feuilles de menthe',
                    'Eau gazeuse',
                    'Sucre de canne',
                    'Glace pilée'
                ],
                'difficulty' => 2,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Virgin Mojito',
                'description' => 'La version sans alcool du mojito, légère et désaltérante.',
                'instructions' => 'Écrasez la menthe avec le sucre et le citron vert. Ajoutez de l’eau gazeuse et de la glace pilée.',
                'image_url' => 'https://example.com/images/virgin-mojito.jpg',
                'ingredients' => [
                    'Citron vert 1/2',
                    'Feuilles de menthe',
                    'Eau gazeuse',
                    'Sucre de canne',
                    'Glace pilée'
                ],
                'difficulty' => 1,
                'is_alcoholic' => false,
            ],
            [
                'name' => 'Margarita',
                'description' => 'Un grand classique mexicain, frais et acidulé.',
                'instructions' => 'Mélangez la tequila, le triple sec et le jus de citron vert. Servez avec un bord de verre givré au sel.',
                'image_url' => 'https://example.com/images/margarita.jpg',
                'ingredients' => [
                    'Tequila 50ml',
                    'Triple sec 25ml',
                    'Jus de citron vert 25ml',
                    'Sel pour le verre'
                ],
                'difficulty' => 3,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Cosmopolitan',
                'description' => 'Un cocktail élégant et fruité, très populaire.',
                'instructions' => 'Mélangez la vodka, le triple sec, le jus de cranberry et un trait de citron vert. Servez dans un verre à martini.',
                'image_url' => 'https://example.com/images/cosmopolitan.jpg',
                'ingredients' => [
                    'Vodka 40ml',
                    'Triple sec 15ml',
                    'Jus de cranberry 30ml',
                    'Jus de citron vert 10ml'
                ],
                'difficulty' => 3,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Piña Colada',
                'description' => 'Cocktail exotique crémeux à l’ananas et à la noix de coco.',
                'instructions' => 'Mixez le rhum, le jus d’ananas et la crème de coco avec de la glace.',
                'image_url' => 'https://example.com/images/pina-colada.jpg',
                'ingredients' => [
                    'Rhum blanc 40ml',
                    'Jus d’ananas 90ml',
                    'Crème de coco 30ml'
                ],
                'difficulty' => 2,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Spritz',
                'description' => 'Un cocktail italien pétillant et amer.',
                'instructions' => 'Mélangez l’Apérol, le prosecco et complétez avec de l’eau gazeuse.',
                'image_url' => 'https://example.com/images/spritz.jpg',
                'ingredients' => [
                    'Apérol 60ml',
                    'Prosecco 90ml',
                    'Eau gazeuse',
                    'Tranche d’orange'
                ],
                'difficulty' => 1,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Bloody Mary',
                'description' => 'Un cocktail salé et épicé à base de vodka et jus de tomate.',
                'instructions' => 'Mélangez la vodka, le jus de tomate, le jus de citron, la sauce Worcestershire et quelques gouttes de Tabasco.',
                'image_url' => 'https://example.com/images/bloody-mary.jpg',
                'ingredients' => [
                    'Vodka 45ml',
                    'Jus de tomate 90ml',
                    'Jus de citron 15ml',
                    'Tabasco',
                    'Sauce Worcestershire'
                ],
                'difficulty' => 4,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Caipirinha',
                'description' => 'Un cocktail brésilien simple et savoureux.',
                'instructions' => 'Écrasez le citron vert avec le sucre, ajoutez la cachaça et de la glace pilée.',
                'image_url' => 'https://example.com/images/caipirinha.jpg',
                'ingredients' => [
                    'Cachaça 50ml',
                    'Citron vert 1',
                    'Sucre de canne',
                    'Glace pilée'
                ],
                'difficulty' => 2,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Tequila Sunrise',
                'description' => 'Un cocktail coloré qui imite un lever de soleil.',
                'instructions' => 'Versez la tequila et le jus d’orange sur de la glace, puis ajoutez doucement la grenadine.',
                'image_url' => 'https://example.com/images/tequila-sunrise.jpg',
                'ingredients' => [
                    'Tequila 50ml',
                    'Jus d’orange 100ml',
                    'Sirop de grenadine 10ml'
                ],
                'difficulty' => 1,
                'is_alcoholic' => true,
            ],
            [
                'name' => 'Shirley Temple',
                'description' => 'Un mocktail doux et fruité, idéal pour les enfants.',
                'instructions' => 'Mélangez le soda au gingembre, le sirop de grenadine et ajoutez une cerise confite.',
                'image_url' => 'https://example.com/images/shirley-temple.jpg',
                'ingredients' => [
                    'Soda au gingembre',
                    'Sirop de grenadine',
                    'Cerise confite'
                ],
                'difficulty' => 1,
                'is_alcoholic' => false,
            ],
        ];

        foreach ($cocktailsData as $data) {
            $cocktail = new Cocktail();
            $cocktail->setName($data['name']);
            $cocktail->setDescription($data['description']);
            $cocktail->setInstructions($data['instructions']);
            $cocktail->setImageUrl($data['image_url']);
            $cocktail->setIngredients($data['ingredients']);
            $cocktail->setDifficulty($data['difficulty']);
            $cocktail->setIsAlcoholic($data['is_alcoholic']);
            $cocktail->setCreatedAt(new \DateTimeImmutable());
            $cocktail->setUpdatedAt(new \DateTimeImmutable());

            $manager->persist($cocktail);
        }

        $manager->flush();
    }
}
