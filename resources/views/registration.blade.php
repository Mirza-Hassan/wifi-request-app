<html>
<head>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head

   <body>
      <form action = "/user/registration" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
         <!-- <table>
            <tr>
               <td>Name</td>
               <td><input type = "text" name = "name" /></td>
            </tr>
            <tr>
               <td>Username</td>
               <td><input type = "text" name = "username" /></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><input type = "text" name = "password" /></td>
            </tr>
            <tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
            </tr>
         </table> -->


<h1>Registration Form</h1>

  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name = "name" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputUserName1">User Name</label>
    <input type="text" class="form-control" id="exampleInputUserName1" name = "username" placeholder="Enter User Name">
  </div>

          <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "password"  placeholder="Password">
  </div>
         <button type="submit" class="btn btn-primary">Register</button>
      
      </form>




   </body>
</html>
