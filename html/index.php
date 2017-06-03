Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Gist
 @smilerac
 Sign out
 Watch 0
  Star 0
  Fork 0 Nikita53/Himalayan-Caravan
 Code  Issues 0  Pull requests 0  Projects 0  Wiki Insights 
Branch: master Find file Copy pathHimalayan-Caravan/html/index.html
0bee0b3  22 hours ago
@Nikita53 Nikita53 first commit
1 contributor
RawBlameHistory     
95 lines (85 sloc)  2.7 KB
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HIMALAYAN CARAVAN</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css" \>
	
	
</head>
<body>
	<div id = "header">
		<div class="header-top">
			<div class="logo">
				<a href="index.html" title="Logo">
					<img src="../images/logo.jpg" alt="Logo" height ="75px" width= "200px" \> 
				</a>
			</div>
			<div class="row">
				<div class ="row1">
					<h1> HIMALAYAN CARAVAN </h1> 
				</div>
				<div class = "row2">

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
	<div id ="container">
		<div class="slideshow-container">
			<div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="../images/1.jpg" style="width:100%;height:  450px;">
			    <div class="text">Caption one</div>
		  	</div>

			<div class="mySlides fade">
			   	<div class="numbertext">2 / 3</div>
			   	<img src="../images/2.jpg" style="width:100%;height:  450px;">
			   	<div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
			   	<div class="numbertext">3 / 3</div>
			   	<img src="../images/3.jpg" style="width:100%;height:  450px;">
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

	</div>

</body>
</html>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help