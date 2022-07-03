<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <script src="https://kit.fontawesome.com/06cccea7d4.js" crossorigin="anonymous"></script>
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

                <!-- LOGO -->
                <a href="{{route('home')}}" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="16">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <ul class="list-unstyled topbar-menu float-end mb-0">

                    <li class="dropdown notification-list d-xl-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>
            
                    <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>
                    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
    
                        </div>
                    </li>
    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
    
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="javascript: void(0);" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>
    
                            <div style="max-height: 230px;" data-simplebar>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>
    
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View All
                            </a>
    
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-view-apps noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
    
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>
    
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                
                                </div>
                            </div>
    
                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>
    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="account-user-avatar"> 
                                <img src="{{asset('upload/admin/'.Auth::user()->image_path)}}" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name"> {{ Auth::user()->name }}</span>
                                <span class="account-position">Founder</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
    
                            <!-- item-->
                            <a href="{{route('admin.index')}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>
                                <span>Support</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
    
                        </div>
                    </li>

                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <div class="app-search dropdown">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="top-search">
                            <span class="mdi mdi-magnify search-icon"></span>
                            <button class="input-group-text btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                        </div>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-notes font-16 me-1"></i>
                            <span>Analytics Report</span>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-life-ring font-16 me-1"></i>
                            <span>How can I help you?</span>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-cog font-16 me-1"></i>
                            <span>User profile settings</span>
                        </a>
    
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>
    
                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Erwin Brown</h5>
                                        <span class="font-12 mb-0">UI Designer</span>
                                    </div>
                                </div>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                        <span class="font-12 mb-0">Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="leftside-menu leftside-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                            <img src="{{asset('upload/admin/'.Auth::user()->image_path)}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name"> {{ Auth::user()->name }}</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Home</li>
                        <li class="side-nav-item">
                            <a href="{{route('home')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-info rounded-pill float-end">4</span>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Actions</li>
                        <li class="side-nav-item">
                        @if (Auth::user()->school_id == NULL)
                        <a href="{{route('school.index', Auth::user()->id)}}" class="side-nav-link">     
                        @else
                           <a href="{{route('school.index', Auth::user()->school_id)}}" class="side-nav-link">     
                        @endif
                        <i class="fa-solid fa-school"></i>
                                {{-- <i class="uil:bus-school"></i> --}}
                                <span> School </span>
                            </a>
                        </li>
                        {{-- <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> School </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-ecommerce-products.html">Products</a>
                                    </li>
                                    <li>
                                        <a href="apps-ecommerce-products-details.html">Products Details</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html">Read Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" aria-expanded="false"  class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="apps-email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html">Read Email</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                   
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
  <!-- content of other pages here... -->
  @yield("content")

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <script>document.write(new Date().getFullYear())</script> © HossamAli 
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="form-check-label" for="fixed-check">Scrollable</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                   <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                   </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- Apex js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>

        <!-- Todo js -->
        <script src="assets/js/ui/component.todo.js"></script>

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-crm.js"></script>
        <!-- end demo js-->
        
    </body>
</html>


{{-- //////////////////////////////////////////////////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
{{-- <!DOCTYPE html> 
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Dashboard
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Tab Icon  -->
    <link rel="icon" href="{{ asset("assets/images/Logo-modified.png") }}">
    <!--  JQuery   -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <!--   Fonts   -->
    <link href="http://fonts.cdnfonts.com/css/cera-round-pro" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset("css/layout.css")        }}" rel="stylesheet">
    <link href="{{ asset("css/landingPage.css")   }}" rel="stylesheet">
    <link href="{{ asset("css/tracking.css")      }}" rel="stylesheet">
    <link href="{{ asset("css/Drivers.css")       }}" rel="stylesheet">
    <link href="{{ asset("css/Parents.css")       }}" rel="stylesheet">
    <link href="{{ asset("css/alerts.css")        }}" rel="stylesheet">
    <link href="{{ asset("css/confirmEmail.css")  }}" rel="stylesheet">
    <link href="{{ asset("css/home.css")          }}" rel="stylesheet">
    <link href="{{ asset("css/adminProfile.css")  }}" rel="stylesheet">
    <link href="{{ asset("css/parentDriver.css")  }}" rel="stylesheet">
    <link href="{{ asset("css/deleteModal.css")   }}" rel="stylesheet">
    <link href="{{ asset("css/notifications.css") }}" rel="stylesheet">
    <!--   mapbox  -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <!--  Pusher   -->
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <!-- Chart.js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- Typed.js  -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!--   Axios   -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://use.fontawesome.com/e8ca812c5b.js"></script>
    <!--   ReCaptcha   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
</head>

<body>
    <div class="sideBar">
        <div class="top-side-bar">
            <div class="sidebar-user">
                <img src="{{asset('upload/admin/'.Auth::user()->image_path)}} "  class="sidebar-img">
                <h2>   {{ Auth::user()->name }} </h3>
                    @if (Auth::user()->is_admin == 1)
                    <h4> School Admin </h4>
                    @else
                    <h4> School Clerk </h4>
                    @endif
            </div>
        </div>

        <ul class="list-group">
            <a href="{{route('home')}}">     
                <li class="list-group-item mt-2"><i class="fa fa-home" aria-hidden="true"></i> &nbsp; Dashboard</li>
            </a>
            @if (Auth::user()->school_id == NULL)
            <a href="{{route('school.index', Auth::user()->id)}}">     
            @else
               <a href="{{route('school.index', Auth::user()->school_id)}}">     
            @endif
            <li class="list-group-item mt-2"><i class="fa fa-university" aria-hidden="true"></i> &nbsp; School</li>
            </a> 
            <a><li class="list-group-item mt-2" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-trips" aria-expanded="false">
                <i class="fa fa-subway"></i> &nbsp;Trips </li>
                <div class="collapse" id="dashboard-collapse-trips">
                    <ul class="btn-toggle-nav list-unstyled">
                        <li><a href="{{ route('trip.index') }}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-subway"></i> &nbsp;Tracking</a></li>
                        <li><a href="{{route('trip.indextrip')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-pencil-square-o"></i> &nbsp; Update Trips </a></li>
                    </ul>
                </div>
            </a>
            @if (Auth::user()->is_admin == 1)
            <a><li class="list-group-item mt-2" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-1" aria-expanded="false">
                <i class="fa fa-id-card"></i> &nbsp;Drivers</li>
                <div class="collapse" id="dashboard-collapse-1">
                    <ul class="btn-toggle-nav list-unstyled">
                        <li><a href="{{route('driver.index')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-id-card"></i> &nbsp;Show Drivers</a></li>
                        <li><a href="{{route('driver.create')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-plus-square-o"></i> &nbsp;Add New Driver</a></li>
                    </ul>
                </div>
            </a>

            <a><li class="list-group-item mt-2" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-2" aria-expanded="false">
                <i class="fa fa fa-users"></i> &nbsp;Parents</li>
                <div class="collapse" id="dashboard-collapse-2">
                    <ul class="btn-toggle-nav list-unstyled">
                        <li><a href="{{route('father.index')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-users"></i> &nbsp;Show Parents</a></li>
                        <li><a href="{{route('father.create')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-plus-square-o"></i> &nbsp;Add New Parent</a></li>
                    </ul>
                </div>
            </a>

            <a><li class="list-group-item mt-2" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-vehicles" aria-expanded="false">
                <i class="fa fa-bus"></i> &nbsp;Vehicles </li>  
                <div class="collapse" id="dashboard-collapse-vehicles">
                  <ul class="btn-toggle-nav list-unstyled">
                    <li><a href="{{route('vehicle.index')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-bus"></i> &nbsp;Show Vehicles</a></li>
                    <li><a href="{{route('vehicle.create')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-plus-square-o"></i> &nbsp;Add Vehicle</a></li>
                  </ul>
                </div>
            </a>  
            @endif
       
            <a><li class="list-group-item mt-2" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-profile" aria-expanded="false">
                <i class="fa fa-user-circle"></i> &nbsp;
                @if (Auth::user()->is_admin == 1)
                Admin 
                @else
                Clerk
                @endif
            </li>  
                <div class="collapse" id="dashboard-collapse-profile">
                  <ul class="btn-toggle-nav list-unstyled">
                    <li><a href="{{route('admin.index')}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-user-circle"></i> &nbsp;Show Profile</a></li>
                    <li><a href="{{route('admin.edit',Auth::user()->id)}}" class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-pencil-square-o"></i> &nbsp;Edit Profile</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                         class="list-group-item mt-2 sidebar-dropdown-item" ><i class="fa fa-sign-out"></i> &nbsp;{{ __('Logout') }}
                         <form id="logout-form" action="{{ route('logout') }}" method="POST"
                         class="d-none">
                         @csrf
                        </form>    
                        </a>
                    </li>
                  </ul>
                </div>
            </a>            
        </ul>
    </div>

    <div class="content">
        <!-- content of other pages here... -->
        @yield("content")
    </div>

    <!-- Admin Notification -->
    <div class="adminNotify hide">
        <span class='fas fa-exclamation-circle'></span>
        <span id="admin-msg" class="admin-msg"></span>
        <div class="admin-close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>
    <!-- Clerk Notification -->
    <div class="clerkNotify hide">
        <span class='fas fa-exclamation-circle'></span>
        <span id="clerk-msg" class="clerk-msg"></span>
        <div class="clerk-close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>


<script>
    let pusher2 = new Pusher('a7171d09fe99b7303a96', {cluster: 'eu'});
    // Pusher.logToConsole = false;

    // Admin notification
    let channelAdmin = pusher2.subscribe('admin.' + {{Auth::user()->id}});
    channelAdmin.bind("adminNotify", async (data) => {
        console.log(data)
        document.getElementById('admin-msg').innerText = data.message
        
        $('.adminNotify').addClass("show");
        $('.adminNotify').removeClass("hide");
        $('.adminNotify').addClass("showAlert");
            
        setTimeout(function(){
            $('.adminNotify').removeClass("show");
            $('.adminNotify').addClass("hide");
            $('.adminNotify').removeClass("showAlert");
        },3000);
    })
    // Clerk notification
    let channelClerk = pusher2.subscribe('school.' + {{Auth::user()->school_id}});
    channelClerk.bind("clerkNotify", async (data) => {
        console.log(data)
        document.getElementById('clerk-msg').innerText = data.message
        
        $('.clerkNotify').addClass("show");
        $('.clerkNotify').removeClass("hide");
        $('.clerkNotify').addClass("showAlert");
            
        setTimeout(function(){
            $('.clerkNotify').removeClass("show");
            $('.clerkNotify').addClass("hide");
            $('.clerkNotify').removeClass("showAlert");
        },3000);
    })
</script>
<!-- alerts.js -->
 <script src="{{ asset("js/alerts.js") }}"></script>
<!-- index.js  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset("js/index.js") }}"></script>
</body>
</html> --}}
