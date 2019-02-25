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

	<h3>TEMPERATURE:</h3>
		<br>
			<select class="input" name="io">
			<option value="Select Input">Select Input</option>
			<option value="Degree Centigrate">Degree Centigrate</option>
			<option value="Degree Farenhite">Degree Farenhite</option>
		  	<option value="Kelvin">Kelvin</option>
			
		</select>
		<select class="output" name="oo">
			<option value="select Output">Select Output</option>
			<option value="Degree Centigrate">Degree Centigrate</option>
			<option value="Degree Farenhite">Degree Farenhite</option>
		  	<option value="Kelvin">Kelvin</option>
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
		


		 if(strcmp($io,"Degree Centigrate")==0&&strcmp($oo,"Degree Centigrate")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		 if(strcmp($io,"Degree Centigrate")==0&&strcmp($oo,"Degree Farenhite")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=(($iv*9)+160)/5;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		 if(strcmp($io,"Degree Centigrate")==0&&strcmp($oo,"Kelvin")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv+273;
			echo"<br>Output :"." ".$t." ".$oo;

		 }











		 if(strcmp($io,"Degree Farenhite")==0&&strcmp($oo,"Degree Centigrate")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=(($iv*5)-160)/9;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		 if(strcmp($io,"Degree Farenhite")==0&&strcmp($oo,"Degree Farenhite")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		 if(strcmp($io,"Degree Farenhite")==0&&strcmp($oo,"Kelvin")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=((($iv*5)-160)/9)+273;
			echo"<br>Output :"." ".$t." ".$oo;

		 }















		 if(strcmp($io,"Kelvin")==0&&strcmp($oo,"Degree Centigrate")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv-273;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		 if(strcmp($io,"Kelvin")==0&&strcmp($oo,"Degree Farenhite")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t1=$iv-273;
		 	$t=(($t1*9)+160)/5;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		 if(strcmp($io,"Kelvin")==0&&strcmp($oo,"Kelvin")==0)
		 {
		 
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;

		 }

		}


?>