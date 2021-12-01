<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\StatusController;
use App\Models\Status;

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

//Membuat route get menampilkan atau mengambil data patients
Route::get('/patients', [PatientsController::class, 'index']);
//Membuat route post untuk menginput data patients
Route::post('/patients', [PatientsController::class, 'store']);

Route::get('/status', [StatusController::class, 'index']);
Route::post('/status', [StatusController::class, 'store']);
