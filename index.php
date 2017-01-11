<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Fluffy Fashions</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<!-- This page uses the email Material Icon from Google http://google.github.io/material-design-icons/
		and the Twitter icon byy Austin Andrews found at https://materialdesignicons.com/icon/twitter -->

	<link rel="stylesheet" href="styles/style.css" />
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!-- This page uses the Pure CSS style for it's search box from purecss.io -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Importing jQuery from Google's CDN. Better than storing locally as this can improve load time
	where users may have the file cached from other websites -->

	<!-- including separate file for jQuery functions-->
	<script src="scripts/petshopjQuery.js"></script>
	

</head>

<body>
	<header>Fluffy Fashions <img src="img/paw.png"></img></header>
		<div class="nav">
			<ul>
			  <li><a id="home">Home</a></li>
			  <li><a id="contact">Contact</a></li>
			  <li><a id="shipping">Shipping</a></li>
			  <li><a id="about">About</a></li>
			  <li><a id="products">All Products</a></li>
			  <li><form name="searchform" class="searchform" method="get"> <input type="text" id="searchtext" class="searchtext" placeholder="Enter your search...">
			  	<img src="img/search.png" id="searchbutton" class="searchbutton" type="submit"></img></form></li>
		  	  <li><a id="help">Help</a></li>
			</ul>
		</div>

		<div class="left">
			<div class="leftcontent">
				<ul>
				  <li><img src="img/dog.png" id="dogbutton"></img></a></li>
				  <li><img src="img/cat.png" id="catbutton"></img></a></li>
				  <li><img src="img/bird.png" id="birdbutton"></img></a></li>
				  <li><img src="img/ferret.png" id="ferretbutton"></img></a></li>
				  <li><img src="img/axolotl.png" id="axolotlbutton"></img></a></li>
				  <li><img src="img/snake.png" id="snakebutton"></img></a></li>
				  <li><img src="img/hamster.png" id="hamsterbutton"></img></a></li>
				  <li><img src="img/rabbit.png" id="rabbitbutton"></img></a></li>
				</ul>
			</div>
		</div>

		<div class="main">
			<?php
		 	include('featured.php');
		 	?>
		</div>

	
</body>

</html>