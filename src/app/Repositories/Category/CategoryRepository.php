<?php

namespace App\Repositories\Category;

use App\Models\Categories;
use App\Repositories\BaseRepository;
use App\Repositories\Category\Contracts\CategoryRepositoryContract;

class CategoryRepository extends BaseRepository implements CategoryRepositoryContract {

    protected $model;

    public function __construct(Categories $category)
    {
        $this->model = $category;
    }

    public function findByName(string $category): ?Categories
    {
        return $this->model->where('category', $category)->first();
    }
}
