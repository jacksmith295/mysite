<?php

require_once "config.php";

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $sql = "insert into public.user(username,fname, sname, pwd)values('".$_POST['username']."','".$_POST['fname']."','".$_POST['sname']."','".md5($_POST['pwd'])."')";
  $ret = pg_query($dbconn, $sql);
  if($ret){
      
          echo "Data saved Successfully";
  }else{
      
          echo "Soething Went Wrong";
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
    <input type="email" class="form-control" id="sname" placeholder="Enter surname" name="sname">
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
