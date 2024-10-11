<?php

namespace App\Services;

use App\Models\Subject;
use App\Repositories\LecturesRepository;

class LecturesService extends LecturesRepository
{
    public function __construct(Subject $model)
    {
        parent::__construct($model, [], []);
    }
}
