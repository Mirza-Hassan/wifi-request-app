
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- <div class="container">
  <h2>University Table</h2>
  <button type="button" class="btn btn-primary">Add University</button> <br><br>
  <ul class="list-group">
    <li class="list-group-item"><td>NEDUET</td></li>
    <li class="list-group-item"><td>FAST</td></li>
    <li class="list-group-item"><td>KU</td></li>
  </ul>
</div> -->

<div class="container">
  <h2>University Table</h2>
    <!-- <button type="button" class="btn btn-primary">Add University</button> <br><br> -->
    <ul class="list-group">
    @foreach ($users as $user)
    <li class="list-group-item"><td>{{ $user->name }}</td></li>
    @endforeach
    </ul>

    
 
  <!-- <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
         </tr>
         @endforeach
      </table> -->
      </div>
</body>
</html>