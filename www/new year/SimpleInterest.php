<!DOCTYPE html>
<html>
<head>
	<title>simple interest</title>
</head>
<body>
	<form method="post">
		<b>Calculation Of Simple Interest</b>
		<br><br>
		<input type="text" name="p" placeholder="Principle">
		<br><br>
		<input type="text" name="r" placeholder="Rate Of Interest">
		<br><br>
		<input type="text" name="t" placeholder="Time in Years">
		<br><br>
		<input type="submit" name="btn" value="Calculate">
	</form>
</body>
</html>

<?php
if(isset($_POST['btn']))
	{
		$f=0;
		$p=$_POST['p'];
		$r=$_POST['r'];
		$t=$_POST['t'];
		function CalculateSi($x,$y,$z)
		{
			$pt=$x;
			$si=($x*$y*$z)/100;
			return($si);
		}
		function CalculateAmt($a,$b)
		{
			$amt=$b+$a;
			return($amt);
		}
		$si=CalculateSi($p,$r,$t);
		$temp=CalculateAmt($si,$p);
		echo"<br>".$temp;
		session_start();
		if($f==0)
		{
			$_SESSION['amt']=$temp;
			header('Location:answer.php');
		}
		else
			break;
	}
?>














