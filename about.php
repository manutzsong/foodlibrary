<?php


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
	<title>About</title>
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
        <a class="nav-link active" href="about.php">About us</a>
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




<div class="container">

<h1>Food Library</h1>
<p>It's a website where you can find what to eat, drink or even hangout with your friends.</p>
<h1>Interesting restaurant based on your location</h1>
<p>We use your location to determine what restaurant to be displayed for you.</p>
<hR>
</div>












<div class="container-fluid footer-boy2"><br><Br>
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