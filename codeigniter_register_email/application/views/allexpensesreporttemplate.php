<!DOCTYPE html>
<html>
<head>
    <title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
  body{
    font-size: 14px;
  }
  @page 
{
   size: A4;
   margin: 0;
   page-break-before: always; 
}
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    max-width: 900px;
    padding: 15px;
    size: A4;
   margin: 0;
   page-break-before: always;
}

.invoice header {
    padding: 10px 30px;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice:last-child {
        page-break-before: always
    }
}
</style>
<style type="text/css" media="print">
    body .toolbar{ visibility: hidden; display: none }
    body .invoice{max-width: 1000px}
    body .invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0px;
}
</style>
</head>
<body style="background-color: gray">
<!--Author      : @arboshiki-->
<div id="invoice" class="container">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"> Print</button>
            <a href="<?php echo base_url('user/pdfinvoice'); ?>"><button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button></a>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 400px">
            <header>
                <div class="row"style="justify-content: center;">
                   <?php 
                                if($fetch_logo->num_rows()>0){
                                  foreach ($fetch_logo->result() as $row) {
                                    $image_arr = explode(",", $row->logo);
                                    foreach($image_arr as $image_name) 
                                    {
                                       // echo base_url() .'uploads/' .$image_name;
                                      ?>
                                    <!-- <img src='"<php echo base_url().'images/'.$image_name?>"'>; -->
                                     <img src="<?php echo base_url() .'uploads/' .$image_name ?>" style="width: 150px; height: 110px; margin-top: 5px;">
                                      <?php
                                    }
                                  }
                                }?>
                        </div>
                        <div style="justify-content: center;text-align: center;">
                             <span><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h4 style='justfy:center'>" . $row->companyname . " Company </h4>";
                                    }
                                  }
                            ?></span>
                             
                            <br><br>

                             <h2 style="text-align: center;">INVOICES REPORT</h2><br> 
                        </div>
                        <div style="float: right;">
                        
                        </div>
                        <hr style="width: 100%;background-color: blue;">
                    <table>
                      <thead>
                        <th>#Invoice No</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                       <?php
                        if($fetch_expenses->num_rows()>0){
                        foreach($fetch_expenses->result() as $row){
                        ?>
                          <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->product;?></td>
                              <td><?php echo $row->quantity;?></td>
                              <td><?php echo $row->unitprice;?></td>
                              <td><?php echo $row->amount;?></td>
                          </tr>
                        </tbody>
                        <?php
                      }
                      }
                        ?>
                    </table>
                    <table>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total Invoices:
                          <?php if($totalinvoices->num_rows()>0){
              foreach ($totalinvoices->row() as $row) {
                echo "  Kshs. ";
                print_r($row);
              }
            }?>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                         <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total Amount Paid:
                          <?php if($getincome->num_rows()>0){
              foreach ($getincome->row() as $row) {
                echo "  Kshs. ";
                print_r($row);
              }
            }?>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total Amount Owed:
                          <?php if($getunpaidinvoices->num_rows()>0){
              foreach ($getunpaidinvoices->row() as $row) {
                echo "  Kshs. ";
                print_r($row);
              }
            }?>
                      </tr>
                    </table>
                    <hr style="width: 100%;background-color: blue;">
        <div class="">
        <div style="min-width: 600px">
            <header>
                <div>
          
                         <div class="row" style=" text-align:center;justify-content: center;">
                        <div class="col-md-12">
                         <span><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h6>".$row->building  . ', ' . $row->streetlocation . " Off " .$row->avenuelocation  . ', ' . $row->town . " ," . $row->county . ', ' . $row->companylocation . "</h6>";
                                    }
                                  }
                            ?></span>
                             <div class=""><span><?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                            
                                       echo "<h6 style=''>Tel: " . $row->companyphone .", " . $row->companyemail . ", " . $row->companywebsite . " </h6>";
                                    }
                                  }
                            ?></span></div>
                       </div>
                       <div class="col-md-6 ">
                       <div class="" style='margin-left: 45%;'>
                       
                    </div>
                    </div>
                    </div>

                    </div>
            </footer>
       
        </div>
        
    </div>
</div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
     $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
</html>