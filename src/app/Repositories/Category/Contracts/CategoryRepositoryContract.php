<?php

namespace App\Repositories\Category\Contracts;

use App\Models\Categories;
use App\Repositories\BaseRepositoryContract;

interface CategoryRepositoryContract extends BaseRepositoryContract
{
    public function findByName(string $category): ?Categories;
}