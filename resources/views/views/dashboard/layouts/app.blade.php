
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>FleetIo-Admin | </title>

    <!-- Bootstrap -->

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!--jquery -->
    <script  src="../vendors/js/jquery.js"></script>
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

     <!-- Datatables -->
     <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
     <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
     <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
     <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
     <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" >
          <div class="left_col scroll-view" style ="background-color:#990000;">
            <div class="navbar nav_title" style="border: 0; background-color:yellow;">
              <a href="index.html" class="site_title" style="font-size: 18px;"> <span style = "color:black;">FLEET MANAGEMENT</span></a>
            </div>

            <div class="clearfix"></div>
           
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/logo.jpg" alt="logo" class="img-circle profile_img">
              
                
              </div>
              <div class="profile_info" >
                <span>Welcome,</span>
                <h2>{{ auth()->user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style ="background-color:#990000;" >
              <div class="menu_section" >
                <h3>Menu</h3>
                <ul class="nav side-menu" >
                  <li><a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</span></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>

                
                  <li><a><i class="fa fa-car"></i> Vehicles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="news.php">New</a></li>
                      <li><a href="gallery.php">View</a></li>
                      <li><a href="events.php">Events </a></li>
                    </ul>
                  </li>
                    

                    <ul class="nav side-menu">
                      <li><a href="users.php"><i class="fa fa-cog"></i> Equipment</span></a>
                        <!-- <ul class="nav child_menu">
                          <li><a href="index.html">Dashboard</a></li>
                          <li><a href="index2.html">Dashboard2</a></li>
                          <li><a href="index3.html">Dashboard3</a></li>
                        </ul> -->
                      </li>

                     
                    
                        <li><a><i class="fa fa-edit"></i> Inspections <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="news.php">News</a></li>
                              <li><a href="gallery.php">Gallery</a></li>
                              <li><a href="events.php">Events </a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-edit"></i> Issues <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="news.php">News</a></li>
                              <li><a href="gallery.php">Gallery</a></li>
                              <li><a href="events.php">Events </a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-edit"></i> Reminders <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="news.php">News</a></li>
                              <li><a href="gallery.php">Gallery</a></li>
                              <li><a href="events.php">Events </a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-edit"></i> Service <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="news.php">News</a></li>
                              <li><a href="gallery.php">Gallery</a></li>
                              <li><a href="events.php">Events </a></li>
                            </ul>
                          </li>


                          <ul class="nav side-menu">
                            <li><a href="users.php"><i class="fa fa-cog"></i> Contacts</span></a>
                              <!-- <ul class="nav child_menu">
                                <li><a href="index.html">Dashboard</a></li>
                                <li><a href="index2.html">Dashboard2</a></li>
                                <li><a href="index3.html">Dashboard3</a></li>
                              </ul> -->
                            </li>

                            <ul class="nav side-menu">
                                <li><a href="users.php"><i class="fa fa-cog"></i> Vendors</span></a>
                                  <!-- <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                  </ul> -->
                                </li>

                  <li><a><i class="fa fa-edit"></i> Parts And Inventory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="news.php">News</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                      <li><a href="events.php">Events </a></li>
                    </ul>
                  </li>

                  <ul class="nav side-menu" >
                    <li><a href="settings.php"><i class="fa fa-cog"></i> Fuel History</span></a>
                        <li><a href="settings.php"><i class="fa fa-cog"></i> Places</span></a>
                    <li><a href="profile.php"><i class="fa fa-user"></i> Documents</span></a>
                        <li><a href="settings.php"><i class="fa fa-cog"></i> Reports</span></a>
                      <!-- <ul class="nav child_menu">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="index2.html">Dashboard2</a></li>
                        <li><a href="index3.html">Dashboard3</a></li>
                      </ul> -->
                    </li>
                 
                 
                 
                 
                </ul>
              </div>
            
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small" style ="background-color:#990000;">
              <a href = "settings.php" data-toggle="tooltip" data-placement="top" title="Settings" style ="background-color:#990000;">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" style ="background-color:#990000;">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" style ="background-color:#990000;">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a onclick="return confirm('Are you sure you want to logout ?')" data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" style ="background-color:#990000;">
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
                    <img src="images/user.png" alt=""> {{ auth()->user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                    <li>
                      <a href="settings.php">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a onclick="return confirm('Are you sure you want to logout  ?')" href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                   
                    <span class="badge bg-green">10</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  
                   <li>
                      <a href = "messages.php">
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>saul</span>
                          <span class="time">date</span>
                        </span>
                        <span class="message">
                        message
                        </span>
                      </a>
                    </li>

                   
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        @yield('content')




        


        <footer>
            <div class="pull-right">
              copyright <a href="index.php">Royalty college</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>
  
      <script src = "vendors/js/jquery-3.1.1.js"></script>  
      <!-- <script type="text/javascript">
          
          $(document).ready(function(){
              
              
          $(document).on('click', '#submit', function(){
              if ($('#coursename').val()=="" || $('#description').val()==""){
                  alert('Please fill in all the required fields');
              }
              else{
              $coursename=$('#coursename').val();
              $board=$('#board').val();
              $level=$('#level').val();     
              $description=$('#description').val();
                                
                  $.ajax({
                      type: "POST",
                      url: "controller/controller.php",
                      data: {
                          coursename: $coursename,
                          board: $board,
                          level: $level,
                          description: $description,
                          submit: 1,
                      },
                      success: function(response){
                       header('location:driver/index.php');
                      }
                  });
              }
          });
          
  
          });
      </script> -->
      <!-- jQuery -->
      <script src="vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="vendors/nprogress/nprogress.js"></script>
      <!-- <script src="vendors/validator/validator.js"></script> -->
      <!-- morris.js -->
      <script src="vendors/raphael/raphael.min.js"></script>
      <script src="vendors/morris.js/morris.min.js"></script>
  
       <!-- Datatables -->
       <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
       <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
       <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
       <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
       <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
       <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
       <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
       <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
       <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
       <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
       <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
       <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  
      <!-- Custom Theme Scripts -->
      <script src="build/js/custom.min.js"></script>
      
    </body>
  </html>







