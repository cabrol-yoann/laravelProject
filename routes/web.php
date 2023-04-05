<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\SauceController;
Route::resource('shop', SauceController::class);

Route::get('/add', 'App\Http\Controllers\SauceController@addData')->name('session.add');
Route::get('/show', 'App\Http\Controllers\SauceController@showData')->name('session.show');
Route::get('/delete', 'App\Http\Controllers\SauceController@deleteData')->name('session.delete');