<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <style>
   .topnav  {
  float: right;
}
</style>
  
   <body>
   <input class="topnav" type="text" placeholder="Filter University..">

  
      <!-- <table border = 1>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Institute</th>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->institute }}</td>
         </tr>
         @endforeach
      </table> -->
      <table>
      <tr>
            <th>Requests</th>
      </tr>
      @foreach ($users as $user)
      <tr>
         <td> <a href="/list?id={{$user->id}}" >Application# {{$user->id}}</a>   </td>  
      </tr>
      @endforeach
      </table>
   
   </body>

</html>