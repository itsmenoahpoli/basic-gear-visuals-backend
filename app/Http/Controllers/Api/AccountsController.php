<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Services\AccountsService;
use App\Http\Requests\Accounts\CreateAccountRequest;

class AccountsController extends Controller
{
    public function __construct(
        private readonly AccountsService $accountsService
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : JsonResponse
    {
        $accountType = $request->get('accountType');
        $result = $accountType ? $this->accountsService->getListByUserType($accountType) : $this->accountsService->getList();

        return response()->json($result, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAccountRequest $request)
    {
        $result = $this->accountsService->create($request->validated());

        return response()->json($result, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
