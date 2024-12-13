<?php

namespace App\Http\Controllers;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('Category.new');
    }
}
