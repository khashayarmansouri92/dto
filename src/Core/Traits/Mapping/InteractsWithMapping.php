<?php

namespace Core\Traits\Mapping;

use Core\Services\Mapping\MappingServiceInterface;

trait InteractsWithMapping
{
    public function MappingService()
    {
        try {
            return app()->make(MappingServiceInterface::class);
        } catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
