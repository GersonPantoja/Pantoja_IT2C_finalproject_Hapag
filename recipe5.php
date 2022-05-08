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
	<div class="wrapper-6">
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
			<div class="left-side-bar-7">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="breakfast">Breakfast</h1>
				<h3><a href="recipe5.php">Bibingka</a></h3>
				<img src="images/bibingka.jpg" title="Bibingka" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Typically, one enjoys bibingka with another type of rice cake, puto bumbong, especially after Simbang Gabi. Hot drinks, like coffee or chocolate, also make the ideal companion for this treat. ";
						echo "Treats like bibingka often brings back a lot of cherished moments –– of warmth, and spending time with loved ones. Food is memory, and by cooking it effectively, bibingka can bring back some of our best ones.", "<br/>";
						echo "The traditional bibingka recipe may seem quite daunting at first; after all, who just has clay pots or Bibingka ovens just lying around at home? ";
						echo "But this bibingka recipe is simple and can be made in any typical household kitchen. ";
						echo "All you need are some ordinary cake pans and a kitchen oven. And with rice flour instead of regular galapong, you’ll have your own bibingka in no time!";
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "2 cups rice flour", "<br/>";
						echo "1/2 cup glutinous rice flour", "<br/>";
						echo "1 cup sugar", "<br/>";
						echo "1 tablespoon baking powder", "<br/>";
						echo "1 teaspoon salt", "<br/>";
						echo "1 1/2 cups coconut milk", "<br/>";
						echo "1/2 cup water", "<br/>";
						echo "3 eggs, beaten", "<br/>";
						echo "1/4 cup melted butter", "<br/>";
						echo "2 salted eggs, peeled and sliced lengthwise", "<br/>";
						echo "2 ounces cream cheese, sliced thinly (you can substitute kesong puti or queso de bola or any available cheese at hand)", "<br/>";
					?>
				<h3><i>For toppings: </i></h3>
					<?php

						echo "margarine or butter, softened", "<br/>";
						echo "Sugar to taste", "<br/>";
						echo "Grated mature coconut", "<br/>";

					?>
				<h3><i> Equipment: </i></h3>
					<?php
						echo "mamon tin molds", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				In a large bowl, combine rice flour, glutinous rice flour, sugar,
				baking powder, and salt. Whisk until well-combined.
			</li> <br/>
			<li>
				Add coconut milk, water, butter, and eggs. Stir until smooth and
				well-blended.
			</li> <br/>
			<li>
				Cover the batter and refrigerate overnight.
			</li><br/>
			<li>
				Rinse banana leaves under warm water and wipe off any dirt or grit.
				Using scissors, trim any thick edges and cut into circles large
				enough to cover bottom and  sides of the pan.
			</li><br/>
			<li>
				Quickly pass and heat banana leaves over stove flames for a few 
				seconds or until just softened. Line the pans, making sure the
				leaves are intact with no rips.
			</li><br/>
			<li>
				Pour the batter into the prepared pans up to 3/4 full. Arrange sliced
				salted eggs and cream cheese slices on top.
			</li><br/>
			<li>
				Arrange the filled tin molds in a single layer on a baking sheet and 
				place in the oven on the lower rack. Bake in a 375 F oven for 
				about 20 to 25 minutes or until a toothpick inserted in the middle
				comes out clean.
			</li><br/>
			<li>
				Transfer the baking sheet on the top rack and continue to cook for
				about 3 to 5 minutes or until lightly golden.
			</li><br/>
			<li>
				Remove from heat. Spread margarine or butter and sprinkle sugar on top.
				Garnish with grated coconut. Serve hot.
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