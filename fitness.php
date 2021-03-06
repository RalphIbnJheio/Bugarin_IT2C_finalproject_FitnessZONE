<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness ZONE</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		div.fitnesstable 
			{
				border: 10px solid black;
				width: 300px;
				height: 475px;
				margin: 10px 10px 10px 0px;
				margin-left: 500px;
			}
		div.left-side-bar
			{
				width: 240px;
				float: left;
				height: 500px;
				margin: 10px 0px 10px -150px;
			}

		div.left-side-bar ul
			{
				margin: 0px;
				padding: 20px;
			}

		div.left-side-bar ul li
			{
				list-style-type: none;
			}

		div.left-side-bar ul li img
			{
				height: 800px;
				width: 500px;
				margin: 5% auto;
				transition: 0.5s;
			}

		div.left-side-bar ul li img:hover
			{
				transform: scale(1.5);
			}

	</style>
</head>
<body>
	<div class="wrapper-2">
		<nav>
			<img src="photos/logo.PNG" class="logo">
			<ul>
				<li><a href="index.php">HOME</a></li>	
				<li><a href="fitness.php">FITNESS</a></li>
				<li><a href="nutrition.php">NUTRITION</a></li>	
				<li><a href="program.php">PROGRAM</a></li>	
				<li><a href="quotes.php">QUOTES</a></li>	
			</ul>
		</nav>
		<div class="left-side-bar">
		<ul>
			<li><a href="https://www.artsy.net/article/artsy-editorial-exercise-creative" target="_blank"><img src="photos/gymrats.PNG"></a></li>
		</ul>	
	</div>
		<div class="main1">
			<h1>FITNESS <span> DIARY </span></h1>
		</div>
		<div class="fitnesstable">
			<h2>FITNESS</h2>
			<ul>
				<li><a href="tips.php">Beginner Fitness Tips</a></li>
				<li><a href="workoutclothes.php">Workout Clothes</a></li>
				<li><a href="HIIT.php">HIIT</a></li>
				<li><a href="strength.php">Strength Training</a></li>
				<li><a href="cardio.php">Cardio</a></li>
				<center><b>GOOD TRIVIA FACTS!</b></center>
				<?php 
					echo "1. The human body has 650 muscles.", "<br>";
					echo "2. The only exercise you should hold your breath for is underwater swimming.", "<br>";
					echo "3. The heart is the strongest muscle in the body.", "<br>";
					echo "4. Only 13% of men are physically fit.", "<br>";
					echo "5. On average, a person walks 70,000 miles in their lifetime.", "<br>";

				?>
			</ul>	

		</div>	
	</div>
	<div class="right-side-bar">
		<ul>
			<li><a href="https://www.artsy.net/article/artsy-editorial-exercise-creative" target="_blank"><img src="photos/rightside.JPG"></a></li>
			<li><a href="https://www.fitnessfirst.com.ph/membership/individual" target="_blank"><img src="photos/rightside1.JPG"></a></li>
			<li><a href="https://theclubkona.com/" target="_blank"><img src="photos/rightside2.PNG"></a></li>
		</ul>	
	</div>	
</body>