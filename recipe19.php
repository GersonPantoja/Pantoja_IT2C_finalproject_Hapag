<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hapag - Filipino Cuisine and Recipes</title>
	<link rel="stylesheet" href="css/style3.css">
</head>
<body>
	<div class="wrapper-20">
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
			<div class="left-side-bar-21">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dessert">Dessert</h1>
				<h3><a href="recipe19.php">Ginataang Bilo-Bilo</a></h3>
				<img src="images/bilobilo.jpg" title="Ginataang Bilo-Bilo" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Ginataang Bilo-bilo with Langka is a Filipino snack dish. It is composed of glutinous rice balls (locally known as bilo-bilo), coconut cream, sugar, sago pearls, and ripe jackfruit. ";
						echo "Some people consider this as a simplified version of the Ginataang halo-halo.";
					?>
				</div>
				<h3 id="ingredients"><i>Ingredients: </i></h3>
					<?php
						echo "2 cups glutinous rice flour", "<br/>";
						echo "1 cup water", "<br/>";
						echo "2-3 cups water", "<br/>";
						echo "2 400ml can coconut milk or cream", "<br/>";
						echo "1 ½ cup cooked tapioca pearls", "<br/>";
						echo "¾ cup sugar", "<br/>";
						echo "2 big sweet potatoes - peeled and cubed", "<br/>";
						echo "4 piece plantain bananas - peeled and cubed", "<br/>";
						echo "1 cup jackfruit - cut into strips", "<br/>";
					?>
					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Prepare the sticky rice balls by adding 1 cup of water to 2 cups glutinous rice 
				flour. Mix with a fork until it forms a <br/>dough. Scoop about half a spoon of 
				the dough and form them into balls using your palms. Set them aside.
			</li><br/>
			<li>
				In a pot, combine 2 cups water, coconut milk, and sugar and bring to boil. Add 
				the sweet potato cubes and cook for <br/>about 3 minutes stirring occasionally. Next, 
				add the plantain banana cubes and cook for about 3 minutes
			</li><br/>
			<li>
				Once the sweet potatoes and bananas are almost cooked, add the sticky rice balls 
				and let simmer until they are cooked <br/>(about 5 minutes) while stirring 
				occasionally. You know the sticky balls are done when they are floating.
			</li><br/>
			<li>
				Add the jackfruit slices and the cooked tapioca pearls. Let simmer for another 
				3-5 minutes or until all fruits are tender <br/>and cooked.
			</li><br/>
			<li>
				Note that it will continue to thicken even after removing it from the heat. 
				Serve hot or cold.
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