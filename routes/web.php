<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [StartController::class, 'index']);
Route::get('/categoryBooks', [StartController::class, 'categoryBooks']);

Route::group(['middleware' => 'auth2', 'namespace' => 'App\Http\Controller'], function () {
    Route::get('/admin', [StartController::class, 'categoryBooks']);
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
