<?php
$v=$_POST['vowel'];
if(isset($_POST['btn']))
{	
	echo"The string after removing vowels is:<br>";
	$s=explode(" ",$v);
	$l=count($s);
	for($i=0;$i<$l;$i++)
	{
		if($s[$i]=='a'||$s[$i]=='e'||$s[$i]=='i'||$s[$i]=='o'||$s[$i]=='u')
		{
			$s[$i]='*';
		}	
	}
	echo"<br>";
	for($i=0;$i<$l;$i++)
	{
		echo"".$s[$i]; 
	}
}
?>