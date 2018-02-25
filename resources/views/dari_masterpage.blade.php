
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Library MIS</title>
      <link rel="shortcut icon" type="/lms/image/x-icon" href="/lms/images/logog.PNG" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/lms/bootstrap/css/bootstrap.min.css">
    <!--  my link-->
		<link rel="stylesheet" href="/lms/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lms/dist/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lms/dist/css/nprogress.css" >
    <link rel="stylesheet" href="/lms/dist/css/green.css" >
		<link rel="stylesheet" href="/lms/dist/css/my.css" media="screen" title="no title" charset="utf-8">
    <!--  delete link-->

    <script src="/lms/plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <script  src="lms\dist\js\script.js">  </script>
    <!-- table code -->
    <!-- End of my css -->
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="/lms/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/lms/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/lms/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/lms/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/lms/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/lms/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/lms/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/lms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<!-- oncontextmenu="return false" -->
  <body class="hold-transition skin-blue sidebar-mini"  >
    <div class="wrapper">

      <header class="main-header" style="background-color:#521606;">
        <div class="navbar-custom-menu" style="float:left; color:white;">

          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->


            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu"  >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/lms/images/logog.PNG" class="  user-image" alt="User Image">
                <span class="hidden-xs" style="font-family:Times New Roman; color:white;">Library MIS</span>
              </a>
              <ul class="dropdown-menu" style="margin: 0px -106% 0px 0;" >
                <!-- User image -->
                <li class="user-header">
                  <img src="/lms/images/logog.PNG" class="img-circle" alt="User Image">
                  <p style="font-family:Times New Roman;">
                Library MIS        <small>Member since Year 2017</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">


                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                Sign Out
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>


                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div class="col-md-7" style="margin-top:12px; ">
            <a href="D_Admin" style="color:white; font-size:17px; margin-left:20px;">دری</a>
            <a href="Admin" style="color:white; ">English</a>
          </div>

        <a href="#" class="logo " style="float:right;">
						<p style="font-family:Times New Roman; font-size:25px"  >
						  Library MIS
						</p>
        </a>
        <!-- Logo -->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="float:right;">
          <span class="sr-only">Toggle navigation</span>
        </a>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar nav" style="right:0;height:1016px;" >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/lms/images/logog.PNG" class="img " alt="User Image">
            </div>
            <div class="pull-left info">
              <br>
              <p style="font-family:Times New Roman;">Library MIS</p>

            </div>
          </div>
          <!-- search form -->
                @yield('search')
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu amenu" style="margin-right:20px;">
            <li class="header" style="font-size:20px;">مینو های اصلی</li>
            <li class="treeview">
              <a href="D_Admin">
                <i ></i> <span class="fa fa-dashboard">&nbsp &nbsp  صفحه اصلی</span> <i class=" fa fa-angle-left  pull-left"></i>
              </a>

            </li>
            <li class="treeview ">
              <a href="#">
                <span class="	fa fa-book">&nbsp &nbsp کتاب</span>
                <i class=" fa fa-angle-left  pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="dari_book"><i class="fa fa-circle-o"></i> لیست کتاب ها</a></li>
                <li><a href="dari_insert"><i class="fa fa-circle-o"></i>  اضافه نمودن</a></li>
                <li><a href="dari_barrow"><i class="fa fa-circle-o"></i> نمایش قرضه</a></li>
                <li><a href="dari_barrow_insert"><i class="fa fa-circle-o"></i> اضافه نمودن فرضه</a></li>
              </ul>
            </li>
            <li class="treeview ">
              <a href="#">
                <span class="	fa fa-newspaper-o">&nbsp &nbsp مجلات</span>
                <i class=" fa fa-angle-left  pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="dari_magazine"><i class="fa fa-circle-o"></i> لیست مجلات</a></li>
                <li><a href="dari_mg_insert"><i class="fa fa-circle-o"></i> اضافه نمودن</a></li>
                <li><a href="dari_borrow_magazine"><i class="fa fa-circle-o"></i> لیست عاریت </a></li>
                <li><a href="dari_mgborrow_insert"><i class="fa fa-circle-o"></i> اضافه نمودن عاریت</a></li>
              </ul>
            </li>
            <li class="treeview " >
              <a href="#" >
                <span  class="glyphicon glyphicon-book" > مونوگراف</span>
                <i class=" fa fa-angle-left  pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="dari_monograph"><i class="fa fa-circle-o"></i> لیست مونوگراف</a></li>
                <li><a href="dari_m_insert"><i class="fa fa-circle-o"></i>  اضافه نمون</a></li>
                </ul>
            </li>
            <li class="treeview ">
              <a href="#">
                <span  class="glyphicon glyphicon-user"> اعضا</span>
                <i class=" fa fa-angle-left  pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="Dari_member"><i class="fa fa-circle-o"></i> لیست اعضا</a></li>
                <li><a href="dari_member_insert"><i class="fa fa-circle-o"></i>  اضافه نمودن</a></li>

              </ul>
            </li>


          </ul>

        </section>
        <!-- /.sidebar -->
      </aside>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="background-color:#EADBB6!important;margin:0px;  " >
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content" >
          <!-- Small boxes (Stat box) -->



            <!-- The master page code -->
                @yield('content')


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer" style="background-color: #230D00!important; color: #fff;margin:0;">

          <strong> <a href="Admin"style=" color: #fff;" class="text-center" >Library Mangment System</a></strong>

      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">

          <!-- /.control-sidebar-menu -->


          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">

          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/lms/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/lms/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="/lms/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/lms/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/lms/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/lms/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/lms/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/lms/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/lms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/lms/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/lms/plugins/fastclick/fastclick.min.js"></script>
          <script src="/lms/dist/js/nprogress.js"></script>
    <!-- AdminLTE App -->
    <script src="/lms/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/lms/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/lms/dist/js/demo.js"></script>

		<!--  my javascript code-->







  </body>
</html>
