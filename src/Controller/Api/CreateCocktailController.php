<?php

namespace App\Controller\Api;

use App\Dto\CreateCocktailRequest;
use App\Entity\Cocktail;
use App\Repository\CocktailRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\ObjectMapper\ObjectMapperInterface;
use Symfony\Component\Routing\Attribute\Route;

class CreateCocktailController
{
    public function __construct(
        private readonly CocktailRepository $cocktailRepository,
        private readonly ObjectMapperInterface $objectMapper
    ) {
    }

    #[Route('/api/cocktails', name: 'api.cocktails.create', methods: ['POST'])]
    public function __invoke(#[MapRequestPayload] CreateCocktailRequest $request): Response
    {
        $cocktail = $this->objectMapper->map($request, Cocktail::class);

        $this->cocktailRepository->save($cocktail);

        return new Response(null, Response::HTTP_CREATED);
    }
}