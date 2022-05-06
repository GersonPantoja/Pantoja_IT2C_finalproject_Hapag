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
	<div class="wrapper-10">
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
			<div class="left-side-bar-11">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="lunch">Lunch</h1>
				<h3><a href="recipe9.php">Laing</a></h3>
				<img src="images/laing.jpg" title="Laing" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Laing na Gabi or simply Laing is a type of Filipino vegetable dish. Taro leaves are sliced and dried for a few days before being cooked in coconut milk. ";
						echo "Pork is a common ingredient added to this dish. I used pork shoulder for this recipe.";
						echo "Pork belly will work too.";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "5 garlic, crushed", "<br/>";
						echo "1 piece onion, medium size", "<br/>";
						echo "3 ginger, crushed", "<br/>";
						echo "3 cups second extract of coconut milk", "<br/>";
						echo "250 grams pork, chopped into smaller pieces", "<br/>";
						echo "1 tablespoon salt", "<br/>";
						echo "3 pieces red chili peppers", "<br/>";
						echo "2 pieces green chili peppers", "<br/>";
						echo "3 dried taro leaves/stalks", "<br/>";
						echo "1 1/2 cups first extract of coconut milk", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				In a cooking pot, put 3 cups of coconut milk (second extract), pork, salt, 
				ginger, half of the garlic and onion, and <br/>dried taro leaves/stalks. Then 
				add the remaining garlic and onion along with the chopped chili peppers. 
				Cover and <br/>put into low fire.
			</li><br/>
			<li>
				Allow the mixture to boil until the coconut milk is reduced. Mix occasionally 
				to avoid burning.
			</li><br/>
			<li>
				When the coconut milk is reduced, add the first extract of coconut milk (kakang gata). 
				Cover and let it simmer for <br/>longer time. Stir every once in a while to avoid burning.
			</li><br/>
			<li>
				Adjust the saltiness and the spice according to your preference. Allow to cook until 
				the leaves and stalks are softened.
			</li><br/>
			<li>
				When the coconut milk is reduced, or when the oil starts to come out, turn off the heat. 
				Your laing is now ready to serve!
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