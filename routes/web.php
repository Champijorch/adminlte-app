<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanEstudioController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\HorarioController;

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

Route::resource('planes', PlanEstudioController::class);

Route::resource('alumnos', AlumnoController::class);

Route::resource('periodos', PeriodoController::class);

Route::resource('cursos', CursoController::class);

Route::resource('maestros', MaestroController::class);

Route::resource('horarios', HorarioController::class);
