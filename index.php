<?php
error_reporting(0);
@include './admin/db.php';

$sql2 = "SELECT * FROM shop";
$result = mysqli_query($mysqli, $sql2);
$row_count = mysqli_num_rows($result);


$rand_this = 'SELECT id FROM shop ORDER BY RAND() LIMIT 1';
$rand_query = mysqli_query($mysqli,$rand_this);
$data3 = mysqli_fetch_array($rand_query);
$edit_id =$data3['id'];
/** echo $data3['id']; echo row */



$data = "select * from shop where ID = $edit_id";
$query = mysqli_query($mysqli,$data);
$data2 = mysqli_fetch_array($query);

$closet_id = 56;
$data_receive_4 = "select * from shop where ID = $closet_id";
$query_close = mysqli_query($mysqli,$data_receive_4);
$data4 = mysqli_fetch_array($query_close);

$realpath = $data4['folder'];
$i =1;
$files = glob('./uploads/'.$realpath.'/*.{*}', GLOB_BRACE);
  
$img_loc = $data2['folder'];

require_once('./admin/geoplugin.class.php');
$geoplugin = new geoPlugin();
// If we wanted to change the base currency, we would uncomment the following line
// $geoplugin->currency = 'EUR';
 
$geoplugin->locate();
 


?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="index.css">
<script src="https://use.fontawesome.com/fd20720473.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

<script type="text/javascript">//<![CDATA[
/*$(document).on('scroll', function (e) {
    $('.bg-blue').css('opacity', ($(document).scrollTop() / 500));
});
*/
</script>

<title>F O O D Library </title>
  </head>
<body>
<div class="container-fluid header_top" style="background-image:url('./uploads/<?php echo $data4['folder'] ?>/logo.jpg');">
	<div class="row">
		<a href="selected.php?restaurant=<?php echo $data4['id'] ?>"><div class="col bh">
	
			<h1><?php echo $data4['name'] ?></h1>
			<p><?php echo nl2br($data4['info']) ?></p>

		</div></a>
		<div class="col">
		
		
		
		
		</div>

	</div>
</div>




<nav class="navbar navbar-toggleable-md navbar-light sticky-top bg-blue navbar-inverse fading" id="fading">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">Food Library</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form method="post" action="search.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="searchbox" placeholder="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>






<br>
<div class="container-fluid">
		<div class="row">
		
			
			<div class="col hidden-md-down border-right direct">
				<div><h5>R E C O M M E N D E D </h5><h3> <span class="direct">N E A R </span> </h3><h2> B Y </h2><h3> L O C A T I O N </h3>
				<span style="color:red"><i class="fa fa-map-marker fa-5x" aria-hidden="true"></i></span>
				
				
				</div>
				<div class="bh2">
				<?php /* echo "Geolocation results for {$geoplugin->ip}: <br />\n".
	"City: {$geoplugin->city} <br />\n".
	"Region: {$geoplugin->region} <br />\n".
	"Area Code: {$geoplugin->areaCode} <br />\n".
	"DMA Code: {$geoplugin->dmaCode} <br />\n".
	"Country Name: {$geoplugin->countryName} <br />\n".
	"Country Code: {$geoplugin->countryCode} <br />\n".
	"Longitude: {$geoplugin->longitude} <br />\n".
	"Latitude: {$geoplugin->latitude} <br />\n".
	"Currency Code: {$geoplugin->currencyCode} <br />\n".
	"Currency Symbol: {$geoplugin->currencySymbol} <br />\n".
	"Exchange Rate: {$geoplugin->currencyConverter} <br />\n";
	* lets not echo it now */
	?>
				
				</div>
			
				
			</div>
			
			<div class="col-sm-5 col-sm-pull-5 thumb3"><!-- LEFT SIDE -->
				<br>
				<h5>R E S T A U R A N T : <span style="font-size:1.4em"><?php echo $data4['name'] ?></span></h5>
				<div class="shit4" style="background:url('./uploads/<?php echo $data4['folder'] ?>/logo.jpg')"></div>
				<br>
								<div class="grid">
				  <div class="grid-sizer"></div>
					<?php $x=0;foreach($files as $file) {echo "<div class='grid-item grid-item-no'><a data-fancybox='gallery' href='$file'><img src='$file'></a></div>"; if(++$x > 5) break;}?>
					
					
				</div>
				<br>
				
				
				
				
				
				
				
				
				
				
		
			</div><!-- LEFT SIDE -->
			
			<div class="col-sm-5 col-sm-push-5 "><!-- RIGHT SIDE -->
				<br>
				<div class="embed-responsive embed-responsive-16by9" style="margin-bottom:3%;">
				<iframe src="http://maps.google.com/maps?q=<?php echo $data4['latitude'] ?>, <?php echo $data4['longtitude'] ?>&z=15&output=embed" width="560" height="370" frameborder="0" style="border:0"></iframe>
				</div>
				

				
				<h4>Review</h4>
				<div>
				<p><a style="color:black;text-decoration:none;" href="selected?restaurant=<?php echo $data4['id'] ?>"><?php echo nl2br($data4['info']) ?></a></p>
				</div>
				<div><a  href="selected.php?restaurant=<?php echo $data4['id'] ?>"> Read more...</a></div>
		
				
		
		
		
		
		
		
		
			</div><!-- RIGHT SIDE -->
		</div>
</div>


<br><br><br>
<!--PAL -->
<div class="container-fluid divider">

	<div class="text-center middle_text">
		<h2 style="color:white">F O O D - I S - O U R - P A S S I O N</h2>
	</div>
</div>



<div class="container-fluid">		

			<div class="row">
				<div class="col-sm-1 hidden_me2 col-sm-push-1 ">
				
				</div>
			
			
			
				<div class="col shit3 thumb3 " style="background-image:url('./uploads/<?php echo $img_loc ?>/logo.jpg')">
						<div class="bh-index "><a style="color:white" href="selected.php?restaurant=<?php echo $data2['id'] ?>"><h5><?php echo $data2['name'] ?> - Read More...</h5></a></div>
				</div>
			
				<div class="col-1  hidden-sm-down">
				
				</div>
			</div>
	
</div>		
		
		
		
		
		
		
		
		

<br><br>
<div class="footer-me-index">
<div class="container ">

	
	<div class="row">
		<div class="col">
			<h1>Restaunrant</h1><hr>
		
		
					<?php
								


						/*Check row */
						$row_count = mysqli_num_rows($result);
						/*echo "<h5>Currently : " . $row_count . " shop(s) so far.</h5>";
						/*Init loop */
						$i = 0;
						while ($i<$row_count)
						 {
							$loop_result = mysqli_fetch_array($result); /*Init pull from DB */
							$id = $loop_result['id']; /*Show ID*/
							$shop_name = $loop_result['name']; /*Show Product name*/
							
							echo "<a class='nourl' href='selected.php?restaurant=".$id. "'><div class='row'><div class='col-sm-3 col-sm-push-3  col-img' style=background-image:url('./uploads/".$loop_result['folder']."/logo.jpg'></div>";
							echo "<div class='col-sm-8 col-sm-push-8'><div class='info_overflow'><h3>- ".$shop_name."</h3><p class='3lines'>".$loop_result['info']."</p></div><div>Read more....</div></div><br></div></a><br><hr><br>";
							
							
							$i++;
						}

							?>
		
		
		
		</div>
	</div>
</div>
</div>
<br>
<div class="container-fluid footer-boy"><br><Br>
	<div class="middle_text_footer float-left">
		<h1>Food Libraly <span style="color:red"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></span></h1>
		<p>WHERE FOOD IS CLOSER THAN YOU THINK.</p>
		
	</div>
	<div class="float-right">
	<a href="about.php">A B O U T</a> | <a href="contact.php">C O N T A C T </a>
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

  
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
</script>




</body>
</html>