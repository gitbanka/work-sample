<?php
	
	if(isset($_POST['btn']))
	{
		$a=$_POST['ip'];
		$b=$_POST['username'];
		$c=$_POST['password'];
		$d=$_POST['dbname'];

		$conn=mysqli_connect($a,$b,$c,$d);
		if($conn)
			echo"<h1>connection ok</h1>";
		else
			echo"<h2>connection failed</h2>";
		
	}

?>