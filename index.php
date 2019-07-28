<html>
<head><title>Film Shop</title></head>
	<style>
	html, body {
	
	}
	</style>
<body>
	<div align="center">
		
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			
			<div style="margin: 15px">
				Welcome!
				<br>
				<a href="login.php">Login</a> <br>
				<a href="Views/Register.php">Register</a> <br>
				
			</div>
		</div>
	</div>
</body>
</html>
