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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
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
    <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <style type="">
       .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}
 .dropbtn1 {
  background-color: green;
  color: white;
  padding: 10px;
  font-size: 12px;
  border: none;
  cursor: pointer;
  width: 20%;
}
/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
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
                       <!--  <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form> -->
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
                         <i class="fa fa-files-o" style="color: #FFDF00;"></i>
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
                          <i class=""></i>
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
              <div class="row">
                <div class="col-lg-12">
</div>
<div class="dropdown" style="margin-left: 75%;">
  <button onclick="myFunction()" class="dropbtn">Add Product/Service</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?php echo base_url('user/add_client');?>">Add Product</a>
    <a href="<?php echo base_url('user/add_client');?>">Add Service</a>
  </div>
</div>
          <!-- Today status end -->
            <div class="row">
                <div class="col-lg-9 col-md-12">
                <h3 style="text-align: center;">Products</h3> 
<div class="container-fluid">          
 <table class="table table-striped" style="margin-left: 15%;">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Category</th>
        <th>Product Quantity</th>
        <th>As of Date</th>
         <th>Unit Price</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php
     if ($fetch_product->num_rows()>0) {
       foreach ($fetch_product->result() as $row) {
         ?>
         <tr>
           <td><?php echo $row->productname;  ?></td>
           <td><?php echo $row->productdescription;  ?></td>
           <td><?php echo $row->productcategory;  ?></td>
           <td><?php echo $row->productquantity;  ?></td>
           <td><?php echo $row->productdate;  ?></td>
           <td><?php echo $row->unitprice;  ?></td>
           <!--  -->
                  <td><?php echo anchor("user/viewproduct/{$row->id}","View Product",['class'=>'dropbtn'])?></td>
         </tr>
         <?php
       }
     }
     else{
      ?>
      <tr>
        <td colspan="3">No data Found!</td>
      </tr>
      <?php
     }
     ?>
    </tbody>
  </table>
 <div class="col-xs-6 col-md-6 " id="first-child" style="margin-left: 50%;">
          <a href="#"><button class="dropbtn1" data-toggle="modal" data-target="#modal1" style="width: 40%;">Generate Quotation</button></a>
          <!-- Modal -->
          <div class="modal fade" id="modal1" role="dialog" aria-labelledby="myModalLabel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content modal-content-one">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #000;">×</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Quotation</b></h4>
                   <?php
                  $this->load->view("quotation");
                  ?>
                </div>
                </div>
            </div>           
           </div>
</div>
</body>
</html>
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
    <script src="../js/jquery.js"></script>
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
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
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