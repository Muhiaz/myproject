<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/main.css">
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>
<body>
	<header class="home1 container-fluid">
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
							<li><a href="home.php">home</a></li>
							<li><a href="#about">about</a></li>
							<li><a href="servicea.php">services</a></li>
							<li><a href="registeredemployees.php">Registered Employees</a></li>
							<li><a href="jobcategoriesdetailed.php">Jobs</a></li>
							<li><a href="#contact">contact</a></li>
							<li class="hidden-sm hidden-xs">
	                            <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        </li>
						</ul>

					</div>
		
	
</div>
</div>
</header>
<section>
	<?php include('jobcategories.php'); ?>
<?php include('signup.php'); ?>
<?php include('footer.php'); ?>	
</section>
</body>
</html>
