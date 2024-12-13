<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Services\Category\Contracts\CategoryServiceContract;

class StoreCategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryServiceContract $categoryService)
    {
        $this->categoryService = $categoryService;    
    }

    public function __invoke(StoreCategoryRequest $request)
    {
        $store = $this->categoryService->store($request->validated());

        if(! $store)
            return redirect()->back()->withInputs($request->all())->with(['warning' => 'Falha ao realizar cadastro']);
        
        return back()->with('success', 'Categoria cadastrada com sucesso.');
    }
}
