<?php

use App\Http\Controllers\Admin\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BookController::class,'index'])->name('index');
Route::get('/add', [BookController::class,'add'])->name('add');
Route::post('/create', [BookController::class,'create'])->name('create');
Route::get('/delete/{id}', [BookController::class,'delete'])->name('delete');
Route::get('/editform/{id}', [BookController::class,'editform'])->name('editform');
Route::put('/edit/{id}', [BookController::class,'edit'])->name('edit');
