<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\AccountsRepository;

class AccountsService extends AccountsRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model, ['user_role', 'user_otps', 'user_sessions'], ['user_role']);
    }
}
