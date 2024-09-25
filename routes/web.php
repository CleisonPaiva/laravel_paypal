<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;

Route::get('/', [PayPalController::class, 'index']);
Route::get('/create/{amount}', [PayPalController::class, 'create']);
Route::get('/complete', [PayPalController::class, 'complete']); 

