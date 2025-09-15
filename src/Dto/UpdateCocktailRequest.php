<?php

namespace App\Dto;

use App\Entity\Cocktail;
use Symfony\Component\ObjectMapper\Attribute\Map;
use Symfony\Component\Validator\Constraints as Assert;

#[Map(target: Cocktail::class)]
final readonly class UpdateCocktailRequest
{
    public function __construct(
        #[Assert\Length(max: 255)]
        public ?string $name = null,

        #[Assert\Length(min: 10)]
        public ?string $description = null,

        #[Assert\NotBlank]
        public ?string $instructions = null,

        #[Assert\NotBlank]
        #[Assert\Count(min: 1)]
        public ?array $ingredients = null,

        #[Assert\Range(min: 1, max: 5)]
        public ?int $difficulty = null,

        public ?bool $isAlcoholic = null,

        #[Assert\Url]
        public ?string $imageUrl = null,
    ) {}
}
