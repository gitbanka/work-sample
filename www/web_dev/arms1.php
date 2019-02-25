<?php
$lower=$_POST['lower'];
$upper=$_POST['upper'];

if(isset($_POST['btn']))
{	
	echo"The Armstrang Numbers are:<br>";
	for($i=$lower;$i<=$upper;$i++)
	{
		$d=0;
		$c=$i;
		while($c>0)
		{
			$a=$c%10;
			$c=$c/10;
			$d=$d+($a*$a*$a);
		}
		if($d==$i)
		{
			echo"<br>";
			echo"".$i;
		}
	}
}
?>

