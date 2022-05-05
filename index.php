<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hapag - Filipino Cuisine and Recipes</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<center><a href="index.php"><img src="images/logo.png" class="logo-img" title="logo"></a></center>
		</div>
		<div class="nav">
			<ul><center>
				<li><a href="index.php" class="active"><b>HOME</b></a></li>
				<li><a href="recipes.php">RECIPES</a></li>
				<li><a href="start.php">START HERE</a></li>
				<li><a href="about.php">ABOUT</a></li>
			<center></ul>
		</div>
		<div class="banner">
			<img src="images/bannerhome.jpg" title="Pork Adobo">
		</div>
		<div class="main">
			<div class="left-side-bar">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#home" class="house">Home</a></li>
						<li><a href="#">Hapag Recipes</a></li>
					</ul>
			</div>
			<div class="content">
				<h1 id="home">Home</h1>
				<div class="description">
					<?php

						echo "Mabuhay! Feel free to browse to our Hapag Filipino dishes. There are mainly three categories to our easy";
						echo "Filipino recipes that you can choose from; these Filipino recipes are categorized from Breakfast to Dinner ";
						echo "and as well as some Filipino desserts that you will surely love. The reason for showcasing only the ";
						echo "Filipino cuisine is that we want to show to the people who haven’t tried Filipino food or dishes ";
						echo "that Filipino classic food is delicious and can be love by many, even to those people around the world.";
						echo "We provide step by step instructions which will make learning Filipino dishes easy and guide ";
						echo "people to cook more confidently for creating simple but delightful food.";
					?>
				</div>

				<h1>Hapag Recipes</h1>
				<img src="images/torta.png">
				<h3><a href="#">Tortang Talong</a></h3>
			</div>
			<div class="right-side-bar">
				
			</div>
		</div>
		<div class="footer">
		</div>
	</div>

</body>
</html>