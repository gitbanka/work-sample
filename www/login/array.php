<?php

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
echo"Before Sorting:";
echo"<br>";
echo"<br>";
$cities=array($a,$b,$c,$d,$e,$f);
	for($i=0;$i<count($cities);$i++)
	{
			 	echo" ".$i+1;
				echo" ".$cities[$i];
				echo"<br>";
	}

sort($cities);
echo"<br>";
echo"<br>";
echo"<br>";
echo"After sorting:";
echo"<br>";
echo"<br>";
for($i=0;$i<count($cities);$i++)
	{
				echo" ".$i+1;
				echo" ".$cities[$i];
				echo"<br>";
	}

?>