<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:employees|max:255',
          'age' => 'required',
          'contact_no' => 'required|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
        ]);

        $emp = new Employee;

        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->age = $request->age;
        $emp->contact_no = $request->contact_no;

        $emp->save();

        return redirect('form')->with('status', 'Form Data Has Been validated and insert');

    }
}
