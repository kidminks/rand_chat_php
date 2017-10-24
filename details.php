<html>
 <head>
	<link rel="stylesheet" text="text/css" href="firstpage.css" >
 </head>
</html>
<?php
	session_start();
	echo '<p id="name">'.$_SESSION['username'].'<p>';
?>


<!-- hello -->