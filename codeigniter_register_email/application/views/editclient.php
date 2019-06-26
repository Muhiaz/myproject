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
        }
    </style>
</head>
<body>
    <div class="container" style="background-color: #fff;margin-top: 02%;border-radius: 5px;padding: 2%;width: 60%;">
<?php echo form_open_multipart('user/modifyclient/'.$clientdata->id) ?>
    <h3 style="margin-left: 33%;color:#fff;padding:8px;width:45%;text-transform: uppercase;background-color: #888543;">Edit Client Details</h3><hr style="margin-left: 35%;width: 40%;">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <!-- <input type="text" class="form-control" id="" placeholder="Name" name="companyname" class="input"><span class="text-danger"><?php echo form_error("companyname"); ?></span> -->
      <?php echo form_input(['name'=>'firstname','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('firstname',$clientdata->firstname)]); ?><span class="text-danger"><?php echo form_error("firstname"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Second Name</label>
      <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="companyemail"><span class="text-danger"><?php echo form_error("companyemail"); ?></span> -->
      <?php echo form_input(['name'=>'secondname','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('secondname',$clientdata->secondname)]); ?><span class="text-danger"><?php echo form_error("secondname"); ?></span>
    </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Email</label>
    <!-- <input type="text" class="form-control" id="inputAddress" placeholder="Phone" name="companyphone"><span class="text-danger"><?php echo form_error("companyphone"); ?></span> -->
    <?php echo form_input(['name'=>'email','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('email',$clientdata->email)]); ?><span class="text-danger"><?php echo form_error("email"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Street Address</label>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Country, Region" name="companylocation"><span class="text-danger"><?php echo form_error("companylocation"); ?></span> --><?php echo form_input(['name'=>'street','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('street',$clientdata->street)]); ?><span class="text-danger"><?php echo form_error("stream_set_timeout(stream, seconds)"); ?></span>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">Town</label>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="County, State" name="county"><span class="text-danger"><?php echo form_error("county"); ?></span> -->
    <?php echo form_input(['name'=>'town','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('town',$clientdata->town)]); ?><span class="text-danger"><?php echo form_error("town"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Company</label>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="County, State" name="company"><span class="text-danger"><?php echo form_error("company"); ?></span> -->
    <?php echo form_input(['name'=>'company','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('company',$clientdata->company)]); ?><span class="text-danger"><?php echo form_error("company"); ?></span>
  </div>
  </div>
   <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Phone</label>
   <!--  <input type="text" class="form-control" id="inputAddress" placeholder="Town" name="phone"><span class="text-danger"><?php echo form_error("phone"); ?></span> -->
    <?php echo form_input(['name'=>'phone','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('phone',$clientdata->phone)]); ?><span class="text-danger"><?php echo form_error("phone"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">State</label>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Country, Region" name="street"><span class="text-danger"><?php echo form_error("street"); ?></span> -->
    <?php echo form_input(['name'=>'state','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('state',$clientdata->state)]); ?><span class="text-danger"><?php echo form_error("state"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Product/Service</label>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="County, State" name="company"><span class="text-danger"><?php echo form_error("company"); ?></span> -->
    <?php echo form_input(['name'=>'products','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('products',$clientdata->products)]); ?><span class="text-danger"><?php echo form_error("products"); ?></span>
  </div>
  </div>
  <div class="text-center">
                                <button type="submit"class="btn btn-primary waves-effect waves-light">Submit</button><a href="<?php echo base_url()?>user/clients"><button type=""class="btn btn-default waves-effect waves-light">Cancel</button></a>
                            </div>
    </div>
</div>
<?php echo form_close() ?>
</body>
</html>