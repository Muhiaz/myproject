<!DOCTYPE html>
<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/main.css">

     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>
	<header class="home container-fluid">
	<div>
		<div class="navbar-header">
						<a href="index.html" class="title">JANTA</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar" style="background-color: #000;"></span>
							<span class="icon-bar" style="background-color: #000;"></span>
							<span class="icon-bar" style="background-color: #000;"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home">home</a></li>
							<li><a href="#about">about</a></li>
							<li><a href="services.php">services</a></li>
							<li><a href="#portfolio">Registered Employees</a></li>
							<li><a href="jobcategoriesdetailed.php">Jobs</a></li>
							<li><a href="#contact">contact</a></li>
							<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        </li>
						</ul>

					</div>
		<div class="heading-primary">
			<div class="heading-primary-main">Hire our Dedicated Employees Today</div>
			<div class="heading-primary-sub">Find Effective Employees at the best rates</div>
		</div>
<div class="row search">
	<div class="col-md-3 form-group">
		<input type="" class="col-md-12 form-control" name="" placeholder="Key Words">
	</div>
	<div class="col-md-3 form-group">
		<select type="" class="col-md-12 form-control" name="">
			<option>Select Location</option>
			<option>Mombasa</option>
			<option>Nairobi</option>
			<option>Kisumu</option>
			<option>Nakuru</option>
			<option>Muranga</option>
			<option>Nyeri</option>
			<option>Machakos</option>
			<option>Taita Taveta</option>
			<option>Makueni</option>
		</select>
	</div>
	<div class="col-md-3 form-group">
	<select type="" class="col-md-12 form-control" name="">
			<option>Select Employees</option>
			<option>Masons</option>
			<option>Plumbers</option>
			<option>Gardeners</option>
			<option>Cleaners</option>
			<option>Brick Layers</option>
			<option>Carpenters</option>
			<option>Househelps</option>
		</select>	
	</div>
	<div class="col-md-3 form-group">
	<input type="button" class="form-control btn btn-primary" name="search" id="search" value="Search Job">	
	</div>
</div>
</div>
</header>
<section>
<section class="py-5 bg-image overlay-primary fixed overlay">
<?php include('careerstatistics.php'); ?>
</section>	
<?php include('jobcategories.php'); ?>
<?php include('signup.php'); ?>
<?php include('footer.php'); ?>	
</section>
</body>
</html>
