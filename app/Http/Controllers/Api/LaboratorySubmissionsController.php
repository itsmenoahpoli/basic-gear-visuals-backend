<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LaboratorySubmissionsService;

class LaboratorySubmissionsController extends Controller
{
    public function __construct(
        private readonly LaboratorySubmissionsService $service
    )
    {}

    public function submit(Request $request)
    {
        $result = $this->service->submitLaboratory($request->all());

        return response()->json($result, 201);
    }
}