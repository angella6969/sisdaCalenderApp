<?php

use App\Http\Controllers\calenderController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\userController;
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
Route::resource('/calender', calenderController::class);

Route::get('/login', [userController::class,'index']);
Route::get('/events', [EventController::class,'index']);
Route::get('/events/list', [EventController::class,'listEvent'])->name('events.list');