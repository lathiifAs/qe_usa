<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL('cubic_template/plugins/images/favicon.png') }}">
    <title>Quality Express USA</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="{{ URL('cubic_template/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="{{ URL('cubic_template/plugins/components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ URL('cubic_template/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="{{ URL('cubic_template/css/animate.css') }}" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="{{ URL('cubic_template/css/style.css') }}" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="{{ URL('cubic_template/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="{{ URL('cubic_template/plugins/images/logo.png') }}" alt="home" />
                        </b>
                        <span>

                            Quality Express

                            {{-- <img src="{{ URL('cubic_template/plugins/images/logo-text.png') }}" alt="homepage" class="dark-logo" /> --}}
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                    {{-- <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="icon-magnifier"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li> --}}
                </ul>
                {{-- <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="right-side-toggle">
                        <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                        </a>
                    </li>
                </ul> --}}
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">

                        </div>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Main Menu</a></p>
                    </div>
                </div>

                @include('template_admin.sidebar')

            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            {{-- <div class="row m-0">
                <div class="col-md-3 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">154</h3>
                            <p class="info-text font-12">Bookings</p>
                            <span class="hr-line"></span>
                            <p class="info-ot font-15">Target<span class="label label-rounded label-success">300</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="mdi mdi-comment-text-outline"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">68</h3>
                            <p class="info-text font-12">Complaints</p>
                            <span class="hr-line"></span>
                            <p class="info-ot font-15">Total Pending<span class="label label-rounded label-danger">154</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 info-box">
                    <div class="media">
                        <div class="media-left">
                            <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="info-count text-blue">&#36;9475</h3>
                            <p class="info-text font-12">Earning</p>
                            <span class="hr-line"></span>
                            <p class="info-ot font-15">March : <span class="text-blue font-semibold">&#36;514578</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 info-box b-r-0">
                    <div class="media">
                        <div class="media-left p-r-5">
                            <div id="earning" class="e" data-percent="60">
                                <div id="pending" class="p" data-percent="55"></div>
                                <div id="booking" class="b" data-percent="50"></div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2 class="text-blue font-22 m-t-0">Report</h2>
                            <ul class="p-0 m-b-20">
                                <li><i class="fa fa-circle m-r-5 text-primary"></i>60% Earnings</li>
                                <li><i class="fa fa-circle m-r-5 text-primary"></i>55% Pending</li>
                                <li><i class="fa fa-circle m-r-5 text-info"></i>50% Bookings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                @yield('konten')
            </div>
            <!-- ===== Page-Container-End ===== -->
            <footer class="footer t-a-c">
                © 2022 Darma Ayu Tekno
            </footer>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="{{ URL('cubic_template/plugins/components/jquery/dist/jquery.min.js') }}"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="{{ URL('cubic_template/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="{{ URL('cubic_template/js/jquery.slimscroll.js') }}"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="{{ URL('cubic_template/js/waves.js') }}"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="{{ URL('cubic_template/js/sidebarmenu.js') }}"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="{{ URL('cubic_template/js/custom.js') }}"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="{{ URL('cubic_template/plugins/components/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ URL('cubic_template/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ URL('cubic_template/plugins/components/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL('cubic_template/plugins/components/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ URL('cubic_template/plugins/components/knob/jquery.knob.js') }}"></script>
    <script src="{{ URL('cubic_template/plugins/components/easypiechart/dist/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ URL('cubic_template/js/db1.js') }}"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="{{ URL('cubic_template/plugins/components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    @stack('custom-scripts')

</body>

</html>
