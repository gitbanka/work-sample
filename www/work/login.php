<?php

if(isset($_POST['btn']))
{
	include("connect.php");
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$g=$_POST['gender'];
	$e=$_POST['email'];
	$ce=$_POST['cemail'];
	$p=$_POST['password'];
	$rep=$_POST['repassword'];
	$code=$_POST['code'];
	$pn=$_POST['phoneno'];
	$phoneno=$code.$pn;

	$query="INSERT INTO data VALUES ('$fn','$ln','$g','$e','$p','$phoneno')";
	$r=mysqli_query($conn,$query);
	if($r)
		echo"<b>Successfully registered</b>";
	else
		echo "<b>Registration failed</b>";
}

?>