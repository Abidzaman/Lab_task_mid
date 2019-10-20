<?php 

session_start();



if (isset($_POST['submit'])) {



if ($_POST['username']==$_POST['password'] )

{
$username=$_POST['username'];	
$_SESSION['username'] = $username;
header('location: admin.php');

}
else
{
	echo "password doent match";
}

}
else
{
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
</head>
<body>
	<form action="" method="POST" >
		<fieldset>
			<legend>
				LOGIN
			</legend>
			<table>
                   <tr>
                   	<td>Username</td>
                   </tr>
                   <tr>
                   	<td><input type="text" name="username"></td>
                   </tr>
                   <tr>
                   	<td>
                   		Pasword
                   	</td>
                   </tr>
                   <tr>
                   	<td>
                   		<input type="password" name="password">
                   	</td>
                   </tr>
                   
                   <tr>
                   	<td><input type="submit" name="submit"></td>
                   </tr>
                   <tr>
                   	<td><a href="registration.php">register</a></td>
                   </tr>
    			</table>
			
		</fieldset>
	</form>

</body>
</html>
<?php 
}
 ?>