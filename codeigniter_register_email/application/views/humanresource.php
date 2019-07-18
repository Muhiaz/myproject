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
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />    
    <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
	<link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fullcalendar.css">
	<link href="../css/widgets.css" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
	<link href="../css/xcharts.min.css" rel=" stylesheet">
  <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
	<link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <style type="text/css">
     table tr:hover{
      color: green;
      cursor: pointer;
    }
    i{
      color: #000;
    }
    body{
      color: #000;
    }
     .dropbtn6 {
  background-color: #3498DB;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
    .dropbtn0 {
  background-color: green;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
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
    <script type="text/javascript">document.querySelector("#invoicedate").valueAsDate = new Date();</script>
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
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
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
          <?php
          if($msg){
          ?>
          <div class="container" style="background-color: green;width: 90%;color: #fff;text-align: center;">
          <h5><?php echo $msg; ?></h5>
          </div>
          <?php
        }
          ?>
          <div class="container" style="width: 90%;">
          <h2 style='font-family:lato;font-size:25px;font-weight: 500;color: #000;'>Human Resource</h2>
          </div>
            </div>
            </div>
            <div>
              <button type="button" style="margin-left: 85%;" class="dropbtn5" data-toggle="modal" data-target="#myModal">Add Employee</button><br>
              <div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color: #fff;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Employee</h4>
        </div>
        <div class="modal-body">
         <form method="post" action="<?php echo base_url()?>user/add_employee">
       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="firstname"><span class="text-danger"><?php echo form_error("firstname"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Second Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Second Name" name="secondname"><span class="text-danger"><?php echo form_error("secondname"); ?></span>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Email Address</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="emailaddress">
    <span class="text-danger"><?php echo form_error("emailaddress"); ?></span>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Phone Number</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Phone Number" name="phonenumber"><span class="text-danger"><?php echo form_error("phonenumber"); ?></span>
  </div>
  </div>
  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Street Address</label>
      <input type="text" class="form-control" placeholder="e.g 1225-80100" name="streetaddress">
      <span class="text-danger"><?php echo form_error("streetaddress"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Employee Number</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="" name="employeenumber">
      <span class="text-danger"><?php echo form_error("employeenumber"); ?></span>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Department</label>
      <input type="text" class="form-control" id="inputCity" name="department">
      <span class="text-danger"><?php echo form_error("department"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Job Title</label>
      <input type="text" name="jobtitle" class="form-control" id="inputCity">
              <span class="text-danger"><?php echo form_error("jobtitle"); ?></span>  
                        </div>
         </div>
         <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Salary</label>
      <input type="text" class="form-control" id="inputCity" name="salary">
      <span class="text-danger"><?php echo form_error("salary"); ?></span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Allowances</label>
      <input type="text" name="allowances" class="form-control" id="inputCity">
              <span class="text-danger"><?php echo form_error("allowances"); ?></span>  
                        </div>
         </div>             
      <div class="modal-footer">
        <button type="button" class="dropbtn6" data-dismiss="modal">Close</button>
        <button type="submit" class="dropbtn5">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
            <div class="container" style="background-color: #fff;width: 90%;border: 1px solid rgba(46, 204, 113, .3);"><div style="float: right;font-size: 20px;">
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
          <h6 style='font-family:lato;font-size:20px;text-align:center'>Employees</h6>
          </div>
            <table class="table table-stripped display nowrap salesreport" cellspacing="1"
  width="100%" style="border: 1;background-color: #fff;" align="center" id="invoicestable">
    <thead>
      <tr style="text-transform: uppercase;">
       
         <th>First Name</th>
         <th>Email Addess</th>
         <th>Phone Number</th>
        <th>Department</th>
        <th>Job Title</th>
        <th >Edit</th>
        <th >Delete</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     if($getemployees->num_rows()>0){
      foreach ($getemployees->result() as $row) {
        ?>
        <tr class="tablerow" data-href="<?php echo base_url("user/employee/{$row->id}", "",['class'=>'']); ?>">
          <td><?php echo $row->firstname;  ?></td>
          <td><?php echo $row->emailaddress; ?></td>
          <td><?php echo "0".$row->phonenumber; ?></td>
          <td><?php echo $row->department;  ?></td>
          <td><?php echo $row->jobtitle; ?></td>
          <td><a href="<?php echo base_url('user/editemployee/'.$row->id)?>"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></a></td>
          <td><a href="<?php echo base_url('user/deleteemployee/'.$row->id)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
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
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui-1.10.4.min.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="../js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../js/calendar-custom.js"></script>
	<script src="../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js" ></script>
	<script src="../assets/chart-master/Chart.js"></script>
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
	<script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../js/xcharts.min.js"></script>
	<script src="../js/jquery.autosize.min.js"></script>
	<script src="../js/jquery.placeholder.min.js"></script>
	<script src="../js/gdp-data.js"></script>	
	<script src="../js/morris.min.js"></script>
	<script src="../js/sparklines.js"></script>	
	<script src="../js/charts.js"></script>
	<script src="../js/jquery.slimscroll.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
  <script type="text/javascript" src="../../extensions/Editor/js/dataTables.editor.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <script type="text/javascript"> 
   $(document).ready( function () {
   var table = $('#invoicestable').DataTable();
    table.rows().every( function () {
    this.child( '  '+this.index() );
} );
 
$('#invoicestable tbody').on( 'click', 'tr', function () {
    var child = table.row( this ).child;
     var tr = $(this).closest('tr');
    var row = table.row( tr );
 
    if ( child.isShown() ) {
        // child.hide();
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        child.show();
        // row.child( format(row.data()) ).show();
        tr.addClass('shown');
    }
} );
$.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#startdate').datepicker("getDate");
            var max = $('#enddate').datepicker("getDate");
            var startDate = new Date(data[4]);
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
                table.draw('invoicedate');
            });
} );
    </script>
   <script type="text/javascript">
    $('#printreport').click(function(){
            Popup($('.salesreport')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });
      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true
          });
      });
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});
  </script>
  </body>
</html>