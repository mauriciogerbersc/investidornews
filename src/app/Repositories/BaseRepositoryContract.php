<?php

namespace App\Repositories;

interface BaseRepositoryContract
{
    public function getById(int $id);
    public function all();
    public function store(array $data);
}
