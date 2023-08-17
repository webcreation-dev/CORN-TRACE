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
    return view('landing.index');
});
Route::get('/dashboard', function () {
    // return view('app.dashboard.index');
});
Route::get('/modules', function () {
    return view('app.modules.index');
});
Route::get('/submodules', function () {
    return view('app.sub-modules.index');
});
