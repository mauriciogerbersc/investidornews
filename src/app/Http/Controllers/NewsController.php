<?php

namespace App\Http\Controllers;

use App\Services\News\Contracts\NewsServiceContract;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $newsService;

    public function __construct(NewsServiceContract $newsService)
    {
        $this->newsService = $newsService;
    }

    public function __invoke(Request $request)
    {
        $news = $this->newsService->getNews($request->all());
 
        return view('index', compact('news'));
    }
}
