<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'show'])->name('home');
// Route::post('/add', function () { 
//     return view('add');
// })->name('add');
Route::get('/add', [HomeController::class, 'create'])->name('create');
Route::post('/add', [HomeController::class, 'store'])->name('add');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');