<?php

namespace App\DTOs;

use App\Models\Category;

class CategoryDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $slug,
        public readonly string $icon,
        public readonly ?int $shoesCount,
    ) {}

    public static function fromModel(Category $category): self
    {
        return new self(
            id: $category->id,
            name: $category->name,
            slug: $category->slug,
            icon: $category->icon,
            shoesCount: optional($category->shoes)->count(),
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
