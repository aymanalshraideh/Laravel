<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registrationControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {return view('registration');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required',
        ]);
        // dd($request->all());
        if($request->password==$request->repassword){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password
        ]);
        return redirect('registration')->with('status', 'Form Data Has Been validated and insert');
    }else{
        return redirect('registration')->with('password', 'Please enter a same password in Repeat password');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users=User::all();
        return view('userinformation',compact('users'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find($id);
        return view('edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= $request->password;
        $users->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::find($id);
        $users->destroy($id);
        return redirect('users');
    }
}
