<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;
use App\Http\Controllers\modelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('addcar');
// });


// Route::get('addcar',[carController::class,'create']);
// Route::post('caradd',[carController::class,'store'])->name('caradd');

Route::get('carsmodel',[carController::class,'show']);
Route::get('cars',[modelController::class,'show']);
