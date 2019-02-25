<?php
if(isset($_POST['btn']))
{
$product=array('laptop','kindle','camera','mobile','tv');
$a=$_POST['pro'];
	$t=0;
	for($i=0;$i<count($product);$i++)
	{
		echo"<br>";
		if(strcmp($a,$product[$i])==0)
		{
			echo" ".$a;
			echo" is found";
			echo" on location :".($i+1);
			$t=1;
			break;
		}
	}	
	if($t==0)
	{
		echo" ".$a;
		echo" is not found";
	}
}
?>

<html>
<head>
	<title>product finding</title>
</head>
<body>
	<form method="post">
		<label>Enter name of products</label>
		<input type="text" name="pro" placeholder="enter the name of a product">
		<input type="submit" name="btn" value="FIND">
	</form>
</body>
<html>

