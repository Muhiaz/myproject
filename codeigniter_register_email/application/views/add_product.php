 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../img/favicon.png">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
     <script type="text/javascript" src="<?php echo base_url('js/dynamicpage.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.ba-hashchange.min.js');?>"></script>
 <link href="<?php echo base_url('css/main1.css');?>" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
    <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <style type="text/css">
      label,h3{
        font-weight: 600;
      }
      .h3{
        margin-left: 30%;
      }
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
                            <i class="icon-task-l"></i>
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
                                <a href="#">
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

                            <i class="icon-bell-l"></i>
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
                            <span class="username"><?php 
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
                                }?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="uploadpic"><i class="icon_profile"></i>Add Company logo</a>
                            </li>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
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
                  <li class="sub-menu">
                      <a href="#" class="">
                        <i class="fa fa-address-book" style="color: #FFDF00;"></i>
                          <span>Human Resource</span>
                      </a>
                  </li>       
                  <li class="sub-menu">
                      <a href="invoices" class="">
                      <i class="fa fa-file" style="color: #FFDF00;"></i>
                          <span>Invoices</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="#">
                        <i class="fa fa-pie-chart" style="color: #FFDF00;"></i>
                          <span>Projects</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="#">
                        <i class="fa fa-clipboard" style="color: #FFDF00;"></i>
                          <span>Reports</span>
                      </a>                  
                  </li> 
                  <li class="sub-menu">
                      <a href="#" class="">
                         <i class="fa fa-dollar" style="color: #FFDF00;"></i>
                          <span>Expenses</span>
                      </a>
                  </li> 
                  <li class="sub-menu">
                      <a href="#" class="">
                         <i class="fa fa-bank" style="color: #FFDF00;"></i>
                          <span>Bank</span>
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
          <section class="wrapper" id="main-content1">            
              <div class="row" style="margin-left: 15%;margin-top: 5%;" id="guts">
                <div class="col-lg-8">
                <!--  <form method="post" action="<?php echo base_url()?>user/addproducts" style="border: 1px solid #fff;padding: 20px; width:80%; box-shadow: 5px 5px 5px 5px #8888"> -->
                  <div class="container" style="background-color: #fff;box-shadow: 1px 1px 1px 1px #8888;margin: all;">
     <?php echo form_open_multipart('user/addproducts') ?>
     <h3 class="page-header h3">Add Product</h3>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Product Name</label>
                    <input type="text" name="productname" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("productname"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Product Category</label>
                   <!--  <input type="" name="productcategory" class="form-control col-md-6"/> -->
                   <select name="productcategory" class="form-control col-md-6">
                     <option>Select Category</option>
                     <option>Inventory</option>
                     <option>Non-Inventory</option>
                     <option></option>
                   </select>
                    <span class="text-danger"><?php echo form_error("productcategory"); ?></span>
                    <span class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Product Quantity</label>
                    <input type="text" name="productquantity" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("productquantity"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>As of Date</label>
                    <input type="date" name="productdate" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("productdate"); ?></span>
                    </div>
                  </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Service Description</label>
                    <input type="text" name="servicedescription" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("servicedescription"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Income Account</label>
                    <!-- <input type="text" name="accountinformation" class="form-control col-md-6"/> -->
                    <select name="accountinformation" class="form-control col-md-6">
                      <option>Select Account Affected</option>
                      <option>Wholesale Sales</option>
                      <option>Retail Sales</option>
                      <option>Uncategorised Income</option>
                      <option>Cost Of Sales</option>
                      <option>Uncategorised Expense</option>
                    </select>
                    <span class="text-danger"><?php echo form_error("accountinformation"); ?></span>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <label>Unit Price</label>
                    <input type="text" name="unitprice" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("unitprice"); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                    <label>Product Image</label>
                    <input type="file" name="productimage" class="form-control col-md-6"/>
                    <span class="text-danger"><?php echo form_error("productimage"); ?></span>
                    </div>
                  </div>
                   <div class="form-group">
                    <button class="btn btn-primary" type="submit"><h6 style="font-weight: 1000;">Save</h6></button>
                    </div>

                <!-- </form>  -->
                <?php echo form_close() ?> 
                </div>
                </div>
            </div>           
           </div>  
          <!-- Today status end -->
            <div class="row">
                <div class="col-lg-9 col-md-12">    

        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
    <!-- javascripts -->
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
  <script>
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