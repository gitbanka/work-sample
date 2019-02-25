<?php
	if(isset($_POST['btn']))
	{
		$ans1=$_POST['olympic'];
		$ans2=$_POST['emblem'];
		$ans3=$_POST['Commonwealth'];
		$ans4=$_POST['cricket'];
		$ans5=$_POST['game'];
		
		$npoint=0;
		$ppoint=0;
		$correct=0;
		$incorrect=0;
		echo"<head>";
		echo"<link rel='stylesheet' type='text/css' href='style.css'>";
		echo"</head>";
		echo"<body>";
		echo"<h1>Your Result</h1>";
		echo"<div class='container'>";
		echo"<h3>SPORTS</h3>";
		echo"<div class='questions'>";
		if(strcmp($ans1,"Paris")==0)
		{
			echo"<label>1. Which European city hosted the first Olympic Games in which women were allowed to participate?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :Paris";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>1. Which European city hosted the first Olympic Games in which women were allowed to participate?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :Paris";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans2,"Maple Leaf")==0)
		{
			echo"<label>2. What is the national emblem of Canada?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Maple Leaf";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}

		else
		{
			echo"<label>2. What is the national emblem of Canada?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Maple Leaf";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans3,"India")==0)
		{
			echo"<label>3. In 2010 Commonwealth Games held in ?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :India";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>3. In 2010 Commonwealth Games held in ?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :India";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans4,"Yuvaraj Singh")==0)
		{
			echo"<label>4. In 2011 India won the World Cup. Who was adjudicated as the man of the series in the tournament ?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Yuvaraj Singh";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>4. In 2011 India won the World Cup. Who was adjudicated as the man of the series in the tournament ?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Yuvaraj Singh";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans5,"Wrestling")==0)
		{
			echo"<label>5. World's most ancient game is ?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :Wrestling";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>5. World's most ancient game is ?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :Wrestling";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}

		$fpoint=$ppoint+$npoint;
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		echo"Total no of Correct Answers=".$correct;
		echo"<hr>";
		echo"Total no of Incorrect Answer=".$incorrect;
		echo"<hr>";
		echo"Positive Score :".$ppoint;
		echo"<hr>";
		echo"Negetive Score :".$npoint;		
		echo"<hr>";
		echo"Final Score=".$fpoint;
		echo"/25";
		echo"</div>";
		echo"<h1>----------Thank You----------</h1>";
		echo"<br>";
	echo"<center>";
		echo"<input type='button' class='btn' name='home' value='PLAY AGAIN' onclick=\"location.href='home.html'\">";
	echo"</center>";
	echo"<br>";
	echo"</div>";
		echo"</body>";
	}
?>