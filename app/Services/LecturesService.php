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

        // if ($payload['file'] && $payload['file']->isValid()) {
        //     $path = $payload['file']->store('uploads/modules', 'public');
        //     $payload['module_src'] = $path;
        // }

        if ($payload['file'] && $payload['file']->isValid()) {
            $destinationPath = public_path('uploads/modules');
            $fileName = $payload['file']->getClientOriginalName();
            $payload['file']->move($destinationPath, $fileName);

            $payload['module_src'] = 'uploads/modules/' . $fileName;
        }

        unset($payload['file']);

        return parent::create($payload);
    }
}
