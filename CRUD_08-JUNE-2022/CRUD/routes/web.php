<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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
    return view('movies.navbar');
});
Route::get('/edit', function () {
    return view('CRUD.edit');
});
Route::get('/add',[MovieController::class,'create']);
Route::post('add',[MovieController::class,'store'])->name('add-store');
Route::get('/add',[MovieController::class,'show']);
Route::get('/movies',[MovieController::class,'show2']);

Route::get('edit/{id}',[MovieController::class,'edit'])->name('editform');
Route::post('update/{id}',[MovieController::class,'update'])->name('update');
Route::get('delete/{id}',[MovieController::class,'destroy'])->name('destroy');




