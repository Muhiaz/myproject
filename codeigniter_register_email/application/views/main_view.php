<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
      <div class="container">
        <h1>Welcome to the Rich Tech Office Management Software!</h1>
                <form method="post" action="<?php echo base_url()?>main/form_validation" style="border: 1px solid #fff;padding: 20px; width:60%; box-shadow: 5px 5px 5px 5px #8888">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control col-md-12" value="<?php echo set_value("firstname"); ?>" />
                    <span class="text-danger"><?php echo form_error("firstname"); ?></span>
                    </div>
                    <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control col-md-12" value="<?php echo set_value("lastname"); ?>"/>
                    <span class="text-danger"><?php echo form_error("lastname"); ?></span>
                    </div>
                    <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control col-md-12"value="<?php echo set_value("email");?>" />
                     <span class="text-danger"><?php echo form_error("email"); ?></span>
                    </div>
                     <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control col-md-12"/>
                     <span class="text-danger"><?php echo form_error("password"); ?></span>
                    </div>
                    <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password1" class="form-control col-md-12"/>
                     <span class="text-danger"><?php echo form_error("password1"); ?></span>
                    </div>
                    <div class="form-group">
                    <input type="submit" name="insert" class="btn btn-success"/>
                    </div>
                   
                </form>
    </div>
</body>
</html>