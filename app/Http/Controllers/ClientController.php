<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    /**
     * Store the clients.
     *
     * @param  StoreClientRequest  $request
     * @return JsonResponse
     */
    public function store(StoreClientRequest $request): JsonResponse
    {
        $clients = $request->input('clients');

        $createdClients = [];

        foreach ($clients as $clientData) {
            $createdClients[] = Client::create($clientData);
        }

        return response()->json([
            'message' => 'Clients created successfully!',
            'clients' => $createdClients,
        ], 201);
        }
    }
