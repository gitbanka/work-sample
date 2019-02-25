<?php
include("sqlconnect.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body>
		<form method="post" action="">
			<fieldset>
				<legend>Registration form</legend>
				<label>First name</label><br>
				<input type="text" name="firstname" placeholder="Jhon" required="true"><br><br>
				<label>Last name</label><br>
				<input type="text" name="lastname" placeholder="Deo" required="true"><br><br>
				<label>User Name</label><br>
				<input type="text" name="username" placeholder="jhon@abc.com" required="true"><br><br>
				<label>Password</label><br>
				<input type="password" name="password" placeholder="********" required="true"><br><br>
				<label>Roll Number</label><br>
				<input type="text" name="roll" placeholder="15/IT/83" required="true"><br><br>
				<input type="submit" name="btn" value="Register"><br><br>
				<a href="forgotpass.php">Forgot Password??</a>
			</fieldset>
		</form>
</body>
</html>



<?php
	
	if(isset($_POST['btn']))
		{
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$u=$_POST['username'];
	$p=$_POST['password'];
	$r=$_POST['roll'];
	$query1 = "INSERT INTO STUDENT VALUES ('$fn','$ln','$u','$p','$r')";
	$data1 = mysqli_query($conn,$query1);
	if($data1)
		echo"<b>register successlully</b>";
	else
		echo"User with roll number"." <b>".$r." </b>is already registered"; 
	}
	
?>