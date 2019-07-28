<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

$id = $_SESSION['logged_in'];

$result = $dbh->prepare("SELECT * FROM `u1764486`.`fss_Address`,`fss_Person`,`fss_CustomerAddress`
WHERE fss_CustomerAddress.custid = $id
AND fss_CustomerAddress.custid = fss_Person.personid
AND fss_Address.addid = fss_CustomerAddress.addid
GROUP BY fss_CustomerAddress.custid");

 $result->execute();
 $Data = $result->fetchall(PDO::FETCH_ASSOC);

?>