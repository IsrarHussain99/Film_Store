

<?php
$regname = $_SESSION['personname'];
$regid = $_SESSION['regid'];

$sql = "SELECT personid FROM fss_Person WHERE personname= $regname";
		echo "connected to custid";		
				$stmt = $dbh->prepare($sql);

				$stmt->execute();
	
				$Thedata = $stmt->fetch(PDO::FETCH_ASSOC);

$_SESSION['regid'] = $Thedata['personid'];
$regid = $_SESSION['regid'];

echo "Your new ID is "; echo "$regid";
?>