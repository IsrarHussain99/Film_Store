<?php
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/PaymentDAO.php';

$id = $_SESSION['logged_in'];
echo  $_SESSION['name']; echo " Your Payment Details ";
echo "<table border='1'>
<th>Card Number</th>
<th>Card Type</th>
<th>Expiry Date</th>
</tr>";
     
if(empty($Data))
{
	echo "No Payment Details ";
}


foreach ($Data as $user) {
   "<tr>";
echo "<td>" . $user['cno'] . "</td>";
echo "<td>" . $user['ctype'] . "</td>";
	echo "<td>" . $user['cexpr'] . "</td>";
"</tr>";
} 
echo "</table>";

// saves all data in Sessions 
	$_SESSION['cno'] = $user['cno'];
	$_SESSION['ctype'] = $user['ctype'];
	$_SESSION['cexpr'] = $user['cexpr'];
	


?>


