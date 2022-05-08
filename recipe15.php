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
	<div class="wrapper-16">
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
			<div class="left-side-bar-17">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dinner">Dinner</h1>
				<h3><a href="recipe15.php">Lumpiang Shanghai</a></h3>
				<img src="images/lumpia.jpg" title="Lumpiang Shanghai" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Lumpia or Lumpiang Shanghai is a type of Filipino egg roll.";
						echo "The basic filling is composed of ground pork along with minced onions, carrots, and seasonings such as salt and ground black pepper.";
						echo "This recipe post is all about how to make basic lumpia. Feel free to use this as a baseline. ";
						echo "One more interesting thing about this dish, is that lumpia is an all time favorite when it comes to occational feasts";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "50 pieces lumpia wrapper", "<br/>";
						echo "3 cups cooking oil", "<br/>";
					?>
				<h3><i> Filling ingredients: : </i></h3>
					<?php
						echo "1 1/2 lbs ground pork", "<br/>";
						echo "2 pieces onion minced", "<br/>";
						echo "2 pieces carrots minced", "<br/>";
						echo "1 1/2 teaspoons garlic powder", "<br/>";
						echo "1/2 teaspoon ground black pepper", "<br/>";
						echo "1/2 cup parsley chopped", "<br/>";
						echo "1 1/2 teaspoons salt", "<br/>";
						echo "1 tablespoon sesame oil", "<br/>";
						echo "2 eggs", "<br/>";
					?>
					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Combine all filling ingredients in a bowl. Mix well.
			</li><br/>
			<li>
				Scoop around 1 to 1 1/2 tablespoons of filling and place over a piece 
				of lumpia wrapper. Spread the filling and then fold both sides of the 
				wrapper. Fold the bottom. Brush beaten egg mixture on the top end of the 
				wrapper. Roll-up until completely wrapped. Perform the same step until 
				all mixture are consumed.
			</li><br/>
			<li>
				Heat oil in a cooking pot. Deep fry lumpia in medium heat until it floats.
			</li><br/>
			<li>
				Remove from the pot. Let excess oil drip. Serve. Share and enjoy
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