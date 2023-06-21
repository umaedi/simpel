<?php

namespace App\Services;

class SurveyService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function store($data)
    {
        return $this->model->create($data);
    }
}
