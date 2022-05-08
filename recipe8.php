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
	<div class="wrapper-9">
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
			<div class="left-side-bar-10">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="lunch">Lunch</h1>
				<h3><a href="recipe8.php">Kare-Kare</a></h3>
				<img src="images/karekare.jpg" title="Kare-Kare" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Kare Kare is a type of Filipino stew with a rich and thick peanut sauce. It is a popular dish in the Philippines served during special occasions. ";
						echo "The traditional recipe is composed of ox tail. There are instances wherein both ox tripe and tail are used.";
						echo "The vegetable components of the dish are string beans, eggplant, bok choy, and banana blossoms. Lightly browned toasted ground rice is used to thicken the sauce.";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "3 lbs oxtail cut in 2 inch slices you an also use tripe or beef slices", "<br/>";
						echo "1 piece small banana flower bud sliced", "<br/>";
						echo "1 bundle pechay or bok choy", "<br/>";
						echo "1 bundle string beans cut into 2 inch slices", "<br/>";
						echo "4 pieces eggplants sliced", "<br/>";
						echo "1 cup ground peanuts", "<br/>";
						echo "1/2 cup peanut butter", "<br/>";
						echo "1/2 cup shrimp paste", "<br/>";
						echo "34 Ounces water about 1 Liter", "<br/>";
						echo "1/2 cup annatto seeds soaked in a cup of water", "<br/>";
						echo "1/2 cup toasted ground rice", "<br/>";
						echo "1 tbsp garlic minced", "<br/>";
						echo "1 piece onion chopped", "<br/>";
						echo "salt and pepper", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				In a large pot, bring the water to a boil.
			</li><br/>
			<li>
				Put in the oxtail followed by the onions and simmer for 2.5 to 3 hrs or until 
				tender.(35 minutes if using a <br/>pressure cooker)
			</li><br/>
			<li>
				Once the meat is tender, add the ground peanuts, peanut butter, and coloring 
				(water from the annatto seed <br/>mixture) and simmer for 5 to 7 minutes.
			</li><br/>
			<li>
				Add the toasted ground rice and simmer for 5 minutes.
			</li><br/>
			<li>
				On a separate pan, saute the garlic then add the banana flower, eggplant, and 
				string beans and cook for <br/>5 minutes.
			</li><br/>
			<li>
				Transfer the cooked vegetables to the large pot (where the rest of the ingredients are)
			</li><br/>
			<li>
				Add salt and pepper to taste.
			</li><br/>
			<li>
				Serve hot with shrimp paste. Enjoy!
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