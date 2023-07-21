<?php

namespace Core\Traits;

use Core\Repositories\BaseRepositoryInterface;
use Core\Services\BaseServiceInterface;

trait InteractsWithBase
{
    public function BaseService()
    {
        try {
            return app()->make(BaseServiceInterface::class);
        } catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    public function BaseRepository($model)
    {

        try {
            return app()->makeWith(BaseRepositoryInterface::class, ['model' => $model]);
        } catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
