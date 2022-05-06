<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hapag - Filipino Cuisine and Recipes</title>
	<link rel="stylesheet" href="css/style2.css">
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
						<li><a href="#hapag recipes">Hapag Recipes</a></li>
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

				<h1 id="hapag recipes">Hapag Recipes</h1>
				<img src="images/torta.png" title="Tortang Talong">
				<h3 title="Read more"><center><a href="#">Tortang Talong</center></a></h3>
				<img src="images/bicolexpress.png" title="Bicol Express" class="bicol">
				<h3 title="Read more"><center><a href="#">Bicol Express</center></a></h3>
				<img src="images/tinola.jpg" title="Tinolang Manok">
				<h3 title="Read more"><center><a href="#">Tinolang Manok</center></a></h3>
				<img src="images/turon.jpg" title="Turon">
				<h3 title="Read more" class="turon"><center><a href="#">Turon</center></a></h3>

				<div class="description-2">
					<?php

						echo "This are just the few Filino recipes that you will love to cook and eat. If you are interested to explore more recipes then go to our navigation and click recipes for more.";
					?>
				</div>
				<button><a href="#"><b>MORE RECIPES</b></a></button>

			</div>
			<div class="right-side-bar">
				<ul>
					<h5>Latest recipes</h5>
					<li><img src="images/tapsilog.jpg" title="Tapsilog"></li>
					<h4> Tapsilog </h4>
					<li><img src="images/halohalo.jpg" class="halohalo" title="Halo-Halo"></li>
					<h4> Halo-Halo </h4>
					<li><img src="images/sinigang.jpg" title="Sinigang"></li>
					<h4> Sinigang </h4>
					<li><img src="images/bibingka.jpg" title="Bibingka"></li>
					<h4> Bibingka </h4>
					<li><img src="images/chopsuey.jpg" title="Chop Suey"></li>
					<h4> Chop Suey </h4>
				</ul>
			</div>
		</div>
		<div class="footer">
			<p><b>&copy; 2022 Hapag: Filipino Cuisine and Recipe <br/> Gerson O. Pantoja Masiga, Gasan, Marinduque - Philippines <br/> Tel No. 0923 1343 342. All rights reserved.</b></p>

			<div class="icons">
				<ul><center>
					<a href="#"><img src="images/icons/facebook.png"></a>
					<a href="#"><img src="images/icons/instagram.png"></a>
					<a href="#"><img src="images/icons/pinterest.png"></a>
					<a href="#"><img src="images/icons/youtube.png"></a>
				</center></ul>
			</div>
			

		</div>
	</div>

</body>
</html>