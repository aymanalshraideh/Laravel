<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PostsController;
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
    return view('posts');
});
Route::get('/posts/{post}', function ($slug) {
    $path=__DIR__ . "/../resources/posts/{$slug}.html";

if(! file_exists($path)){
return redirect('/');
}

    $post=file_get_contents($path);
    return view('post',[
        'post' =>$post
    ]);
});

Route::get('/frontend',[PostsController::class,'frontend']);
Route::get('/hello',[PostsController::class,'hello']);
