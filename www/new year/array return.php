<!DOCTYPE html>
<html>
<head>
	<title>function returning array</title>
</head>
<body>
	<b>Enter array</b>
	<form method="post">
		<input type="text" name="c1"><br><br>
		<input type="text" name="c2"><br><br>
		<input type="text" name="c3"><br><br>
		<input type="text" name="c4"><br><br>
		<input type="text" name="c5"><br><br>
		<input type="submit" name="btn" value="Convert">
	</form>
</body>
</html>

<?php
	
	if(isset($_POST['btn']))
	{
		$c1=$_POST['c1'];
		$c2=$_POST['c2'];
		$c3=$_POST['c3'];
		$c4=$_POST['c4'];
		$c5=$_POST['c5'];

		function convert_to_array($a,$b,$c,$d,$e)
		{
			$z=array($a,$b,$c,$d,$e);
			return($z);
		}

		$y=convert_to_array($c1,$c2,$c3,$c4,$c5);
		for($i=0;$i<count($y);$i++)
		{
			echo" ".$y[$i];
		}


	}


?>