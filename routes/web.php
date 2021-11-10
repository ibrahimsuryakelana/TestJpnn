<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/register', [NewsController::class, 'register']);
Route::get('/news/login', [NewsController::class, 'login']);
Route::get('/news/listuser', [NewsController::class, 'listuser']);

Auth::routes();

Route::get('/home', [NewsController::class, 'index']);
