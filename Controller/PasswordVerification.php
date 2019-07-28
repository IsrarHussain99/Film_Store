<?php
	require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

$id = $_SESSION['logged_in'];


	if(isset($_POST['verify'])) {
		$errMsg = '';
		$password = $_POST['custpassword'];
	
		
	if($password == ''){
			$errMsg = 'Enter password';
			}

				// using $id to verify if password match with ID that is logged in
				$sql = "SELECT custid,custpassword,personid FROM fss_Customer,fss_Person WHERE custid= $id";
				$stmt = $dbh->prepare($sql);
				$stmt->bindValue(':custid', $id);
				$stmt->execute();
				$Thedata = $stmt->fetch(PDO::FETCH_ASSOC);
				
				if($Thedata == false){
					$errMsg = "User $username not found.";
					
				}
				else {
					
					$validPass = password_verify($passwordCheck, $Thedata['custpassword']);
					
					if($password == $Thedata['custpassword']) {
						//$_SESSION['name'] = $data['fullname'];
						header('Location: /u1764486/AssignmentIsrarHussain/MyWork/Model/PaymentDetails.php');
						exit;
					}
					else{
						$errMsg = 'Password is Wrong.';
					}
				}
			
			
		}
	
	
	
?>

<html>
<head><title>Password Verification</title></head>
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
			<div style="background-color:#f44242; color:#FFFFFF; padding:10px;"><b>Payment Details Are Protected</b>
			</div>
			<div 
			<b>Enter Your Password</b>
			</div>
			<div style="margin: 15px">
				
				
				<form action="" method="post">
				
					
				
					<input type="password" name="custpassword" value="<?php if(isset($_POST['custpassword'])) echo $_POST['custpassword'] ?>" autocomplete="off" class="box" /><br/> <br />
					
					<input type="submit" name='verify' value="verify" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>