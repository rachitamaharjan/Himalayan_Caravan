<!DOCTYPE html>
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
				<div class = "row2">
					<a href="#">SignUp </a>
           			<a href="#">SignIn </a>
				</div>
			</div>
		</div>
		<div class="navigation">
			<ul id="menuBar">
	            <li><a href="#" title="home">HOME</a> </li>
	            <li><a href="#" title="catagories">CATAGORIES</a></li>
	            <li><a href="#" title="products">PRODUCTS</a> </li>
	            <li><a href="#" title="about">ABOUT US</a> </li>
	            <li><a href="#" title="contact">CONTACT</a> </li>
        	</ul>
		</div>
	</div> <!-- header close-->
	<//menu bar-neekita>
	<?php
		
			
			if (isset($_POST["submit"]))
			{
				echo "Welcome &nbsp" . $_POST["namevalue"];
			}
			else
			{
				echo ($_SERVER["PHP_SELF"]);
			}
		?>
	<div id ="container">
		<div class="slideshow-container">
			<div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="1.jpg" style="width:100%;height:  450px;">
			    <div class="text">Caption one</div>
		  	</div>

			<div class="mySlides fade">
			   	<div class="numbertext">2 / 3</div>
			   	<img src="2.jpg" style="width:100%;height:  450px;">
			   	<div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
			   	<div class="numbertext">3 / 3</div>
			   	<img src="3.jpg" style="width:100%;height:  450px;">
			   	<div class="text">Caption Three</div>
			</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			    var i;
			    var slides = document.getElementsByClassName("mySlides");
			    var dots = document.getElementsByClassName("dot");
			    for (i = 0; i < slides.length; i++) 
			    {
			       slides[i].style.display = "none";  
			    }
			    slideIndex++;
			    if (slideIndex> slides.length) {slideIndex = 1}    
			    for (i = 0; i < dots.length; i++) 
			    {
			        dots[i].className = dots[i].className.replace(" active", "");
			    }
			    slides[slideIndex-1].style.display = "block";  
			    dots[slideIndex-1].className += " active";
			    setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
		<div id="para">
			<div class="veg">
				<img src="images.jpg" style="height:200px; width:200px; padding-top:20px; " \><br>
				<b>POTATOS</b> <br>
				Price : Rs.50 per kg <br>
				Quality : fresh <br>
			</div>
			<div class="fruits">
				<div class="second">
					<img src="images (1).jpg" style="height:200px;width:200px;padding-top:20px; " \><br>
					<b>MANGO</b> <br>
					Price : Rs.100 per kg <br>
					Quality : fresh <br>
				</div>
				<div class="third">
					<img src="download (1).jpg" style="height:200px;width:200px; padding-top:20px; " \>
					<br>
					<b>ORANGE</b> <br>
					Price : Rs.80 per kg <br>
					Quality : fresh <br>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
 	     	<b>&copy;Copyright -Himalayan Digital Corp. </b>
 	        <img src="twitter.jpg" class="img1" \>
            <img src="fb.png" class="img1" \>   
 	</div>

</body>
</html>