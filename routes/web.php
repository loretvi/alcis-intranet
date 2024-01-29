<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
Route::get('/archivos', [IndexController::class, 'archivos'])->name('archivos');
Route::get('/usuarios', [IndexController::class, 'usuarios'])->name('usuarios');
Route::get('/grupos', [IndexController::class, 'grupos'])->name('grupos');

