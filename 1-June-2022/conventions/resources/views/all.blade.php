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
  <h2>Users Information Table</h2>

  <table class="table">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>

          @foreach ($user as $item)
<tr>

        <td>{{$item->username}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->password}}</td>

    </tr>
 @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
