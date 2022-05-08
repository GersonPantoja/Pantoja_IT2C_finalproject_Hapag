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
	<div class="wrapper-17">
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
			<div class="left-side-bar-18">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dessert">Dessert</h1>
				<h3><a href="recipe16.php">Halo-Halo</a></h3>
				<img src="images/halohalo.jpg" title="Halo-Halo" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Halo halo is a famous dessert in the Philippines. It is composed of various ingredients that are all mixed together, along with shaved ice and evaporated milk.";
						echo "Some of he common ingredient used to make Halo halo are sugar palm (kaong), boiled kidney beans, flat rice crisps (pinipig), coconut gel (nata de coco), ripe jackfruit, colored gelatin, tapioca pearls, sweetened plantains, and macapuno.";
						echo "The ingredients are placed in a tall glass with a few teaspoons of sugar. Shaved ice is added after all the components are in place.";
						echo "Special Halo halo is topped with leche flan and ube halaya — sometimes ice cream is added. Evaporated milk is poured on top for the finale.";
						
					?>
				</div>
				<h3 id="ingredients"><i>Ingredients: </i></h3>
					<?php
						echo "1/2 cup gulaman cubes or sago", "<br/>";
						echo "1/2 cup sweetened beans (garbanzo, red mung, and/or white beans)", "<br/>";
						echo "1/2 cup Nata de coco, drained well", "<br/>";
						echo "1/2 cup Kaong, drained well", "<br/>";
						echo "1/2 cup sweetened saba bananas", "<br/>";
						echo "1/2 cup sweetened jackfruit strips", "<br/>";
						echo "1/4 cup sweetened macapuno", "<br/>";
						echo "1/2 cup ube halaya", "<br/>";
						echo "shaved ice", "<br/>";
						echo "1 cup evaporated milk", "<br/>";
						echo "1 cup leche flan", "<br/>";
						echo "4 scoops ice cream (mango, ube, or vanilla)", "<br/>";
					?>
					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Prepare the gulaman according to package directions. Use less water than 
				called for to yield a firmer texture.
			</li><br/>
			<li>
				Prepare the ingredients from scratch or use bottled halo-halo ingredients.
			</li><br/>
			<li>
				In a tall glass, add about a teaspoon each of desired add-ins to about 1/3 full.  
			</li><br/>
			<li>
				Pack the glass with shaved ice.   
			</li><br/>
			<li>
				Drizzle evaporated milk over the ice.  
			</li><br/>
			<li>
				Top the ice with leche flan and scoop of ice cream. 
			</li><br/>
			<li>
				Garnish with strips of macapuno and sprinkle with pinipig, if desired.
			</li><br/>
			<li>
				Serve immediately.
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