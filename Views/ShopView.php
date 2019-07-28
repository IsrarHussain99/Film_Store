
<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

if(isset($_POST['search'])) {
	
	echo "Your Search: ";
	$searchinput = $_POST['search'];
	$_SESSION['thefilmsearch'] = $searchinput;
	
	echo $searchinput;
	
	if ($searchinput == NULL)
	{
		echo "No films found, try again";
	}
 	else {
		header("Location: FilmBuy.php");
	}
	
}


?>
<html>
<head><title>Search a Film name or Keyword</title></head>
	
<body>
	
	<div align="left">
		<div align="left">
			
					<form id="none" method="post" name="search1">
		        <input type="text" Placeholder="Search Films" name="search" size="30" maxlength="120"><input type="submit" value="search" class="button">
		</form>
	</div>
				<a href="/u1764486/AssignmentIsrarHussain/MyWork/dashboard.php">Home</a> <br>
				<a href="/u1764486/AssignmentIsrarHussain/MyWork/logout.php">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>