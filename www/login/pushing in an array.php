<?php
if(isset($_POST['btn']))
{
$product=array('laptop','kindle','camera','mobile','tv');
$a=$_POST['pro'];
echo"Original array :<br>";
for($i=0;$i<count($product);$i++)
	{
				echo" ".$i+1;
				echo" ".$product[$i];
				echo"<br>";
	}
array_push($product,$a);
echo"<br>After pushung array is :<br>";
for($i=0;$i<count($product);$i++)
	{
				echo" ".$i+1;
				echo" ".$product[$i];
				echo"<br>";
	}
}
?>

<html>
<head>
	<title>pushing in an array</title>
</head>
<body>
	<form method="post">
		<label>Enter an element</label>
		<input type="text" name="pro" placeholder="enter the element you want to push">
		<input type="submit" name="btn" value="PUSH">
	</form>
</body>
<html>

