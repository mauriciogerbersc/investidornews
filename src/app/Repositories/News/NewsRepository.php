<?php

namespace App\Repositories\News;

use App\Models\News;
use App\Repositories\BaseRepository;
use App\Repositories\News\Contracts\NewsRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class NewsRepository extends BaseRepository implements NewsRepositoryContract
{

    protected $model;

    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function getNews(?array $params): Collection
    {
        $query = $this->model->query();

        if (isset($params['search'])) {
            $search = $params['search'];

            $query->where('title', 'like', "%$search%")
                ->orWhereHas('category', function ($q) use ($search) {
                    $q->where('category', 'like', "%$search%");
                });
        }

        return $query->with('category')->get();
    }
}
