<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness ZONE</title>
	<link rel="stylesheet" href="styles.css">
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
		<div class="main1">
			<h1>WORKOUT<span> PROGRAM </span></h1>
		</div>
		<div class="workoutimg">
			<center><img src="photos/chest day.JPG"></center>
			<div class="workoutdiscript">
				<h2><b><a href="chest.php">Chest Workout</a></b></h2>
				<?php
					echo "With chest workouts, you'll notice a majority of benefits in your pectoralis major and", "<br>";
					echo "pectoralis minor. These muscles make up your “pecs,” which comprise most of your chest.";
				?>
			</div>

			<center><img src="photos/back day.JPG"></center>
			<div class="workoutdiscript">
				<h2><b><a href="back.php">Back Workout</a></b></h2>
				<?php
					echo "Exercising the back reduces stiffness by keeping the connective fibers of ligaments and", "<br/>";
					echo "tendons flexible. Improved mobility through back exercise helps to prevent the connective", "<br/>"; 
					echo "fibers from tearing under stress, which in turn prevents injury and back pain. ";
				?>
			</div>

			<center><img src="photos/leg day.PNG"></center>
			<div class="workoutdiscript">
				<h2><b><a href="leg.php">Leg Workout</a></b></h2>
				<?php
					echo "Leg workouts are an important aspect of a balanced, whole-body fitness routine", "<br/>";
					echo "that builds strength, speed, and stability";
				?>
			</div>

			<center><img src="photos/abs workout.JPG"></center>
			<div class="workoutdiscript">
				<h2><b><a href="">Abs Workout</a></b></h2>
				<?php
					echo "A strong core ( strong abs) is one of the keys in the prevention of back pain.", "<br/>";
					echo "A strong core will help you look better and improve performance in a host of sports but", "<br/>";
					echo "sit-ups or any other abdominal exercise will not reduce body fat.";
				?>
			</div>

			<center><img src="photos/bicep workout.JPG"></center>
			<div class="workoutdiscript">
				<h2><b><a href="biceps.php">Biceps Workout</a></b></h2>
				<?php
					echo "A proper biceps workout is key to building stronger arms and increasing your power to lift.", "<br/>";
					echo "The benefits of stronger biceps are not only for better aesthetics but also for better pulling", "<br/>";
					echo "power as your increased power to pull can help in a range of exercise that depend on this motion.";
				?>
			</div>

			<center><img src="photos/tricep workout.JPG"></center>
			<div class="workoutdiscript">
				<h2><b><a href="">Triceps Workout</a></b></h2>
				<?php
					echo "Working out your triceps helps to build upper body strength and is an essential", "<br/>";
					echo "part of any strength training routine. Strong triceps stabilize your shoulder joint and are", "<br/>";
					echo "important or daily activities and sports such as tennis, volleyball, and basketball.";
				?>
			</div>
		</div>

		
	</div>
</body>