<?php

namespace App\Repositories\Base;

class BaseRepository implements  BaseRepositoryInterface{
    protected $model;
    public function create($attribute)
    {
        return $this->model->create($attribute);
    }
    public function getAll()
    {
        return $this->model->all();
    }
}
