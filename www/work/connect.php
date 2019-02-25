<?php

$hostip='localhost';
$username='root';
$password='';
$dbname='signup';

$conn=mysqli_connect($hostip,$username,$password,$dbname);

if($conn)
{
	echo"";
}
else
echo"conn failed";



?>