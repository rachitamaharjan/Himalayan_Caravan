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
					<a href="login_page.php">SignUp </a>
           			<a href="login_page.php">SignIn </a>
				</div>
			</div>
		</div>
		<//search box starts>
  	<div class="form-search"  >
    <!-- <label for="search"></label>-->
    <div class="box-input" id="search">
        <p align="right"><input type="text" name="search" value="" placeholder="What product you are looking for TODAY ?? " class="input-text" />
             
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

		<div class="navigation">
			<ul id="menuBar">
	            <li><a href="home.php" title="home">HOME</a> </li>
	            <li><a href="categories.php" title="catagories">CATAGORIES</a></li>
	            <li><a href="Products.php" title="products">PRODUCTS</a> </li>
	            <li><a href="About_us.php" title="about">ABOUT US</a> </li>
	            <li><a href="Contact_us.php" title="contact">CONTACT US</a> </li>
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
				//echo ($_SERVER["PHP_SELF"]);
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
		<!--<//recent news starts>
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


  	<//recent news>!-->

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