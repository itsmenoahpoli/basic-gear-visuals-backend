<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\AccountsRepository;

class AccountsService extends AccountsRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model, [], []);
    }
}
