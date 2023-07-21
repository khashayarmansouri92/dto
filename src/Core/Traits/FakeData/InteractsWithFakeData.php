<?php

namespace Core\Traits\FakeData;

use Core\Services\FakeData\FakeDataServiceInterface;

trait InteractsWithFakeData
{
    public function FakeDataService()
    {
        try {
            return app()->make(FakeDataServiceInterface::class);
        } catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
