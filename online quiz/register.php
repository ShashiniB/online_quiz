<?php
$conn_error = "Could not Connected";
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'quiz';

$conn = mysqli_connect($host, $user, $pass) or die ($conn_error);
//echo "Connected"
mysqli_select_db($conn,$db)or die ($conn_error);
//echo "Connected";

if(isset($_POST['reg_btn'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$u_name=$_POST['u_name'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	
	$s="select * from quiztb where u_name='$u_name'";
	$result=mysqli_query($conn,$s);
	$num=mysqli_num_rows($result);
	
	if($num == 1){
		echo"Username Already taken";
	}
	
	elseif($new_password != $confirm_password){
		echo "your password do not match";
	}
	else{
	
$query = "insert into quiztb(first_name, last_name, u_name, new_password, confirm_password) values('$first_name', '$last_name', '$u_name', '$new_password', '$confirm_password')";

    mysqli_query($conn,$query);
	//echo "You are Successfully";
	header('location:quiz.php');
	
}
}
?>

<html>
<head>
<title> Welcome to Questionaire </title>

<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
  body{
	  background-image:url("image2.jpg")
  }
  </style>

<h1><center><font color="white"> Welcome to Questionaire..!</font></center></h1>

<<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6">

<h2><b>Regiter here</b></h2>
<form method="POST" action="register.php">

<div class="form-group">
<input type="text" name="first_name" class="form-control" placeholder="First Name" required />
</div>

<div class="form-group">
<input type="text" name="last_name" class="form-control" placeholder="Last Name" required />
</div>

<div class="form-group">
<input type="text" name="u_name" class="form-control" placeholder="User Name" required />
</div>

<div class="form-group">
<input type="password" name="new_password" class="form-control" placeholder="Password" required />
</div>

<div class="form-group">
<input type="password" name="confirm_password" class="form-control"  placeholder="Confirm password" required />
</div>


<input type="submit" name="reg_btn" value="REGISTER" />
</div>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
