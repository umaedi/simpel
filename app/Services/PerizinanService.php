<?php

namespace App\Services;

class PerizinanService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function Query()
    {
        return $this->model->query();
    }
}
