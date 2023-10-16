<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\TecherController;

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

Route::get('/ajax',[TecherController::class,'index']);
Route::get('/teacher/all',[TecherController::class,'allData']);
