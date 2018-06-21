<html>
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student View</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
 <h3>Application #{{$student->id}} </h3>
    <ul>
    <li>
    {{ $student->name }}
    </li>
    <li>
    {{ $student->email }}
    </li>
    <li>
    {{ $college->name}}
    </li>
    <li>
    {{ $student->phone }}
    </li>
    </ul>
    @role('admin')
      <form action = "/approve" method = "post">
      
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <input type="radio" name="check" value="approve" id="button1" checked/> approve<br>
  <input type="radio" name="check" value="reject"  id="button2" /> reject<br><br/>

<input type="text" name="stud_username" placeholder="Username" id="username"/><br/><br/>
<input type="password" name="stud_password" placeholder="Password" id="password"/><br/><br/>

<select name="stud_option" id="select">
  <option value="1h">1 Hour</option>
  <option value="2h">2 Hour</option>
  <option value="3h">3 Hour</option>
</select>
<input type="hidden" value={{$student->id}} name="id"/>
<button type="submit">Submit</button>

      </form>
@endrole
  <!-- <hr><p>Okay Cool! Here are those two...</p>
<input type="checkbox" value="Yes" name="one">
One &nbsp;
<input type="checkbox" value="Yes" name="two">
Two -->
</div>

</body>

<script>
function show1(){
  document.getElementById('select').style.display ='none';
  document.getElementById('username').style.display ='none';document.getElementById('password').style.display ='none';
}
function show2(){
  //document.getElementById('div1').style.display = 'block';
  document.getElementById('select').style.display ='inline';
  document.getElementById('username').style.display ='inline';document.getElementById('password').style.display ='inline';
}
</script>
</html>


  <!-- <hr><p>Okay Cool! Here are those two...</p>
<input type="checkbox" value="Yes" name="one">
One &nbsp;
<input type="checkbox" value="Yes" name="two">
Two -->
</div>

</body>

</html>
