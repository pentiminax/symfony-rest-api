<?php

namespace App\Controller\Api;

use App\Entity\Cocktail;
use App\Repository\CocktailRepository;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DeleteCocktailController
{
    public function __construct(
        private readonly CocktailRepository $cocktailRepository
    ) {
    }

    #[Route('/api/cocktails/{id}', name: 'api.cocktails.delete', methods: ['DELETE'])]
    public function __invoke( #[MapEntity(expr: 'repository.find(id)', message: 'Not found')] Cocktail $cocktail): Response
    {
        $this->cocktailRepository->remove($cocktail);

        return new Response(null, Response::HTTP_NO_CONTENT);
    }
}