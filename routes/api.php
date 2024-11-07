<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::post('/clients', [ClientController::class, 'store']);
