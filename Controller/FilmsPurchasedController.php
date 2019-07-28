<?php
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/FilmPurchasedDAO.php';

$id = $_SESSION['logged_in'];
echo  $_SESSION['name']; echo " Your Films Purchased";
echo "<table border='1'>
<th>Your Films</th>

</tr>";
     
if(empty($Data))
{
	echo "No Films Purchased";
}
foreach ($Data as $user) {
   echo "<tr>";
echo "<td>" . $user['filmtitle'] . "</td>";
echo "</tr>";
}echo "</table>"; 

include('/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Views/AllFilmsPurchased.html');
?>


