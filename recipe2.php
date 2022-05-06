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
	<div class="wrapper-3">
		<div class="header">
			<center><a href="index.php"><img src="images/logo.png" class="logo-img" title="logo"></a></center>
		</div>
		<div class="nav">
			<ul><center>
				<li><a href="index.php"><b>HOME</b></a></li>
				<li><a href="recipes.php" class="active">RECIPES</a></li>
				<li><a href="start.php">START HERE</a></li>
				<li><a href="about.php">ABOUT</a></li>
			<center></ul>
		</div>
		<div class="banner">
			<img src="images/bannerrecipe.jpg">
		</div>
		<div class="main">
			<div class="left-side-bar-4">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="breakfast">Breakfast</h1>
				<h3><a href="recipe2.php">Arroz Caldo</a></h3>
				<img src="images/arrozcaldo.jpg" title="Arroz Caldo" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Arroz Caldo literally means warm rice. This congee that closely resembles risotto has been a favorite Filipino snack. What goes with arroz caldo?";
						echo "I enjoy pairing it with tokwat baboy, which is a combination of boiled pork slices and fried tofu soaked in a vinegar mixture.";
						echo "Although arroz caldo is of Chinese origin, the name was actually given by the Spaniards because of pronunciation issues.";
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "2 tablespoons veg oil", "<br/>";
						echo "1 onion, diced", "<br/>";
						echo "2 cloves garlic, crushed", "<br/>";
						echo "1 (2 inch) piece fresh ginger, peeled and thinly sliced", "<br/>";
						echo "2¼ pounds chicken wings, split and tips discarded", "<br/>";
						echo "1 tablespoon fish sauce (Optional)", "<br/>";
						echo "5¼ cups chicken broth", "<br/>";
						echo "1 cup glutinous sweet rice", "<br/>";
						echo "salt and pepper to taste", "<br/>";
						echo "1 green onion, chopped", "<br/>";
						echo "1 lemon, sliced (Optional) ", "<br/>";
						echo "1 teaspoon fish sauce for sprinkling, if desired (Optional)", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Heat the veg oil in a large pot over medium heat; cook and stir the onion, garlic, and ginger in the hot oil until fragrant, about 5 minutes.
			</li> <br/>
			<li>
				Add the chicken wings; cook and stir together for 1 minute. Stir the fish sauce into the pot, cover, and cook another 2 minutes.
			</li> <br/>
			<li>
				Pour the chicken broth into the pot. Add the sweet rice and stir. Bring the mixture to a boil; cover and cook for 10 minutes, stirring occasionally to assure the rice is not sticking to the bottom of the pot.
			</li> <br/>
			<li>
				Season with salt and pepper and garnish with the green onion, and serve with lemon slices and additional fish sauce, if desired.
			</li>
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