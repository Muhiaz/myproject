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
<?php echo form_open_multipart('user/modifyproductprofile/'.$productdata->id) ?>
     <h3 class="page-header h3" style="margin-left: 33%;color:#fff;padding:8px;text-transform: uppercase;background-color: #888543;width: 50%;text-align: center;">Edit Product</h3>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Product Name</label>
                   <?php echo form_input(['name'=>'productname','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('productname',$productdata->productname)]); ?><span class="text-danger"><?php echo form_error("productname"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Product Category</label>
                   <!--  <input type="" name="productcategory" class="form-control col-md-6"/> -->
                   <?php echo form_input(['name'=>'productcategory','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('productcategory',$productdata->productcategory)]); ?><span class="text-danger"><?php echo form_error("productcategory"); ?></span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Product Quantity</label>
                    <?php echo form_input(['name'=>'productquantity','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('productquantity',$productdata->productquantity)]); ?><span class="text-danger"><?php echo form_error("productquantity"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>As of Date</label>
                    <?php echo form_input(['name'=>'productdate','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('productdate',$productdata->productdate)]); ?><span class="text-danger"><?php echo form_error("productdate"); ?></span>
                    </div>
                  </div>
                    <div class="form-group container">
                    <label>Product Description</label>
                    <?php echo form_input(['name'=>'productdescription','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('productdescription',$productdata->productdescription)]); ?><span class="text-danger"><?php echo form_error("productdescription"); ?></span>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Unit Price</label>
                    <?php echo form_input(['name'=>'unitprice','type'=>'text','id'=>'defaultForm-email','class'=>'form-control','value'=>set_value('unitprice',$productdata->unitprice)]); ?><span class="text-danger"><?php echo form_error("unitprice"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Product Image</label>
                    <input type="file" name="productimage" class="form-control col-md-6"/>
                    </div>
                  </div>
                   <div class="form-group">
                    <button class="btn btn-primary" type="submit"><h6 style="font-weight: 500;">Save</h6></button>
                    </div>

                <!-- </form>  -->
                <?php echo form_close() ?>
</body>
</html>