<?php
	if(isset($_POST['btn']))
	{
		$ans1=$_POST['water'];
		$ans2=$_POST['color'];
		$ans3=$_POST['magnetisation'];
		$ans4=$_POST['iodoform'];
		$ans5=$_POST['genetic'];
		
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
		echo"<h3>SCIENCE</h3>";
		echo"<div class='questions'>";
		if(strcmp($ans1,"+4 Degree")==0)
		{
			echo"<label>1.  Water has maximum density at?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :+4 Degree";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>1.  Water has maximum density at?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans1;
			echo"<br>";
			echo"The correct answer is :+4 Degree";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans2,"Urochrome")==0)
		{
			echo"<label>2. The yellow colour of urine is due to the presence of?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Urochrome";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}

		else
		{
			echo"<label>2. The yellow colour of urine is due to the presence of?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans2;
			echo"<br>";
			echo"The correct answer is :Urochrome";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans3,"Passing alternating current through it")==0)
		{
			echo"<label>3. The method of magnetisation is?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :Passing alternating current through it";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>3. The method of magnetisation is?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans3;
			echo"<br>";
			echo"The correct answer is :Passing alternating current through it";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans4,"Acetone")==0)
		{
			echo"<label>4. The compound which can be used to prepare iodoform is?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Acetone";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>4. The compound which can be used to prepare iodoform is?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans4;
			echo"<br>";
			echo"The correct answer is :Acetone";
			$point=-2;
			$incorrect++;
			$npoint=$npoint+$point;
		}
		echo"</div>";
		echo"<br>";
		echo"<div class='questions'>";
		if(strcmp($ans5,"Transfer RNA")==0)
		{
			echo"<label>5. Transfer of genetic information from one generation to the other is accomplished by?</label>";
			echo"<br>";
			echo"<span class='correct'>--Correct--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :Transfer RNA";
			$point=5;
			$correct++;
			$ppoint=$ppoint+$point;
		}
		else
		{
			echo"<label>5. Transfer of genetic information from one generation to the other is accomplished by?</label>";
			echo"<br>";
			echo"<span class='incorrect'>--Incorrect--</span>";
			echo"<br>";
			echo"Your answer is :".$ans5;
			echo"<br>";
			echo"The correct answer is :Transfer RNA";
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