<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>W(all) Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="admin/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
   form{
       font-size: larger;
       margin-top: 10%;
   }
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                {{-- <div class="navbar-header" data-logobg="skin6"> --}}

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                {{-- </div> --}}
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                {{-- <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5"> --}}
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="admin/plugins/images/logo-icon.png" alt="homepage" style="position: absolute;
                            top: 15px; left: 5px;"/>
                        </b>
                        <!--End Logo icon -->
                        
                    </a>
                    <h3 style="color: white; margin-left:2%; margin-top:1%;">W(all) Admin Login</h3>
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        {{-- <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li> --}}
                    </ul>
                   
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-image: url('images/paint.jpg'); background-repeat:no-repeat; min-height: calc(100vh - 130px);">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            {{-- <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Blank Page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div> --}}
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container col-8 rounded mt-5" style="background: rgba(0,0,0,0.5); padding:20px 60px;">
                    <div class="container">
                        @if (session('message'))
                            <div class="alert alert-danger" role="alert">
                                {{session('message')}}
                            </div>
                        @endif
                    </div>
                {{-- <form action="/AdminLoginCheck" method="POST" style="text-align: center; margin-top:5%;">
                    @csrf
                    <div style="width: 83%;"><label style="font-size: larger; text-align:left;">Email:</label></div><br>
                    <input style="width: 20%; height:30px;" class="mb-5" type="text" name="adminEmail" required><br>
                    <div style="width: 86%;"><label style="font-size: larger;">Password:</label></div><br>
                    <input style="width: 20%; height:30px;" class="mb-5" type="password" name="adminPass" required><br>

                    <button style="position: relative; left:45%; width:10%;" class="btn btn-danger  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light text-white" type="submit">Login</button>
                </form> --}}
                
                {{-- //////////// --}}
                
                <form class="col-4 container" action="/AdminLoginCheck" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1" style="color:white;">Email address:</label>
                      <input type="text" name="adminEmail"  class="form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" style="color:white;">Password:</label>
                      <input type="password" name="adminPass" class="form-control mb-4" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    
                    <button style="position: relative; left:40%; font-size: medium;" class="btn btn-danger px-4 mb-5 d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light text-white" type="submit">Login</button>
                  </form>

                {{-- //////////// --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> Copyright W(ALL) © 2022. All rights reserved.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/js/custom.js"></script>
</body>

</html>