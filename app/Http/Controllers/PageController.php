<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\FrontService;

class PageController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService) // DIP (Dependency Injection)
    {
        $this->frontService = $frontService;
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $shoes = $this->frontService->searchShoes($keyword);

        return view('front.search', [
            'shoes' => $shoes,
            'keyword' => $keyword,
        ]);
    }
    public function index()
    {
        $data = $this->frontService->getFrontData();
        return Inertia::render('Home/Index', [
            'data' => $data,
        ]);
    }

    public function details(Shoe $shoe)
    {
        return view('front.details', compact('shoe'));
    }

    public function category(Category $category)
    {
        return view('front.category', compact('category'));
    }
}
