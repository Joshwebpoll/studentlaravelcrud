<?php

use App\Http\Controllers\StudentController;
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
Route::get('fetch', [StudentController::class, 'fetch']);
Route::post('create', [StudentController::class, 'create']);
Route::get('getsingle/{id}', [StudentController::class, 'getsingle']);
Route::put('update/{id}', [StudentController::class, 'update']);
Route::delete('delete/{id}', [StudentController::class, 'delete']);
