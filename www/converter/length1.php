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
	<h3>LENGTH:</h3>
	<br>

		<select class="input" name="io">
			<option value="Select Input">Select Input</option>
			<option value="Mili Meter">Mili Meter</option>
			<option value="Centi Meter">Centi Meter</option>
		  	<option value="Deci Meter">Deci Meter</option>
			<option value="Meter">Meter</option>
		  	<option value="Deca Meter">Deca Meter</option>
			<option value="Hecto Meter">Hecto Meter</option>
			<option value="Kilo Meter">Kilo Meter</option>
		</select>
		<select class="output" name="oo">
			<option value="Select Output">select Output</option>
			<option value="Mili Meter">Mili Meter</option>
			<option value="Centi Meter">Centi Meter</option>
		  	<option value="Deci Meter">Deci Meter</option>
			<option value="Meter">Meter</option>
		  	<option value="Deca Meter">Deca Meter</option>
			<option value="Hecto Meter">Hecto Meter</option>
			<option value="Kilo Meter">Kilo Meter</option>
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

		if(strcmp("Kilo Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		else if(strcmp("Mili Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	





		else if(strcmp("Kilo Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		




			else if(strcmp("Kilo Meter",$io)==0&&strcmp("Deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Meter",$io)==0&&strcmp("Deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Meter",$io)==0&&strcmp("deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Meter",$io)==0&&strcmp("Deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





			else if(strcmp("Kilo Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}





			else if(strcmp("Kilo Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*100;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		






			else if(strcmp("Kilo Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*10;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





		else if(strcmp("Mili Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv*1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	































		else if(strcmp("Mili Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Mili Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Mili Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Mili Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Mili Meter",$io)==0&&strcmp("Deci meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Mili Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
		else if(strcmp("Mili Meter",$io)==0&&strcmp("Mili Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	





		else if(strcmp("Centi Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Centi Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Centi Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Meter",$io)==0&&strcmp("Deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Centi Meter",$io)==0&&strcmp("Centi Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}	
	








		else if(strcmp("Deci Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Deci Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Deci Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deci Meter",$io)==0&&strcmp("Deci Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		







		else if(strcmp("Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1000;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		else if(strcmp("Meter",$io)==0&&strcmp("Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
	







		else if(strcmp("Deca Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/100;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Deca Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		else if(strcmp("Deca Meter",$io)==0&&strcmp("Deca Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		
		







		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/10;
				echo"<br>Output :"." ".$t." ".$oo;
			}

		else if(strcmp("Hecto Meter",$io)==0&&strcmp("Hecto Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}
		





		else if(strcmp("Kilo Meter",$io)==0&&strcmp("Kilo Meter",$oo)==0)
			{
				echo"<br>Input :"." ".$iv." ".$io;
				$t=$iv/1;
				echo"<br>Output :"." ".$t." ".$oo;
			}

	echo"</div>";
	echo"<body>";

		
	}


?>