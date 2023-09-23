<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectionController;

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

Route::get('/', [ConnectionController::class, 'displayForm'])->name('show'); // displaying form
Route::post('/connect', [ConnectionController::class, 'connect'])->name('connect'); //connecting host
Route::get('/list-user-files', [ConnectionController::class, 'showuserFiles'])->name('list-user-files'); //list files



