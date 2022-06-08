<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1>Edit profile</h1>
<div class="container mt-3" >
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <h2>ADD Movie</h2>
  <form action="{{route('update',['id'=>$moves->id])}}"" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter NAme of Movie" value="{{$moves->movie_name}}" name="name">
      @error('name')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" value="{{$moves->movie_description}}"   placeholder="Enter description" name="dec">
      @error('dec')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
        <label for="pwd">Generate:</label>
        <input type="number" class="form-control" value="{{$moves->movie_gener}}"  placeholder="Enter generate" name="gener">
        @error('gener')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
      </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
       Add Picture <input  type="file" class="form-group" value="{{$moves->movie_imag}}"   name="pic">
      </label>
      <img src="{{asset('storage/images/'.$moves->movie_imag)}}" alt="">

    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>




























</body>
</html>
