<html>
<head>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Website Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#registration">Registration</a>
      </li>

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





<div class="jumbotron jumbotron-fluid" id="about">
  <div class="container">
  <div class="row">
  <div class="col-lg-8 mx-auto text-center">
    <h1>About Us</h1>      
    <hr class="light my-4">
    <p>We are providing top-notch products and reliable services in the global software marketplace.We don’t do a lot of things, but whatever we do, we do it in style and according to the highest standards of software engineering. With a focus on specific state-of-the-art technologies, we only deliver products and services in the following market segments of the software industry</p>
    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
  </div>

</div>


<div class="container">
  <h2>Circle</h2>           
  <img src="images/cinqueterre.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
</div>

<div class="container-fluid">
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
</div>

   <!-- Footer -->
   <footer>
      <div class="container">
        <div class="row">
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
    </footer>

</body>
</html>