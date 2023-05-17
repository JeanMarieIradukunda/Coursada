<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/courses/create', [HomeController::class, 'create'])->name('courses.create');
Route::post('/courses', [HomeController::class, 'store'])->name('courses.store');

Route::get('/courses/{id}', [HomeController::class, 'show'])->name('courses.show');
Route::get('/courses/{id}/edit', [HomeController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [HomeController::class, 'update'])->name('courses.update');

Route::delete('/courses/{id}', [HomeController::class, 'destroy'])->name('courses.destroy');