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
</style>
	<//table border=1>
      <tr>
		<div class="topnav" id="myTopnav">
			<td><a href="home">Home</a></td>
			<td><a href="About_us.php">About us</a></td>
			<td><a href="Shop.php">Shop</a></td>
			<td><a href="Support Us.php">Support us</a></td>
			<td><a href="Contact Us.php">Contact us</a></td>
			<td><a href="login_page.php">Login/Sign up</a></td>
		
			</tr>
		</div>   
		<form>
	<///table>
	<a href="https://www.google.com/search" ><p class="date"><input type="search" name="googlesearch">
  <input type="submit"></p></a>
		<title> Online Food System</title> 
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="stylesheets/framework_file.css">
	</head>  
	<body>
	</form>
		<div class="content">
		<img src="Logo1.jpg" height="200" width="200" align="left">
			<h1>HIMALAYAN CARAVAN</h1>

		</div>
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
		
		</body>
</html>