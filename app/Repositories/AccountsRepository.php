<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class AccountsRepository extends BaseRepository
{
    public function __construct(
        Model $model,
        array $relationships,
        array $showRelationshipsInList
    )
    {
        parent::__construct($model, $relationships, $showRelationshipsInList);
    }

    public function create($data)
    {
        $data['account_no'] = 'ACCT'.Str::random(10);
        $data['password'] = bcrypt($data['password']);

        return parent::create($data);
    }
}
