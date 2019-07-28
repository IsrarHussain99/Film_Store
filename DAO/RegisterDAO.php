<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

$PersonName = $_SESSION['personname'];
	$PersonEmail = $_SESSION['personemail'];
	$PersonPhone = $_SESSION['personphone'];

$Custpassword = $_SESSION['custpassword'];


$sql = "INSERT INTO `fss_Person`(`personname`, `personphone`, `personemail`) VALUES ('$PersonName', '$PersonPhone', '$PersonEmail')";
$dbh->exec($sql);
 echo "Thank you for registering "; echo $PersonName;


//FETCH THE NEW ADDED ID
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/CustomerSetupDAO.php';

$custid = $_SESSION['regid'];

$sql = "INSERT INTO `fss_Customer`(`custid`,`custregdate`,`custenddate`,`custpassword`) VALUES ($custid,'20190426','20190190','$CustPassword')";
$dbh->exec($sql);

echo $custid; 

echo " Registration is Complete! "
 //$result->execute();


 ?>
