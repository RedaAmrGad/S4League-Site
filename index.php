<?php 

require 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>S4 Egypt Register </title>

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
	</head>
	<body>
		
		<form id="box" method="post" action="register.php">
		
			<h1>S4Egypt Account Registration</h1>
			<input type="text" placeholder="Username" name="username" minlength="6" autofocus />
			<input type="text" placeholder="Nickname" name="nickname" minlength="6" autofocus />
			<input type="password" placeholder="Password" name="password" minlength="6" />

			<button type="submit" name="submit" value="register">Register</button>
			
		</form>
		
	</body>

</html>
