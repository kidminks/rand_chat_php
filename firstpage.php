<?php
 session_start();
 $_SESSION['username']=$_POST['username'];
?>
<html>
 <head>
	<title>Chat Room</title>
	<link rel="stylesheet" text="text/css" href="firstpage.css"/>
 </head>
	<iframe src="details.php" id="details">Sorry</iframe>
	<iframe src="message.php" id="msg">Sorry</iframe>
	<iframe src="oldmessage.php" id="omsg">Sorry</iframe>
</html>