<?php

namespace Core\Controllers\Store;

use Core\Constants\ConstantsMapping;
use Core\Constants\ConstantsModel;
use Core\Traits\FakeData\InteractsWithFakeData;
use Core\Traits\InteractsWithBase;
use Core\Traits\Mapping\InteractsWithMapping;
use Domain\User\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class StoreAction
{
    use InteractsWithFakeData, InteractsWithMapping, InteractsWithBase;

    /**
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(): JsonResponse
    {
        //create fake response
        $response = $this->FakeDataService()->getFakeData();

        // Load the YAML file
        $mappingConfig = $this->MappingService()->getConfig();

        foreach (json_decode($response->getContent(), true) as $key => $data)
        {
            // Get the mapping for the specific model
            $modelMapping = $mappingConfig[$key];

            // mapping data
            $mappedData = $this->MappingService()->mapping($data, $modelMapping);

            // get Model
            $model = $this->BaseService()->setModel(ConstantsModel::model($key));

            // store in database
            $this->BaseService($model)->store($model, $mappedData);
        }

        return response()->json([
            'message' => 'data stored successfully',
        ], 200);
    }
}
