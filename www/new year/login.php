<!DOCTYPE html>
<html>
<head>
	<title>

	</title>
</head>
<body>
    <form method="post">
    <b>
    	login to your account
	</b>
	<br><br>
  <input type="text" name="username" placeholder="username" required="true">
    <br><br>
  <input type="password" name="password" placeholder="password" required="true">
  	<br><br>	
  <input type="submit" name="btn" value="Login">			
	</form>
</body>
</html>
<?php
	
	if(isset($_POST['btn']))	
	{

		function CheckLogin($u,$p) // body Define 
		{
			$f=0;
			$r=strcmp($u,"admin");
			$r1=strcmp($p,"admin");
			if($r==0&&$r1==0)
				$f=1;
			else
				$f=0;
			return($f);
		}
		$res=CheckLogin($_POST['username'],$_POST['password']); // function call with params 
		session_start();

		if($res==1)
		{
		$_SESSION['U']=$_POST['username'];	 // set the session value
		header('Location:HomePage.php');
		}
		if($res==0)
		{
			echo "<b>";
			echo "Invalid Login";
			echo "</b>";
		}

	}




?>