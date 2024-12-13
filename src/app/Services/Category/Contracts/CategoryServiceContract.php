<?php

namespace App\Services\Category\Contracts;

interface CategoryServiceContract
{
    /**
     * @param  array  $params
     * @return boolean
     */
    public function store(array $params): bool;

    /**
     * @return array
     */
    public function all(): array;
}
