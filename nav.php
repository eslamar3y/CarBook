	<?php 
	require_once("Connection.php")
	
	?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="car.php" class="nav-link">Cars</a></li>
	          <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
			  
			  
			  <?php
			  	session_start();
				if($_SESSION)
				{
					?>
					<!-- <li class="nav-item"><a href="Logout.php"class="nav-link">Logout</a></li> -->
					<li class="nav-item dropdown">
						<a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
						<div class="navbar-profile">
							<p class="mb-0 d-none d-sm-block navbar-profile-name"><?=$_SESSION['fname'] ?></p>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
						
						<a class="dropdown-item preview-item" href="Logout.php" style="cursor: pointer">
							<div class="preview-thumbnail">
							<div class="preview-icon bg-dark rounded-circle">
								<i class="mdi mdi-logout text-danger"></i>
							</div>
							</div>
							<div class="preview-item-content">
							<p class="preview-subject mb-1">Log out</p>
							</div>
						</a>
						</div>
					</li>
					<?php
				}
				else
				{
					?>
					<li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li>
					<?php
				}
			  ?>
	          <!-- <li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>