<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';


$Custpassword = $_SESSION['custpassword'];

echo $Custpassword;

$sql = "INSERT INTO `fss_Customer`(`custregdate`,`custenddate`,`custpassword`) VALUES ('2019/04/26','0000/00/00','$CustPassword')";
$dbh->exec($sql);
 //$result->execute();
 0000/00/00

 ?>

