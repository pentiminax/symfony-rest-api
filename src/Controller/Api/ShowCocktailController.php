<?php

namespace App\Controller\Api;

use App\Dto\ListCocktailsQuery;
use App\Entity\Cocktail;
use App\Repository\CocktailRepository;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ShowCocktailController
{
    public function __construct(
        private readonly SerializerInterface $serializer,
    ) {
    }

    #[Route('/api/cocktails/{id}', name: 'api.cocktails.show', methods: ['GET'])]
    public function __invoke(#[MapEntity(expr: 'repository.find(id)', message: 'Not found')] Cocktail $cocktail,): Response
    {
        $data = $this->serializer->serialize($cocktail, 'json', [
            'groups' => ['cocktail:read']
        ]);

        return JsonResponse::fromJsonString($data);
    }
}