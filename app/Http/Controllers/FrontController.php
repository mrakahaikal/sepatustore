<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\FrontService;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService) // DIP (Dependency Injection)
    {
        $this->frontService = $frontService;
    }

    public function search(Request $request)
    {
        $keyword = $request;
        $shoes = $this->frontService->searchShoes($keyword);
        dd($shoes);

        return view('front.search', [
            'shoes' => $shoes,
            'keyword' => $keyword,
        ]);
    }
    public function index()
    {
        $data = $this->frontService->getFrontData();
        return view('front.index', $data);
    }

    public function details(Shoe $shoe)
    {
        return view('front.details', compact('shoe'));
    }

    public function category(Category $category)
    {
        $randomShoes = Shoe::inRandomOrder()->take(3)->get();
        return view('front.category', compact('category', 'randomShoes'));
    }

    public function categories()
    {
        $data = $this->frontService->getFrontData();
        $categories = $data['categories'];

        return view('pages.categories', compact('categories'));
    }

    public function brand(Brand $brand)
    {
        $randomShoes = Shoe::inRandomOrder()->take(3)->get();
        return view('pages.brand.show.index', compact('brand', 'randomShoes'));
    }
}
