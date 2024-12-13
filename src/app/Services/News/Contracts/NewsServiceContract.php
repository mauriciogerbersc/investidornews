<?php

namespace App\Services\News\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface NewsServiceContract
{
    public function store(array $params): bool;

    public function getById(int $params): array;

    public function getNews(?array $params): Collection;
}
