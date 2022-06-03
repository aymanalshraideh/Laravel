<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationsController;

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

Route::get('/insert',[registrationsController::class,'register']);


Route::get('/all', [registrationsController::class,'show']);

Route::get('/single/{id}', [registrationsController::class,'showsengle']);
