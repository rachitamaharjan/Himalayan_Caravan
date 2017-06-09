<html>
<head>
	<meta charset="UTF-8">
	<title>HIMALAYAN CARAVAN</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" \>
</head>
<body>
	<form action ="product_bought.php" method="post" enctype="multipart/form-data">
	<div id = "header">
		<div class="header-top">
			<div class="logo">
				<a href="index.html" title="Logo">
					<img src="logo.jpg" alt="Logo" height ="75px" width= "200px" \> 
				</a>
			</div>
			<div class="row">
				<div class ="row1">
					<h1> HIMALAYAN CARAVAN </h1> 
				</div>
				
			</div>
		</div>
		<div class="navigation">
			<ul id="menuBar">
	            <li><a href="home.php" title="home">HOME</a> </li>
	            <li><a href="categories.php" title="categories">CATEGORIES</a></li>
	            <li><a href="Products.php" title="products">PRODUCTS</a> </li>
	            <li><a href="About_us.php" title="about">ABOUT US</a> </li>
	            <li><a href="Contact_us.php" title="contact">CONTACT US</a> </li>
        	</ul>
		</div>
	</div> <!-- header close-->

	<?php 
		include 'product_categories.php';

	?>
		

		</form>
	</body>
</html>