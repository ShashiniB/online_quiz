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
<head><title>Welcome to Questionaire</title>
<link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
	<h1><center><font color="white">Start your round..!</font></center></h1>
 
   
   <style>
  body{
	  background-image:url("image3.jpg")
  }
  </style>

</body></html>




<form action="correct.php" method="POST">
 <?php

	$q = "SELECT * FROM question ORDER BY rand() limit 5"; 
	$x=1;
	$query = mysqli_query($conn,$q);
	while ($rows = mysqli_fetch_array($query)) {
		?>

	<br><?php echo $x;?>
	
   <?php echo $rows['question'] ?>
	
	<?php
	$q = "SELECT * FROM answer WHERE ansID='{$rows['qID']}' order by rand()"; 
	$query1 = mysqli_query($conn, $q);
	$x++;
	while ($rows = mysqli_fetch_array($query1)) { 
		?>
		<div class="radio">
			<input type="radio" name="quizcheck[<?php echo $rows['ansID']; ?>]" value="<?php echo $rows['aID']; ?>">
			<?php echo $rows['answer']; ?>
		</div>

	<?php  
} 
}
 ?>
 </div>

 <div class="butten">
 <input  type="submit" name="submit" value="Submit" >
  <a href="correct.php">

</div>

 
 </form>
 