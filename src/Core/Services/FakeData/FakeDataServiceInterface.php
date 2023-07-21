<?php

namespace Core\Services\FakeData;

use Illuminate\Http\JsonResponse;

interface FakeDataServiceInterface
{
    public function getFakeData(): JsonResponse;
}
