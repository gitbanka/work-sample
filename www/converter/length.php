<!DOCTYPE html>
<html>
<head>
	<title>converter</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<form method="post">
		<input type="text" name="iv" placeholder="input value">
		<br><br><br>
		<select name="io">
			<option value="select input">select input</option>
			<option value="mili meter">mili meter</option>
			<option value="centi meter">centi meter</option>
		  	<option value="deci meter">deci meter</option>
			<option value="meter">meter</option>
		  	<option value="deca meter">deca meter</option>
			<option value="hecto meter">hecto meter</option>
			<option value="kilo meter">kilo meter</option>
		</select>
		<select name="oo">
			<option value="select input">select input</option>
			<option value="mili meter">mili meter</option>
			<option value="centi meter">centi meter</option>
		  	<option value="deci meter">deci meter</option>
			<option value="meter">meter</option>
		  	<option value="deca meter">deca meter</option>
			<option value="hecto meter">hecto meter</option>
			<option value="kilo meter">kilo meter</option>
		</select>
			<br><br>
		<input type="submit" name="btn" value="CONVERT">
	</form> 
</div>
</body>
</html>

<?php
	
	
	if(isset($_POST['btn']))
	{
		$iv=$_POST['iv'];
		$io=$_POST['io'];
		$oo=$_POST['oo'];
		 echo" <br>".$io;
		 echo" ==>>"." ".$oo;
		 echo" convertion<br>";






		if(strcmp("kilo meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deca meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deci meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("centi meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		else if(strcmp("mili meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	





		else if(strcmp("kilo meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deca meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deci meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("centi meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		




			else if(strcmp("kilo meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deca meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deci meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





			else if(strcmp("kilo meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deca meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}





			else if(strcmp("kilo meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deca meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		






			else if(strcmp("kilo meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





		else if(strcmp("mili meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	































		else if(strcmp("mili meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("mili meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("mili meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("mili meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("mili meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("mili meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		else if(strcmp("mili meter",$io)==0&&strcmp("mili meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	





		else if(strcmp("centi meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("centi meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("centi meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("centi meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("centi meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("centi meter",$io)==0&&strcmp("centi meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
	








		else if(strcmp("deci meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("deci meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deci meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("deci meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deci meter",$io)==0&&strcmp("deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		







		else if(strcmp("meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("meter",$io)==0&&strcmp("meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
	







		else if(strcmp("deca meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("deca meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("deca meter",$io)==0&&strcmp("deca meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		







		else if(strcmp("hecto meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("hecto meter",$io)==0&&strcmp("hecto meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





		else if(strcmp("kilo meter",$io)==0&&strcmp("kilo meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}

	

		
	}


?>