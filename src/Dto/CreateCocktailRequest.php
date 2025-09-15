<?php

namespace App\Dto;

use App\Entity\Cocktail;
use Symfony\Component\ObjectMapper\Attribute\Map;
use Symfony\Component\Validator\Constraints as Assert;

#[Map(target: Cocktail::class)]
final readonly class CreateCocktailRequest
{
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\Length(min: 2, max: 255)]
        public string $name,

        #[Assert\NotBlank]
        #[Assert\Length(min: 10)]
        public string $description,

        #[Assert\NotBlank]
        public string $instructions,

        #[Assert\NotBlank]
        #[Assert\Count(min: 1)]
        public array $ingredients,

        #[Assert\Range(min: 1, max: 5)]
        public int $difficulty,

        public bool $isAlcoholic,

        #[Assert\Url]
        public ?string $imageUrl,
    ) {
    }
}