<?php

namespace App\Controller\Api;

use App\Dto\ListCocktailsQuery;
use App\Repository\CocktailRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ListCocktailsController
{
    public function __construct(
        private readonly CocktailRepository $cocktailRepository,
        private readonly SerializerInterface $serializer,
    ) {
    }

    #[Route('/api/cocktails', name: 'api.cocktails.list', methods: ['GET'])]
    public function __invoke(#[MapQueryString] ListCocktailsQuery $filter): Response
    {
        $cocktails = $this->cocktailRepository->findAllWithFilters($filter);

        $data = $this->serializer->serialize($cocktails, 'json', [
            'groups' => ['cocktail:read']
        ]);

        return JsonResponse::fromJsonString($data);
    }
}