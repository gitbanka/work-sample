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

	<h3>TIME:</h3>
		<br>
			<select class="input" name="io">
			<option value="Select Input">Select Input</option>
			<option value="Second">Second</option>
			<option value="Minute">Minute</option>
		  	<option value="Hour">Hour</option>
		  	<option value="Day">Day</option>
		  	<option value="Week">Week</option>
		  	<option value="Year">Year</option>
			
		</select>
		<select class="output" name="oo">
			<option value="select Output">Select Output</option>
			<option value="Second">Second</option>
			<option value="Minute">Minute</option>
		  	<option value="Hour">Hour</option>
		  	<option value="Day">Day</option>
		  	<option value="Week">Week</option>
		  	<option value="Year">Year</option>
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
		


		 if(strcmp($io,"Second")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Second")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/60;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=3600;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$v/86400;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/604800;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/31536000;
			echo"<br>Output :"." ".$t." ".$oo;
		}






		 if(strcmp($io,"Second")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Second")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/60;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/3600;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$v/86400;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/604800;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Second")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/31536000;
			echo"<br>Output :"." ".$t." ".$oo;
		}








		 if(strcmp($io,"Minute")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*60;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Minute")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Minute")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/60;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Minute")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$v/1440;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Minute")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/10080;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Minute")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/525600;
			echo"<br>Output :"." ".$t." ".$oo;
		}













		 if(strcmp($io,"Hour")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*3600;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Hour")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*60;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Hour")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Hour")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$v/24;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Hour")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/168;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Hour")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/8760;
			echo"<br>Output :"." ".$t." ".$oo;
		}










		 if(strcmp($io,"Day")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*86400;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Day")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*1440;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Day")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*24;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Day")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$v;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Day")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/7;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Day")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/365;
			echo"<br>Output :"." ".$t." ".$oo;
		}











		 if(strcmp($io,"Week")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*604800;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Week")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*10080;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Week")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*168;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Week")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*7;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Week")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Week")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv/52;
			echo"<br>Output :"." ".$t." ".$oo;
		}













		if(strcmp($io,"Year")==0&&strcmp($oo,"Second")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*31536000;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		 elseif(strcmp($io,"Year")==0&&strcmp($oo,"Minute")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*525600;
			echo"<br>Output :"." ".$t." ".$oo;
		} 

		elseif(strcmp($io,"Year")==0&&strcmp($oo,"Hour")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*8760;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Year")==0&&strcmp($oo,"Day")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*365;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Year")==0&&strcmp($oo,"Week")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv*52;
			echo"<br>Output :"." ".$t." ".$oo;
		}

		elseif(strcmp($io,"Year")==0&&strcmp($oo,"Year")==0)
		 {	
		 	echo"<br>Input :"." ".$iv." ".$io;
		 	$t=$iv;
			echo"<br>Output :"." ".$t." ".$oo;
		}
	}



?>