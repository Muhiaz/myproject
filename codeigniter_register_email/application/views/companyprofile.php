<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title></title>
    <style type="text/css">
        body{
            background-image: url();
            background-position:center;
            background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo base_url(); ?>images/stock.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container" style="background-color: #fff;margin-top: 02%;border-radius: 5px;padding: 2%;width: 60%;">
<?php echo form_open_multipart('user/companyprofile') ?>
    <h3 style="margin-left: 35%;text-transform: uppercase;">Register Company</h3><hr style="margin-left: 35%;width: 40%;">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Company Name</label>
      <input type="text" class="form-control" id="" placeholder="Name" name="companyname" class="input"><span class="text-danger"><?php echo form_error("companyname"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Company Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="companyemail"><span class="text-danger"><?php echo form_error("companyemail"); ?></span>
    </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Company Phone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Phone" name="companyphone"><span class="text-danger"><?php echo form_error("companyphone"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Country/Region</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Country, Region" name="companylocation"><span class="text-danger"><?php echo form_error("companylocation"); ?></span>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">County/State</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="County, State" name="county"><span class="text-danger"><?php echo form_error("county"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Company Type</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Industry" name="companytype"><span class="text-danger"><?php echo form_error("companytype"); ?></span>
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputAddress2">Street</label>
    <input type="text" class="form-control" id="inputAddress3" placeholder="Street name" name="streetlocation"><span class="text-danger"><?php echo form_error("streetlocation"); ?></span>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Avenue(Optional)</label>
    <input type="text" class="form-control" id="inputAddress3" placeholder="Off/Along Avenue name" name="avenuelocation">
  </div>
    <div class="form-group col-md-4">
    <label for="inputAddress2">Building(Optional)</label>
    <input type="text" class="form-control" id="inputAddress4" placeholder="Building name" name="building">
  </div>
  </div>
   <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress">Town</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Town" name="town"><span class="text-danger"><?php echo form_error("town"); ?></span>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Street Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="e.g 1000" name="street"><span class="text-danger"><?php echo form_error("street"); ?></span>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Postal Code</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="e.g 80100" name="postalcode"><span class="text-danger"><?php echo form_error("postalcode"); ?></span>
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Company Website</label>
      <input type="text" class="form-control" id="inputCity" placeholder ="http://www." name="companywebsite"><span class="text-danger"><?php echo form_error("companywebsite"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Company Logo</label>
      <input type="file" class="form-control" id="inputCity" placeholder ="" name="logo">
    </div>
    </div>
     <div class="text-center">
                                <button type="submit"class="btn btn-success waves-effect waves-light">Register</button>
                            </div>
</div>
<?php echo form_close() ?>
</body>
</html>