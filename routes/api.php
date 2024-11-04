<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

// API Route for client registration
Route::post('/clients', [ClientController::class, 'store']);
