<div class="page-sidebar">
    <div class="logo">
        <a class="logo-img" href="index.html">
            <img class="desktop-logo" src="assets/images/logo.png" alt="">
            <img class="small-logo" src="assets/images/small-logo.png" alt="">
        </a>
        <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
    </div>
    <!--================================-->
    <!-- Sidebar Menu Start -->
    <!--================================-->
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i>
                        <span>Dashboard</span></a>
                </li>

                <li>
                    <a href=""><i data-feather="mail"></i>
                        <span>Mailbox</span><span class="badge badge-warning ft-right">10+</span></a>
                    <ul class="sub-menu">
                        <li><a href="mailbox.html">Inbox</a></li>
                        <li><a href="mailbox-message.html">View Mail</a></li>
                        <li><a href="mailbox-compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"><i data-feather="layout"></i>
                        <span>Widgets</span><span class="badge badge-info ft-right">Hot</span></a>
                </li>
                <li class="menu-divider mg-y-20-force"></li>
                <li class="mg-20-force menu-elements">Elements</li>
                <li>
                    <a href=""><i data-feather="grid"></i>
                        <span>Products</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="/products">Products</a></li>
                        <li><a href="ui-alert.html">Alerts</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="users"></i>
                        <span>Users</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('users') }}">Users</a></li>
                        <li><a href="{{ route('create-user') }}">Create User</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="gift"></i>
                        <span>Icons</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                        <li><a href="icon-feather.html">Feather Icons</a></li>
                        <li><a href="icon-mdi.html">Mdi icons</a></li>
                        <li><a href="icon-flag.html">Flag icons</a></li>
                        <li><a href="icon-simple-line.html">Simple line icons</a></li>
                        <li><a href="icon-themify.html">Themify icons</a></li>
                        <li><a href="icon-weather.html">Weather Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="command"></i>
                        <span>Components</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="com-datepicker.html">Date Picker</a></li>
                        <li><a href="com-timepicker.html">Time Picker</a></li>
                        <li><a href="com-colorpicker.html">Color Picker</a></li>
                        <li><a href="com-bootselect.html">Bootstrap Select</a></li>
                        <li><a href="com-codeeditor.html">Code Editor</a></li>
                        <li><a href="com-wysiwyg.html">WYSIWYG Editor</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="calendar"></i>
                        <span>Forms</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="form-element.html">Form Elements</a></li>
                        <li><a href="form-layout.html">Form Layouts</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-upload.html">File Upload</a></li>
                        <li><a href="form-publisher.html">Form Publishers</a></li>
                        <li><a href="form-formatter.html">Form Formatter </a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="database"></i>
                        <span>Tables</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="table-static.html">Static</a></li>
                        <li><a href="table-responsive.html">Responsive</a></li>
                        <li><a href="table-datatable.html">Data Tables</a></li>
                        <li><a href="table-footable.html">Foo Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="pie-chart"></i>
                        <span>Charts</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="chart-apex.html">Apex</a></li>
                        <li><a href="chart-google.html">Google</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chart-chartjs.html">ChartJS</a></li>
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-chartlist.html">Chartlist</a></li>
                        <li><a href="chart-sparkline.html">Sparkline</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="map"></i>
                        <span>Maps</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="map-google.html">Google Maps</a></li>
                        <li><a href="map-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-divider mg-y-20-force"></li>
                <li class="mg-20-force menu-extras">Extras</li>
                <li>
                    <a href=""><i data-feather="cpu"></i>
                        <span>App View</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="app-chatroom.html">Chat Room</a></li>
                        <li><a href="app-calendar.html">Calendar</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i data-feather="codepen"></i>
                        <span>Pages</span><i class="accordion-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-error404.html">404 Page</a></li>
                        <li><a href="page-error500.html">500 Page</a></li>
                        <li><a href="page-profile.html">Profile</a></li>
                        <li><a href="page-singin.html">Login</a></li>
                        <li><a href="page-singup.html">Register</a></li>
                        <li><a href="page-unlock.html">Lockscreen</a></li>
                        <li><a href="page-password.html">password Reset</a></li>
                        <li><a href="page-search.html">Search Result</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-pricing.html">Pricing Tables</a></li>
                        <li><a href="page-treeview.html">Tree View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="email-template.html"><i data-feather="printer"></i>
                        <span>Mail Template</span><span class="badge badge-warning ft-right">Hot</span></a>
                </li>
                <li>
                    <a href=""><i data-feather="monitor"></i>
                        <span>Frontend</span><span class="badge badge-danger ft-right">Very Hot</span></a>
                    <ul class="sub-menu">
                        <li><a href="../templates/ecommerce/index.html" target="_blank">Ecommerce</a></li>
                        <li><a href="../templates/cryptocurrency/index.html" target="_blank">Cryptocurrency</a>
                        </li>
                        <li><a href="../templates/helpdesk/index.html" target="_blank">Helpdesk</a></li>
                        <li><a href="../templates/project/index.html" target="_blank">project</a></li>
                        <li><a href="../templates/server/index.html" target="_blank">server</a></li>
                        <li><a href="../templates/education/index.html" target="_blank">education</a></li>
                        <li><a href="../templates/event/index.html" target="_blank">event</a></li>
                        <li><a href="../templates/social/index.html" target="_blank">social</a></li>
                    </ul>
                </li>
                <li class="menu-divider mg-y-20-force"></li>
                <li class="mg-20-force menu-others">Others</li>
                <li>
                    <a href="../documentation/documentation.html"><i data-feather="life-buoy"></i>
                        <span>Documentation</span></a>
                </li>
                <li>
                    <a href="../documentation/changelog.html"><i data-feather="coffee"></i>
                        <span>Changelog</span><span class="badge badge-primary ft-right">1.7</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--/ Sidebar Menu End -->
    <!--================================-->
    <!-- Sidebar Footer Start -->
    <!--================================-->
    <div class="sidebar-footer">
        <a class="pull-left" href="page-profile.html" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
            <i data-feather="user" class="ht-15"></i></a>
        <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
            <i data-feather="mail" class="ht-15"></i></a>
        <a class="pull-left" href="page-unlock.html" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i data-feather="lock" class="ht-15"></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a class="pull-left" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" data-original-title="Sing Out">
            <i data-feather="log-out" class="ht-15"></i></a>
    </div>
    <!--/ Sidebar Footer End -->
</div>