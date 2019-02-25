<?php
$lower=$_POST['lower'];
$upper=$_POST['upper'];
if(isset($_POST['btn']))
{	
	echo"The Prime Numbers Are:<br>";
	for($i=$lower;$i<=$upper;$i++)
	{
		$flag=0;
		for($j=2;$j<=$i/2;$j++)
		{
			if($i%$j==0)
			{
				$flag=1;
				$j=$i/2;
			}
		}
		if($flag==0)
		{
			echo"".$i." ,";
		}
	}
}
?>