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
	<div class="wrapper-5">
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
			<div class="left-side-bar-6">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="breakfast">Breakfast</h1>
				<h3><a href="recipe4.php">Daing na Bangus</a></h3>
				<img src="images/daing.jpg" title="Daing na Bangus" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Daing na Bangus is perfect to eat for breakfast. I usually have it with sinangag na kanin and a spicy vinegar dip.";
						echo "A piece of sunny-side-up fried egg is nice to have with the meal. It is easy to source fresh milkfish from fishmongers almost anywhere in the Philippines.";
						echo "Milkfish is already tasty by itself, but we can still enhance the flavor by marinating it in vinegar, garlic, and peppercorn.";
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "4 baby bangus, butterflied, gutted and deboned", "<br/>";
						echo "1 cup vinegar", "<br/>";
						echo "5 cloves garlic, peeled and crushed", "<br/>";
						echo "1 teaspoon peppercorns, cracked", "<br/>";
						echo "1 teaspoon salt", "<br/>";
						echo "canola oil", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Wash bangus under cold running water, removing any leftover blood and
				entrails. Drain well.
			</li> <br/>
			<li>
				In a wide, deep dish (large enought to fit the fish), combine vinegar
				,garlic, peppercorns and salt. Whisk together until the salt is dissolved.
			</li> <br/>
			<li>
				Add fish, making sure that the fish is fully submerged in the solution.
				Marinate in the refregirator for atleast 4 hours or overnight for best
				results.(any longer than that will turn the fish mushy)
			</li> <br/>
			<li>
				Drain the fish from the vinegar and wipe down any aromatics.Discard 
				marinade.
			</li> <br/>
			<li>
				In a wide pan over medium heat, heat about 1-inch deep of oil. Gently slide
				in the fish and cook for about 3 to 5 minutes on each side or until
				golden and cooked through.
			</li> <br/>
			<li>
				Remove from the pan and drain on paper towels. Serve hot.
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