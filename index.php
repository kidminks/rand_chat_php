<!DOCTYPE html>
<html>
	<head>
		<title> Let's Chat </title>
		<link rel="stylesheet" type="text/css"
				href="index.css"/>
				<script src="index.js"></script>
	</head>
	<?php
	 session_start();
	?>
	<body>
		<div id="log_details">
			<div id="cred">
				<h4 id="log_head">Your Info</h4>
				<form action="firstpage.php" method="POST">
				<label class="info">User_name :-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="username" placeholder="Nick Name" id="user_name" required/></br></br></br>
				<label class="info">Gender :-</label></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="male" id="male" checked/>
				<label class="gen">male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="female" id="female"/>
				<label class="gen">female</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="anonymous" id="others"/>
				<label class="gen">anonynous</label></br></br></br></br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" id="submit"/>
				</form>
			</div>
		</div>
	</body>
</html>