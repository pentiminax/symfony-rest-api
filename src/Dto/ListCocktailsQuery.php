<?php

namespace App\Dto;

final readonly class ListCocktailsQuery
{
    public function __construct(
        public ?string $name = null,
        public ?bool $isAlcoholic = null,
        public ?int $difficulty = null,
        public int $page = 1,
        public int $itemsPerPage = 10,
    ) {
    }
}