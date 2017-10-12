<?php
@include "db.php";

$username = mysqli_real_escape_string($con,$_POST['id_input']);
$password_rec = mysqli_real_escape_string($con,$_POST['pw_input']);

if(isset($username)){
	$user_query = mysqli_query($con,("SELECT * FROM member where UserName='$username'"));



	$password = password_hash($password_rec, PASSWORD_DEFAULT);




	$get_rows = mysqli_affected_rows($con);
	$regist_query = "INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `LoginStatus`, `LastUpdate`, `IP`) VALUES (NULL, '$username', '$password', '', '', '','');";



		if($get_rows >=1){
			echo "<script>
			alert('User Already Exist, $username');
			window.location.href='add_admin.php';
			</script>";
			die();
		}

		else{
			$run_me = mysqli_query($con,$regist_query);
			
			
			echo "<script>
			alert('User $username have been added');
			window.location.href='add_admin.php';
			</script>";
			
		}



}

?>