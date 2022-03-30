<?php

$connection_string = "postgresql://database:udrYG95AL1O0Ypwl@app-c6f3a3d0-e486-40b9-b3c7-40ed72868648-do-user-11242026-0.b.db.ondigitalocean.com:25060/database?sslmode=require";
$dbconn = pg_connect($connection_string);

if(isset($_POST['submit'])&&!empty($_POST['submit'])){

  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $pwd = $_POST['pwd'];
    
  $sql = "INSERT INTO user (username,fname, sname, pwd)VALUES($username, $fname, $sname, $pwd)";
  $ret = pg_query($dbconn, $sql);
  if($ret){
      
          echo "Data saved Successfully";
  }else{
      
          echo "Something Went Wrong";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP PostgreSQL Registration & Login Example </title>
<meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Register Here </h2>
<form method="post">

  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
  </div>

  <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
  </div>
  
  <div class="form-group">
    <label for="sname">Surname:</label>
    <input type="text" class="form-control" id="sname" placeholder="Enter surname" name="sname">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
  </div>
   
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</body>
</html>
