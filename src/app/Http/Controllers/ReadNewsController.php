<?php

namespace App\Http\Controllers;

use App\Services\News\Contracts\NewsServiceContract;

class ReadNewsController extends Controller
{
    private $newsService;

    public function __construct(NewsServiceContract $newsService)
    {
        $this->newsService = $newsService;
    }

    public function __invoke(int $id)
    {
        $new = $this->newsService->getById($id);
 
        return view('news.view', compact('new'));
    }
}
