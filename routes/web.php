<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RidesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/register', [AdminController::class, 'getRegistrationForm']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RidesController::class, 'index'])->name('dashboard');
    Route::get('/rider', [RidesController::class, 'rider'])->name('rider');
    Route::delete('/rides/{id}', [RidesController::class, 'destroy']);
    Route::put('/rides/{id}', [RidesController::class, 'update']);
    Route::post('/rides', [RidesController::class, 'store']);
});