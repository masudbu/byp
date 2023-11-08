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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('myproject');
Route::get('/project/details/{id}', [App\Http\Controllers\ProjectController::class, 'projectView']);
Route::get('/exprience', [App\Http\Controllers\ExprienceController::class, 'index'])->name('myexprience');
