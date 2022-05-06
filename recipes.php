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

				<h2 id="lunch">Lunch</h2>
				<div class="description">
					<?php
						echo "Be prepare as well as your taste buds because these filipino lunch recipes are in the line of savory as well as healthy. These recipes will surely bring joy to you.";
						echo "Even though some recipe is a bit difficult but it will be worth it. ";
					?>
				</div>

				<h3 title="Read more"><a href="#">Adobo</a></h3>
				<img src="images/adobo.jpg" title="Pork Adobo" class="bicol">
				<div class="description">
					<?php
						echo "Being familiar with a well-loved and popular dish often leads us to turn to the same classic recipe all of the time.";
						echo "A plus for this dish is that it surely does not take away any of the clearly ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Sinigang</a></h3>
				<img src="images/sinigang.jpg" title="Sinigang" class="bicol">
				<div class="description">
					<?php
						echo "One of the most beloved and familiar Filipino dishes out there, sinigang introduces a great balance of warmth and sourness.";
						echo "The tamarind broth is something that brings a great uniqueness ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Kare-Kare</a></h3>
				<img src="images/karekare.jpg" title="Kare-Kare" class="bicol">
				<div class="description">
					<?php
						echo "Kare Kare is a type of Filipino stew with a rich and thick peanut sauce. It is a popular dish in the Philippines";
						echo "served during special occasions. The traditional recipe is composed of ox tail. There are ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Laing</a></h3>
				<img src="images/laing.jpg" title="Laing" class="bicol">
				<div class="description">
					<?php
						echo "Laing na Gabi or simply Laing is a type of Filipino vegetable dish. Taro leaves are sliced ";
						echo "and dried for a few days before being cooked in coconut milk. Pork is a  ...";
					?>
				</div>
				<button><a href="#">See recipe</a></button>

				<h3 title="Read more"><a href="#">Pinakbet</a></h3>
				<img src="images/pinakbet.jpg" title="Pinakbet" class="bicol">
				<div class="description">
					<?php
						echo "Pinakbet or Pakbet is a Filipino vegetable stew from the Ilocos region. Its name is derived from the Ilocano word pinakebbet which means ...";
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