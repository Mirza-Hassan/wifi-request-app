<html>
</<!DOCTYPE html>
<html>
<head>
</head>
<body>

           <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->description }}</td>
         </tr>
         @endforeach
      </table>
</body>

</html>