 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../img/favicon.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />    
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
	<link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fullcalendar.css">
	<link href="../css/widgets.css" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
	<link href="../css/xcharts.min.css" rel=" stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style type="text/css">
     table tr:hover{
      color: green;
      cursor: pointer;
    }
    body{
      color: #000;
    }
    label{
      color: #000;
    }
    .modalheader{
      color: #000;
    }
     option{
      color: #000;
      font-weight: 400;
    }
    .div{
      background-color: #394a59;
    }
    h3{
      color: #fff;
    }
    .fa-casual{
      font-color: #FFDF00;
    }
     .dropbtn5 {
  background-color: green;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
.dropbtn6 {
  background-color: blue;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
     .dropbtn0 {
  background-color: #3498DB;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
    .dropbtn {
  background-color: #394a59;
  height: 20px !important;
  color: white;
  font-weight: 300;
  padding: 0px 98.5px 10px 10px;
  width: 100%;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn1 {
  background-color: #394a59;
  height: 20px !important;
  color: white;
  font-weight: 300;
  padding: 0px 50.5px 15px 10px;
  width: 100%;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn2 {
  background-color: #394a59;
  height: 20px !important;
  color: white;
  font-weight: 300;
  padding: 0px 75.5px 15px 10px;
  width: 100%;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position:relative;
  margin-left: 100%;
  background-color: #000000;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #000;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: inline-block;float:right;}
.dropdown:hover .dropbtn {background-color: #394a59;}
  </style>
  </head>
  <body>
  <section id="container" class=""> 
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <a href="#" class="logo">RICH <span class="lite">TECH</span></a>
             <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                     <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-comment"></i>
                            <span class="badge bg-important">0</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">SMS</div>
                                        <div class="percent"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Email
                                        </div>
                                        <div class="percent"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l" style="color: #FFDF00;"></i>
                            <span class="badge bg-important">0</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Pending Approvals</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Invoices</div>
                                        <div class="percent"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Projects
                                        </div>
                                        <div class="percent"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="reports">
                                    <div class="task-info">
                                        <div class="desc">Reports</div>
                                        <div class="percent"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l" style="color: #FFDF00;"></i>
                            <span class="badge bg-important">0</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue"></p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Overdue Payments
                                    <span class="small italic pull-right"></span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">
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
                                }?></span></a></li>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="uploadpic"><i class="icon_profile"></i>Add Company logo</a>
                            </li>
                            <li class="eborder-top">
                              <?php

                              ?>
                                <a href="companies"><i class="icon_profile"></i> Company Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>     
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="admin">
                        <i class="fa fa-home" style="color: #FFDF00;"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                   <li class="sub-menu">
                      <a href="clients" class="">
                        <i class="fa fa-users" style="color: #FFDF00;"></i>
                          <span>Clients</span>
                      </a>
                  </li>  
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>user/products" class="">
                         <i class="fa fa-cloud" style="color: #FFDF00;"></i>
                          <span>Products/Services</span>
                      </a>
                  </li>
                  <li class="sub-menu dropdown" style="float:right;">
                      <a href="" class="">
                          <i class="fa fa-file" style="color: #FFDF00;"></i>
                          <span> <button class="dropbtn2">Acounts</button>
                        <div class="dropdown-content" style="left:0;">
                          <a href="accounts">Income</a>
                          <a href="undeposited">Undeposited</a>
                           <a href="pettycash">Petty Cash</a>
                            <a href="bankaccount">Bank</a>

                        </div></span>
                      </a>
                  </li><br><br>     
                  <li class="sub-menu dropdown" style="float:left;">
                      <a href="" class="">
                          <i class="fa fa-file" style="color: #FFDF00;"></i>
                          <span> <button class="dropbtn">Sales</button>
                        <div class="dropdown-content" style="left:0;">
                          <a href="invoices">Invoices</a>
                          <a href="allcash">Cash</a>
                        </div></span>
                      </a>
                  </li><br><br><br>
                  <li>
                      <a class="" href="#">
                         <i class="fa fa-pie-chart" style="color: #FFDF00;"></i>
                          <span>Projects</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="reports">
                         <i class="fa fa-files-o" style="color: #FFDF00;"></i>
                          <span>Reports</span>
                      </a>                  
                  </li>
                  <li class="sub-menu dropdown" style="float:right;">
                      <a href="" class="">
                          <i class="fa fa-file" style="color: #FFDF00;"></i>
                          <span> <button class="dropbtn1">Expenditure</button>
                        <div class="dropdown-content" style="left:0;">
                          <a href="allexpenses">Expenses</a>
                          <a href="allpurchases">Purchases</a>
                        </div></span>
                      </a>
                  </li><br><br><br>
                   <li class="sub-menu">
                      <a href="humanresource" class="">
                        <i class="fa fa-address-book" style="color: #FFDF00;"></i>
                          <span>Human Resource</span>
                      </a>
                  </li>       
                  <li class="sub-menu">
                      <a href="#" class="">
                          <i class="fa fa-user-circle" style="color: #FFDF00;"></i>
                          <span>Admin</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="companies" class="">
                          <i class="fa fa-user" style="color: #FFDF00;"></i>
                          <span>Companyprofile</span>
                      </a>
                  </li>
              </ul>
          </div>
      </aside>
      <section id="main-content">
        <section class="wrapper">
          <h2 style='font-family:lato;font-size:25px;font-weight: 500;color: #000;'>Sales Report</h2>
            <form id="form-filter" class="form-horizontal">
                    <div class="row container">
              <div class="datepicker">
              <div class="col-md-3" style="color: #000;">
                <label>From</label>
                 <input type="text" name="startdate" id="startdate" class="form-control">
              </div>
              <div class="col-md-3">
                <label>To</label>
             <input type="text" name="enddate" id="enddate" class="form-control">
              </div>
                        <label for="LastName" class="col-sm-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="button" id="btn-filter" class="dropbtn6" value="filter"><i class="fa fa-search fa-fw"></i></button>
                            <a href="allsalesreport"><button type="button" id="btn-reset" class="dropbtn5">All Sales</button></a>
      </div>
      </div>
                          </div>
                </form><br>
            <div class="container" style="background-color: #fff;width: 100%;border: 1px solid rgba(46, 204, 113, .3);"><div style="float: right;font-size: 20px;">
              <div class="row">
              
              </div>
              </div><br>
              <div style="justify-content: center;">
              <?php 
          if($fetch_company->num_rows()>0){
            foreach ($fetch_company->result() as $row) {
              echo "<h6 style='font-family:lato;font-size:25px;text-align:center'>$row->companyname</h6>";
            }
          }
          ?>
          <h6 style='font-family:lato;font-size:20px;text-align:center'>Total Sales</h6>
          </div>
            <table class="table table-stripped salestable" cellspacing="1"
  width="100%" style="border: 1;background-color: #fff;" align="center" id="invoicestable">
    <thead>
      <tr style="text-transform: uppercase;">
       
        <th>clientname</th>
         <th>Quantity</th>
         <th>Unitprice</th>
        <th>Total</th>
        <th>Amount Paid</th>
        <th>Balance-due</th>
        <th>Date</th>
      </tr>
    </thead>
  </table>
  </div>
				</div>
              </div>
          </section>
          <div class="text-right">
          <div class="credits">
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
    <!-- javascripts -->

    <!-- bootstrap -->
   
   <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
 <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <!-- <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->
  <script type="text/javascript">
   $(document).ready( function () {
     $.datepicker.setDefaults({
        dateFormat:'yy-mm-dd'
    });
   var table = $('#invoicestable').DataTable({
    "processing": true, //Feature control the processing indicator.
        "order": [],
        'responsive': true,
        //Initial no order.

        // Load data for the table's content from an Ajax source
            "ajax": {
            "url": "<?php echo base_url('crud/fetch_user')?>",
            "type": "POST",
            "draw":"draw"
          
        },
        //Set column definition initialisation properties.
         "columns": [
            { "data": "name" },
            { "data": "invoiceno" },
            { "data": "product" },
            { "data": "quantity" },
            { "data": "unitprice" },
            { "data": "amount" },
            { "data": "date" }
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
              ]
    });
  
    function format (data) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Client Name:</td>'+
            '<td>'+data.name+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Amount Paid:</td>'+
            '<td>'+data.amountpaid+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Balance Due:</td>'+
           '<td>'+data.balancedue+'</td>'+
        '</tr>'+
    '</table>';
};
 
$(document).ready(function() {

    // Add event listener for opening and closing details
    $('#invoicestable tbody').on('click', 'tr', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
   $('#btn-filter').click(function(){ 

    //button filter event click
        table.ajax.reload();  //just reload table
    });
$.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#startdate').datepicker("getDate");
            var max = $('#enddate').datepicker("getDate");
            var startDate = new Date(data[6]);
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );

       
            $("#startdate").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            $("#enddate").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            var table = $('#invoicestable').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#startdate, #enddate').change(function () {
                table.draw();
            });
} );
    </script>
     <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="../js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <!--script for this page only-->
    <script src="../js/calendar-custom.js"></script>
  <script src="../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js" ></script>
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
  <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../js/xcharts.min.js"></script>
  <script src="../js/jquery.placeholder.min.js"></script>
  <script src="../js/gdp-data.js"></script> 
  <script src="../js/morris.min.js"></script>
  <script src="../js/jquery.slimscroll.min.js"></script>
  </body>
</html>