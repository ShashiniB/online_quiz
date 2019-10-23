<?php
  
  $conn_error="could not connected";
  $host='localhost';
  $user='root';
  $pass='';
  $db='quiz';

  $conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
  //echo "connected";
  mysqli_select_db($conn,$db) or die ($conn_error);
 // echo "connected";
  ?>
<html>
<head>
	<title>Welcome to Questionaire</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1><center>Your result..!</center></h1>
 
   
   <style>
  body{
	  background-image:url("image5.jpg")
  }
  </style>

	
<?php 

$result = 0;
if (isset($_POST['submit'])) {
if (!empty($_POST['quizcheck'])) {

?>
	

		<?php 
			$selected = $_POST['quizcheck'];
			$q = "select * from question";
			$query = mysqli_query($conn, $q);
			$i = 1;
			while($rows = mysqli_fetch_array($query)) {

			$checked = $rows['ansID'] == $selected[$i];
			if ($checked) {
			$result++;
			}else{

				 }
			 		$i++;
					
				}
		?>


		<?php 
			echo "<h1>Your score =  ".$result;
			echo "<br>";
			echo "<br>";
			}
			else{
				echo "<h1>Please Select Atleast One Option.</h1>";
				}
				 
				}
				?>

	<form action="login.php" method="POST">

<div class="button">
<input type="submit" name="submit" value= "Logout" id="btn"/>
<a href="login.php"></a>

</form>
</div>
</body>
</html>