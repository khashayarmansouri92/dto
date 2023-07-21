<?php

namespace Core\Traits\User;

use Core\Repositories\User\UserRepositoryInterface;
use Core\Services\User\UserServiceInterface;

trait InteractsWithUser
{
    public function UserService()
    {
        try {
            return app()->make(UserServiceInterface::class);
        } catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    public function UserRepository()
    {
        try {
            return app()->make(UserRepositoryInterface::class);
        } catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
