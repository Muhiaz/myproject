<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <img src="<php <?php echo base_url() ?>images/img_avatar.png">
<?php
?>
<div class="row">
    <div class="col-lg-12">
        <h2>Upload Image using CodeIgniter with MySQL</h2>                 
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <?php echo $this->session->flashdata('img_uploaded_msg'); ?>                      
    </div>
</div><!-- /.row -->
<?php if(empty($this->session->flashdata('img_uploaded'))) { ?>
<div class="row">
    <form action="<?php echo site_url();?>image/save" class="img-upl-validation" id="img-upl-validation" enctype="multipart/form-data" method="post" accept-charset="utf-8">  
    <div class="col-lg-6">
    </div> 
        <div class="col-lg-6">   
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="imageURL" id="url" class="filestyle" data-icon="false" data-buttontext="Choose image">
            </div>                        
        </div>
        <div class="col-lg-12 col-sm-12"> 
            <div class="form-group text-right padT">
                <button type="submit" name="upload_file" id="upload-file" value="upl-img" class="btn btn-primary mrgT">Upload</button>
            </div>
        </div>
    </form>
</div><!-- /.row -->
<?php } else { ?>
<div class="container">
  <h2>Images</h2>  
    <img width="700" height="400" class="img-thumbnail" src="<?php print HTTP_UPLOAD_PATH.$this->session->flashdata('img_uploaded');?>">    
</div>    
<?php } ?>
</html>