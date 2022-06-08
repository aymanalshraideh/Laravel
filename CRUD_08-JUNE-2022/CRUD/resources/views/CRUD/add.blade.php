@extends('CRUD.layoutBP')

@section('content')

<a href="movies"><button type="button" class="btn btn-primary"> Show page</button></a>

<div class="container mt-3" >
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <h2>ADD Movie</h2>
  <form action="{{ route('add-store') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter NAme of Movie" name="name">
      @error('name')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter description" name="dec">
      @error('dec')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
        <label for="pwd">Generate:</label>
        <input type="number" class="form-control"  placeholder="Enter generate" name="gener">
        @error('gener')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
      </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
       Add Picture <input  type="file" class="form-group"   name="pic">
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>

<div class="container mt-3">

    <table class="table table-bordered table-sm">
      <thead>

        <tr>
          <th>Image</th>
          <th>Movie name</th>
          <th>Movie description</th>
          <th>Movie generet</th>
          <th>add date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($moves as $item)




        <tr>
          <td><img src="{{asset('storage/images/'.$item->movie_imag)}}" alt="" width="200px"></td>
          <td>{{$item->movie_name}}</td>
          <td>{{$item->movie_description}}</td>
          <td>{{$item->movie_gener}}</td>
          <td>{{$item->created_at}}</td>
          <td>

            <a href="{{route('editform',['id'=>$item->id])}}"><button type="button" class="btn btn-primary"> Edit</button></a>
            <a href="{{route('destroy',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
           </td>

        </tr>
@endforeach
      </tbody>
    </table>
  </div>
@endsection
