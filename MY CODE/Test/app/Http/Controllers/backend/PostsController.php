<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function backend(){
        return "Hi from BackEnd ";
    }

    public function frontend(){
        return "Hi from FrontEnd ";
    }
    public function hello(){
    $name = "Ayman";
    $age=25;

        return view('frontend.hello',compact('name','age'));
    }
    public function main(){
        return view('backend.layout.main');
    }
}
