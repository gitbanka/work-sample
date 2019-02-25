<!DOCTYPE html>
<html>
<body>
<?php
$age=array("banka"=>"21","suman"=>"18","ram"=>"32","sambhu"=>"50");
echo"<br>";
echo"<br>";
echo"<br>";
print_r($age);
echo"<br>";
foreach ($age as $s => $s_value) 
{
	echo"".$s." is"." ".$s_value." years old";
	echo"<br>";
}
?>
</body>
</html>