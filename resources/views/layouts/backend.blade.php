<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="{{ asset('css/simple-line-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-switch.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="https://use.fontawesome.com/a793bb7e36.js"></script>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('css/daterangepicker.min.css')}}" rel="stylesheet">
        {{--  <link href="{{ asset('css/fullcalender.min.css')}}" rel="stylesheet">  --}}
        <link href="{{ asset('css/jqvmap.css')}}" rel="stylesheet">

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('css/components.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/plugins.min.css')}}" rel="stylesheet">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('css/layout.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/default.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
        <!-- END THEME LAYOUT STYLES -->
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="../assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                      {{--  Logoout Button  --}}
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                            <a href="javascript:;"> Dashboard
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" active">
                                                    <a href="index.html" class="nav-link  active">
                                                        <i class="icon-bar-chart"></i> Default Dashboard
                                                        <span class="badge badge-success">1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;"> Layouts
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_mega_menu_light.html" class="nav-link  "> Light Mega Menu </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_top_bar_light.html" class="nav-link  "> Light Top Bar Dropdowns </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_fluid_page.html" class="nav-link  "> Fluid Page </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_top_bar_fixed.html" class="nav-link  "> Fixed Top Bar </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_mega_menu_fixed.html" class="nav-link  "> Fixed Mega Menu </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_disabled_menu.html" class="nav-link  "> Disabled Menu Links </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="layout_blank_page.html" class="nav-link  "> Blank Page </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>

            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Dashboard
                                            <small>dashboard & statistics</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                   
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="dashboard-stat2 ">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-green-sharp">
                                                                <span data-counter="counterup" data-value="7800">0</span>
                                                                <small class="font-green-sharp">$</small>
                                                            </h3>
                                                            <small>TOTAL PROFIT</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info">
                                                        <div class="progress">
                                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                                <span class="sr-only">76% progress</span>
                                                            </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> progress </div>
                                                            <div class="status-number"> 76% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="dashboard-stat2 ">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-red-haze">
                                                                <span data-counter="counterup" data-value="1349">0</span>
                                                            </h3>
                                                            <small>NEW FEEDBACKS</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="icon-like"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info">
                                                        <div class="progress">
                                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                                <span class="sr-only">85% change</span>
                                                            </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> change </div>
                                                            <div class="status-number"> 85% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="dashboard-stat2 ">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-red-haze">
                                                                <span data-counter="counterup" data-value="1349">0</span>
                                                            </h3>
                                                            <small>NEW FEEDBACKS</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="icon-like"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info">
                                                        <div class="progress">
                                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                                <span class="sr-only">85% change</span>
                                                            </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> change </div>
                                                            <div class="status-number"> 85% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="dashboard-stat2 ">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-red-haze">
                                                                <span data-counter="counterup" data-value="1349">0</span>
                                                            </h3>
                                                            <small>NEW FEEDBACKS</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="icon-like"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info">
                                                        <div class="progress">
                                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                                <span class="sr-only">85% change</span>
                                                            </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> change </div>
                                                            <div class="status-number"> 85% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @yield('content')

                                <div class="page-wrapper-row">
                                    <div class="page-wrapper-bottom">
                                        <!-- BEGIN FOOTER -->
                                        <!-- BEGIN PRE-FOOTER -->
                                        <div class="page-prefooter">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                                        <h2>About</h2>
                                                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                                        <h2>Subscribe Email</h2>
                                                        <div class="subscribe-form">
                                                            <form action="javascript:;">
                                                                <div class="input-group">
                                                                    <input type="text" placeholder="mail@email.com" class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn" type="submit">Submit</button>
                                                                    </span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                                        <h2>Follow Us On</h2>
                                                        <ul class="social-icons">
                                                            {{--  <li>
                                                                <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                                            </li>  --}}
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                                        <h2>Contacts</h2>
                                                        <address class="margin-bottom-40"> Phone: 800 123 3456
                                                            <br> Email:
                                                            <a href="mailto:info@metronic.com">info@metronic.com</a>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PRE-FOOTER -->
                                        <!-- BEGIN INNER FOOTER -->
                                        <div class="page-footer">
                                            <div class="container"> 2016 &copy; Metronic Theme By
                                                {{--  <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;  --}}
                                                {{--  <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>  --}}
                                            </div>
                                        </div>
                                        <div class="scroll-to-top">
                                            <i class="icon-arrow-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
       
        <!-- END QUICK NAV -->
    
        <!-- BEGIN CORE PLUGINS -->
        {{--  <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/dashboard.min.js') }}"></script>
        <script src="{{ asset('js/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('js/demo.min.js') }}"></script>
        <script src="{{ asset('js/jquery.blockui.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/js.cookie.min.js') }}"></script>
        <script src="{{ asset('js/layout.min.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>  --}}
       
        
        
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>