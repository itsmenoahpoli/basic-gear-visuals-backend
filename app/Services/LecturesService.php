<?php

namespace App\Services;

use App\Models\Lecture;
use App\Repositories\LecturesRepository;

class LecturesService extends LecturesRepository
{
    public function __construct(Lecture $model)
    {
        parent::__construct($model, [], []);
    }
}
