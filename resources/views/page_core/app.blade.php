<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Noor Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets_dashboard/images/favicon.ico">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- third party css -->
        <link href="{{URL::asset('assets_dashboard/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{URL::asset('assets_dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets_dashboard/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="/dashboard" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{URL::asset('assets_dashboard/images/noor.svg')}}" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="{{URL::asset('assets_dashboard/images/noor.svg')}}" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="/dashboard" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{URL::asset('assets_dashboard/images/noor.svg')}}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{URL::asset('assets_dashboard/images/noor.svg')}}" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="/dashboard" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> About US </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/post_about">About Company</a>
                                    </li>
                                    <li>
                                        <a href="/exp_team">Our Experience Team</a>
                                    </li>
                                    <li>
                                        <a href="/visi_misi">Vision and Mission</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProjects">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/post_project">Post Project</a>
                                    </li>
                                    <li>
                                        <a href="/view_post">List Projects</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{--  <li class="side-nav-item">
                            <a href="/view_blog" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span>Blog </span>
                            </a>
                        </li>  --}}

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarBlog" aria-expanded="false" aria-controls="sidebarBlog" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Blogs </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBlog">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/add_blog">Post Blog</a>
                                    </li>
                                    <li>
                                        <a href="/view_blog">List Blogs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Albums </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/post_album">Post Album</a>
                                    </li>
                                    <li>
                                        <a href="/view_album">List Albums</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @if ( session()->get('login_status') == 'Super Admin')
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span>Accounts</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/account">Members</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">List Accounts</a>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                        @endif

                        <li class="side-nav-item">
                            <a href="/view_msg" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Massage <span class="badge bg-danger float-end">{{session()->get('login_msg')}}</span> </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/profile" class="side-nav-link">
                                <i class="mdi mdi-account-circle"></i>
                                <span> My Account </span>
                            </a>
                        </li>
                    </ul>

                    <!-- Help Box -->
                    
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end">
                            {{--  <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>  --}}
                          

                            {{--  <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row g-0">

                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets_dashboard/images/brands/g-suite.png" alt="G Suite">
                                                    <span>G Drive</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>

                                </div>
                            </li>  --}}

                            {{--  <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>  --}}

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 

                                     <img src="{{ asset('/assets_foto_profile/'.session()->get('login_foto')) }}" alt="" style="width: 35px; height: 35px;"  class="rounded-circle">
                                        <!-- <img src="assets_dashboard/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle"> -->
                                    </span>
                                    <span>
                                        <span style="color: black" class="account-user-name">{{ Auth::user()->name }}</span>
                                        <span style="color: green" class="account-position">{{session()->get('login_status')}}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome {{ Auth::user()->name }}</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="/profile" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a> -->

                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                            <li class="notification-list">
                                <a target="_blank" class="nav-link" href="/">
                                    <i class="dripicons-web noti-icon"></i>
                                </a>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange" readonly="">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a onclick='window.location.reload();' class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Item Menu</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                    <!-- isi konten -->
                    @yield('konten')

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <script>document.write(new Date().getFullYear())</script> © Noor Energy
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{URL::asset('assets_dashboard/js/vendor.min.js')}}"></script>
        <script src="assets_dashboard/js/app.min.js"></script>

        <!-- third party js -->
        <script src="{{URL::asset('assets_dashboard/js/vendor/apexcharts.min.js')}}"></script>
        <script src="{{URL::asset('assets_dashboard/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{URL::asset('assets_dashboard/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
    <script src="{{URL::asset('assets_dashboard/js/pages/demo.dashboard.js')}}"></script>
        <!-- end demo js-->
    </body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO 2014], Thu, 01 Apr 2021 10:29:41 GMT -->
</html>