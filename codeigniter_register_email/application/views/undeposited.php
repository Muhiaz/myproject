<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="icon" href="images/favicon.ico" type="image/ico" /> -->

    <title></title>
<style type="text/css">
  .bankbtn {
  background-color: green;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
.pettybtn {
  background-color: blue;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
</style>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php 
                                if($fetch_logo->num_rows()>0){
                                  foreach ($fetch_logo->result() as $row) {
                                    $image_arr = explode(",", $row->logo);
                                    foreach($image_arr as $image_name) 
                                    {
                                       // echo base_url() .'uploads/' .$image_name;
                                      ?>
                                    <!-- <img src='"<php echo base_url().'images/'.$image_name?>"'>; -->
                                     <img src="<?php echo base_url() .'uploads/' .$image_name ?>" style="width: 100px; height: 80px;margin: 10px 0px 0px 20px;border: 5px solid #fff;">
                                      <?php
                                    }
                                  }
                                }?>
              </div>
              <div class="profile_info" style="margin-left:10px; ">
                <span>Welcome,</span>
                <h2> <?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                                    echo $row->companyname; 
                                     }
                                     }  // echo base_url() .'uploads/' .$image_name;
                                      ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="admin"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a href="clients"><i class="fa fa-edit"></i> Clients </a>
                  </li>
                  <li><a href="products"><i class="fa fa-desktop"></i> Products </a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Accounts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="accounts">Income</a></li>
                      <li><a href="undeposited">Undeposited</a></li>
                       <li><a href="gettotalpettycashaccount">Petty Cash</a></li>
                      <li><a href="bankaccount">Bank</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Sales<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="invoices">Invoices</a></li>
                      <li><a href="allcash">Cash</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Expenditure<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="allexpenses">Expenses</a></li>
                      <li><a href="allpurchases">Purchases</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bug"></i> Projects </a>
                  </li>
                  <li><a href="reports"><i class="fa fa-clipboard"></i> Reports </a>
                  </li>
                  <li><a href="humanresource"><i class="fa fa-file"></i> Human Resource </a>
                        </li>
                        <li><a><i class="fa fa-user"></i> Admin </a>
                        </li>
                        <li><a href="companies"><i class="fa fa-user"></i> Company Profile </a>
                        </li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php 
                                if($fetch_logo->num_rows()>0){
                                  foreach ($fetch_logo->result() as $row) {
                                    $image_arr = explode(",", $row->logo);
                                    foreach($image_arr as $image_name) 
                                    {
                                       // echo base_url() .'uploads/' .$image_name;
                                      ?>
                                    <!-- <img src='"<php echo base_url().'images/'.$image_name?>"'>; -->
                                     <img src="<?php echo base_url() .'uploads/' .$image_name ?>" style="width: 40px; height: 40px; border-radius:200px;">
                                      <?php
                                    }
                                  }
                                }?>
                    <?php 
                                if($fetch_company->num_rows()>0){
                                  foreach ($fetch_company->result() as $row) {
                                    echo $row->companyname; 
                                     }
                                     }  // echo base_url() .'uploads/' .$image_name;
                                      ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">0</span>
                  </a>
                  
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-stripped" cellspacing="1"
  width="50%" style="border: 1;background-color: #fff;" align="center">
    <thead>
      <tr><h3 style="text-align: center;background-color: #fff;">Undeposited Account</h3></tr>
      <tr style="text-transform: uppercase;">
        <th>Account</th>
        <th>Cash</th>
        <th>M-pesa</th>
         <th>Amount</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>Invoice Account</td>
          <td><?php if($fetch_incomeaccounts->num_rows()>0){
            $sum = 0; 
              foreach ($fetch_incomeaccounts->result() as $value) {
              if ($value->modeofpayment=='Cash') {
                $sum += $value->amountpaid;
                }  
              }
               echo $sum;
            }
            ?></td>
          <td><?php if($fetch_incomeaccounts->num_rows()>0){
             $sum = 0; 
              foreach ($fetch_incomeaccounts->result() as $value) { 
              if ($value->modeofpayment=='M-Pesa') {
                $sum += $value->amountpaid;
                }  
              }
               echo $sum;
            }
            ?></td>
          <td><?php if($gettotals->num_rows()>0){
              foreach ($gettotals->row() as $row) {
                 echo "<h6>" .$data="";
                echo "Kshs.";
                print_r($row);
                echo "</h6>";
              }
            }?></td>
        </tr>
         <tr>
          <td>Cash Sales</td>
           <td><?php if($fetch_cashtransactions->num_rows()>0){
            $sum = 0; 
              foreach ($fetch_cashtransactions->result() as $value) {
              if ($value->modeofpayment=='Cash') {
                $sum += $value->amountpaid;
                }  
              }
               echo $sum;
            }
            ?></td>
          <td><?php if($fetch_cashtransactions->num_rows()>0){
             $sum = 0; 
              foreach ($fetch_cashtransactions->result() as $value) { 
              if ($value->modeofpayment=='M-Pesa') {
                $sum += $value->amountpaid;
                }  
              }
               echo $sum;
            }
            ?></td>
          <td><?php if($getcash->num_rows()>0){
              foreach ($getcash->row() as $row) {
                 echo "<h6>";
                echo "Kshs.";
               print_r($row);
                echo "</h6>";
              }
            }?></td>
        </tr>
        <tr>
          <td>Undeposited</td>
           <td></td>
          <td></td>
           <td id="total"><?php
        if($gettotalincome->num_rows()>0){
              foreach ($gettotalincome->row() as $row) {
                 if($getbank->num_rows()>0){
                    foreach ($getbank->row() as $value) {
                       if($getpettycash->num_rows()>0){
                    foreach ($getpettycash->row() as $values) {
                 $query = $row - ($value + $values);
                 echo "<h6>";
                echo "Kshs.";
                 print_r($query);
                 echo "</h6>";
               }
             }
           }
         }
       }
     }
              ?></td>
        </tr>
        <tr>
          <td><button class="bankbtn" data-toggle="modal" data-target=".example-modal-lg" id="myModal">Transfer to Bank</button>
        <button class="pettybtn" data-toggle="modal" data-target=".bs-example-modal-lg" id="myModal">Transfer to Petty Cash</button></td>
      </tr>
    </tbody>
  </table>
   <hr style="color: #000;">
   <div class="modal fade example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">BANK</h4>
                        </div>
                        <div class="modal-body">
     <?php echo form_open_multipart('user/bankaccount') ?>
     <div class="form row">
                   <div class="form-group col-md-6">
          <label for="email">Receipt No:</label>
            <span class="text-danger"><input type="text" name="receiptno" class="form-control required"><span class="ted"></span><?php echo form_error("receiptno"); ?></span>
        </div>
        <div class="form-group col-md-6 has-error">
          <label for="email">Bank:</label>
            <span class="text-danger"><input type="text" name="bank" class="form-control required"><span class="ted"></span><?php echo form_error("bank"); ?></span>
        </div>
        </div>
        <div class="form row">
        <div class="form-group col-md-6 has-error">
          <label for="email">Details</label>
           <input type="text" name="details" class="form-control required"><span class="text-danger"><?php echo form_error("details"); ?></span>
        </div>
        <div class="form-group col-md-6 has-error">
          <label for="email">Date:</label>
            <input type="date" name="depositdate" class="form-control required">
        </div>
        </div>
        <div class="form row">
        <div class="form-group col-md-6 has-error">
          <label for="password">Amount to transfer:</label>
          <input type="text" name="amount" class="form-control required"><span class="text-danger"><?php echo form_error("amount"); ?></span>
        </div>
         <div class="form-group col-md-6 has-error">
          <label for="password">Sub Account:</label>
          <select type="text" name="subaccount" class="form-control required">
            <option>Select Account</option>
            <option>Cash</option>
            <option>M-Pesa</option>
          </select>
          <span class="text-danger"><?php echo form_error("subaccount"); ?></span>
        </div>
        </div>
        <div class="form row">
        <div class="form-group col-md-6">
          <label for="password">Voucher No:</label>
          <input type="text" name="voucherno" class="form-control"><span class="text-danger"><?php echo form_error("voucherno"); ?></span>
        </div>
         <div class="form-group col-md-6">
          <label for="password">Note:</label>
          <input type="text" name="note" class="form-control"><span class="text-danger"><?php echo form_error("note"); ?></span>
        </div>
        </div>
         <div class="form-group">
           <input type="hidden" name="details" class="form-control" value="z">
        </div>
               
      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                       <?php echo form_close() ?> 
                      </div>
                    </div>
                  </div>
<!---->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">PETTY CASH ACCOUNT</h4>
                        </div>
                        <div class="modal-body">
        <?php echo form_open_multipart('user/pettycashaccount') ?>
        <div class="form row">
                   <div class="form-group col-md-6">
          <label for="email">Transferred by:</label>
            <span class="text-danger"><input type="text" name="transferredby" class="form-control"><span class="ted"></span><?php echo form_error("transferredby"); ?></span>
        </div>
        <div class="form-group col-md-6">
          <label for="email">Details</label>
           <input type="text" name="details" class="form-control"><span class="text-danger"><?php echo form_error("details"); ?></span>
        </div>
      </div>
         <div class="form row">
        <div class="form-group col-md-6">
          <label for="email">Date:</label>
            <input type="date" id="today" name="depositdate" class="form-control">
        </div>  
        <div class="form-group col-md-6">
          <label for="password">Amount to transfer:</label>
          <input type="text" name="amount" id="amount" class="form-control"><span class="text-danger"><?php echo form_error("amount"); ?></span>
        </div> 
                        </div>
                        <div class="form row">
        <div class="form-group col-md-6">
          <label for="password">Sub Account:</label>
          <select type="text" name="subaccount" class="form-control">
            <option>Select Account</option>
            <option>Cash</option>
            <option>M-Pesa</option>
          </select>
          <span class="text-danger"><?php echo form_error("subaccount"); ?></span>
        </div>  
         <div class="form-group col-md-6">
          <label for="password">Voucher No:</label>
          <input type="text" name="note" class="form-control"><span class="text-danger"><?php echo form_error("note"); ?></span>
        </div>
                        </div>
                         <div class="form row ">
                       <div class="form-group col-md-6">
          <label for="password">Voucher No:</label>
          <input type="text" name="voucherno" class="form-control"><span class="text-danger"><?php echo form_error("voucherno"); ?></span>
        </div>
        </div>
                      </div>
                     
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        <?php echo form_close() ?>
                      </div>
                    </div>
                  </div>
          <!-- top tiles -->
          <h2 style="text-align: center;">Undeposited Account Transactions</h2>
                <table id="bankaccount">
         <thead>
          <tr>
            <th>Date</th>
<th>Transferred To</th>
<th>Voucher/Receipt No</th>
<th>Sub Account</th>
<th> Credit</th>
<th> Debit</th>
<th> Total</th>

</tr>
         </thead>
         <tbody>
                    <?php 
                    if($gettotalincome1->num_rows()>0){
              foreach ($gettotalincome1->result() as $valued) {
         ?>
         <tr>
          <td><?php echo $valued->date; ?></td>
           <td><?php 
           if($valued->amountpaid>0){
            echo "Undeposited Account";
          }
          ?></td>
           <td><?php 
           if($valued->invoice_id){
            echo "Payment for invoice";
          }
          else{
            echo "Cash Sale";
          }  ?></td>
           <td><?php echo $valued->amountpaid; ?></td>
           <td></td>
           <td><?php        ?></td>
          <td><?php        ?></td>
         </tr>
         <?php
       }
       }?>
           <?php if($gettotalpettycashaccount->num_rows()>0){
            $sum = 0;
         foreach($gettotalpettycashaccount->result() as $row){
         ?>
         <tr>
          <td><?php echo $row->depositdate; ?></td>
           <td><?php 
           if($row->transferredby){
            echo "Petty Cash Account";
           }else {
             echo "Bank Account";
           } ?></td>
           <td><?php echo $row->details; ?></td>
           <td></td>
           <td><?php        ?></td>
           <td><?php echo $row->amount; ?></td>
           <td><?php
        if($gettotalincome->num_rows()>0){
              foreach ($gettotalincome->row() as $value) {
                if($getbank->num_rows()>0){
                    foreach ($getbank->row() as $value1) {
                       if($getpettycash->num_rows()>0){
                    foreach ($getpettycash->row() as $value2) {
                      $sum += $row->amount;
                 $query = $value - ($sum +  $value1);
                 echo "<h6>";
                 print_r($query);
                 echo "</h6>";
               }
             }
           }
         }
       }
     }
              ?></td>
         </tr>
         <?php
       }
       $sum++;
       }?>
        <?php if($gettotalbankaccount->num_rows()>0){
          $sum = 0;
         foreach($gettotalbankaccount->result() as $row){
         ?>
         <tr>
          <td><?php echo $row->depositdate; ?></td>
           <td><?php if($row->receiptno){
            echo "Bank Account";
           }else {
             echo "Petty Cash Account";
           }?></td>
           <td><?php echo $row->details; ?></td>
           <td></td>
           <td><?php        ?></td>
           <td><?php echo $row->amount; ?></td>
           <td><?php
        if($gettotalincome->num_rows()>0){
              foreach ($gettotalincome->row() as $value) {
                if($getbank->num_rows()>0){
                    foreach ($getbank->row() as $value1) {
                       if($getpettycash->num_rows()>0){
                    foreach ($getpettycash->row() as $value2) {
                      $sum += $row->amount;
                 $query =$value - ($value2 + $sum);
                 echo "<h6>";
                 print_r($query);
                 echo "</h6>";
               }
             }
           }
         }
       }
     }
              ?></td>
         </tr>
         <?php
       }
       $sum++;
       }?>
         </tbody>
       </table>
       </table>
            </div>
          </div>
          
          <!-- top tiles -->
           </div>
        <footer>
          <div class="pull-right">
            Designed and Developed by Richtech ICT Company Limited.&copy; 2019 <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
    $('#bankaccount').DataTable({responsive: true});
} );
       $(document).ready( function () {
    $('#bankaccount1').DataTable({responsive: true});
} );
    </script>
  
  </body>
</html>
