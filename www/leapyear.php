 <!DOCTYPE html>
<html>
<head>
	<title>leapyear</title>
</head>
<body>
	<form method="post">
		<input type="text" name="year" placeholder="enter year">
		<input type="submit" name="btn">
	</form>
</body>
</html>
<?php
	if(isset($_POST['btn']))
	{
		$y=$_POST['year'];
	}
	
	function leapyear_check()//function define
		{

			$GLOBALS['z']=$GLOBALS['y']%4;//use of super global array GLOBALS
			
		}
	leapyear_check();//function call
		
	if($GLOBALS['z']==0)//condition check
	
		echo "leap year";

	else
				
		echo "not a leap year";
?>