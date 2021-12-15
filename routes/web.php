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

Route::get('product', 'App\Http\Controllers\Product@return');

Route::get('product/{id}', 'App\Http\Controllers\Product@return');

Route::post('product', 'App\Http\Controllers\Product@return');

Route::patch('product/{id}', 'App\Http\Controllers\Product@edit');

Route::delete('product/{id}', 'App\Http\Controllers\Product@delete');

Route::get('user', 'App\Http\Controllers\User@return');

Route::get('user/{id}', 'App\Http\Controllers\User@return');

Route::post('user', 'App\Http\Controllers\User@return');

Route::patch('user/{id}', 'App\Http\Controllers\User@edit');

Route::delete('user/{id}', 'App\Http\Controllers\User@delete');

Route::get('purchase', 'App\Http\Controllers\@return');

Route::get('purchase/{id}', 'App\Http\Controllers\Purchase@return');

Route::get('user/{id}/purchase/{buyld}', 'App\Http\Controllers\Purchase@return');

Route::post('purchase', 'App\Http\Controllers\Purchase@return');

Route::patch('purchase/{id}', 'App\Http\Controllers\Purchase@edit');

Route::delete('purchase/{id}', 'App\Http\Controllers\Purchase@delete');


