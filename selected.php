<?php
@include './admin/db.php';

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
$day_explode = explode(",", $data2['day']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $data2['name']; ?> | Food Library</title>
	    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="admin.css">
<script src="https://use.fontawesome.com/fd20720473.js"></script>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>


  </head>
  <body>

	
	
	
	


<nav class="navbar navbar-toggleable-md navbar-light bg-faded sticky-top bg-blue navbar-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">Food Library</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	
<div class="container-fluid thumb4"><br>

	<div class="container thumb3">
		<div class="row">
			<div class="col-sm-6 col-sm-pull-6 sticky"><!-- LEFT SIDE -->
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
						<h4 style="text-transform: uppercase;"><?php echo $data2['food_style'] ?></h4>
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
						<h3><?php 
							
							if (in_array("mon", $day_explode)) {echo " Monday ";}
							if (in_array("tue", $day_explode)) {echo "<span style='color:grey;'> Tuesday </span>";}
							if (in_array("wed", $day_explode)) {echo " Wednesday ";}
							if (in_array("thu", $day_explode)) {echo "<span style='color:grey;'> Thursday </span>";}
							if (in_array("fri", $day_explode)) {echo " Friday ";}
							if (in_array("sat", $day_explode)) {echo "<span style='color:grey;'> Saturday </span>";}
							if (in_array("sat", $day_explode)) {echo " Sunday ";}
						
						
						
						
						
						
						
						
							?>
						<h3>
					</div>
				</div>
		
		
		
		
		
		
		
			</div><!-- LEFT SIDE -->
			
			<div class="col-sm-6 col-sm-push-6 "><!-- RIGHT SIDE -->
				<div class="embed-responsive embed-responsive-16by9">
				<iframe src="http://maps.google.com/maps?q=<?php echo $data2['latitude'] ?>, <?php echo $data2['longtitude'] ?>&z=15&output=embed" width="560" height="370" frameborder="0" style="border:0"></iframe>
				</div>
				<br><br><Br>
				<div class="grid">
				  <div class="grid-sizer"></div>
					<?php $x=0;foreach($files as $file) {echo "<div class='grid-item grid-item-no'><a data-fancybox='gallery' href='$file'><img src='$file'></a></div>"; if(++$x > 5) break;}?>
					
					
				</div>
				<br><BR>
				<h4>Review</h4>
				<p><?php echo nl2br($data2['info']) ?></p>
				
		
				
		
		
		
		
		
		
		
			</div><!-- RIGHT SIDE -->
		</div>
	</div>
	<br><Br>
</div>	

	
<div class="container-fluid footer-me">

<h1>footer</h1>
x
</div>	
	

	
	


	
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