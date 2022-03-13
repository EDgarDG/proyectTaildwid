<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerFormHistCli\ControllerMenu;

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

Route::get('/formHistoryCli', [ControllerMenu::class, 'formaHisClinico']);
Route::get('/formHistoryCli2', [ControllerMenu::class, 'formHistory2']);
Route::get('/formHistoryCli2', [ControllerMenu::class, 'formHistory2']);
