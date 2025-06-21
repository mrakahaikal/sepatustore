<?php

namespace App\Services;

use App\DTOs\ShoeDTO;
use App\DTOs\CategoryDTO;
use App\Repositories\Contracts\ShoeRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class FrontService
{
    protected $categoryRepository;
    protected $shoeRepository;

    public function __construct(ShoeRepositoryInterface $shoeRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->shoeRepository = $shoeRepository;
    }

    public function searchShoes(string $keyword)
    {
        return $this->shoeRepository->searchByName($keyword);
    }

    public function getDTOById(int $id)
    {
        // $product = $this->shoeRepository->findById($id);
        // return ShoeDTO::fromModel($product);
    }

    public function getFrontData()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $categories = $categories
            ->map(fn($category) => CategoryDTO::fromModel($category))
            ->toArray();


        $popularShoes = $this->shoeRepository->getPopularShoes(4);
        $newShoes = $this->shoeRepository->getAllNewShoes();
        $brands = $this->shoeRepository->getAllBrands();

        return compact('categories', 'popularShoes', 'newShoes', 'brands');
    }
}
