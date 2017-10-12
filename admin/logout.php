<?php
	session_start();

	require_once("db.php");
	$what_id =  $_SESSION['UserID'];
	//*** Update Status
	$sql = "UPDATE member SET LoginStatus = '0', LastUpdate = NOW() WHERE UserID = '$what_id';";
	$query = mysqli_query($con,$sql);

	session_destroy();
	header("location:index.php");
?>