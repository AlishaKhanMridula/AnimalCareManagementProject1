<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/care',[App\Http\Controllers\RoutineController::class, 'care']);
Route::get('/vet',[App\Http\Controllers\DoctorsController::class, 'vet']);
Route::get('/make',[App\Http\Controllers\DonationController::class, 'make']);
Route::post('/store',[App\Http\Controllers\DonationController::class, 'store']);
