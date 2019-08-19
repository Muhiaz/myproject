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
      .bankbtn {
  background-color: green;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
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
           <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                    <div class="row container">
              <div class="datepicker">
              <div class="col-md-3" style="color: #000;">
                <label>From</label>
                 <input name="min" id="min" class="form-control">
              </div>
              <div class="col-md-3">
                <label>To</label>
             <input name="max" id="max" class="form-control">
              </div>
                        <div class="col-md-3">
              
                            <button type="button" id="btn-reset" class="bankbtn" >Run Report</button>
      </div>
      <div class="col-md-3" style="background-color: #800000;color: #fff;text-align: center;">
        <h4><b><?php if($gettotalpettycashaccount->num_rows()>0){
          $sum=0;
           $sum1=0;
            $sum2=0;
                foreach ($gettotalpettycashaccount->result() as $value) {
                  $sum += $value->amount;
                  if($fetch_expenses->num_rows()>0){
                foreach ($fetch_expenses->result() as $value1) {
                  if($fetch_purchases->num_rows()>0){
                foreach ($fetch_purchases->result() as $value2) {
                  if($value1->paymentmode=='Cash'){
                    $sum1 = $value1->amount;
                  }
                    elseif($value2->modeofpayment=='Cash'){
                   $sum2 = $value2->amount;
                }
            }
          }
        }
      }
    }
         echo $sum -$sum1 - $sum2;
      }
      ?></b></h4>
              <h5><b>Total Amount</b></h5>
      </div>
      </div>
                          </div>
                </form>
            </div>
          <h2 style="text-align: center;">Petty Cash Account</h2>
                <table id="bankaccount" class="table table-striped">
         <thead>
          <tr>
            <th>Date</th>
<th>Transferred By</th>
<th>Transaction Details</th>
<th> Credit</th>
</tr>
         </thead>
         <tbody>
          
         </tbody>
       </table>


                
                </div>
             

         
        <footer>
          <div class="pull-right">
            Designed and Developed by Richtech ICT Company Limited.&copy; 2019 <a href="https://colorlib.com"></a>
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
    <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        $.datepicker.setDefaults({
        dateFormat:'yy-mm-dd'
    });
        var table = $('#bankaccount').DataTable({ 
 
        "processing": true,
        "responsive": true,
         "className":'details-control', //Feature control the processing indicator.
     //Feature control DataTables' server-side processing mode.
        "order": [],
         //Initial no order.

        // Load data for the table's content from an Ajax source
            "ajax": {
            "url": "<?php echo site_url('pettycashreport/ajax_list')?>",
            "type": "POST",
        },
        //Set column definition initialisation properties.
         "columns": [
            { "data": "depositdate" },
            { "data": "transferredby" },
            { "data": "details" },
            { "data": "amount" },
        ],
        columnDefs: [
            { orderable: false } //This part is ok now
        ],
        dom: 'lBfrtip',
          buttons: [
                    'copy',
                    'excel',
                    'pdf',
                    'print'
              ],
 
    });
         $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");
            var startDate = new Date(data[0]);
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );

       
            $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            var table = $('#bankaccount').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });
      });
    </script>
  </body>
</html>
