<?php
	require 'DBconfig.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<html>
<head><title>Dashboard</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div ><b><?php echo "userid "; echo $_SESSION['logged_in']; ?></b></div>
			<div style="margin: 15px">
				Welcome <?php echo $_SESSION['name'];  ?> <br>
				<a href="Controller/FilmsPurchasedController.php">View My Films</a> <br>
				<a href="Views/ShopView.php">Buy Films</a> <br>
				<a href="Controller/ProfileController.php">My Account Details</a> <br>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>
