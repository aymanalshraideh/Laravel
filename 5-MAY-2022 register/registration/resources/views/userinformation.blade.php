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
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <table class="table table-striped">
    <thead>
      <tr>
          <th>ID</th>
        <th>name</th>
        <th>Email</th>
        <th>password</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)


      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->name}}</td>
        <td>
         <a href="{{route('editform',['id'=>$user->id])}}"><button type="button" class="btn btn-primary"> Edit</button></a>
         <a href="{{route('destroy',['id'=>$user->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
 @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
