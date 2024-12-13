<?php

namespace App\Services\News;

use App\Services\News\Contracts\NewsServiceContract;
use App\Repositories\News\Contracts\NewsRepositoryContract;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class NewsService implements NewsServiceContract
{
    private $newsRepository;

    public function __construct(NewsRepositoryContract $newsRepository
    ) {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @param  array  $params
     * @return boolean
     */
    public function store(array $params): bool
    {
        $store = $this->newsRepository->store([
            'category_id' => $params['category'],
            'title' => $params['title'],
            'text' => $params['text']
        ]);

        if (! $store)
            return false;
        
        return true;
    }

    /**
     * @param  int  $id
     * @return array
     */
    public function getById(int $id): array
    {
        return $this->newsRepository->getById($id)->toArray();
    }

    /**
     * @return Collection
     */
    public function getNews(?array $params): Collection
    {
        $news = $this->newsRepository->getNews($params);

        return $news;
    }
}
