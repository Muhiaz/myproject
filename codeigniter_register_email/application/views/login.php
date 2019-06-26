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
<body style="margin-top: 10%;">
<div class="container">
	<div class="col-sm-4" style="background-color: #fff; border-radius:05px;margin-left: 30%;">
		 <img src="<?php echo base_url() .'images/img_avatar.png'?>" style="width: 80px; height: 80px; border-radius:200px;margin-left: 40%;margin-top:10px;"><h2 style="margin-left: 40%">Log in</h2>
			<form method="POST" action="<?php echo base_url().'user/login'; ?>" style="padding: 10px">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>"><?php echo form_error("email"); ?>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>"><?php echo form_error("password"); ?>
				</div>
				<button type="submit" class="btn btn-success">login</button>
			</form>
		</div>
	</div>
</body>
</html>
