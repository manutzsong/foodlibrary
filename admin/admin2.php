<?php
@include 'db.php';


	$edit_id = $_GET["edit_id"];


  $data = "select * from shop where ID = $edit_id";

  $query = mysqli_query($mysqli,$data);
  
  $data2 = mysqli_fetch_array($query);


$disable_what = $data2['folder'];

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



$realpath = $data2['folder'];
$i =1;
$files = glob('./uploads/'.$realpath.'/*.{*}', GLOB_BRACE);

$array_of_values = explode(",", $data2['food_style']);
$day_explode = explode(",", $data2['day']);
$close_options = $data2['close_time'];
$options = $data2['open_time'];
?>



<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admin.css">
<script src="https://use.fontawesome.com/fd20720473.js"></script>
<script language="JavaScript">

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
		Purin Koettip
		
		</div>
		<div class="col">
		
		</div>
				<div class="col-1">
		<h5>Quick Edit</h5>
		<hr>
		<a href="#info">Info</a><br>
		<a href="#gmap">G-MAP</a><br>
		<a href="#pics-upload">Pics Upload</a>
		<hr>
		<h6>Currently Edit</h6>
		<a target="window" href="../selected.php?restaurant=<?php echo $data2['id'] ?>"><?php echo $data2['name']?></a>
		
		<hr>
		
		<a href="#top">Top</a><br>
		
		</div>
		
	</div>
</div>
















<div class="container-fluid">
	<div class="row head_bg">
		<div class="col-3 vert_this cheat">
			<h5>Currently logged in as :  </h5><h1 class="weird_text"><?php echo $objResult['Username'] ?><i class="fa fa-hand-peace-o" aria-hidden="true"></i></h1>
		</div>
		<div class="col-7 text-center cheat">
			<h1 class="head_cen_text">Edit Shop</h1>
		</div>
		<div class="col-2 text-right cheat">
			<h1><a href="logout.php">Logout</a></h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col" style="margin-top:30px;">
		

						
			<div class="thumb"><iframe src="http://maps.google.com/maps?q=<?php echo $data2['latitude'] ?>, <?php echo $data2['longtitude'] ?>&z=15&output=embed" width="560" height="370" frameborder="0" style="border:0"></iframe></div><br><br><br>
			<div class="grid">
			  <div class="grid-sizer"></div>
				<?php foreach($files as $file) {echo "<div class='grid-item'><img src='".$file."'></div>"; }?>
				
				
			</div>
			



					
	
		</div>
		<div class="col" style="margin-top:30px;">
			<form class="form-control" action="info.php" method="post">
				<h5 id="info">Name : </h5>
				<input class="form-control" type="text" name="input_name" value="<?php echo $data2['name'] ?>">
				
				<hr>
				
				<h5>Information : </h5>
				<textarea class="form-control" rows="5" name="info_input" ><?php echo $data2['info'] ?></textarea><br>
				<h5>Telephone : </h5>
				<input class="form-control" type="text" name="tel" value="<?php echo $data2['tel'] ?>">
				
				<hr>
				
				<h5>Open Time 0-24: </h5>
				<select class="form-control" name="open_select">
				  <option value="00:00" <?php if($options=="00:00") echo 'selected="selected"'; ?> >00:00</option>
				  <option value="01:00" <?php if($options=="01:00") echo 'selected="selected"'; ?> >01:00</option>
				  <option value="02:00" <?php if($options=="02:00") echo 'selected="selected"'; ?> >02:00</option>
				  <option value="03:00" <?php if($options=="03:00") echo 'selected="selected"'; ?> >03:00</option>
				  <option value="04:00" <?php if($options=="04:00") echo 'selected="selected"'; ?> >04:00</option>
				  <option value="05:00" <?php if($options=="05:00") echo 'selected="selected"'; ?> >05:00</option>
				  <option value="06:00" <?php if($options=="06:00") echo 'selected="selected"'; ?> >06:00</option>
				  <option value="07:00" <?php if($options=="07:00") echo 'selected="selected"'; ?> >07:00</option>
				  <option value="08:00" <?php if($options=="08:00") echo 'selected="selected"'; ?> >08:00</option>
				  <option value="09:00" <?php if($options=="09:00") echo 'selected="selected"'; ?> >09:00</option>
				  <option value="10:00" <?php if($options=="10:00") echo 'selected="selected"'; ?> >10:00</option>
				  <option value="11:00" <?php if($options=="11:00") echo 'selected="selected"'; ?> >11:00</option>
				  <option value="12:00" <?php if($options=="12:00") echo 'selected="selected"'; ?> >12:00</option>
				  <option value="13:00" <?php if($options=="13:00") echo 'selected="selected"'; ?> >13:00</option>
				  <option value="14:00" <?php if($options=="14:00") echo 'selected="selected"'; ?> >14:00</option>
				  <option value="15:00" <?php if($options=="15:00") echo 'selected="selected"'; ?> >15:00</option>
				  <option value="16:00" <?php if($options=="16:00") echo 'selected="selected"'; ?> >16:00</option>
				  <option value="17:00" <?php if($options=="17:00") echo 'selected="selected"'; ?> >17:00</option>
				  <option value="18:00" <?php if($options=="18:00") echo 'selected="selected"'; ?> >18:00</option>
				  <option value="19:00" <?php if($options=="19:00") echo 'selected="selected"'; ?> >19:00</option>
				  <option value="20:00" <?php if($options=="20:00") echo 'selected="selected"'; ?> >20:00</option>
				  <option value="21:00" <?php if($options=="21:00") echo 'selected="selected"'; ?> >21:00</option>
				  <option value="22:00" <?php if($options=="22:00") echo 'selected="selected"'; ?> >22:00</option>
				  <option value="23:00" <?php if($options=="23:00") echo 'selected="selected"'; ?> >23:00</option>
				  
				</select>
				<h5>Close Time 0-24: </h5>
				<select class="form-control" name="close_select">
				  <option value="00:00" <?php if($close_options=="00:00") echo 'selected="selected"'; ?> >00:00</option>
				  <option value="01:00" <?php if($close_options=="01:00") echo 'selected="selected"'; ?> >01:00</option>
				  <option value="02:00" <?php if($close_options=="02:00") echo 'selected="selected"'; ?> >02:00</option>
				  <option value="03:00" <?php if($close_options=="03:00") echo 'selected="selected"'; ?> >03:00</option>
				  <option value="04:00" <?php if($close_options=="04:00") echo 'selected="selected"'; ?> >04:00</option>
				  <option value="05:00" <?php if($close_options=="05:00") echo 'selected="selected"'; ?> >05:00</option>
				  <option value="06:00" <?php if($close_options=="06:00") echo 'selected="selected"'; ?> >06:00</option>
				  <option value="07:00" <?php if($close_options=="07:00") echo 'selected="selected"'; ?> >07:00</option>
				  <option value="08:00" <?php if($close_options=="08:00") echo 'selected="selected"'; ?> >08:00</option>
				  <option value="09:00" <?php if($close_options=="09:00") echo 'selected="selected"'; ?> >09:00</option>
				  <option value="10:00" <?php if($close_options=="10:00") echo 'selected="selected"'; ?> >10:00</option>
				  <option value="11:00" <?php if($close_options=="11:00") echo 'selected="selected"'; ?> >11:00</option>
				  <option value="12:00" <?php if($close_options=="12:00") echo 'selected="selected"'; ?> >12:00</option>
				  <option value="13:00" <?php if($close_options=="13:00") echo 'selected="selected"'; ?> >13:00</option>
				  <option value="14:00" <?php if($close_options=="14:00") echo 'selected="selected"'; ?> >14:00</option>
				  <option value="15:00" <?php if($close_options=="15:00") echo 'selected="selected"'; ?> >15:00</option>
				  <option value="16:00" <?php if($close_options=="16:00") echo 'selected="selected"'; ?> >16:00</option>
				  <option value="17:00" <?php if($close_options=="17:00") echo 'selected="selected"'; ?> >17:00</option>
				  <option value="18:00" <?php if($close_options=="18:00") echo 'selected="selected"'; ?> >18:00</option>
				  <option value="19:00" <?php if($close_options=="19:00") echo 'selected="selected"'; ?> >19:00</option>
				  <option value="20:00" <?php if($close_options=="20:00") echo 'selected="selected"'; ?> >20:00</option>
				  <option value="21:00" <?php if($close_options=="21:00") echo 'selected="selected"'; ?> >21:00</option>
				  <option value="22:00" <?php if($close_options=="22:00") echo 'selected="selected"'; ?> >22:00</option>
				  <option value="23:00" <?php if($close_options=="23:00") echo 'selected="selected"'; ?> >23:00</option>
				  
				</select>
				
				
				<h5>Day : </h5>
				<input type="checkbox" name="day_list[]" value="mon"<?php if (in_array("mon", $day_explode)) {echo 'checked="checked"';} ?>><label>MON</label>
				<input type="checkbox" name="day_list[]" value="tue"<?php if (in_array("tue", $day_explode)) {echo 'checked="checked"';} ?>><label>TUE</label>
				<input type="checkbox" name="day_list[]" value="wed"<?php if (in_array("wed", $day_explode)) {echo 'checked="checked"';} ?>><label>WED</label>
				<input type="checkbox" name="day_list[]" value="thu"<?php if (in_array("thu", $day_explode)) {echo 'checked="checked"';} ?>><label>THU</label>	
				<input type="checkbox" name="day_list[]" value="fri"<?php if (in_array("fri", $day_explode)) {echo 'checked="checked"';} ?>><label>FRI</label>
				<input type="checkbox" name="day_list[]" value="sat"<?php if (in_array("sat", $day_explode)) {echo 'checked="checked"';} ?>><label>SAT</label>
				<input type="checkbox" name="day_list[]" value="sun"<?php if (in_array("sun", $day_explode)) {echo 'checked="checked"';} ?>><label>SUN</label>
				<input type="checkbox" onClick="toggle(this)" /> Toggle All<br/>
				
				
				<hr>
				
				<h5>Food style :</h5>
				<input type="checkbox" name="food_style_list[]" value="asian"<?php if (in_array("asian", $array_of_values)) {echo 'checked="checked"';} ?>><label>Asian</label>
				<input type="checkbox" name="food_style_list[]" value="western"<?php if (in_array("western", $array_of_values)) {echo 'checked="checked"';} ?>><label>Western</label>
				<input type="checkbox" name="food_style_list[]" value="fastfood"<?php if (in_array("fastfood", $array_of_values)) {echo 'checked="checked"';} ?>><label>Fast Food</label>
			
				<h5>Pricing 1-5: </h5>
				<input class="form-control" type="number" name="pricing" value="<?php echo $data2['pricing'] ?>">
				
				<hr>

				<h5 id="gmap">GOOGLE MAP : </h5><!-- GMAP -->
				<label>Lat : </label><input class="form-control" type="text" name="latitude" value="<?php echo $data2['latitude'] ?>">
				<label>Long : </label><input class="form-control" type="text" name="longtitude" value="<?php echo $data2['longtitude'] ?>"><br><br>
				
				<input type="hidden" name="what_id_bro" value="<?php echo $edit_id ?>">
				
				<input class="btn btn-primary" type="submit" value="Update">
			</form>

				

				<form class="form-control" action="upload.php" method="post" enctype="multipart/form-data">
				<h5 id="pics-upload">Folder name to store pics :</h5> <!--UPLOAD PICS -->
					<input type="hidden" name="what_id_bro" value="<?php echo $edit_id ?>">
					<input class="form-control" type="text" name="folder_name" value="<?php echo $data2['folder'] ?>"    <?php  /*if($disable_what != NULL) {echo "disabled";}*/ ?>      ><br>
					<input class="form-control" type="file" id="file" name="files[]" multiple="multiple" accept="image/*"><br>
					<div class="alert alert-warning">
					  <strong>Warning!</strong> For upload image only button!
					  <input class="btn btn-primary" type="submit" value="Upload!">
					</div>
					
				</form>
		</div>
	</div>
</div>
<script src='https://masonry.desandro.com/masonry.pkgd.js'></script>
<script src='https://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script>
<script>
// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,

  gutter: 10
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
</script>

</body>
<!-- Guide whatever
https://stackoverflow.com/questions/33464192/display-an-embedded-google-map-iframe-with-a-marker-on-a-certain-latitude-and-lo
https://www.formget.com/php-checkbox/
http://thisinterestsme.com/php-create-directory-if-it-doesnt-exist/
https://www.w3schools.com/php/php_mysql_select.asp
http://www.dynamicdrive.com/forums/showthread.php?45895-How-to-populate-php-html-form-with-MySQL-data 			เจ๋งจริงอันนี้










-->
</html>