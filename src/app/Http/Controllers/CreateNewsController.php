<?php

namespace App\Http\Controllers;

use App\Services\Category\Contracts\CategoryServiceContract;

class CreateNewsController extends Controller
{
    private $categoryService;

    public function __construct(CategoryServiceContract $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function __invoke()
    {
        $categories = $this->categoryService->all();
   
        return view('News.new', compact('categories'));
    }
}
