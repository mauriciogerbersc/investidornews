<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Services\News\Contracts\NewsServiceContract;

class StoreNewsController extends Controller
{
    private $newsService;

    public function __construct(NewsServiceContract $newsService)
    {
        $this->newsService = $newsService;    
    }

    public function __invoke(StoreNewsRequest $request)
    {
        $store = $this->newsService->store($request->validated());
      
        if(! $store)
            return redirect()->back()->withInputs($request->all())->with(['warning' => 'Falha ao realizar cadastro']);
        
        return back()->with('success', 'Notícia cadastrada com sucesso.');
    }
}
