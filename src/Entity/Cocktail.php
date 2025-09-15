<?php

namespace App\Entity;

use App\Repository\CocktailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: CocktailRepository::class)]
class Cocktail
{
    #[Groups('cocktail:read')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $instructions = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(nullable: true)]
    private ?array $ingredients = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $difficulty = null;

    #[Groups('cocktail:read')]
    #[ORM\Column]
    private ?bool $isAlcoholic = null;

    #[Groups('cocktail:read')]
    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[Groups('cocktail:read')]
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): static
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    public function setIngredients(?array $ingredients): static
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(?int $difficulty): static
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function isAlcoholic(): ?bool
    {
        return $this->isAlcoholic;
    }

    public function setIsAlcoholic(bool $isAlcoholic): static
    {
        $this->isAlcoholic = $isAlcoholic;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
