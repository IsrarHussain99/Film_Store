<?php
	require 'DBconfig.php';
	session_destroy();

	header('Location: index.php');
?>
