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
	<div class="wrapper-8">
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
			<div class="left-side-bar-9">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="lunch">Lunch</h1>
				<h3><a href="recipe7.php">Sinigang</a></h3>
				<img src="images/sinigang.jpg" title="Sinigang" class="bicol">
				<div class="description" id="description">
					<?php
						echo "One of the most beloved and familiar Filipino dishes out there, sinigang introduces a great balance of warmth and sourness.";
						echo "The tamarind broth is something that brings a great uniqueness to the dish, while hyping up the flavor of all other ingredients.";
						echo "This recipe has a wealthy amount of vegetables— from okra to eggplant to daikon radish. These perfectly complement our Sinigang broth.";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "4¼ cups water", "<br/>";
						echo "2 cups pork spare rib cut into chunks", "<br/>";
						echo "1 pc red onion, quartered	", "<br/>";
						echo "2 pcs medium sized tomato, quartered", "<br/>";
						echo "8 pcs sitaw, sliced into 2” pieces", "<br/>";
						echo "250g kangkong stalk and leaves", "<br/>";
						echo "1 pc talong, sliced", "<br/>";
						echo "2 pcs siling pangsigang", "<br/>";
						echo "1 (20g) pack Knorr Sinigang sa Sampalok Mix Original", "<br/>";
						echo "Optional: labanos, okra", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Begin by washing pork spare ribs in cold running water to remove 
				any visible impurities. Then, place pork ribs submerge in 
				a medium pot with a liter of water. Bring to a boil without
				covering the pot and allow the scum to float to the surface. 
				Meticulously remove the scums from the surface of the water 
				using a slotted spoon or a spatula. Scums are impurities found 
				in meat.
			</li> <br/>
			<li>
				After the broth clears up, turn you heat to medium setting, then
				it’s time toss in your onions and tomatoes to add flavor to the 
				broth. Cover your pot and let it simmer to fully cook your meat. 
				Use a fork to pierce the meat so that the flavors would also enter 
				the meaty parts of the spare ribs, You also do this so you can 
				tell if it’s already set and tender.
			</li><br/>
			<li>
				You can already add your vegetables. Start by adding the sitaw, kangkong 
				stalks and talong into the pot and cook until these turn dark green. 
				If you decide to use labanos and okra, you can also add those at this 
				point. This should take roughly around 2-3 minutes.
			</li><br/>
			<li>
				Add in your siling sigang, kangkong leaves and the Knorr Sinigang sa 
				Sampaloc Mix. Stir and let it simmer. It should be done in about 2-3 
				minutes.
			</li><br/>
			<li>
				All done! Transfer your Sinigang to a serving bowl. This is a happy treat 
				that warms, soothes and satisfies everyone in the family! Remember to prepare 
				extra servings of rice to enjoy the extra asim kilig taste of this Filipino 
				classic soup. Enjoy!
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