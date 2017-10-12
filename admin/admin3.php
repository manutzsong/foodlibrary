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
<div class="container">
	<div class="row">
		<div class="col">
					<?php
								


						/*Check row */
						$row_count = mysqli_num_rows($result);
						echo "there are" . $row_count . "rows";
						/*Init loop */
						$i = 0;
						while ($i<$row_count)
						 {
							$loop_result = mysqli_fetch_array($result); /*Init pull from DB */
							$id = $loop_result['id']; /*Show ID*/
							$shop_name = $loop_result['name']; /*Show Product name*/
							
							echo "<a href='admin2.php?edit_id=".$id. "'><h3>".$shop_name."</h3></a>";
							
							
							$i++;
						}

							?>
	
		</div>
		
		<div class="col" style="margin-top:30px;">
			<form class="form-control thumb" action="adding.php" method="post" enctype="multipart/form-data">
				<h5>Name : </h5>
				<input class="form-control" type="text" name="input_name">
				
				<hr>
				
				<h5>Information : </h5>
				<textarea class="form-control" rows="5" name="info_input" ></textarea><br>
				<h5>Telephone : </h5>
				<input class="form-control" type="text" name="tel">
				
				<hr>
				
				<h5>Open Time 0-24: </h5>
				<select class="form-control" name="open_select">
				  <option value="00:00" >00:00</option>
				  <option value="01:00"  >01:00</option>
				  <option value="02:00"  >02:00</option>
				  <option value="03:00" >03:00</option>
				  <option value="04:00"  >04:00</option>
				  <option value="05:00"  >05:00</option>
				  <option value="06:00"  >06:00</option>
				  <option value="07:00"  >07:00</option>
				  <option value="08:00"  >08:00</option>
				  <option value="09:00"  >09:00</option>
				  <option value="10:00"  >10:00</option>
				  <option value="11:00"  >11:00</option>
				  <option value="12:00"  >12:00</option>
				  <option value="13:00"  >13:00</option>
				  <option value="14:00"  >14:00</option>
				  <option value="15:00"  >15:00</option>
				  <option value="16:00"  >16:00</option>
				  <option value="17:00"  >17:00</option>
				  <option value="18:00" >18:00</option>
				  <option value="19:00"  >19:00</option>
				  <option value="20:00"  >20:00</option>
				  <option value="21:00"  >21:00</option>
				  <option value="22:00"  >22:00</option>
				  <option value="23:00" >23:00</option>
				  
				</select>
				<h5>Close Time 0-24: </h5>
				<select class="form-control" name="close_select">
				  <option value="00:00" >00:00</option>
				  <option value="01:00"  >01:00</option>
				  <option value="02:00"  >02:00</option>
				  <option value="03:00"  >03:00</option>
				  <option value="04:00"  >04:00</option>
				  <option value="05:00"  >05:00</option>
				  <option value="06:00"  >06:00</option>
				  <option value="07:00"  >07:00</option>
				  <option value="08:00"  >08:00</option>
				  <option value="09:00"  >09:00</option>
				  <option value="10:00"  >10:00</option>
				  <option value="11:00" >11:00</option>
				  <option value="12:00" >12:00</option>
				  <option value="13:00" >13:00</option>
				  <option value="14:00"  >14:00</option>
				  <option value="15:00" >15:00</option>
				  <option value="16:00"  >16:00</option>
				  <option value="17:00"  >17:00</option>
				  <option value="18:00" >18:00</option>
				  <option value="19:00"  >19:00</option>
				  <option value="20:00"  >20:00</option>
				  <option value="21:00"  >21:00</option>
				  <option value="22:00" >22:00</option>
				  <option value="23:00" >23:00</option>
				  
				</select>
				
				
				<h5>Day : </h5>
				<input type="checkbox" name="day_list[]" value="mon"><label>MON</label>
				<input type="checkbox" name="day_list[]" value="tue"><label>TUE</label>
				<input type="checkbox" name="day_list[]" value="wed"><label>WED</label>
				<input type="checkbox" name="day_list[]" value="thu"><label>THU</label>	
				<input type="checkbox" name="day_list[]" value="fri"><label>FRI</label>
				<input type="checkbox" name="day_list[]" value="sat"><label>SAT</label>
				<input type="checkbox" name="day_list[]" value="sun"><label>SUN</label>
				<input type="checkbox" onClick="toggle(this)" /> Toggle All<br/>
				
				
				<hr>
				
				<h5>Food style :</h5>
				<input type="checkbox" name="food_style_list[]" value="asian"><label>Asian</label>
				<input type="checkbox" name="food_style_list[]" value="western"><label>Western</label>
				<input type="checkbox" name="food_style_list[]" value="fastfood"><label>Fast Food</label>
			
			
				<h5>Pricing 1-5: </h5>
				<input class="form-control" type="number" name="pricing">
				
				<hr>

				<h5>GOOGLE MAP : </h5><!-- GMAP -->
				<label>Lat : </label><input class="form-control" type="text" name="latitude" value="">
				<label>Long : </label><input class="form-control" type="text" name="longtitude" value=""><br><br>
				

				
				
			

				

				
				<h5>Folder name to store pics :</h5> <!--UPLOAD PICS -->
					<input type="hidden" name="what_id_bro">
					<input class="form-control" type="text" name="folder_name"    <?php  /*if($disable_what != NULL) {echo "disabled";}*/ ?>      ><br>
					<input class="form-control" type="file" id="file" name="files[]" multiple="multiple" accept="image/*"><br>
				<input class="btn btn-primary" type="submit" value="Update">
				</form>
		</div>
	</div>
</div>



</body>
<!-- Guide whatever
https://stackoverflow.com/questions/33464192/display-an-embedded-google-map-iframe-with-a-marker-on-a-certain-latitude-and-lo
https://www.formget.com/php-checkbox/
http://thisinterestsme.com/php-create-directory-if-it-doesnt-exist/












-->
</html>