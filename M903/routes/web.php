<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;

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


Route::get('/', [homeController::class, 'home']);

Route::get('cursos', [cursoController::class, 'index']);

Route::get('cursos/create', [cursoController::class, 'create']);

Route::get('cursos/{curso}', [cursoController::class, 'show']);