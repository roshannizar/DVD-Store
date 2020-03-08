<?php
	session_start();
	$user = $_SESSION["loginuser"];
	if($user==" ")
	{
		echo "Error";
	}
	else
	{
		session_destroy();
		header("location: index.php");
	}
?>