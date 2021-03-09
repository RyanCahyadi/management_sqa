<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Livewire\UserDatatables;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-datatables', function () {
    return view('default');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/module', [ModuleController::class, 'index'])->name('module');
Route::get('/create-module', [ModuleController::class, 'create'])->name('create-module');