<?php

namespace Core\Services\Mapping;

use Core\Constants\ConstantsMapping;
use Symfony\Component\Yaml\Yaml;

class MappingService implements MappingServiceInterface
{
    /**
     * @return array
     */
    public function getConfig(): array
    {
        return Yaml::parseFile(config_path(ConstantsMapping::path));
    }

    /**
     * @param $data
     * @param $modelMapping
     * @return array
     */
    public function mapping($data, $modelMapping): array
    {
        $mappedData = [];

        foreach ($modelMapping as $mapping)
        {
            $apiField = $mapping['api_field'];
            $objectField = $mapping['object_field'];
            $mappedData[$objectField] = $data[$apiField];
        }

        return $mappedData;
    }
}
