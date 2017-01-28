<?php
  session_start();
  if(ISSET($_POST['message'])){	
	$link = mysqli_connect('localhost','id349939_a8314628_mayank','Jai@hind1','id349939_a8314628_forum');
	if(!$link){
		die('could not connect'.mysqli_error());
	}
	$message=mysqli_real_escape_string($link,$_POST['message']);
	$username=mysqli_real_escape_string($link,$_SESSION['username']);
	$query = "INSERT INTO Message (username,message) VALUE ('$username','$message')";
	$result= mysqli_query($link,$query);
	mysqli_close($link);
  }
  
  echo '<form action="message.php" method="POST">';
  echo '<textarea name="message" rows="3" cols="50"></textarea>';
  echo '<input type="submit" name="send"/>';
  echo '</form>';
?>