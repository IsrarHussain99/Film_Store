<?php
require '/web/stud/u1764486/AssignmentIsrarHussain/MyWork/DBconfig.php';
$id = $_SESSION['logged_in'];

$filmsearch = $_SESSION['thefilmsearch'];

$result = $dbh->prepare("SELECT filmid,filmtitle FROM `fss_Film`
WHERE filmtitle LIKE '$filmsearch'");

$result->execute();
$Data = $result->fetchall(PDO::FETCH_ASSOC);
return $Data['filmtitle'];


?>