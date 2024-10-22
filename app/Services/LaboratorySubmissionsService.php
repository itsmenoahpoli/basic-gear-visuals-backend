<?php

namespace App\Services;

use App\Models\LaboratorySubmission;
use App\Repositories\LaboratorySubmissionsRepository;

class LaboratorySubmissionsService extends LaboratorySubmissionsRepository
{
    public function __construct(LaboratorySubmission $model)
    {
        parent::__construct($model, [], []);
    }

    public function submitLaboratory($payload)
    {
        return $payload;
    }
}
