<?php
echo '<nav class="navbar navbar-expand-sm bg-dark">  
		<div class="container ">
				<a class="navbar-brand" href="#">2BREADS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    		<i class="navbar-toggler-icon"></i>
		 		</button>
	  		<div class="collapse navbar-collapse navbar-right" id="collapsibleNavbar">
		 		<ul class="navbar-nav ml-auto font-weight-bold">
				    <li class="nav-item">
				      <a class="nav-link" href="#home">HOME</a>
				    </li>
				    <li class="nav-item dropdown">
      					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        					SERVICES
        				</a>
      					<div class="dropdown-menu bg-dark">
					        <a class="dropdown-item" href="#">Home Appliances</a>
					        <a class="dropdown-item" href="#">Coaching</a>
					        <a class="dropdown-item" href="#">Planning</a>
					        <a class="dropdown-item" href="#">Decorations</a>
					        <a class="dropdown-item" href="#">Labour</a>
					        <a class="dropdown-item" href="#">Constructions</a>
					        <a class="dropdown-item" href="#">Body Maintenance</a>
					    </div>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#contact">CONTACT</a>
				    </li>

				    <li class="nav-item">
				     	<button type="button" class="btn nav-link p-2 mx-2" data-toggle="modal" data-target="#signform">SIGN UP | SIGN IN</button>
				    </li>			    
		 		 </ul>
	 		</div>
	 	</div>
</nav>';
?>