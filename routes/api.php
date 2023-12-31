<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create-brand',[DemoController::class, 'DemoAction']);

Route::post('/update-brand/{id}',[DemoController::class, 'BrandUpdate']);

Route::post('/create-update-brand/{brandName}',[DemoController::class, 'UpdateOrCreate']);

Route::get('/delete-brand/{id}',[DemoController::class, 'delete']);

Route::get('/increment-decrement',[DemoController::class, 'IncrementDecrement']);