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
	<div class="wrapper-4">
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
			<div class="left-side-bar-5">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="breakfast">Breakfast</h1>
				<h3><a href="recipe3.php">Tortang Talong</a></h3>
				<img src="images/torta.png" title="Tortang Talong" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Beating an egg can make for a great ingredient in several recipes around the world.";
						echo "From baked goods to classic omelettes, it is endlessly versatile, and goes with both sweet and savory dishes. But who knew that some beaten eggs, eggplant, and the right seasonings could create the ever useful and delicious Tortang Talong?";
						echo "This delicious, classic recipe is a perfect go-to in most Filipino households. This is because it is quick, easy, and best of all, absolutely tasty without sacrificing nutritional value.";
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "4 pieces Chinese eggplant", "<br/>";
						echo "2 pieces raw eggs", "<br/>";
						echo "1 teaspoon salt", "<br/>";
						echo "6 tablespoons cooking oil";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Grill the eggplant until the color of skin turns black.
			</li> <br/>
			<li>
				Let the eggplant cool for a while then peel of the skin. Set aside.
			</li> <br/>
			<li>
				Crack the eggs and place in a bowl.
			</li> <br/>
			<li>
				Add salt and beat.
			</li> <br/>
			<li>
				Place the eggplant in the flat surface and flatten using a fork.
			</li> <br/>
			<li>
				Dip the flattened eggplant into the beaten egg mixture.
			</li> <br/>
			<li>
				Heat the pan and pour the cooking oil.
			</li> <br/>
			<li>
				Fry the eggplant(that was dipped in the beaten egg mixture). Make sure
				the both sides are <br/> cooked. Frying time will take you about 3 to
				4 minutes per side <br/> on the medium heat.
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