<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;

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

Route::get('/test', [CustomController::class, 'index']);
Route::get('/sumInterger', [CustomController::class, 'sumInterger']);
Route::get('/sumFixValue', [CustomController::class, 'sumFixValue']);
Route::get('/subtract', [CustomController::class, 'subtract']);
