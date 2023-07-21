<?php

namespace Core\Services\FakeData;

use Faker\Factory as Faker;
use Illuminate\Http\JsonResponse;

class FakeDataService implements FakeDataServiceInterface
{
    /**
     * @return JsonResponse
     */
    public function getFakeData(): JsonResponse
    {
        $faker = Faker::create();
        $fakeUser = [
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'email' => $faker->email,
            'pass' => $faker->password,
        ];

        $fakePost = [
            'title' => $faker->title,
            'description' => $faker->words(30, true),
        ];

        $response = [
            'user' => $fakeUser,
            'post' => $fakePost,
        ];

        return response()->json($response);
    }
}
