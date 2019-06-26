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
                <div class="col-xs-6 col-sm-6 col-md-6 text-left" style="margin-left: 65%;" >
                    <h5>Received From:</h5>
                        <em><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo "Date: " . $row->dateofreceipt;
                           }
                       }     
                       ?>
                           <br>
                       </em>
                        <em>Receipt #: <?php
                                 if($fetch_editinvoice->num_rows()>0){
                                  foreach ($fetch_editinvoice->result() as $row) {
                                    echo "#" . $row->invoiceprefix ;
                           }
                       }     
                       ?><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->id;
                           }
                       }     
                       ?></em>
                       <br>
                       <?php
                                 if($fetch_editinvoice->num_rows()>0){
                                  foreach ($fetch_editinvoice->result() as $row) {
                                    echo "REF: Invoice #" . $row->invoiceprefix ;
                           }
                       }     
                       ?>
                        <?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->invoice_id;
                           }
                       }     
                       ?>
                       <br>
                       <?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo "Client name: " . $row->clientname;
                           }
                       }     
                       ?>
                       <br>
                     <?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo "Email: " . $row->clientemail;
                           }
                       }     
                       ?>
                       <br>
                       <?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo "Client phone: 0" . $row->clientphone;
                           }
                       }     
                       ?>
                </div>
            </div>
            <div class="row container">
                <div class="text-center">
                    <h1>Receipt</h1>
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
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->product;
                           }
                       }     
                       ?></em></h4></td>
                         <td><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo "Bluetooth " . $row->product;
                           }
                       }     
                       ?></td>
                       <td><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->quantity;
                           }
                       }     
                       ?></td>
                            <td class="col-md-1" style="text-align: center"><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->unitprice;
                           }
                       }     
                       ?></td>
                            <td class="col-md-1 text-center"><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->total;
                           }
                       }     
                       ?></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Tax: </strong>
                            </p>
                            <p>
                                <strong>Subtotal: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->tax;
                           }
                       }     
                       ?></strong>
                            </p>
                            <p>
                                <strong><?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->total;
                           }
                       }     
                       ?></strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td class="text-right"><h5><strong>Amount Received: </strong></h5></td>
                            <td class="text-center text-danger"><h4><strong> <?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->amountpaid;
                           }
                       }     
                       ?> </strong></h4></td>
                        </tr>
                         <tr>
                            <td> </td>
                            <td class="text-right"><h5><strong>Balance Due: </strong></h5></td>
                            <td class="text-center text-danger"><h4><strong> <?php
                                 if(count($receipts)){
                                  foreach ($receipts as $row) {
                                    echo $row->balancedue;
                           }
                       }     
                       ?> </strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                </td>
            </div>
             <h5>Received By:</h5>
                    <address>
                        <strong><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h6 style=''>" .$row->companyname  . ' company' . "</h6>";
                                    }
                                  }
                            ?></strong>
                             <?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h6 style=''>" .$row->streetlocation . ', ' . $row->avenuelocation . ', ' .$row->town ."</h6>";
                                    }
                                  }
                            ?>
                        <?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h6 style=''>" .$row->street  . '-' .$row->postalcode . ' ' .$row->county . ', ' . $row->companylocation ."</h6>";
                                    }
                                  }
                            ?>
                     <?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h6 style=''>Tel : " .$row->companyphone  . "</h6>";
                                    }
                                  }
                            ?>
                    </address>
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