<?php
@include 'db.php';


 


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

  </head>
<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded sticky-top bg-blue navbar-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">Food Library</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container-fluid footer-me-index">
<div class="container" style="margin-top:5%">

	<div class="row">
		<div class="col">
		<h3>Contact us </h3><br><hr><br>
			<form class="form-control">
				<label>E-mail</label>
				<input class="form-control" type="text" placeholder="Email"></input> 
				<label>Name</label>
				<input class="form-control" type="text" placeholder="Name"></input>
				<label>Subject</label>
				<input class="form-control" type="text" placeholder="Subject"></input>
				<label>Message</label>
				<textarea class="form-control" type="text" placeholder="Message"></textarea>
				<br>
				<input class="form-control btn btn-primary" type="submit" value="Submit"></input>
			</form>
		</div>
		<div class="col">
				<div class="embed-responsive embed-responsive-16by9" style="margin-bottom:3%;">
				<iframe src="http://maps.google.com/maps?q=100,30&z=15&output=embed" width="560" height="370" frameborder="0" style="border:0"></iframe>
				</div>
				<h5>- Purin Koettip</h5>
				<h5>- 39 Thatako Sub-district, Thatako district, Nakhon Sawan, Thailand 60160 </h5>
				<h5>- 083-488-6522</h5>
				<h5>- manutzsong@gmail.com</h5>
		
		
		
		</div>
	</div>
</div>

<br><br>
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