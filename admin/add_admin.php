<?php
@include 'db.php';

$sql2 = "SELECT * FROM shop";
$result = mysqli_query($mysqli, $sql2);

	session_start();
	require_once("db.php");

	if(!isset($_SESSION['UserID']))
	{
		header("location:index.php");
		exit();
	}
	
	//*** Update Last Stay in Login System
	$sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '".$_SESSION["UserID"]."' ";
	$query = mysqli_query($con,$sql);

	//*** Get User Login
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	

?>



<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admin.css">
<script src="https://use.fontawesome.com/fd20720473.js"></script>

<script>
function checkpassword() {
	var pw1_value = document.getElementById("pw1").value;
	var pw2_value = document.getElementById("pw2").value;


	if (pw1_value != pw2_value) {
		alert("Password is not match");
		return false;
	}

}





</script>

</head>
<body>


<div class="container-fluid fixed-middle">
	<div class="row">
		<div class="col-1 ">
		<h5>Quick Nav</h5>
		<hr>
		<a href="admin.php">Home</a><br>
		<a href="admin3.php">Add Shop</a><br>
		<a href="admin.php">Add Admin</a>
		<hr>
		
		</div>
		<div class="col">
		
		</div>
		
	</div>
</div>









<div class="container-fluid">
	<div class="row head_bg">
		<div class="col-3 vert_this cheat">
			<h5>Currently logged in as :  </h5><h1 class="weird_text"><?php echo $objResult['Username'] ?><i class="fa fa-hand-peace-o" aria-hidden="true"></i></h1>
		</div>
		<div class="col-7 text-center cheat">
			<h1 class="head_cen_text">Add Shop</h1>
		</div>
		<div class="col-2 text-right cheat">
			<h1><a href="logout.php">Logout</a></h1>
		</div>
	</div>
</div>
<br>
<div class="container">
	Add admin page
	<form method="post" action="admin_process.php">
		<input type="text" name="id_input" placeholder="Username" required>
		<input type="password" id="pw1" name="pw_input" placeholder="Password" required >
		<input type="password" id="pw2" name="confirm_pw" placeholder="Confirm Password" required>
		<input type="submit" onclick="checkpassword()">
	
	
	
	</form>


</div>



</body>
<!-- Guide whatever
https://stackoverflow.com/questions/33464192/display-an-embedded-google-map-iframe-with-a-marker-on-a-certain-latitude-and-lo
https://www.formget.com/php-checkbox/
http://thisinterestsme.com/php-create-directory-if-it-doesnt-exist/












-->
</html>