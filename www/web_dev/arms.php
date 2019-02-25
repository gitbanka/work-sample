<?php
$n=$_POST['value'];
if(isset($_POST['btn']))
{	
	$d=0;
	$b=$n;
	while($n>0)
	{
		$a=$n%10;
		$n=$n/10;
		$d=$d+($a*$a*$a);
	}
	if($d==$b)
		echo"armstrang number";
	else
		echo"not an armstrang number";

}
?>