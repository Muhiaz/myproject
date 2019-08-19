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
    <style type="text/css">
 .dropbtn0 {
  background-color: green;
  color: white;
  padding: 9px;
  font-size: 11px;
  border: none;
   width: 100%;
  cursor: pointer;
}
 .dropbtn1 {
  background-color: green;
  color: white;
  padding: 7px;
  font-size: 12px;
  border: none;
  cursor: pointer;
  width: 20%;
}
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
.deletebtn {
  background-color: red;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
  .modal-dialog {
      width: 100%;
      height: 100%;
      padding: 0;
      margin:0;
}
.modal-content {    
      height: 100%;
      border-radius: 0;
      color:#000;
      overflow:auto;
}
 .close
    {
      color:white ! important;
      opacity:1.0;
    } 
 #first-child
    {
      top:0;
      left:0;
    }
    .big-box
    {
      width: 10%;
    }
    .big-box h2
    {
      text-align: center;
      
      padding: 20px;
      width: 100%;
      font-size: 0.8em;
      letter-spacing: 2px;
      font-weight: 700;
      text-transform: uppercase;
    cursor:pointer;
    }
  
    @media screen and (max-width: 46.5em) 
    {
      .big-box h2
      {
        font-size:16px;
        
        
      }
    }

    @media screen and (max-width: 20.5em) 
    {
      .big-box h2
      {
        font-size:12px;
        padding-left:0px;
        margin-top:30%;
        }
    }
    .modal-dialog {
      width: 100%;
      height: 100%;
      padding: 0;
      margin:0;
    }
    .modal-content {
      
      height: 100%;
      width: 100%;
      border-radius: 0;
      color:white;
      overflow:auto;
    }
    .modal-title
    {
      font-size: 3em;
      font-weight: 300;
      margin: 0 0 20px 0;
    }
    .modal-content-one
    {
      background-color:#fff;
      width: 100%;
    }
    .modal-content-two
    {
      background-color:#E6537D;
    }
    .modal-content-three
    {
      background-color:crimson;
    }
    .modal-content-four
    {
      background-color:lightseagreen;
    }
    </style>
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
                       <li><a href="pettycash">Petty Cash</a></li>
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
          <!-- top tiles -->
          <div class="col-xs-6 col-md-6 " id="first-child">
          <a href="#"><button class="dropbtn1" data-toggle="modal" data-target="#modal1" style="margin-left: 100%">Add Invoice</button></a>
          <!-- Modal -->
          <div class="modal fade" id="modal1" role="dialog" aria-labelledby="myModalLabel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content modal-content-one">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #000;">×</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel" style="text-align: center;color: #000;"><b>Invoice</b></h4>
                   <?php
                  $this->load->view("invoice");
                  ?>
                </div>
                </div>         
    
                     <h3 class="page-header">Invoices</h3>
         <h2 style="text-align: center;">Invoices</h2>
                <table id="bankaccount">
         <thead>
          <tr>
       <th>Product</th>
         <th>Quantity</th>
         <th>Unitprice</th>
        <th>Total</th>
        <th>Amount Paid</th>
        <th>Balance-due</th>
        <th>Date</th>
        <th>Action</th>
        <th>Action</th>
</tr>
         </thead>
         <tbody>
        <?php 
     if($fetch_invoices->num_rows()>0){
      foreach ($fetch_invoices->result() as $row) {
        ?>
        <tr class="clickable-row" data-href="<?php echo base_url("user/clientinvoice/{$row->invoice_id}", "",['class'=>'']); ?>">
          <td><?php echo $row->product;  ?></td>
          <td><?php echo $row->quantity;  ?></td>
          <td><?php echo $row->unitprice; ?></td>
          <td><?php echo $row->amount;  ?></td>
          <td><?php
                if($row->newamountpaid>0){
                   echo $row->newamountpaid;
                   }
                   else{
                    echo $row->amountpaid;
                   }   
                   ?>  
          </td>
          <td><?php echo $row->balancedue;  ?></td>
          <td><?php echo $row->invoicedate;  ?></td>
          <td><?php 
          if($row->balancedue==0){
            echo anchor("user/clientinvoice/{$row->invoice_id}", "Invoice Fully Paid",['class'=>'dropbtn0']);
          }
          else{
            echo anchor("user/payinvoice/{$row->invoice_id}", "Recieve Payment",['class'=>'dropbtn1']);

          } ?></td>
           <td><?php echo anchor("user/delete/{$row->invoice_id}", "<i class='fa fa-trash'></i>",['class'=>'deletebtn']); ?></td>
        </tr>
        <?php
      }
     } 
      else{
        ?>
        <tr colspan="3"> No data Found!</tr>
<?php
    }?>
         </tbody>
       </table>
       <a href="viewdeletedinvoices">View Deleted Invoices</a>              
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
     <script type="text/javascript">document.querySelector("#today").valueAsDate = new Date();</script>
     <script type="text/javascript">document.getElementById('expensedate').value = Date();</script>
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
    $('#bankaccount').DataTable();
} );
       jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
    </script>
  
  </body>
</html>

