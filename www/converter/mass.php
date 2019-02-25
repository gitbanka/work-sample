<!DOCTYPE html>
<html>
<head>
	<title>Area</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>CONVERTER</h1>
	<div class="container">
<form method="post">
	<h3>MASS:</h3>
	<br>

		<select class="input" name="io">
			<option value="Select Input">Select Input</option>
			<option value="Mili Gram">Mili Gram</option>
			<option value="Centi Gram">Centi Gram</option>
		  	<option value="Deci Gram">Deci Gram</option>
			<option value="Gram">Gram</option>
		  	<option value="Deca Gram">Deca Gram</option>
			<option value="Hecto Gram">Hecto Gram</option>
			<option value="Kilo Gram">Kilo Gram</option>
		</select>
		<select class="output" name="oo">
			<option value="Select Output">select Output</option>
			<option value="Mili Gram">Mili Gram</option>
			<option value="Centi Gram">Centi Gram</option>
		  	<option value="Deci Gram">Deci Gram</option>
			<option value="Gram">Gram</option>
		  	<option value="Deca Gram">Deca Gram</option>
			<option value="Hecto Gram">Hecto Gram</option>
			<option value="Kilo Gram">Kilo Gram</option>
		</select>

<br><br><br>

		<input type="text" class="input" name="iv" placeholder="Input Value">

		<br><br><br>

	<center>
		<input class="btn" value="CONVERT" type="submit" name="btn">
		<input type="button" class="btn" name="home" value="HOME" onclick="location.href='converter.html'">
	</center>
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
	

		 echo"<head>";
		 echo"<link rel='styleshet' href='style.css'>";
		 echo"<head>";
		 echo"<body>";
		 echo"<div class='container1'>";

		  echo" <br>".$io;
		 echo" ===>>"." ".$oo;
		 echo" convertion<br>";

		if(strcmp("Kilo Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		else if(strcmp("Mili Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	





		else if(strcmp("Kilo Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		




			else if(strcmp("Kilo Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Gram",$io)==0&&strcmp("deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





			else if(strcmp("Kilo Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}





			else if(strcmp("Kilo Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		






			else if(strcmp("Kilo Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





		else if(strcmp("Mili Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	































		else if(strcmp("Mili Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Mili Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Mili Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Mili Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Mili Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Mili Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		else if(strcmp("Mili Gram",$io)==0&&strcmp("Mili Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	





		else if(strcmp("Centi Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Centi Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Centi Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Gram",$io)==0&&strcmp("Centi Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
	








		else if(strcmp("Deci Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Deci Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Deci Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Gram",$io)==0&&strcmp("Deci Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		







		else if(strcmp("Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Gram",$io)==0&&strcmp("Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
	







		else if(strcmp("Deca Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Deca Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Gram",$io)==0&&strcmp("Deca Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		







		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Gram",$io)==0&&strcmp("Hecto Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





		else if(strcmp("Kilo Gram",$io)==0&&strcmp("Kilo Gram",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}

	echo"</div>";
	echo"<body>";

		
	}


?>