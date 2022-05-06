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
	<div class="wrapper-7">
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
			<div class="left-side-bar-8">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="lunch">Lunch</h1>
				<h3><a href="recipe6.php">Pork Adobo</a></h3>
				<img src="images/adobo.jpg" title="Pork Adobo" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Being familiar with a well-loved and popular dish often leads us to turn to the same classic recipe all of the time.", "<br/>";
						echo "A plus for this dish is that it surely does not take away any of the clearly essential parts of your adobo recipe. It is enriched with savory, earthy flavors with that satisfying blend of seasonings.";
						echo "But we also take into account the little details and flourishes in taste that could further improve your meal. ";
						echo "This is why I think you should give this Pork Adobo recipe a try. ";
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "2 pounds pork belly, cut into 2-inch cubes", "<br/>";
						echo "1 onion, peeled and sliced thinly", "<br/>";
						echo "1 head garlic, peeled and minced", "<br/>";
						echo "2 bay leaves", "<br/>";
						echo "1 teaspoon salt", "<br/>";
						echo "1/2 teaspoon pepper", "<br/>";
						echo "1 tablespoon oil", "<br/>";
						echo "1 cup vinegar", "<br/>";
						echo "1/2 cup soy sauce", "<br/>";
						echo "1 cup water", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				In a bowl, combine pork, onions, garlic, bay leaves, salt, and 
				pepper. Place in the refrigerator and marinate for about
				30 minutes.
			</li><br/>
			<li>
				In a wide, heavy-bottomed skillet over medium heat, heat oil. 
				Add meat mixture and cook, turning occasionally, until 
				pork is lightly browned.
			</li><br/>
			<li>
				Add vinegar and allow to boil, uncovered and without stirring, 
				for about 3 to 5 minutes. 
			</li><br/>
			<li>
				Add soy sauce and water and stir to combine. Allow to a boil 
				for another 3 to 5 minutes. 
			</li><br/>
			<li>
				Lower heat, cover, and simmer for about 40 to 50 minutes or 
				until meat is fork-tender and sauce is reduced. Serve hot.
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