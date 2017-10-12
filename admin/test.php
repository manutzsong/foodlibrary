<?php

@include 'db.php';

$password = "128029486";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);





// Query the database for username and password
// ...

if(password_verify($password, $hashed_password)) {
    // If the password inputs matched the hashed password in the database
    // Do something, you know... log them in.
	echo "YES";
} 

// Else, Redirect them back to the login page.

		$strSQL = "SELECT * FROM member WHERE Username = 'derpp'";
		$objQuery = mysqli_query($con,$strSQL);
		$objResult = mysqli_fetch_array($objQuery);
		
		$userid = $objResult['UserID'];
		

		$sql_yeah = "UPDATE `member` SET `LoginStatus` = '1', `LastUpdate` = NOW() , `IP` = '127.0.0.1' WHERE `UserID` = '$userid'";
		
			$obj1 = mysqli_query($con,$sql_yeah);




?>