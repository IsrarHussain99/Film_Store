<?php

if(isset($_POST['submit'])) {
	
	
	$NEWcno = $_POST['cno'];
	$NEWctype = $_POST['ctype'];
	$NEWcexpr = $_POST['cexpr'];
$_SESSION['cno'] = $Newcno;
$_SESSION['ctype'] = $Newctype;
$_SESSION['cexpr'] = $Newcexpr;
	
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/UpdateCardDetailsDAO.php';
	//header("Refresh:0");
}
?>




<html>
<head><title>Update My Card Details</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 10px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo  $_SESSION['name'] ?></b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Card Number <br>
					<input type="text" name="cno" value="<?php echo $_SESSION['cno']; ?>" disabled autocomplete="off" class="box" size="20"/><br /><br />
					
					Card Type <br>
					<input type="text" name="ctype" value="<?php echo $_SESSION['ctype']; ?>" autocomplete="off" class="box" size="20"/><br /><br />
					
					Expiry Date <br>
					<input type="text" name="cexpr" value="<?php echo $_SESSION['cexpr']; ?>"  autocomplete="off" class="box" size="20"/><br /><br />
			
					
					<input type="submit" name='submit' value="submit" class='submit'/><br />
					
					<a  type ="btn" href="dashboard.php">Back</a> <br>
				</form> 
			</div>
		</div>
	</div>
</body>
</html>