<html>
<head>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head

<body>

      <form action = "/create" method = "post">
      
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<h1>Application Page</h1>

  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name = "stud_name" placeholder="Enter Name">
  </div>

      <div class="form-group">
    <label for="exampleInputPhone1">Phone No</label>
    <input type="numer" class="form-control" id="exampleInputPhone1" name = "stud_phone"  placeholder="Enter Phone No">
  </div>


      <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "stud_email"  placeholder="Enter Email">
  </div>


  <div class="form-group">
    <label for="exampleInputInstitute1">Institute</label> <br>
    <!-- <input type="text" class="form-control" id="exampleInputInstitute1" name = "stud_institute" placeholder="Enter Institute"> -->
<select  name="college_id">
  @foreach ($college as $c)
  <option value="{{$c->id}}">{{$c->name}}</option>
  @endforeach
</select>
  </div>

      <!-- <br><br> -->
      <h3>Complaint</h3>
         <textarea rows="4" cols="50" name = "complaint" placeholder="your complaint here" required>
</textarea>
<br><br>
<button type="submit" class="btn btn-primary">Register</button>

      </form>
      
 <!-- <a href="{{ url('complaint') }}" >Complaint</a> -->
</div>


   <!-- <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body> -->

</body>
</html>