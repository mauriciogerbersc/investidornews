<?php

namespace App\Repositories\News\Contracts;

use App\Repositories\BaseRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

interface NewsRepositoryContract extends BaseRepositoryContract
{
    public function getNews(?array $params): Collection;
}
