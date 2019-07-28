
<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

if ($_SESSION['thefilmsearch'] == NULL)
	{
		echo "No films found, try again";
	}
 	else {
		
	    include '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Controller/ShopController.php';
	
		include '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Controller/PaymentController.php';
		echo "You are buying "; echo $_SESSION['thefilmsearch'];
	}



if(isset($_POST['buy'])) {
	header("Location: /u1764486/AssignmentIsrarHussain/MyWork/Controller/BuyController.php");
	//include '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Controller/BuyController.php';
	}


?>
<html>
<head><title>Buy Films</title></head>
	
<body>
	
	<div align="center">
		<div align="left">
			
				<form action="" method="post">
					
					
					<input type="submit" name='buy' value="buy film" class='submit'/><br />
				</form>
	</div>
			
			</div>
		</div>
	</div>
</body>
</html>