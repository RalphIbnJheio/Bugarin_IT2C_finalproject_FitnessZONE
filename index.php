<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness ZONE</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		div.icons img.facebook
		{
			width: 100px;
			transition: 0.5s;
		}
		div.icons img.facebook:hover
		{
			transform: scale(1.5);
		}

	</style>
</head>
<body>
	<div class="backimage"></div>
	<div class="wrapper">
		<nav>
			<img src="photos/logo.PNG" class="logo">
			<ul>
				<li><a href="">HOME</a></li>	
				<li><a href="fitness.php">FITNESS</a></li>
				<li><a href="nutrition.php">NUTRITION</a></li>	
				<li><a href="program.php">PROGRAM</a></li>	
				<li><a href="quotes.php">QUOTES</a></li>		
			</ul>
		</nav>
		<div class="main">
			<h1>FITNESS <span> ZONE </span></h1>
			<div class="paragraph">
				<?php
					echo "It’s often easier to figure out how not to do or be something than it is to figure out how to do or be something.", "<br/>";
					echo "Find everything you need to crush your fitness goals such as workout routines, training plans, free workout videos,", "<br/>";
					echo "fitness tips, exercise trends, workout playlists, gear, clothes and more.";
				?>
			</div>
		</div>
		<div class="images">
			<img src="photos/abstract.PNG" class="abstract">
			<img src="photos/girl.PNG" class="girl">
		</div>
		<div class="icons">
			<a href="https://www.instagram.com/" target="_blank"><img src="photos/iconig.PNG"></a>
			<a href="https://twitter.com/i/flow/login" target="_blank"><img src="photos/icontwitter.PNG"></a>
			<a href="https://www.facebook.com/" target="_blank"><img src="photos/iconfb.PNG" class="facebook"></a>				
		</div>
		<div class="footer"><p class="m-0 text-center text-white">Shape is part of the Instyle Beauty Group. © Copyright 2022. <a href="#">Ralph Ibn Jheio Bugarin.</a> All Rights Reserved.</p></div>
	</div>
</body>
