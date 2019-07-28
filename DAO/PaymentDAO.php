<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';

$id = $_SESSION['logged_in'];
 
$result = $dbh->prepare("

SELECT DISTINCT fss_CardPayment.cno,fss_CardPayment.ctype,fss_CardPayment.cexpr
FROM fss_Person
INNER JOIN fss_Customer
ON fss_Person.personid = fss_Customer.custid
INNER JOIN fss_OnlinePayment
ON fss_OnlinePayment.custid = fss_Customer.custid
INNER JOIN fss_Payment
ON fss_Payment.payid = fss_OnlinePayment.payid
JOIN fss_CardPayment ON fss_CardPayment.payid = fss_Payment.payid
WHERE fss_Customer.custid = $id");

 $result->execute();
 $Data = $result->fetchall(PDO::FETCH_ASSOC);


?>

