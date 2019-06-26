<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-image: url();
			background-position:center;
			background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo base_url(); ?>images/stock.jpg');
            background-size: cover;
			/*opacity: 0.8;*/

		}
	</style>
</head>
<body>
	<h2 style="font-family: lato;color:#fff;font-size:30px;margin-left: 15%; text-transform: uppercase;font-weight: 800;letter-spacing: 1.5px;">Welcome To The Rich Tech Office Management Software</h2>
<div class="container">
	<h1 class="page-header text-center"></h1>
	<div class="row" >
		<div class="col-sm-5" style="padding:20px; background-color: #fff; margin-left: 25%;margin-top: 2%;border-radius: 5px">
			<?php
		    	if(validation_errors()){
		    		?>
		    		<div class="alert alert-info text-center">
		    			<?php echo validation_errors(); ?>
		    		</div>
		    		<?php
		    	}
 
				if($this->session->flashdata('message')){
					?>
					<div class="alert alert-info text-center">
						<?php echo $this->session->flashdata('message'); ?>
					</div>
					<?php
				}	
		    ?>
			<h3 class="text-center">Sign Up</h3>
			<form method="POST" action="<?php echo base_url().'user/register'; ?>">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>">
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm Password:</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
				</div>
				<button type="submit" class="btn btn-primary">Sign Up</button><p>Already have an account <a href="<?php echo base_url()?>user/login" style="background-color:white;padding: 2px;">Login</a></p>
			</form>
		</div>
	</div>
</div>
</body>
</html>

