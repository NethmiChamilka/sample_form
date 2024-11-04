<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    /**
     * Store a newly created client in the database.
     */
    public function store(StoreClientRequest $request): JsonResponse
    {
        // Retrieve the validated input data
        $validated = $request->validated();

        // Create the client
        $client = client::create($validated);

        return response()->json([
            'message' => 'Client created successfully!',
            'client' => $client
        ], 201);
    }
}
