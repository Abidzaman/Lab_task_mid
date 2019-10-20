<?php 

session_start();

	//$_SESSION['username'] = $username;





 ?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<h1>WELCOME  <?php echo $_SESSION['username']; ?></h1>

	<a href="Profile.php">Profile</a>
		<a href="sign.php">Logout</a> 


</body>
</html>