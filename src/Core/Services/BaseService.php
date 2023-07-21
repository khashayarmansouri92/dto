<?php

namespace Core\Services;

use Core\Traits\InteractsWithBase;
use Illuminate\Database\Eloquent\Model;

class BaseService implements BaseServiceInterface
{
    use InteractsWithBase;

    /**
     * @param string $modelClass
     * @return Model
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function setModel(string $modelClass): Model
    {
        return app()->make($modelClass);
    }

    /**
     * @param Model $model
     * @param array $data
     * @return Model
     * @throws \Exception
     */
    public function store(Model $model, array $data): Model
    {
        return $this->BaseRepository($model)->store($data);
    }
}
