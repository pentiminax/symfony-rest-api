<?php

namespace App\Controller\Api;

use App\Dto\UpdateCocktailRequest;
use App\Entity\Cocktail;
use App\Repository\CocktailRepository;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\ObjectMapper\ObjectMapperInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UpdateCocktailController
{
    public function __construct(
        private readonly CocktailRepository $cocktailRepository,
        private readonly ObjectMapperInterface $objectMapper,
        private readonly SerializerInterface $serializer
    ) {
    }

    #[Route('/api/cocktails/{id}', name: 'api.cocktails.update', methods: ['PUT', 'PATCH'])]
    public function __invoke(
        #[MapEntity(expr: 'repository.find(id)', message: 'Not found')] Cocktail $cocktail,
        #[MapRequestPayload] UpdateCocktailRequest $request
    ): JsonResponse {
        $updatedCocktail = $this->objectMapper->map($request, $cocktail);

        $this->cocktailRepository->save($updatedCocktail);

        $data = $this->serializer->serialize($updatedCocktail, 'json', [
            'groups' => ['cocktail:read']
        ]);

        return JsonResponse::fromJsonString($data);
    }
}