<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;

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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/book',[BookController::class,'index']);
Route::post('/book/create',[BookController::class,'create']);
Route::get('/book/{id}/edit',[BookController::class,'edit']);
Route::post('/book/{id}/update',[BookController::class,'update']);
Route::get('/book/{id}/delete',[BookController::class,'delete']);
});

require __DIR__.'/auth.php';
