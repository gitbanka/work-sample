<?php
class student
{
	/*class variables*/

	var $dob;
	var $conn;
	var $hostip='localhost';
	var $username='root';
	var $password='';
	var $dbname='student';

	public function __construct($p)//overloaded constructor
	{
		$this->conn=mysqli_connect($this->hostip,$this->username,$this->password,$this->dbname);

		if($this->conn)
		{
			echo"";
		}
		else
			{
				echo"connection failed";
			}
	
	$this->dob=$p;


	}

	public function search()//member fucntion
	{

		$query="SELECT name,course,total,remarks FROM certinfo WHERE dob='$this->dob'";
		$data=mysqli_query($this->conn,$query);
		$total=mysqli_num_rows($data);
		if($total!=0)
		{
			while($result=mysqli_fetch_assoc($data))
			{
				echo"<h1>The Details are</h1><br>";
				echo"<head>";
				echo"	<link rel='stylesheet' type='text/css' href='details.css'>";
				echo"</head>";
				echo"<table>
					<tr>
						<th>NAME</th>
						<th>COURSE</th>
						<th>TOTAL</th>
						<th>REMARKS</th>
					</tr>

					<tr>
						<td>".$result['name'];
						echo"<td>".$result['course'];
						echo"<td>".$result['total'];
						echo"<td>".$result['remarks'];
					echo"</tr>
						</table";
			}
		}
		else
			echo"no records";

	}

}//end of class
if(isset($_POST['btn']))
{
	$ob=new student($_POST['dob']);//object creation
	$ob->search();//calling of member function
}


?>