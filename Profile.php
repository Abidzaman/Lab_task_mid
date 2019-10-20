<?php 

session_start();


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
	<table border="1" width="25%">
		<tr> 
			<td colspan="2">profile</td>
 		</tr>
 		<tr>
 			<td>id</td>
 			<td>16-32818-3</td>
 		</tr>
 		<tr>
 			<td>name</td>
 			<td><?php echo $_SESSION['username']; ?></td>
 		</tr>
 		<tr>
 			<td>usertype</td>
 			<td>admin</td>
 		</tr>

	</table>

</body>
</html>