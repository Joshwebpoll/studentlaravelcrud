<?php

use App\Http\Controllers\ImageController;
use App\Livewire\Tutorial;
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
Route::get('student', Tutorial::class)->name('student');
Route::get('/image', [ImageController::class, 'image'])->name('image');
Route::post('/image', [ImageController::class, 'store'])->name('store');
Route::get('/getimage', [ImageController::class, 'getimage'])->name('getimage');
Route::get('/editimage/{id}', [ImageController::class, 'editimage'])->name('editimage');
Route::delete('/delete/{id}', [ImageController::class, 'delete'])->name('delete');
Route::put('/update/{id}', [ImageController::class, 'update'])->name('update');
