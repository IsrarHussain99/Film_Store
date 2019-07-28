
<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

if(isset($_POST['register'])) {
	
	
	
	$PersonName = $_POST['personname'];
	$PersonEmail = $_POST['personemail'];
	$PersonPhone = $_POST['personphone'];
	$Custpassword = $_POST['custpassword'];
$_SESSION['personname'] = $PersonName;
$_SESSION['personemail'] = $PersonEmail;
$_SESSION['personphone'] = $PersonPhone;
	$_SESSION['custpassword'] = $Custpassword;
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/RegisterDAO.php';
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Controller/NewCustomer.php';
}
?>

<html>
<head><title>Register</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 10px #DABA4006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#D4A433; color:#FFFFFF; padding:10px;"><b>Register</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="personname" placeholder="personname" value="<?php if(isset($_POST['personname'])) echo $_POST['personname'] ?>" autocomplete="off" class="box"/><br /><br />
					
					<input type="text" name="personphone" placeholder="personphone" value="<?php if(isset($_POST['personphone'])) echo $_POST['personphone'] ?>" autocomplete="off" class="box"/><br /><br />
					
				
					<input type="text" name="personemail" placeholder="personemail" value="<?php if(isset($_POST['personemail'])) echo $_POST['personemail'] ?>" autocomplete="off" class="box"/><br /><br />
					
					<input type="text" name="password" placeholder="password" value="<?php if(isset($_POST['custpassword'])) echo $_POST['custpassword'] ?>" autocomplete="off" class="box"/><br /><br />
					
					<input type="submit" name='register' value="Register" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>

