<?php

use App\Http\Controllers\registrationControll;
use Illuminate\Support\Facades\Route;

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

// Route::get('form', [FormController::class, 'index']);
// Route::post('store-form', [FormController::class, 'store']);

Route::get('registration',[registrationControll::class,'create']);
Route::post('store-form',[registrationControll::class,'store'])->name('store-form');
Route::get('users',[registrationControll::class,'show']);
Route::get('edit/{id}',[registrationControll::class,'edit'])->name('editform');
Route::post('update/{id}',[registrationControll::class,'update'])->name('update');
Route::get('delete/{id}',[registrationControll::class,'destroy'])->name('destroy');

