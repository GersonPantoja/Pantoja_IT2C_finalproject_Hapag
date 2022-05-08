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
	<div class="wrapper-15">
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
			<div class="left-side-bar-16">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dinner">Dinner</h1>
				<h3><a href="recipe14.php">Bicol Express</a></h3>
				<img src="images/bicolexpress.png" title="Bicol Express" class="bicol">
				<div class="description" id="description">
					<?php
						echo "The mild sweetness of coconut milk brings a sense of delight to the sharp notes of chili pepper and bagoong in the classic Bicol Express recipe. ";
						echo "This contrast has long created a spell-binding richness in taste for the dish. And this has helped make it arguably one of the most popular Filipino dishes.";
						echo "And righteously so, as it has all of the well-meaning components of classic savory Philippine cuisine. ";
						echo "Bicol Express, in all of its well-balanced spice and sweetness, also makes for an irresistible cold day meal. With a creamy, delicious stew containing ginger, and a generous amount of essential seasonings in salt and pepper, the flavors come together for the most comforting spoonful of meat and soup.";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "1/2 lb. pork belly, diced", "<br/>";
						echo "2 cups thin coconut milk", "<br/>";
						echo "2 tablespoon fresh alamang (shrimp paste)", "<br/>";
						echo "10 pieces Thai chili pepper, stemmed and minced", "<br/>";
						echo "6 pieces long chili (siling haba, siling panigang), sliced", "<br/>";
						echo "3 cloves garlic, minced", "<br/>";
						echo "1 medium-sized onion, minced", "<br/>";
						echo "1 cup thick coconut cream", "<br/>";
						echo "3 tablespoon minced ginger", "<br/>";
						echo "salt and pepper to taste", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Heat a pan and then pour-in the cooking oil.
			</li><br/>
			<li>
				Sauté the garlic, onion, and ginger.
			</li><br/>
			<li>
				Add the pork and cook for 8 minutes or until the color becomes light brown.
			</li><br/>
			<li>
				Mix then coconut milk and alamang (shrimp paste).
			</li><br/>
			<li>
				Bring to a boil, lower heat and then simmer for 10 minutes.
			</li><br/>
			<li>
				Add chili peppers and cook until half the liquid has evaporated.
			</li><br/>
			<li>
				Add the long chili (siling haba/panigang).
			</li><br/>
			<li>
				Pour in thick coconut cream and continue cooking until oil comes out from 
				the cream.
			</li><br/>
			<li>
				Add salt and ground black pepper to taste.
			</li><br/>
			<li>
				Serve hot.
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