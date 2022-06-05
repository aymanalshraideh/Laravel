<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\product;

class productsController extends Controller
{
    public function showproducts(){
        return view('products',['id'=> '123']);
    }

    public function listProducts(){
        $products=product::all();
        return view('products',compact('products'));
    }


    public function create(){
     DB::table('products')->insert([
         'name'=>'Milk',
         'description'=>'Fresh Milk',
         'price'=>'10'
     ]);
    }
}
