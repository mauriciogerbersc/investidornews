<?php

namespace App\Services\Category;

use App\Services\Category\Contracts\CategoryServiceContract;
use App\Repositories\Category\CategoryRepository;

class CategoryService implements CategoryServiceContract
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param  array  $params
     * @return boolean
     */
    public function store(array $params): bool
    {
        if ($this->categoryRepository->findByName($params['category']))
            return false;

        $this->categoryRepository->store(['category' => $params['category']]);

        return true;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->categoryRepository->all()->toArray();
    }
}
