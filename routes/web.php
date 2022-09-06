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
Route::get('/program', function () {
    return view('program');
});
Route::get('/pembelajaran', function () {
    return view('pembelajaran');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/materipembelajaran', function () {
    return view('materipembelajaran');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/tryout', function () {
    return view('tryout');
});
Route::get('/hasiltryout', function () {
    return view('hasiltryout');
});
