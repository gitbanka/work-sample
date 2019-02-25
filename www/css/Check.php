<?php
	function CheckAge($number)
	{
		if($number<=18)
		{
			throw new Exception("You will not give Vote");
			
		}
		return true;
	}
	try
	{
		if(isset($_POST['bn1']))
{
		$Age = $_POST['age'];
		CheckAge($Age);
		echo "<input type='text' name='text' value='you will give vote'>";
}
	catch(Exception $e)
	{		$u=$e->getmessage();
			echo "<input type='text' name='text' value='$u'>";
	}

?>	