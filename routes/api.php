<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-module', [ModuleController::class, 'store']);
Route::get('/get-module', [ModuleController::class, 'getAll']);
Route::patch('/update-module/{id}', [ModuleController::class, 'update']);
Route::delete('/delete-module/{id}', [ModuleController::class, 'destroy']);