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
<?php echo form_open_multipart('user/modifyserviceprofile/' .$servicedata->id) ?>
     <h3 class="page-header h3" style="margin-left: 33%;color:#fff;padding:8px;text-transform: uppercase;background-color: #888543;width: 50%;text-align: center;">Edit Service</h3>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Name</label>
                    <?php echo form_input(['name'=>'servicename','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('servicename',$servicedata->servicename)]); ?><span class="text-danger"><?php echo form_error("servicename"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Service Category</label>
                   <!--  <input type="" name="productcategory" class="form-control col-md-6"/> -->
                   <?php echo form_input(['name'=>'servicecategory','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('servicecategory',$servicedata->servicecategory)]); ?><span class="text-danger"><?php echo form_error("servicecategory"); ?></span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Purchase Information</label>
                    <?php echo form_input(['name'=>'purchaseinformation','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('purchaseinformation',$servicedata->purchaseinformation)]); ?><span class="text-danger"><?php echo form_error("purchaseinformation"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Sales Information</label>
                    <?php echo form_input(['name'=>'salesinformation','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('salesinformation',$servicedata->salesinformation)]); ?><span class="text-danger"><?php echo form_error("salesinformation"); ?></span>
                    </div>
                  </div>
                    <div class="form-group">
                    <label>Service Description</label>
                    <?php echo form_input(['name'=>'servicedescription','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('servicedescription',$servicedata->servicedescription)]); ?><span class="text-danger"><?php echo form_error("servicedescription"); ?></span>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Charges</label>
                   <?php echo form_input(['name'=>'unitprice','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('unitprice',$servicedata->unitprice)]); ?><span class="text-danger"><?php echo form_error("unitprice"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Image</label>
                    <input type="file" name="serviceimage" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("servceimage"); ?></span>
                    </div>
                  </div>
                   <div class="form-group">
                    <button class="btn btn-primary" type="submit"><h6 style="font-weight: 500;">Save</h6></button>
                    </div>

                <!-- </form>  -->
                <?php echo form_close() ?> 
</body>
</html>