<?php

namespace Core\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function store(array $attributes) : Model;
}
