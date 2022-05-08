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
	<div class="wrapper-13">
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
			<div class="left-side-bar-14">
				<h2><center>Content</center></h2>
					<ul>
						<li><a href="#description" class="house">Description</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#direction">Direction</a></li>

					</ul>
			</div>
			<div class="content">
				<h1 id="dinner">Dinner</h1>
				<h3><a href="recipe12.php">Beef Mechado</a></h3>
				<img src="images/beefmechado.jpg" title="Beef Mechado" class="bicol">
				<div class="description" id="description">
					<?php
						echo "Beef Mechado is a delicious tomato-based stew that pairs perfectly with a warm cup of rice. It is hearty and filling, and its taste can bring back the comfort of home.";
						echo "The sauce can be made from chopped ripe tomato or canned tomato sauce. This dish is prepared mostly during weekends or special occasions. ";
						echo "TIt takes around 90 minutes to cook it completely using the traditional method. It makes sense to make it when there is enough time.";
						echo "The original recipe for beef mechado included the process of larding. Larding is what people call the cooking method of adding fatty meat to otherwise lean or bony portions. In the original beef mechado, pork back-fat (the “wicks”) were woven through beef chuck; this gave the meat a juicier flavor. Nowadays, this method isn’t so commonly used anymore, as there are other ways to make your beef mechado juicy and tender.";
						
					?>
				</div>
				<h3><i>Ingredients: </i></h3>
					<?php
						echo "2 tbsp canola oil", "<br/>";
						echo "1 medium onion chopped", "<br/>";
						echo "6 cloves garlic minced", "<br/>";
						echo "2 lbs of beef chuck or any beef cut with fat, cut into 2 inches cubes", "<br/>";
						echo "1/2 tsp cracked peppercorns", "<br/>";
						echo "2-3 bay leaves (Laurel Leaves)", "<br/>";
						echo "1/4 cup soy sauce", "<br/>";
						echo "1/4 cup lemon or kalamansi juice", "<br/>";
						echo "1 cup tomato sauce", "<br/>";
						echo "3 cups water, add more if needed", "<br/>";
						echo "cooking oil for frying", "<br/>";
						echo "2 medium potatoes sliced", "<br/>";
						echo "2 medium carrots sliced", "<br/>";
						echo "1/2 tsp ground pepper", "<br/>";
						echo "salt to taste", "<br/>";
						echo "1 small green bell pepper sliced", "<br/>";
						echo "1 small red bell pepper sliced", "<br/>";
						echo "1 tbsp sugar (Optional)", "<br/>";
					?>

					<h3 id="direction"><i> Directions: </i></h3>
					<ol>
			<li>
				In a wide pan, heat 2 tablespoon cooking oil. Saute onions and garlic until 
				soft and aromatic for about a minute. Add beef and cook until brown for 
				about 5 minutes. 
			</li><br/>
			<li>
				Add cracked peppercorns, bay leaves, soy sauce and lemon juice. Stir and 
				simmer for about 5 minutes.
			</li><br/>
			<li>
				Add tomato sauce and water. Bring into a quick boil and reduce heat to simmer 
				until beef is tender for about an hour or two while stirring occasionally. 
				Add more water as needed until beef is fully tender.
			</li><br/>
			<li>
				In a separate pan, heat enough cooking oil and fry potatoes and carrots until 
				brown and slightly cooked. Remove potatoes and carrots and set aside.
			</li><br/>
			<li>
				Once beef is fully tender and sauce starts to thickens, add fried fried 
				potatoes and carrots. Season with ground pepper and salt to taste or as needed. 
				Feel free to add sugar to balance the saltiness. Continue to cook until potatoes 
				and carrots are fully cooked and sauce is reduced while stirring gently occasionally.
			</li><br/>
			<li>
				Add bell peppers and stir. Simmer for few minutes and serve while hot with 
				steamed white rice. Enjoy!
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