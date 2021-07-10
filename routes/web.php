<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantonController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\UsuarioController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/provincias', [ProvinciaController::class, 'store']);
Route::post('/cantones', [CantonController::class, 'store']);
Route::post('/usuarios', [CantonController::class, 'store']);

