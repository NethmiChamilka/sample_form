<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client; // Ensure this matches your model

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'birthday' => 'required|date',
            'sex' => 'required|in:male,female',
        ]);

        Client::create($request->all());

        return response()->json(['message' => 'Client data saved successfully.'], 201);
    }

    // View data
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }
}



