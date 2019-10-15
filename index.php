<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/project.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/project.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
	<!--Navbar-->
	<?php include 'head_navbar.php';
	?>

	<!--carousel-->
	<div id="demo" class="carousel slide" data-ride="carousel" data-interval="1000">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/b1.jpg" alt="Los Angeles" width="100%" style="object-fit: cover;" height="400px;">
	    </div>
	    <div class="carousel-item">
	      <img src="images/b2.jpg" alt="Chicago" width="100%" style="object-fit: cover;" height="400px;">
	    </div>
	    <div class="carousel-item">
	      <img src="images/b3.jpg" alt="New York" width="100%" style="object-fit: cover;" height="400px;">
	    </div>
	  </div>
	  
	  <!-- Left and right controls -->
	 <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>-->
	</div>
</body>
</html>