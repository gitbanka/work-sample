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
				<legend>Forgot Password</legend>
				<label>User Name</label><br>
				<input type="text" name="username" placeholder="jhon@abc.com" required="true"><br><br>
				<input type="submit" name="btn" value="Get Password"><br><br>
				<a href="forgotuser.php">Forgot Username??</a><br>
				<a href="demosignup.php">Home</a>
			</fieldset>
		</form>
</body>
</html>



<?php
	
	if(isset($_POST['btn']))
		{
	$u=$_POST['username'];
	$query2 = "SELECT password FROM STUDENT WHERE username='$u'";
	$data2 = mysqli_query($conn,$query2);
	$result2 = mysqli_fetch_assoc($data2);
	if($result2)
		echo"<b>your password is:".$result2['password']."</b>";
	else
		echo"<b>".$u." </b>Is not yet registered"; 
	}
	
?>