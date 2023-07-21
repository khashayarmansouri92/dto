<?php

namespace Core\Services\Mapping;

interface MappingServiceInterface
{
    public function getConfig(): array;
    public function mapping($data, $modelMapping): array;
}
