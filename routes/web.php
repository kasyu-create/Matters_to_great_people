<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
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

//Route::get('/','RecordController@index');
// Route::get('/about','RecordController@about');
// Route::get('/contact','RecordController@contact');
// Route::get('/portfolio','RecordController@portfolio');
// Route::get('/work','RecordController@work');