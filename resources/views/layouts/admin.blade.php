<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>THICN - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/assets/plugins/summernote/summernote.css')}}" rel="stylesheet" />
        <link href="{{asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />


        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">

        @stack('style')

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                      <a href="{{ route('home') }}" class="logo">THICN</a>
                        <!-- <a href="{{ route('home') }}" class="logo"><img src="{{asset('admin/assets/images/logo_white_2.png')}}" height="28"></a> -->
                        <a href="{{ route('home') }}" class="logo-sm">THICN</a>
                        <!-- <a href="{{ route('home') }}" class="logo-sm"><img src="{{asset('admin/assets/images/logo_sm.png')}}" height="36"></a> -->
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user-img" width="35px;" height="35px;" class="img-circle"> {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{route('home')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i> <span> News </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('CreateNews')}}">Add News</a></li>
                                    <li><a href="{{route('all.news')}}">All News</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Events </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('createEvent')}}">Add Event</a></li>
                                    <li><a href="{{route('all.event')}}">All Events</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('newsletter')}}"><i class="ti-email"></i><span> Newsletter </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i> <span> Front-End Setting </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('ourTeam')}}">Our Team</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @yield('content')
                </div> <!-- content -->

                <footer class="footer">
                 Cpyright © 2021 THICN.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Datatables-->
        <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/datatables.init.js')}}"></script>

        <script src="{{asset('admin/assets/pages/dashborad.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

        <<!--Summernote js-->
        <script src="{{asset('admin/assets/plugins/summernote/summernote.min.js')}}"></script>
        @stack('scripts')
        <script src="{{asset('admin/assets/js/app.js')}}"></script>


        <script>

            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
        </script>

    </body>
</html>
