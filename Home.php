<!Doctype html>

<html>
	<head>
	<style>



p.date {
    text-align: right;
}

p.topic {
    text-align: left;
}
p.footer {
    text-align: right;
}
</style>
<//heading part neekita>
<meta charset="UTF-8">
	<title>HIMALAYAN CARAVAN</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" \>
<//heading part neekita>

	<//table border=1>
      <tr>
		<div class="topnav" id="myTopnav"><span class="dot"></span>
			<td><a href="home.php">Home</a></td>
			<td><a href="About_us.php">About us</a></td>
			<td><a href="Shop.php">Shop</a></td>
			<td><a href="Support Us.php">Support us</a></td>
			<td><a href="Contact Us.php">Contact us</a></td>
			<td><a href="login_page.php">Login/Sign up</a></td>
		
			</tr>
		</div>  
		
		<form>
	<///table>
	<//search box starts>
  	<div class="form-search"  >
    <!-- <label for="search"></label>-->
    <div class="box-input" id="search">
        <p class="date"><input type="text" name="search" value="" placeholder="What product you are looking for TODAY ?? " class="input-text" />
             
               <select class="ddslick"  id="cat" name="cat">
                 <option value="">All Categories</option>
                 
                   <option value="http://metrotarkari.com/vegetables"> Vegetables</option>
                                 <option value="http://metrotarkari.com/vegetables/fresh-vegetable">-Fresh Vegetable (36)</option>
                                 <option value="http://metrotarkari.com/vegetables/leafy-vegetable">-Leafy Vegetable (17)</option>
                                 <option value="http://metrotarkari.com/vegetables/herbs">-Herbs &amp; Salad (12)</option>
                                 
              </select>
            
     
     <button class="button" type="button" data-original-title="Search" rel="tooltip"><span><span><i class="fa fa-search"></i></span></span></button></p>
    </div>
   
</div>
  	
					
	<!--<a href="https://www.google.com/search" ><p class="date"><input type="search" name="googlesearch" value="What are you looking for?">
  <input type="submit"></p></a>!-->
		<title> Online Food System</title> 
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="framework.css">
	</head>  
	<body>
	<//menu bar-neekita starts>
	<div id = "header">
		<div class="header-top">
			<div class="logo">
				<a href="index.html" title="Logo">
					<img src="Logo1.jpg" height="200" width="200" align="left">
					<//img src="../images/logo.jpg" alt="Logo" height ="75px" width= "200px" \> 
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
	            <li><a href="home.php" >HOME</a> </li>
	            <li><a href="#" title="catagories">CATAGORIES</a></li>
	            <li><a href="#" title="products">PRODUCTS</a> </li>
	            <li><a href="#" title="about">ABOUT US</a> </li>
	            <li><a href="#" title="contact">CONTACT</a> </li>
	            <li><a href="login_page.php" title="log in">LOG IN/ SIGN UP</a> </li>
        	</ul>
		</div>
	</div>
	<//menu bar-neekita>
	<?php
		
			
			if (isset($_POST["submit"]))
			{
				echo "Welcome &nbsp" . $_POST["namevalue"];
			}
			else
			{
				//echo ($_SERVER["PHP_SELF"]);
			}
		?>
	<!--<div class="content">
		

		</div>
		<div id ="container">
		<div class="slideshow-container">
			<div class="mySlides fade">
			    <div class="numbertext">1 / 6</div>
			    <img src="mangoes.jpg" style="width:100%;height:  450px;">
			    <div class="text">Mangoes</div>
		  	</div>

			<div class="mySlides fade">
			   	<div class="numbertext">2 / 6</div>
			   	<img src="potatoes.jpg" style="width:100%;height:  450px;">
			   	<div class="text">Potatoes</div>
			</div>

			<div class="mySlides fade">
			   	<div class="numbertext">3 / 6</div>
			   	<img src="carrots.jpg" style="width:100%;height:  450px;">
			   	<div class="text">Carrots</div>!-->


			<!--<div class="mySlides fade">
			   	<div class="numbertext">4 / 6</div>
			    <img src="1.jpg" style="width:100%;height:  450px;">
			    <div class="text"> </div>
		  	</div>

			<div class="mySlides fade">
			   	<div class="numbertext">5 / 6</div>
			   	<img src="2.jpg" style="width:100%;height:  450px;">
			   	<div class="text"> </div>
			</div>

			<div class="mySlides fade">
			   	<div class="numbertext">6 / 6</div>
			   	<img src="3.jpg" style="width:100%;height:  450px;">
			   	<div class="text"> </div>
			</div>!-->

		</div>
		<br>
		<!--
		<//image slider code>
		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
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
		</script><//image slider>
	<!-- <//image slider> !-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!--<h2 class="w3-center">Manual Slideshow</h2>!-->

<!--<div class="w3-content w3-display-container">
  <img class="mySlides" src="mangoes.jpg" style="width:100%">
  <img class="mySlides" src="potatoes.jpg" style="width:100%">
  <img class="mySlides" src="carrots.jpg" style="width:100%">
  <!img class="mySlides" src="img_forest.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>


 <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>!-->
		<!-- <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="mangoes.jpg" style="width:100%">
    <div class="text">Mangoes</div>
  </div> 
   <div class="mySlies fade">
    <div class="numbertext">2 / 3</div>
    <img src="potatoes.jpg" style="width:100%">
    <div class="text">Potatoes</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="carrots.jpg" style="width:100%">
    <div class="text">Carrots</div>
  </div>

  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> !-->
  		<//image slider

  	<//recent news starts>	

  	
            <p align="right"><div class="main-footer"> 
			  	<div class="col-12 col-lg-4">
			  				<p align="right">

			                  <div class="blog-aside"> 
			                    <div class="row">
			                      <div class="col-12 col-sm-6 col-lg-12">
			                        <div class="blog-aside-item blog-aside-item-categories">
			                          <h3>Blog <b>Categories </b></h3>
			                          <ul>
			                            <li><a href="#"><span>Safari </span><span>12</span></a></li>
			                            <li><a href="#"><span>Rafting </span><span>110</span></a></li>
			                            <li><a href="#"><span>Cycle tourism  </span><span>54</span></a></li>
			                            <li><a href="#"><span>Hicking & camping  </span><span>32</span></a></li>
			                            <li><a href="#"><span>Saling </span><span>44</span></a></li>
			                            <li><a href="#"><span>Adventure </span><span>67</span></a></li>
			                          </ul>
			                        </div>
			                      </div>
			                    </div>
			                   </div> 
			                 </p>  
			    </div>
			    <p align="right"><div class="col-12 col-sm-6 col-lg-12">
                        <div class="blog-aside-item blog-aside-item-recent">
                          <h3>Popular <b>Posts</b></h3>
                          <div class="blog-aside-item-recent-item"> 
                            <div class="blog-aside-item-recent-item-image"><img src="images/blog-list-1.jpg" alt=""></div><a class="blog-aside-item-recent-item-content" href="blog-single.html"> 
                              <h5>Lorem Ipsum dolor sit ammet</h5>
                              <div class="blog-aside-item-recent-item-info"><span> <i class="fa fa-comment"> </i>276 </span><span> <i class="fa fa-eye"> </i>3 671</span></div></a>
                          </div>
                          <div class="blog-aside-item-recent-item"> 
                            <div class="blog-aside-item-recent-item-image"><img src="images/blog-list-2.jpg" alt=""></div><a class="blog-aside-item-recent-item-content" href="blog-single.html"> 
                              <h5>Lorem Ipsum dolor sit ammet</h5>
                              <div class="blog-aside-item-recent-item-info"><span> <i class="fa fa-comment"> </i>276 </span><span> <i class="fa fa-eye"> </i>3 671</span></div></a>
                          </div>
                          <div class="blog-aside-item-recent-item"> 
                            <div class="blog-aside-item-recent-item-image"><img src="images/blog-list-3.jpg" alt=""></div><a class="blog-aside-item-recent-item-content" href="blog-single.html"> 
                              <h5>Lorem Ipsum dolor sit ammet</h5>
                              <div class="blog-aside-item-recent-item-info"><span> <i class="fa fa-comment"> </i>276 </span><span> <i class="fa fa-eye"> </i>3 671</span></div></a>
                          </div>
                          <div class="blog-aside-item-recent-item"> 
                            <div class="blog-aside-item-recent-item-image"><img src="images/blog-list-4.jpg" alt=""></div><a class="blog-aside-item-recent-item-content" href="blog-single.html"> 
                              <h5>Lorem Ipsum dolor sit ammet</h5>
                              <div class="blog-aside-item-recent-item-info"><span> <i class="fa fa-comment"> </i>276 </span><span> <i class="fa fa-eye"> </i>3 671</span></div></a>
                          </div>
                          <div class="blog-aside-item-recent-item"> 
                            <div class="blog-aside-item-recent-item-image"><img src="images/blog-list-5.jpg" alt=""></div><a class="blog-aside-item-recent-item-content" href="blog-single.html"> 
                              <h5>Lorem Ipsum dolor sit ammet</h5>
                              <div class="blog-aside-item-recent-item-info"><span> <i class="fa fa-comment"> </i>276 </span><span> <i class="fa fa-eye"> </i>3 671</span></div></a>
                          </div>
                        </div>
                </div>
                </p>        
			</div> 
			</p>                  

  	<//recent news>
  	
>	</form>
		
		
		
		</body>
</html>