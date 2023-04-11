<?php

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
Route::get('/secondpage', function () {
    return view('secondpage');
});
Route::put('/information', function () {
    return 'informationn';
});
Route::match(['get','put','patch'],'/3rdpage', function () {
    return view('3rdpage');
});