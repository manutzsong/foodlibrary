<?php
@include 'db.php';

$sql2 = "SELECT * FROM shop";
$result = mysqli_query($mysqli, $sql2);
$row_count = mysqli_num_rows($result);

/*$edit_id = rand(1, $row_count);*/
$restaurant = $_GET['restaurant'];
$edit_id = $restaurant;


$data = "select * from shop where ID = $edit_id";
$query = mysqli_query($mysqli,$data);
$data2 = mysqli_fetch_array($query);
  
$img_loc = $data2['folder'];

$realpath = $data2['folder'];
$i =1;
$files = glob('./uploads/'.$realpath.'/*.{*}', GLOB_BRACE);
?>
<html>
<head>


<title><?php echo $data2['name']; ?> | Food Library</title>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admin.css">
<script src="https://use.fontawesome.com/fd20720473.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>








<!--------------------->
<div class="container-fluid"><br>
	<div class="container thumb3">
		<div class="row">
			<div class="col sticky shit"><!-- LEFT SIDE -->

				<div class="row">
					<div class="col shit2 thumb3 " style="background-image:url('./uploads/<?php echo $img_loc ?>/logo.jpg')">
						<div class="bh"><h3><?php /*echo $data2['name']*/ ?>Reserve</h3></div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<br>
						<h3><?php echo $data2['name'] ?></h3>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<h6>Food Style</h6>
						<h3><?php echo $data2['food_style'] ?></h3>
					</div>
					<div class="col">
						<h6>Pricing</h6>
						<h3><?php $loop_pricing = $data2['pricing']; for ($b =1;$b<=$loop_pricing;$b++) {echo "<i class='fa fa-usd' aria-hidden='true'></i>";} ?><h3>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<h6>Opening</h6>
						<h3><?php echo $data2['open_time']?> - <?php echo $data2['close_time']?><h3>
						<hr>
						<h6>Telephone</h6>
						<h3><?php echo $data2['tel'] ?></h3>
					</div>

					<div class="col">
						<br>
						<h3><?php echo $data2['day']?><h3>
					</div>
				</div>
		
		
		
		
		
		
		
			</div><!-- LEFT SIDE -->
			
			<div class="col sticky"><!-- RIGHT SIDE -->
				<iframe src="http://maps.google.com/maps?q=<?php echo $data2['latitude'] ?>, <?php echo $data2['longtitude'] ?>&z=15&output=embed" width="560" height="370" frameborder="0" style="border:0"></iframe>
				<br><br><Br>
				<div class="grid">
				  <div class="grid-sizer"></div>
					<?php $x=0;foreach($files as $file) {echo "<div class='grid-item grid-item-no'><img src='".$file."'></div>"; if(++$x > 5) break;}?>
					
					
				</div>
				<br><BR>
				<h4>Review</h4>
				<p><?php echo nl2br($data2['info']) ?></p>
				
		
				
		
		
		
		
		
		
		
			</div><!-- RIGHT SIDE -->
		</div>
	</div>
</div>
<br>
<script src='https://masonry.desandro.com/masonry.pkgd.js'></script>
<script src='https://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script>
<script>
// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,

  
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
</script>

</body>
</html>