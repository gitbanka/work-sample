<?php
	if(isset($_POST['btn']))
	{
		$ans1=$_POST['missword'];
		$ans2=$_POST['debut'];
		$ans3=$_POST['national'];
		$ans4=$_POST['oscar'];
		$ans5=$_POST['satyajitroy'];
		
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
		echo"<h3>MOVIES</h3>";
		echo"<div class='questions'>";
		if(strcmp($ans1,"1993")==0)
		{
			echo"<label>1. Aishwarya Rai was crowned Miss World in which year?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :1993";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>1. Aishwarya Rai was crowned Miss World in which year?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :1993";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans2,"Andaaz")==0)
		{
			echo"<label>2. Lata Mangeshkar made her debut in Hindi playback singing with the which movie?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Andaaz";
			$correct++;
			$ppoint=$ppoint+$point;
		}

		else
		{
			echo"<label>2.Lata Mangeshkar made her debut in Hindi playback singing with the which movie?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Andaaz";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans3,"Mirza Ghalib")==0)
		{
			echo"<label>3. Which was the first Hindi Movie to receive the national award?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :Mirza Ghalib";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>3. Which was the first Hindi Movie to receive the national award?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :Mirza Ghalib";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans4,"Mother India")==0)
		{
			echo"<label>4. Which was the 1st indian movie submitted for oscar?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Mother India";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>4. Which was the 1st indian movie submitted for oscar?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Mother India";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans5,"1992")==0)
		{
			echo"<label>5. In which year did Satyajit Roy win oscar ?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :1992";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>5. In which year did Satyajit Roy win oscar ?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :1992";
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
		echo"<center>";
		echo"<input type='button' class='btn' name='home' value='PLAY AGAIN' onclick=\"location.href='home.html'\">";
	echo"</center>";
	echo"<br>";
		echo"</div>";
		echo"</body>";
	}
?>