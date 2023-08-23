<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\GenreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [RecordController::class, 'index']);
Route::get('/about', [RecordController::class, 'about']);
Route::get('/contact', [RecordController::class, 'contact']);
Route::get('/portfolio', [RecordController::class, 'portfolio']);
Route::get('/work', [RecordController::class, 'work']);

Route::get('/create', [GenreController::class, 'create']);
Route::get('/show/{id}', [GenreController::class, 'show']);
Route::post('/store', [GenreController::class, 'store']);
Route::get('/edit/{id}', [GenreController::class, 'edit']);
Route::post('/destroy/{id}', [GenreController::class, 'destroy']);
