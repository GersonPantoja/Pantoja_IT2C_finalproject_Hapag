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
	<div class="wrapper-2">
		<div class="header">
			<center><a href="index.php"><img src="images/logo.png" class="logo-img" title="logo"></a></center>
		</div>
		<div class="nav">
			<ul><center>
				<li><a href="index.php"><b>HOME</b></a></li>
				<li><a href="recipes.php" class="active">RECIPES</a></li>
				<li><a href="about.php">ABOUT</a></li>
			<center></ul>
		</div>
		<div class="banner">
			<img src="images/bannerrecipe.jpg">
		</div>
		<div class="main">
			<div class="left-side-bar-3">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="breakfast">Breakfast</h1>
				<h3 title="Read more"><a href="recipe1.php">Tapsilog</a></h3>
				<img src="images/tapsilog.jpg" title="Tapsilog" class="bicol">
				<div class="description" id="description">
					<?php
						echo "The word Tapsilog is an acronym that stands for Tapa Sinangag at Itlog. These are the three components of the meal.";
						echo "Tapa refers to beef tapa. This are fried marinated beef slices. Sinangag, on the other hand, is a word used to refer to garlic fried rice. ";
						echo "The last three letters of the word tapsilog is derived from the filipino translation ";
						echo "for egg, which is itlog. A piece of egg is fried and forms part of the meal.";
					?>
				</div>

				<h3 id="ingredients">Ingredients</h3>
					<?php
						echo "1 lb. beef sirloin sliced thinly", "<br/>";
						echo "3 pieces eggs", "<br/>";
						echo "6 tablespoons cooking oil";
					?>
				<h3><i>Tapa Marinade:</i></h3>
					<?php

						echo "3 tablespoons soy sauce (Knorr Liquid Seasoning optional)", "<br/>";
						echo "6 cloves crushed garlic", "<br/>";
						echo "¾ cups pineapple juice", "<br/>";
						echo "2 tablespoons brown sugar", "<br/>";
						echo "¼ teaspoon ground white pepper";
					?>
				<h3><i>Sinangag:</i></h3>
					<?php

						echo "5 cloves garlic crushed", "<br/>";
						echo "5 cups leftover rice", "<br/>";
						echo "1 teaspoon salt";
					?>
					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
						<li>
							Prepare the tapa by placing the beef in a large bowl. Combine with all the tapa marinade ingredients.Mix well and cover the bowl.Place inside the fridge and marinate overnight. 
						</li><br/>
						<li>
							Cook the garlic fried rice (sinangag na kanin) by heating 3 tablespoons cooking oil in a pan. Add crushed garlic. Cook until garlic turns light brown. Add the leftover rice. Stir-fry for 3 minutes.
						</li> <br/>
						<li>
							Season with salt. Continue to stir-fry for 3 to 5 minutes. Set aside.
						</li> <br/>
						<li>
							Start to cook the tapa. Heat a pan and pour the marinated beef into it, including the marinade. Add ¾ cups water. Let the mixture boil. Cover the pan and continue to cook until the liquid reduces to half. Add 3 tablespoons cooking oil into the mixture. Continue to cook until the liquid completely evaporates. Fry the beef tapa in remaining oil until medium brown. Set aside.
						</li> <br/>
						<li>
							Fry the egg by pouring 1 tablespoon oil on a pan. Crack a piece of egg and sprinkle enough salt on top. Cook for 30 seconds.Pour 2 tablespoons water on the side of the pan. Cover and let the water boil. Continue to cook until the egg yolks gets completely cooked by the steam.
						</li> <br/>
						<li>
							Arrange the beef tapa, sinangag, and fried egg on a large plate to form Tapsilog. Serve with vinegar as dipping sauce for tapa.
						</li><br/>
					</ol>
					
			<button><a href="recipes.php"><b>MORE RECIPES</b></a></button>

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