<?php

	session_start();
	require_once("db.php");

	if(isset($_SESSION['UserID']))
	{
		header("location:admin.php");
		exit();
	}
	$ip = $_SERVER["REMOTE_ADDR"];
	$result = mysqli_query($con,"SELECT COUNT(*) FROM `ip` WHERE `address` = '$ip' AND `timestamp` > (now() - interval 10 minute)");
	$count = mysqli_fetch_array($result, MYSQLI_NUM);












?>




<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="container-middle-me bgmo">
	<div class="row">
	
	<div class="col"><h4 style="color:white">D O Y O U M I S S M E ? _ _ _ </h4>
			<form class="form-control thumb2" name="form1" method="post" action="check_login.php">
					<?php 
					if ($count[0] < 1) {
						echo "Let's me innnnnnnnn ";
					}
					
					else if ($count[0] <= 4) {
						echo "You're currenty at $count[0] login attemp out of 5";
					}
					else {
						
						echo "Wait 10 mins";
					}?><br><br>
					
					<h5>Username : </h5><input class="form-control" name="txtUsername" type="text" id="txtUsername" required>
					
					<h5>Password : </h5><input class="form-control" name="txtPassword" type="password" id="txtPassword" required><br>
					
					<input class="btn btn-success" type="<?php 
					if ($count[0] < 1) {
						echo "submit";
					}
					
					else if ($count[0] <= 4) {
						echo "submit";
					}
					else {
						
						echo "hidden";
					}?>" name="Submit" value="Login">
			</form>
	</div>

</div>
<h3 class="fixed-bottom">Sickest admin page ever created on this planet.</h3>
</body>
</html>