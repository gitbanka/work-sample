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
				<legend>Forgot Username</legend>
				<label>First name</label><br>
				<input type="text" name="firstname" placeholder="Jhon" required="true"><br><br>
				<label>Last name</label><br>
				<input type="text" name="lastname" placeholder="Deo" required="true"><br><br>
				<label>Roll Number</label><br>
				<input type="text" name="roll" placeholder="15/IT/83" required="true"><br><br>
				<input type="submit" name="btn" value="Get Username"><br><br>
				<a href="demosignup.php">Home</a><br>
				<a href="forgotpass.php">Back</a>

			</fieldset>
		</form>
</body>
</html>



<?php
	
	if(isset($_POST['btn']))
		{
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$r=$_POST['roll'];
	$query3 = "SELECT username FROM student WHERE fname='$fn' AND lname='$ln' AND roll='$r'";
	$data3 = mysqli_query($conn,$query3);
	$result3 = mysqli_fetch_assoc($data3);
	if($result3)
		echo"Your Username is: <b>".$result3['username']."</b>";
	else
		echo"<b>Invalid combination of Name and roll.</b>"; 
	}
	
?>