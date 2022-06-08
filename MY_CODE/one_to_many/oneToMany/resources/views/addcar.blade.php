<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>car</h2>

  <table class="table table-striped">
    <thead>
      <tr>
          <th>ID</th>
        <th>name</th>
        {{-- <th>founded</th> --}}
        <th>description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
      <tr>
        <td>{{$car->id}}</td>
        <td>{{$car->name}}</td>
        {{-- <td>{{$car->founded}}</td> --}}
        <td>{{$car->description}}</td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>

</body>
</html>
