<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
    body {
    margin-top: 10px;
    background-color: #000;
}
</style>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <button id="printInvoice" class="btn btn-info"> Print</button>
    <button id="printInvoice" class="btn btn-info"> Email</button>
    <div class="row">
        <div class="well col-xs-12 col-sm-12 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 receipt">
                   
                </div>
                <div class="container">
                 <div style="justify-content: center;">
                   <?php 
                                if($fetch_logo->num_rows()>0){
                                  foreach ($fetch_logo->result() as $row) {
                                    $image_arr = explode(",", $row->logo);
                                    foreach($image_arr as $image_name) 
                                    {
                                       // echo base_url() .'uploads/' .$image_name;
                                      ?>
                                    <!-- <img src='"<php echo base_url().'images/'.$image_name?>"'>; -->
                                     <img src="<?php echo base_url() .'uploads/' .$image_name ?>" style="width: 100px; height: 90px; margin-top: 5px;margin-left: -7%;">
                                      <?php
                                    }
                                  }
                                }?>
                        </div>
                        <div style="justify-content: center;text-align: center;">
                             <span><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h4>" . $row->companyname . " Company </h4>";
                                    }
                                  }
                            ?></span>
                          </div>
                          </div>
                           <h2 style="text-align: center;">Voucher</h2>
                           <hr style="width: 100%;background-color: blue;">
                          <div class="row container" >
                        <div class="col-md-6">
                        <h5>Voucher Details</h5>
     <em>Voucher #: <?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->id;
                           }
                       }     
                       ?></em><br>
                       <em><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo "Date: " . $row->expensedate;
                           }
                       }     
                       ?>
                           <br>
                       </em>
                       </div>

            </div>
             <hr style="width: 100%;color: #000;font-weight: 600px;">
            <div class="row container" style="margin-left:1%;margin-right:1%">
                <div class="text-center">
                </div>
                <h4>For: </h4>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                             <th>Description</th>
                            <th>#Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-5"><em><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->product;
                           }
                       }     
                       ?></em></h4></td>
                         <td><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->product;
                           }
                       }     
                       ?></td>
                       <td><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->quantity;
                           }
                       }     
                       ?></td>
                            <td class="col-md-1" style="text-align: center"><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->unitprice;
                           }
                       }     
                       ?></td>
                            <td class="col-md-1 text-center"><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->amount;
                           }
                       }     
                       ?></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <p>
                                <strong><?php
                                 if(count($cash)){
                                  foreach ($cash as $row) {
                                    echo $row->amount;
                           }
                       }     
                       ?></strong>
                            </p></td>
                        </tr>
                    </tbody>
                </table>
                </td>
            </div>
                     <hr style="width: 100%;color: #000;">
        <div class="">
        <div style="min-width: 600px">
            <header>
                <div>
          
                         <div class="row" style=" text-align:center;justify-content: center;">
                        <div class="col-md-12">
                          <span>
                            <?php
                            if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h5>" . $row->companyname . "</h5>";
                                    }
                                  }
                            ?>
                          </span>
                         <span><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h5>".$row->building  . ', ' . $row->streetlocation . " Off " .$row->avenuelocation  . ', ' . $row->town . " ," . $row->county . ', ' . $row->companylocation . "</h5>";
                                    }
                                  }
                            ?></span>
                             <div class=""><span><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h5 style=''>Tel: " . $row->companyphone .", " . $row->companyemail . ", " . $row->companywebsite . " </h5>";
                                    }
                                  }
                            ?></span></div>
                       </div>
        </div>
    </div>
</div>
<script type="text/javascript">
     $('#printInvoice').click(function(){
            Popup($('.receipt')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>