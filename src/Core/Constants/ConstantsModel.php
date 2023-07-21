<?php

namespace Core\Constants;

class ConstantsModel
{
    public function model($value)
    {
        switch ($value) {
            case 'user':
                return 'Domain\User\Models\User';
            case 'post':
                return 'Domain\Post\Models\Post';
        }
    }
}
