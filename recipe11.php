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
	<div class="wrapper-12">
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
			<div class="left-side-bar-13">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dinner">Dinner</h1>
				<h3><a href="recipe11.php">Tinolang Manok</a></h3>
				<img src="images/Tinola.jpg" title="Tinolang Manok" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Chicken Tinola is a Filipino soup dish. It involves cooking chicken pieces in ginger broth. It is a popular cold weather dish. I always feel warm and cozy every time I eat it. ";
						echo "This Filipino Chicken Soup is best enjoyed with fish sauce as dipping sauce, and a cup of warm white rice. Tinola is traditionally cooked with wedges of unripe papaya and malunggay leaves. ";
						echo "These components make it a good source of nutrients. The secret in making a good tinola is to simmer the chicken for longer periods of time.";
						echo ". This extracts the flavor from the chicken. It also makes the chicken tender in the process.";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "1 tbsp cooking oil", "<br/>";
						echo "1 pc onion, small -sized, chopped", "<br/>";
						echo "2 cloves garlic, chopped", "<br/>";
						echo "1 pc ginger, cut into strips", "<br/>";
						echo "½ kilo chicken, cut into 8 pcs", "<br/>";
						echo "4 cups water", "<br/>";
						echo "2 pcs Knorr chicken cubes", "<br/>";
						echo "1 pc chayote or 1 pc small - sized green papaya, sliced", "<br/>";
						echo "2 stalks moringa leaves", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Get a pot and bring it up to medium heat before pouring in the oil. Drop in 
				the onions, garlic and ginger and sauté slowly for about 2 minutes or until 
				you can smell the lovely aroma.
			</li><br/>
			<li>
				It’s time to drop in the chicken pieces and stir until it turns white or light 
				brown in color.
			</li><br/>
			<li>
				Pour in the water and add your Knorr Chicken Broth cubes. Bring this to a simmer 
				until chicken is tender and cooked through.
			</li><br/>
			<li>
				You can now add your sayote or green papaya and cook until tender.
			</li><br/>
			<li>
				Dahon ng sili is added at the last stage to ensure leaves (and nutrients) don’t 
				dry up. Give this a minute then it is done. Malunggay is also another healthy 
				alternative because it is packed with vitamins and minerals which are good for 
				nursing moms and kids as well.
			</li><br/>
			<li>
				Enjoy this with patis and calamansi on the side. See the faces of your whole 
				family light up as you bring this to the table.
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