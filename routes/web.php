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
Route::get('/reviser', function () {
    return view('welcome');
});
Route::get('/entrainer', function () {
    return view('welcome');
});
Route::get('/evolution', function () {
    return view('welcome');
});
