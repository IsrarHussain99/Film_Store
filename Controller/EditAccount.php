<?php
	require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');


echo "Edit Account Details";
	if(isset($_POST['save'])) {
		$errMsg = '';
		$successMsg = "Changes successfully saved";
		
		//fetch all details about account
		// Getting data from FROM
		$fullname = $_SESSION['name'];
		$phonenumber = $_SESSION['personphone'];
		$email = $_SESSION['personemail'];
		$street = $_SESSION['street'];
		$city = $_SESSION['city'];
		$postcode = $_SESSION['postcode'];
		
		
		$password = $_POST['custpassword'];
		$passwordVerification = $_POST['custpassword'];

		if($password != $passwordVarify)
		$errMsg = 'Passwords do not match.';

		if($errMsg == '') {
			try {
		      $sql = "UPDATE pdo SET personame = :fullname, personphone =:phonenumber, personemail =:email custpassword =:password WHERE custid = :custid";
		      $stmt = $connect->prepare($sql);                                  
		      $stmt->execute(array(
		        ':personname' => $fullname,
				 ':personnumber' => $phonenumber,
				  ':personemail' => $email,
		      
				
		        ':custpassword' => $password,
		        
		      ));
				header('Location: update.php?action=updated');
				exit;

			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'updated')
		$errMsg = 'Successfully updated. <a href="logout.php">Logout</a> and login to see update.';
?>

<html>
<head><title>Update My Details</title></head>
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
					Customer ID <br>
					<input type="text" name="fullname" value="<?php echo $_SESSION['custid']; ?>" disabled autocomplete="off" class="box" size="20"/><br /><br />
					
					Fullname <br>
					<input type="text" name="fullname" value="<?php echo $_SESSION['name']; ?>" autocomplete="off" class="box" size="20"/><br /><br />
					
					Phone Number <br>
					<input type="text" name="phonenumber" value="<?php echo $_SESSION['phonenumber']; ?>"  autocomplete="off" class="box" size="20"/><br /><br />
					
					Email Address <br>
					<input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"  autocomplete="off" class="box" size="20"/><br /><br />
					
					Street <br>
					<input type="text" name="email" value="<?php echo $_SESSION['street']; ?>"  autocomplete="off" class="box" size="20"/><br /><br />
					
					City <br>
					<input type="text" name="email" value="<?php echo $_SESSION['city']; ?>"  autocomplete="off" class="box" size="20"/><br /><br />
					
					Postcode <br>
					<input type="text" name="email" value="<?php echo $_SESSION['postcode']; ?>"  autocomplete="off" class="box" size="20"/><br /><br />
					 
					
					
					Password <br>
					<input type="password" name="password" value="<?php echo $_SESSION['the_pass'] ?>" class="box" /><br/><br />
					
					Verify Password <br>
					<input type="password" name="passwordVarify" value="<?php echo $_SESSION['the_pass'] ?>" class="box" /><br/><br />
					
					
					<input type="submit" name='save' value="save" class='submit'/><br />
					<a  type ="btn" href="dashboard.php">Back</a> <br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
