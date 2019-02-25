<?php

$hostip='localhost';
$username='root';
$password='';
$dbname='classicmodels';

$conn=mysqli_connect($hostip,$username,$password,$dbname);

if($conn)
{
	echo"connection ok";
}
else
echo"conn failed";



?>