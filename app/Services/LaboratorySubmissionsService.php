<?php

namespace App\Services;

use App\Models\LaboratorySubmission;
use App\Repositories\LaboratorySubmissionsRepository;

class LaboratorySubmissionsService extends LaboratorySubmissionsRepository
{
    public function __construct(private LaboratorySubmission $model)
    {
        parent::__construct($model, [], []);
    }

    public function submitLaboratory($payload)
    {
        if (count($payload['files']))
        {
            $uploadedFiles = [];

            foreach ($payload['files'] as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('uploads/laboratory-submissions'), $filename);
                $uploadedFiles[] = '/uploads/laboratory-submissions/'.$filename;
            }


            return $this->model->query()->create([
                'user_id' => $payload['user_id'],
                'lecture_id' => $payload['lecture_id'],
                'quiz_score' => $payload['quiz_score'],
                'laboratories_data' => json_encode($uploadedFiles)
            ]);
        }
    }
}
