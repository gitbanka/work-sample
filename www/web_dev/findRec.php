
<?php
	if(isset($_POST['btn']))
	{
			
		$uval=$_POST['un'];
		$pass=$_POST['pass'];

		$rec=array('admin','user','guest');
		for($i=0;$i<count($rec);$i++){
			if(strcmp($uval,$rec[$i])==0) 
			{
				$flag=1;
				break;
			
			}
			else {

				$flag=0;
			}
		} // end of for loop
		if($flag==1){

					require_once

		}
		if($flag==0)
			echo "User not valid";

	}
  


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form method="post">
  	<input type="text" name="un" required="true">	
  	<input type="text" name="pass" required="true">
  	<br>
  	<input type="submit" name="btn">
  </form>
</body>
</html>
