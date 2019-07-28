<?php
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/ShopDAO.php';

$id = $_SESSION['logged_in'];

echo " Film Search Results ";
echo "<table border='1'>
<th>Film Results</th>


</tr>";
     
if(empty($Data))
{
	echo "No Films Available to show, type a keyword.";
} else {

foreach ($Data as $user) {
echo "<tr>";
echo "<td>" . $user['filmtitle'] . "</td>";
echo "</tr>";
}echo "</table>"; 
} //include('/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Views/FilmBuy.php');
?>




