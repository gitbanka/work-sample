<?php
	if(isset($_POST['btn']))
	{
		$ans1=$_POST['lake'];
		$ans2=$_POST['forest'];
		$ans3=$_POST['dam'];
		$ans4=$_POST['mountain'];
		$ans5=$_POST['rays'];
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
		echo"<h3>INDIAN GEOGRAPHY</h3>";
		echo"<div class='questions'>";
		if(strcmp($ans1,"Rajasthan")==0)
		{
			echo"<label>1. Which of the following states has the largest number of salt lakes in India?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :Rajasthan";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>1. Which of the following states has the largest number of salt lakes in India?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :Rajasthan";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans2,"Coniferous")==0)
		{
			echo"<label>2. The most important commercial forests of India are?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Coniferous";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}

		else
		{
			echo"<label>2. The most important commercial forests of India are?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Coniferous";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans3,"Cauvery River")==0)
		{
			echo"<label>3. Mettur dam is built on the river?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :Cauvery River";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>3. Mettur dam is built on the river?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :Cauvery River";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans4,"Mount Everest")==0)
		{
			echo"<label>4. The highest mountain peak in India is?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Mount Everest";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>4. The highest mountain peak in India is?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Mount Everest";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans5,"Srinagar")==0)
		{
			echo"<label>5. Which one of the following cities will never get the vertical rays of the sun?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :Srinagar";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>5. Which one of the following cities will never get the vertical rays of the sun?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :Srinagar";
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