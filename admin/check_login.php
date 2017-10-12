<?php
	session_start();

	require_once("db.php");
	
	$received_username = mysqli_real_escape_string($con,$_POST['txtUsername']);
	$received_password = mysqli_real_escape_string($con,$_POST['txtPassword']);
	

	
		$strSQL = "SELECT * FROM member WHERE Username = '$received_username'";
		$objQuery = mysqli_query($con,$strSQL);
		$objResult = mysqli_fetch_array($objQuery);
		$hashed = $objResult['Password'];
		$ip = $_SERVER["REMOTE_ADDR"];
		
		$result = mysqli_query($con,"SELECT COUNT(*) FROM `ip` WHERE `address` = '$ip' AND `timestamp` > (now() - interval 10 minute)");
		$count = mysqli_fetch_array($result, MYSQLI_NUM);
		
		echo $count[0];
		
	if ($count[0] <= 4) {
		//DONE CHECKING
			
			

			

		if(password_verify($received_password, $hashed)) {
			if($objResult["LoginStatus"] == "1") {
							echo "'".$received_username."' Exists login!";
							exit();
						}
						else {
							//*** Update Status Login
							$userid = $objResult['UserID'];
		

							$sql_yeah = "UPDATE `member` SET `LoginStatus` = '1', `LastUpdate` = NOW() , `IP` = '$ip' WHERE `UserID` = '$userid'";
							
							$obj1 = mysqli_query($con,$sql_yeah);

							//*** Session
							$_SESSION["UserID"] = $userid;
							session_write_close();

							//*** Go to Main page
							header("location:admin.php");
						}
		}
		else {
				//THIS IS LOGIN COUNT CHECK

			mysqli_query($con, "INSERT INTO `ip` (`address` ,`timestamp`)VALUES ('$ip',CURRENT_TIMESTAMP)");
			echo "<script>
				alert('Incorrect username or password, $count[0] out of 5 attemps left.');
				window.location.href='index.php';
				</script>";

			
			

		}	
	}//END IF COUNT LESS THAN 5
	else {
			echo "<script>
				alert('You\'re exceed login attemps.');
				window.location.href='index.php';
				</script>";
		
	}


	
	mysqli_close($con);
?>