<?php

use App\Http\Controllers\App\ProductionController;
use App\Http\Controllers\App\SubModuleController;
use App\Http\Controllers\App\ModuleController;
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

Route::resources([
    'productions' => ProductionController::class,
    'modules' => ModuleController::class,
    'submodules' => SubModuleController::class,
]);

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/dashboard', function () {
    return view('app.dashboard.index');
});

Route::get('/submodules', function () {
    return view('app.sub-modules.index');
});
