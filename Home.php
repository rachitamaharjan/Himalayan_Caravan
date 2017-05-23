<html>
	<body>
		<form>
			<table border=1>
				<tr>
					<td><a href="Home.php">Home</a></td>
					<td><a href="About_us.php">About Us</a></td>
					<td><a href="Shop.php">Shop</a></td>
					<td><a href="Support_us.php">Support Us</a></td>
					<td><a href="Contact_us.php">Contact Us</a></td>
					<td><a href="login_page.php">Login/Sign up</a></td>
				</tr>
			</table>
		</form>



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