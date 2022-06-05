<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registrationController extends Controller
{
    public function indexform(){
        return view('registration');
    }

    public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|password',
    ]);
       $reg=new User();
       $reg->name=$request->name;
       $reg->password=$request->password;
       $reg->email=$request->email;
       $reg->save();


       return redirect('registration');
    }
  }
