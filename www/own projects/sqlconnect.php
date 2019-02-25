<?php

class connection
{
	/*member variables*/
	var $ip;
	var $username;
	var $password;
	var $dbname;

	function __construct($a,$b,$c,$d)//overloaded constructor
	{
		$this->ip=$a;
		$this->username=$b;
		$this->password=$c;
		$this->dbname=$d;
	}

	public function connect()//member function
	{
		$conn=mysqli_connect($this->ip,$this->username,$this->password,$this->dbname);
		if($conn)
			echo"<h1>connection ok</h1>";
		else
			echo"<h1>connection failed</h1>";
	}
}//end of class
	if(isset($_POST['btn']))
	{
		$c=new connection($_POST['ip'],$_POST['username'],$_POST['password'],$_POST['dbname']);//creating of new class
		$c->connect();//calling of member function
	}

?>