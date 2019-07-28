<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';
$id = $_SESSION['logged_in'];

$result = $dbh->prepare("SELECT person.personname, filmpurchase.payid, film.filmtitle
FROM fss_Person person, fss_Customer customer, fss_OnlinePayment onlinepayment,
fss_FilmPurchase filmpurchase, fss_Film film WHERE person.personid = $id AND person.personid = customer.custid
AND customer.custid = onlinepayment.custid
AND onlinepayment.payid = filmpurchase.payid AND filmpurchase.filmid = film.filmid");

 $result->execute();
 $Data = $result->fetchall(PDO::FETCH_ASSOC);
	
	
	return $Data['filmtitle'];
	
	

	


?>