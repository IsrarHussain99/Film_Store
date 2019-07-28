<?php
require_once '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DAO/ProfileDAO.php';

$id = $_SESSION['logged_in'];

echo "My account Details";
echo "<table border='1'>

<th>User ID</th>
<th>Full Name</th>

<th>Street Name</th>
<th>City</th>
<th>Postcode</th>
<th>Email Address</th>
<th>Contact Number</th>
</tr>";

// show data in a table
foreach ($Data as $user) {
"<tr>"; echo "<td>" . $user['personid'] . "</td>"; echo "<td>" . $user['personname'] . "</td>";
	echo "<td>" . $user['addstreet'] . "</td>"; echo "<td>" . $user['addcity'] . "</td>";
	echo "<td>" . $user['addpostcode'] . "</td>"; echo "<td>" . $user['personemail'] . "</td>";
 echo "<td>" . $user['personphone'] . "</td>"; "</tr>";
} echo "</table>"; 

//saving details temporary to SESSION
$_SESSION['custid'] = $user['personid'];
		$_SESSION['name'] = $user['personname'];
			$_SESSION['phonenumber'] = $user['personphone'];
$_SESSION['email'] = $user['personemail'];
$_SESSION['the_pass'] = $user['custpassword'];

$_SESSION['street'] = $user['addstreet'];
		$_SESSION['city'] = $user['addcity'];
			$_SESSION['postcode'] = $user['addpostcode'];


include('/web/stud/u1764486/AssignmentIsrarHussain/MyWork/Views/Profile.html');
?>
