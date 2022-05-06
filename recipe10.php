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
	<div class="wrapper-11">
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
			<div class="left-side-bar-12">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="lunch">Lunch</h1>
				<h3><a href="recipe10.php">Pinakbet</a></h3>
				<img src="images/pinakbet.jpg" title="Pinakbet" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Pinakbet or Pakbet is a Filipino vegetable stew from the Ilocos region.";
						echo "Its name is derived from the Ilocano word pinakebbet which means “shriveled”,";
						echo "in reference to the vegetables being sweated in the pot over low heat until “shrunken”.";
						echo "The dish makes use of indigenous produce, root crops, and beans that are accessible and plentiful in the area such as okra, ginger, tomatoes, eggplant, ampalaya, sitaw, siling duwag, and kamote. ";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "¼ kilo pork belly, cut into strips", "<br/>";
						echo "Chicharon (Optional)", "<br/>";
						echo "3–4 tablespoons shrimp paste", "<br/>";
						echo "Medium squash (Cut into cubes)", "<br/>";
						echo "1 pc. onion (chopped)", "<br/>";
						echo "3 minced Garlic", "<br/>";
						echo "1 tablespoon oil", "<br/>";
						echo "2–3 medium tomatoes (chopped)", "<br/>";
						echo "2 to 3 cups of water", "<br/>";
						echo "5 pcs. young okra (cut into halves diagonally)", "<br/>";
						echo "½ bunch string beans (cut into 3-inch lengths)", "<br/>";
						echo "1 medium Ampalaya (cleaned and cut into slices)", "<br/>";
						echo "1 large Eggplant (cleaned and cut into cubes)", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				In a pan, saute onion and garlic over medium heat until tender and aromatic.
			</li><br/>
			<li>
				Add pork and cook for 3 to 5 minutes or until lightly browned.
			</li><br/>
			<li>
				Add the shrimp paste and continue to cook for about 2 minutes.
			</li><br/>
			<li>
				Add tomatoes and cook for about 5 minutes or until softened.
			</li><br/>
			<li>
				Add water and bring to a boil.
			</li><br/>
			<li>
				Simmer for 10 to 15 minutes or until pork is tender.
			</li><br/>
			<li>
				Add more water in ½ cup increments as needed to maintain about 1 cup of liquid.
			</li><br/>
			<li>
				Add squash and cook for 4 minutes.
			</li><br/>
			<li>
				Add okra, long beans, Ampalaya, and Eggplant.
			</li><br/>
			<li>
				Add Chicharon.
			</li><br/>
			<li>
				Best serve with Rice.
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