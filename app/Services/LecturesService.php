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

    public function create($payload)
    {

        if ($payload['file'] && $payload['file']->isValid()) {
            $path = $payload['file']->store('uploads/modules', 'public');
            $payload['module_src'] = $path;
        }

        unset($payload['file']);

        return parent::create($payload);
    }
}
