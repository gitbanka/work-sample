<?php
	session_start();
	$user=$_SESSION['U'];
	echo "<ul>";
	echo "welcome"."   ".$user;
	echo "<hr>";
	echo "Server date=".date('d-m-Y');

	echo "</ul>";





?>