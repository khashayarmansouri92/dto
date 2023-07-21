<?php

namespace Core\Services;

use Illuminate\Database\Eloquent\Model;

interface BaseServiceInterface
{
    public function store(Model $model,array $data): Model;
    public function setModel(string $modelClass): Model;
}
