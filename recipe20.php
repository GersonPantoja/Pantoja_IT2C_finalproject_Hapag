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
	<div class="wrapper-21">
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
			<div class="left-side-bar-21">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dessert">Dessert</h1>
				<h3><a href="recipe20.php">Fruit Salad (Filipino Style)</a></h3>
				<img src="images/fruitsalad.jpg" title="Fruit Salad (Filipino Style)" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Pinoy Fruit Salad is a quick and easy dessert perfect for the warm weather. This dish makes use of canned fruit cocktail, table cream, and condensed milk.";
						echo "The mixture is chilled inside the fridge overnight before serving, to get the best result.";
						echo "This Pinoy Fruit Salad recipe that we have here makes use of one additional ingredient that makes it look and taste better – maraschino cherries. ";
						echo "This type of cherries is also called cocktail cherries because it is widely used as an ingredient for cocktails. This is an optional ingredient, so don’t worry if it is not available in your area.";
					?>
				</div>
				<h3 id="ingredients"><i>Ingredients: </i></h3>
					<?php
						echo "2 cans 30 oz. fruit cocktail", "<br/>";
						echo "1 can 7.6 oz. table cream", "<br/>"; 
						echo "7 oz. 1/2 can condensed milk", "<br/>"; 
						echo "12 pieces maraschino cherries", "<br/>"; 
					?>
					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Open the fruit cocktail and drain the syrup by pouring it on a colander. 
				Let the liquid drain totally (around 30 minutes).
			</li><br/>
			<li>
				Arrange the drained fruit cocktail in a mixing bowl. Add the table cream, 
				condensed milk, and maraschino cherries.
			</li><br/>
			<li>
				Gently fold the mixture until all the ingredients are well distributed. 
				Cover the mixing bowl with sling wrap then <br/>refrigerate overnight.
			</li><br/>
			<li>
				Remove from the fridge and transfer to a serving bowl.
			</li><br/>
			<li>
				Serve. Share and enjoy!
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