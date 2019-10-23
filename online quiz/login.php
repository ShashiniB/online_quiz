<?php
session_start();

$conn_error = "Could not Connected";
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'quiz';

$conn = mysqli_connect($host, $user, $pass) or die ($conn_error);
mysqli_select_db($conn,$db)or die ($conn_error);

if(isset($_POST['u_name'])){
	$u_name=$_POST['u_name'];
	$new_password=$_POST['new_password'];
	$mysql_error="fail";
	
	$result = mysqli_query($conn, "select * from quiztb where u_name='$u_name' && new_password='$new_password' ") or die("Fail to query database".$mysql_error);
	
	$row =mysqli_fetch_array($result);
	
	if($row["u_name"] == $u_name &&$row["new_password"]==$new_password){
		//echo"login success";
		header('location:quiz.php');
	}
	else{
		echo '<script type ="text/javaScript">';
		echo 'alert("Wrong username/password combination")';
		echo'</script>';
	}
}
?>

<html>
<head>
<title> Welcome to Questionaire </title>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<h1><center><font color="white"> Welcome to Questionaire..!</font></center></h1>

<style>
  body{
	  background-image:url("image1.jpg")
  }
  </style>
  
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6">

<h2>Login here</h2>

<form action="login.php" method="POST">

<div class="form-group">
<input type="text" name="u_name" class="form-control" placeholder="Username" required>
</div>

<div class="form-group">
<input type="password" name="new_password" class="form-control"placeholder="Password" required>
</div>

<input type="submit" name="submit" value= "Login" id="btn"/>
<p>Don't have an account.?<a href="register.php"><u>Register here.</u></a></p>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
	
