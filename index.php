<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/style.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
	<!--Navbar-->
	<?php include 'head_navbar.php';
	?>
	<div class="modal fade" id="signform" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
 		 <div class="modal-dialog modal-dialog-centered">
   			<div class="modal-content">
      		<br>
          		<ul id="myTab" class="nav nav-tabs">
          				<li class="nav-item"><a href="#signin" class="nav-link active" data-toggle="tab">Sign In</a></li>
           				<li class="nav-item"><a href="#signup" class="nav-link" data-toggle="tab">Sign Up</a></li>
         			    <li class="nav-item"><a href="#why" class="nav-link" data-toggle="tab">Why?</a></li>
            	</ul>
       			<div class="modal-body">
	        		<div id="myTabContent" class="tab-content">
	       				<div class="tab-pane" id="why">
	       					<p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>        					
	        				<p>Please contact <a href="mailto:supriyamsingh5@gmail.com">supriyamsingh5@gmail.com</a> for any other inquiries.</p>
	        			</div>
	        			<div class="tab-pane active" id="signin">
	          				<form action="login.php" class="needs-validation">
 								<div class="form-group">
   									<label for="email">Email address:</label>
    								<input type="email" class="form-control" name="email" required>
  								</div>
							 	<div class="form-group">
							    	<label for="pwd">Password:</label>
							   		<input type="password" class="form-control" name="pwd" required>
							  	</div>
							  	<button type="submit" class="btn" style="background-color: #d27e01; color:white;">Submit</button>
							</form>
					    </div>
	        			<div class="tab-pane" id="signup">
	            			<form action="signup.php" class="needs-validation">
	            				<div class="form-group">
   									<label for="name">Name:</label>
    								<input type="text" class="form-control" name="uname" required>
  								</div>
 								<div class="form-group">
   									<label for="email">Email address:</label>
    								<input type="email" class="form-control" name="email" required>
  								</div>
							 	<div class="form-group">
							    	<label for="pwd">Password:</label>
							   		<input type="password" class="form-control" name="pwd" id="pwd1" onchange='check_pass();' required>
							  	</div>
							  	<div class="form-group">
   									<label for="pwd2">Confirm Password:</label>
    								<input type="password" class="form-control" name="pwd2" id="pwd2" onchange='check_pass();' required>
  								</div>
  								<div id="pwdconf">Match</div>
  								<div class="form-group">
   									<label for="number">Contact no.:</label>
    								<input type="number" class="form-control" name="phone" required>
  								</div>
							  	<button type="submit" class="btn" name="sudo" id="sudo" style="background-color: #d27e01; color:white;">Submit</button>
							</form>
	     				 </div>
	   				</div>
	     		</div>
	      		<div class="modal-footer">
	      			<center>
	       				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        		</center>
	      		</div>
    		</div>
  		</div>
	</div>
	<!--carousel-->
	<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/homebg1.jpg" alt="Los Angeles" width="100%" style="object-fit: cover;" height="500px;">
	    </div>
	    <div class="carousel-item">
	      <img src="images/homebg2.jpg" alt="Chicago" width="100%" style="object-fit: cover;" height="500px;">
	    </div>
	    <div class="carousel-item">
	      <img src="images/b3.jpg" alt="New York" width="100%" style="object-fit: cover;" height="500px;">
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