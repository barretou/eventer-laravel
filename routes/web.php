<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/contato', [EventController::class, 'contato']);
Route::get('/events/create', [EventController::class, 'create']);

// Route::get('/contato', function () {
  
//     return view('pages.contato');
// });

// Route::get('/produtos', function () {
//     return view('pages.produtos');
// });
