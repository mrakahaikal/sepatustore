<?php

namespace App\DTOs;

use App\Models\Shoe;

class ShoeDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $slug,
        public readonly float $price,
        public readonly int $stock,
        public readonly ?string $categoryName,
        public readonly ?string $brandName,
        public readonly ?string $thumbnail,
    ) {}

    public static function fromModel(Shoe $shoe): self
    {
        return new self(
            id: $shoe->id,
            name: $shoe->name,
            slug: $shoe->slug,
            price: $shoe->price,
            stock: $shoe->stock,
            categoryName: optional($shoe->category)->name,
            brandName: optional($shoe->brand)->name,
            thumbnail: $shoe->thumbnail
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
