<?php

namespace App\Repositories;

abstract class BaseRepository implements BaseRepositoryContract
{
    public function getById(int $id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }
    
    public function store(array $data)
    {
        return $this->model->create($data);
    }
}
