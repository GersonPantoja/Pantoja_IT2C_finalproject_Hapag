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
	<div class="wrapper-18">
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
			<div class="left-side-bar-19">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dessert">Dessert</h1>
				<h3><a href="recipe17.php">Leche Flan</a></h3>
				<img src="images/lecheflan.jpg" title="Leche Flan" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Leche Flan is a dessert made-up of eggs and milk with a soft caramel on top. It resembles crème caramel and caramel custard. ";
						echo "This delicious dessert is known throughout the world.It has been a regular item in the  menu of most restaurants because of its taste, ease in preparation and long shelf life. ";
						echo "It can also be added as a component to build other great tasting dessert creations.";
					?>
				</div>
				<h3 id="ingredients"><i>Ingredients: </i></h3>
					<?php
						echo "10 pieces eggs", "<br/>"; 
						echo "1 can condensed milk (14 oz)", "<br/>"; 
						echo "1 cup fresh milk or evaporated milk", "<br/>"; 
						echo "1 cup granulated sugar", "<br/>"; 
						echo "1 teaspoon vanilla extract", "<br/>"; 
					?>
					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				Using all the eggs, separate the yolk from the egg white (only egg yolks will be used).
			</li><br/>
			<li>
				Place the egg yolks in a big bowl then beat them using a fork or an egg beater.
			</li><br/>
			<li>
				Add the condensed milk and mix thoroughly.
			</li><br/>
			<li>
				Pour-in the fresh milk and Vanilla. Mix well.
			</li><br/>
			<li>
				Put the mold (llanera) on top of the stove and heat using low fire.
			</li><br/>
			<li>
				Put-in the granulated sugar on the mold and mix thoroughly until the solid sugar 
				turns into liquid (caramel) having a light brown color. Note: Sometimes it is hard 
				to find a Llanera (Traditional flan mold) depending on your location. I find it 
				more convenient to use individual Round Pans in making leche flan.
			</li><br/>
			<li>
				Spread the caramel (liquid sugar) evenly on the flat side of the mold.
			</li><br/>
			<li>
				Wait for 5 minutes then pour the egg yolk and milk mixture on the mold.
			</li><br/>
			<li>
				Cover the top of the mold using an Aluminum foil.
			</li><br/>
			<li>
				Steam the mold with egg and milk mixture for 30 to 35 minutes.
			</li><br/>
			<li>
				After steaming, let the temperature cool down then refrigerate.
			</li><br/>
			<li>
				Serve for dessert. Share and Enjoy!
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