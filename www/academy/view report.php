<?php 
	
class student//start of a class
{
	/*member function*/
	var $name;
	var $code;
	var $maths;
	var $sci;
	var $eng;
	var $tot;

	public function __construct($n,$c,$m,$s,$e)//overload constructor
	{
		$this->name=$n;
		$this->code=$c;
		$this->maths=$m;
		$this->sci=$s;
		$this->eng=$e;
	}
	public function total()//member function for addition
	{
		$this->tot=($this->maths+$this->sci+$this->eng);
		return($this->tot);
	}
	public function view()//menber function for viewing the reports
	{
		$res=$this->total();
		echo"<center><h1>REPORT CARD</h1></center>";
		echo"<hr>";
		echo"<h3>STUDENT DETAILS</h3>";
		echo"name :".$this->name;
		echo"<br>";
		echo"code :".$this->code;
		echo"<br>";
		echo"<h3>";
		echo"<hr>";
		echo"MARKS";
		echo"</h3>";
		echo"<ul>";
			echo"<li>"."maths :".$this->maths;
			echo"<li>"."science :".$this->sci;
			echo"<li>"."english :".$this->eng;
			echo"<li>"."total :".$res;
		echo"</ul>";
		echo"<hr>";
	}
}//end of class


	if(isset($_POST['btn']))
	{
		$obj=new student($_POST['name'],$_POST['code'],$_POST['maths'],$_POST['sci'],$_POST['eng']);
		$obj->view();
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>report card</title>
</head>
<body>
	<form method="post">
		<input type="text" name="name" placeholder="Bankim Mondal">
		<br>
		<input type="number" name="code" placeholder="10">
		<br>
		<input type="number" name="maths" placeholder="marks in maths">
		<br>
		<input type="number" name="sci" placeholder="number in science">
		<br>
		<input type="number" name="eng" placeholder="number in english">
		<br>
		<input type="submit" name="btn" value="View Result">
	</form>
</body>
</html>