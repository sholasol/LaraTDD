<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="" />
    <!-- Page Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <base href="{{\URL::to('/')}}" />
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/chartist/chartist.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/apex-chart/apexcharts.css">
    <link type="text/css" rel="stylesheet" href="assets/css/app.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.min.css" />
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        @include('partials._sidebar')



        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">

            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input class="form-control search-input" name="search" placeholder="Type something..."
                                type="text" />
                            <span class="input-group-btn">
                                <span id="close-search"><i class="ion-ios-close-empty"></i></span>
                            </span>
                        </div>
                    </form>
                </div>
                <!--================================-->
                <!-- Page Header  Start -->
                <!--================================-->
                <nav class="navbar navbar-expand-lg">
                    <ul class="list-inline list-unstyled mg-r-20">
                        <!-- Mobile Toggle and Logo -->
                        <li class="list-inline-item align-text-top"><a class="hidden-md hidden-lg" href="#"
                                id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                        <!-- PC Toggle and Logo -->
                        <li class="list-inline-item align-text-top"><a class="hidden-xs hidden-sm" href="#"
                                id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                    </ul>
                    <!--================================-->
                    <!-- Mega Menu Start -->
                    <!--================================-->
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">

                        </ul>
                    </div>
                    <!--/ Mega Menu End-->
                    <!-- Header Right Start -->
                    <!--================================-->
                    <div class="header-right pull-right">
                        <ul class="list-inline justify-content-end">
                            <!-- Notifications Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class="notification-icon" href="" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-bell tx-16"></i>
                                    <span class="notification-count wave in"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow-2">
                                    <!-- Top Notifications Area -->
                                    <div class="top-notifications-area">
                                        <!-- Heading -->
                                        <div class="notifications-heading">
                                            <div class="heading-title">
                                                <h6>Notifications</h6>
                                            </div>
                                            <span>1+ New Notifications</span>
                                        </div>
                                        <div class="notifications-box" id="notificationsBox">
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                                        <i class="fa fa-smile-o tx-success tx-16"></i>
                                                    </div>
                                                    <div>
                                                        <span>Your order is placed</span>
                                                        <span class="small tx-gray-600 ft-right">Jun 10</span>
                                                        <div class="tx-gray-600 tx-11">Dummy text of the printing and
                                                            type setting industry.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notifications-footer">
                                            <a href="">View all Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Notifications Dropdown End -->
                            <!--================================-->
                            <!-- Messages Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown hidden-xs">
                                <a class="message-icon" href="" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-envelope tx-16"></i>
                                    <span class="messages-count wave in"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow-2">
                                    <div class="top-message-area">
                                        <div class="top-message-heading">
                                            <div class="heading-title">
                                                <h6>Messages</h6>
                                            </div>
                                            <span>5+ New Messages</span>
                                        </div>
                                        <div class="message-box" id="messageBox">
                                            <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                                <div class="d-flex justify-content-between">
                                                    <div class="pd-r-15">
                                                        <span class="avatar avatar-online">
                                                            <img src="assets/images/avatar/avatar1.png"
                                                                class="img-fluid" alt="">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span>Mary Adams</span>
                                                        <span class="small tx-gray-600 ft-right">30 minutes ago</span>
                                                        <div class="tx-gray-600 tx-11">Dummy text of the printing and
                                                            type setting industry...</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="top-message-footer">
                                            <a href="">View all Messages</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--/ Messages Dropdown End -->
                            <!--================================-->
                            <!-- Profile Dropdown Start -->
                            <!--================================-->
                            <li class="list-inline-item dropdown">
                                <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="select-profile">Hi, {{ Auth::user()->firstname }}</span>
                                    <img src="assets/images/avatar/avatar1.png"
                                        class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-profile shadow-2">
                                    <div class="user-profile-area">
                                        <div class="user-profile-heading">
                                            <div class="profile-thumbnail">
                                                <img src="assets/images/avatar/avatar1.png"
                                                    class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                            </div>
                                            <div class="profile-text">
                                                <h6>{{ Auth::user()->firstname }}</h6>
                                                <span>{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <a href="" class="dropdown-item"><i class="icon-user" aria-hidden="true"></i> My
                                            profile</a>
                                        <a href="" class="dropdown-item"><i class="icon-settings"
                                                aria-hidden="true"></i>
                                            settings</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                            class="dropdown-item"><i class="icon-power" aria-hidden="true"></i>
                                            Sign-out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <!-- Profile Dropdown End -->
                        </ul>
                    </div>
                    <!--/ Header Right End -->
                </nav>
            </div>


            @yield('content')
            <!-- Page Footer Start -->
            <!--================================-->
            <footer class="page-footer">
                <div class="pd-t-4 pd-b-0 pd-x-20">
                    <div class="tx-10 tx-uppercase">
                        <p class="pd-y-10 mb-0">Copyright&copy; 2021 | All rights reserved. | Created By <a
                                href="http://wrapcoders.xyz/" target="_blank">LaraTDD</a></p>
                    </div>
                </div>
            </footer>
            <!--/ Page Footer End -->
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!--/ Scroll To Top End -->
    <!--================================-->

    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="assets/plugins/popper/popper.js"></script>
    <script src="assets/plugins/feather-icon/feather.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/toastr/toastr.min.js"></script>
    <script src="assets/plugins/countup/counterup.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/plugins/chartjs/chartjs.js"></script>
    <script src="assets/plugins/apex-chart/apexcharts.min.js"></script>
    <script src="assets/plugins/apex-chart/irregular-data-series.js"></script>
    <script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>
    <script src="assets/js/dashboard/sales-dashboard-init.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/highlight.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>