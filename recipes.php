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
				<li><a href="index.php">HOME</a></li>
				<li><a href="recipes.php" class="active"><b>RECIPES</b></a></li>
				<li><a href="start.php">START HERE</a></li>
				<li><a href="about.php">ABOUT</a></li>
			<center></ul>
		</div>
		<div class="banner">
			<img src="images/bannerrecipe.jpg">
		</div>
		<div class="main">
			<div class="left-side-bar-2">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#breakfast" class="breakfast">Breakfast</a></li>
						<li><a href="#lunch">Lunch</a></li>
						<li><a href="#dinner">Dinner</a></li>
						<li><a href="#dessert">Dessert</a></li>
					</ul>
			</div>
			<div class="content">
				<h1>Recipes</h1>
				<h2 id="breakfast">Breakfast</h2>
				<div class="description">
					<?php
						echo "For Filipinos, breakfast is more than just the morning meal. It is deeply woven into the fabric of Filipino culture and tradition.";
						echo "It's the start of a day full of good food, from lunch, and dinner, and top it all off, the dessert.";
					?>
				</div>
				<h3 title="Read more"><a href="#">Tapsilog</a></h3>
				<img src="images/tapsilog.jpg" title="Tapsilog" class="bicol">
				<div class="description">
					<?php
						echo "The word Tapsilog is an acronym that stands for Tapa Sinangag at Itlog. These are the three components of the meal.";
						echo "Tapa refers to beef tapa. This are fried marinated ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Arroz Caldo</a></h3>
				<img src="images/arrozcaldo.jpg" title="Arroz Caldo" class="bicol">
				<div class="description">
					<?php
						echo "Arroz Caldo literally means warm rice. This congee that closely resembles risotto has been a favorite Filipino snack.";
						echo "What goes with arroz caldo? I enjoy pairing it with ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Tortang Talong</a></h3>
				<img src="images/torta.png" title="Tortang Talong" class="bicol">
				<div class="description">
					<?php
						echo "Beating an egg can make for a great ingredient in several recipes around the world. From baked goods to classic omelettes,";
						echo ", it is endlessly versatile, and goes with both sweet and savory ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Daing na Bangus</a></h3>
				<img src="images/daing.jpg" title="Daing na Bangus" class="bicol">
				<div class="description">
					<?php
						echo "Daing na Bangus is perfect to eat for breakfast. I usually have it with sinangag na kanin ";
						echo "and a spicy vinegar dip. A piece of sunny-side-up fried egg is nice to have ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Bibingka</a></h3>
				<img src="images/bibingka.jpg" title="Bibingka" class="bicol">
				<div class="description">
					<?php
						echo "Typically, one enjoys bibingka with another type of rice cake, puto bumbong, especially after Simbang Gabi. ";
						echo "Hot drinks, like coffee or chocolate, also make the ideal companion for this ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>
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