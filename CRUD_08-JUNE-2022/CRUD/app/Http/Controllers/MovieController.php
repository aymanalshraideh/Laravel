<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'name' =>'required',
           'dec'=>'required',
           'gener'=>'required',

       ]);
    //    dd($request) ;
    $image = $request->file('pic')->storeAs('public/images' , $request->pic->getClientOriginalName());
    // $path=   $request->file('pic')->store('public/images');

    // if($request->hasFile('pic')){
    //     $file = $request->pic;
    //     $new_file=time();
    // }
        Movie::create([
          'movie_name'=>$request->name,
          'movie_description'=>$request->dec,
          'movie_gener'=>$request->gener,

          'movie_imag'=>$request->pic->getClientOriginalName()
        ]);
        return redirect('add')->with('status', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $moves=Movie::all();
        return view('CRUD.add', compact('moves'));
    }
    public function show2(Movie $movie)
    {
        $moves=Movie::all();
        return view('layout.movies', compact('moves'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moves=Movie::find($id);;
        return view('CRUD.edit', compact('moves'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('pic')->storeAs('public/images' , $request->pic->getClientOriginalName());

        $moves=Movie::find($id);
        $moves->movie_name= $request->name;
        $moves->movie_description= $request->dec;
        $moves->movie_gener= $request->gener;
        $moves->movie_imag=$request->pic->getClientOriginalName();
        $moves->save();
        return redirect('add');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie=Movie::find($id);
        $movie->destroy($id);
        return redirect('add');
    }
}
