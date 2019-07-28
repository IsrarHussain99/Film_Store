<?php
	require 'DBconfig.php';

echo "Enter custid and custpassword to login";
	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['custid'];
		$password = $_POST['custpassword'];

		
		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';

				$sql = "SELECT custid,custpassword,personid,personname FROM fss_Customer,fss_Person WHERE custid= :custid AND personid =:custid";
				
				$stmt = $dbh->prepare($sql);

				$stmt->bindValue(':custid', $username);

				$stmt->execute();
	
				$Thedata = $stmt->fetch(PDO::FETCH_ASSOC);
				
				
				
			
				
				if($Thedata == false){
					$errMsg = "User $username not found.";
					
				}
				else {
					
					$validPass = password_verify($passwordCheck, $Thedata['custpassword']);
					
					if($password == $Thedata['custpassword']) {
						//$_SESSION['name'] = $data['fullname'];
						
						$_SESSION['name'] = $Thedata['personname'];
						$_SESSION['logged_in'] = $Thedata['custid'];
						//$_SESSION['secretpin'] = $data['secretpin'];
						echo "logged in ";

						header('Location: dashboard.php');
						exit;
					}
					else{
						$errMsg = 'Password not match.';
					}
				}
			
			
		}
	
?>

<html>
<head><title>Login</title></head>
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
			<div style=" color:#000000; padding:1px;"><b>Login</b></div>
			<div style="margin: 3px">
				<form action="" method="post">
					<input type="text" name="custid"  autocomplete="off" class="box"/><br /><br />
					
					<input type="password" name="custpassword"  autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Login" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
