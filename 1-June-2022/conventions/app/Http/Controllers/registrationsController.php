<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\registration;

class registrationsController extends Controller
{
   public function register(){
    DB::table('registrat')->insert([
        'username'=>'Mohammad',
        'email'=>'Mohammad@gmail.com',
        'password' =>'1****ddd64'
    ]);
   }
   public function showsengle($id){
    // $name = DB::table('registration')->where("id", "$id");
    $user=registration::all()->where("id", "$id");
       return view('single',compact('user'));
   }
   public function show(){
    // $name = DB::table('registration')->where("id", "$id");
    $user=registration::all();
       return view('all',compact('user'));
   }
}
