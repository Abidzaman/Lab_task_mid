<?php 

session_start();
if (isset($_POST['submit'])) {

	if ($_POST['password']== $_POST['cpassword']) {
		if($_POST['password']=null || $_POST['cpassword']=null)
		{
	

$name=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$id=$_POST['id'];
$radio=$_POST['admin'];

$myfile = fopen('abc.txt','a');
fwrite($myfile,$id."\n");
fwrite($myfile,$name."\n");
fwrite($myfile,$password."\n");
fwrite($myfile,$radio."\n");



fclose($myfile);
}
}
else{
	echo "Passwword doesnt match ";
}


}
else
{
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="" method="POST">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Passwword</td>
					<td><input type="Passwword" name="password"></td>
				</tr>
				<tr>
					<td>Confirm password</td>
					<td><input type="password" name="cpassword"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
					<tr>
						<td>user type</td>
						<td>___________________________________________________________________________________________________________</td>
					</tr>
					<tr>
						<td><input type="radio" name="admin" value="User">USER <input type="radio" name="admin" value="Admin">ADMIN</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"> <a href="sign.php">SIGNIN</a></td>
					</tr>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>
<?php 

}
 ?>