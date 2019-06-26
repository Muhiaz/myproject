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
<?php echo form_open_multipart('user/modifycompany/'.$companydata->id) ?>
    <h3 style="margin-left: 33%;color:#fff;padding:8px;text-transform: uppercase;background-color: #888543;width: 50%;">Edit Company Details</h3><hr style="margin-left: 30%;width: 50%;">
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Company Name</label>
      <?php echo form_input(['name'=>'companyname','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('companyname',$companydata->companyname)]); ?><span class="text-danger"><?php echo form_error("companyname"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Company Email</label>
      <?php echo form_input(['name'=>'companyemail','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('companyemail',$companydata->companyemail)]); ?><span class="text-danger"><?php echo form_error("companyemail"); ?></span>
    </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Company Phone</label>
    <?php echo form_input(['name'=>'companyphone','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('companyphone',$companydata->companyphone)]); ?><span class="text-danger"><?php echo form_error("companyphone"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Country/Region</label>
  <?php echo form_input(['name'=>'companylocation','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('companylocation',$companydata->companylocation)]); ?><span class="text-danger"><?php echo form_error("companylocation"); ?></span>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">County/State</label>
    <?php echo form_input(['name'=>'county','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('county',$companydata->county)]); ?><span class="text-danger"><?php echo form_error("county"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Company Type</label>
   <?php echo form_input(['name'=>'companytype','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('companytype',$companydata->companytype)]); ?><span class="text-danger"><?php echo form_error("companytype"); ?></span>
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress2">Street</label>
   <?php echo form_input(['name'=>'streetlocation','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('streetlocation',$companydata->streetlocation)]); ?><span class="text-danger"><?php echo form_error("streetlocation"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Avenue</label>
   <?php echo form_input(['name'=>'avenuelocation','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('avenuelocation',$companydata->avenuelocation)]); ?><span class="text-danger"><?php echo form_error("avenuelocation"); ?></span>
  </div>
  </div>
   <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress">Town</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Town" name="town"><span class="text-danger"><?php echo form_error("town"); ?></span>
    <?php echo form_input(['name'=>'town','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('town',$companydata->town)]); ?><span class="text-danger"><?php echo form_error("town"); ?></span>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Street Address</label>
    <?php echo form_input(['name'=>'street','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('street',$companydata->street)]); ?><span class="text-danger"><?php echo form_error("street"); ?></span>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Postal Code</label>
     <?php echo form_input(['name'=>'postalcode','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('postalcode',$companydata->postalcode)]); ?><span class="text-danger"><?php echo form_error("postalcode"); ?></span>
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Company Website</label>
      <?php echo form_input(['name'=>'companywebsite','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('companywebsite',$companydata->companywebsite)]); ?><span class="text-danger"><?php echo form_error("companywebsite"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Company Logo</label>
      <input type="file" class="form-control" id="inputCity" placeholder ="" name="logo">
    </div>
    </div>
     <div class="text-center">
                                <button type="submit"class="btn btn-primary waves-effect waves-light">Submit</button><a href="<?php echo base_url()?>user/companies"><button type=""class="btn btn-default waves-effect waves-light">Cancel</button></a>
                            </div>
</div>
<?php echo form_close() ?>
</body>
</html>