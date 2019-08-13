<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset ('img/1.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    
    <link href="{{ asset('assetss/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    
    
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('page-level-plugin-css')
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('assetss/global/css/components-rounded.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('assetss/layouts/layout4/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetss/layouts/layout4/css/themes/light.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('assetss/layouts/layout4/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="{{asset('../assets/layouts/layout4/img/logo-light.png')}}" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN PAGE ACTIONS -->
                    <!-- DOC: Remove "hide" class to enable the page header actions -->
                    <!-- END PAGE ACTIONS -->
                    <!-- BEGIN PAGE TOP -->
                    <div class="page-top">
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <li class="separator hide"> </li>
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <li class="dropdown dropdown-user dropdown-dark">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <span class="username username-hide-on-mobile"> Nick </span>
                                        <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                        <img alt="" class="img-circle" src="{{asset('../assets/layouts/layout4/img/avatar9.jpg')}}" /> </a>
                                        <ul class="dropdown-menu dropdown-menu-default">
                                            <li>
                                                <a href="page_user_profile_1.html">
                                                    <i class="icon-user"></i> My Profile </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_1.html">
                                                        <i class="icon-key"></i> Log Out </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- END USER LOGIN DROPDOWN -->
                                        </ul>
                                    </div>
                                    <!-- END TOP NAVIGATION MENU -->
                                </div>
                                <!-- END PAGE TOP -->
                            </div>
                            <!-- END HEADER INNER -->
                        </div>
                        <!-- END HEADER -->
                        <!-- BEGIN HEADER & CONTENT DIVIDER -->
                        <div class="clearfix"> </div>
                        <!-- END HEADER & CONTENT DIVIDER -->
                        <!-- BEGIN CONTAINER -->
                        <div class="page-container">
                            <!-- BEGIN SIDEBAR -->
                            <div class="page-sidebar-wrapper">
                                <!-- BEGIN SIDEBAR -->
                                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                                <div class="page-sidebar navbar-collapse collapse">
                                    <!-- BEGIN SIDEBAR MENU -->
                                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                                        <li class="nav-item">
                                            <a href="/admin/dashboard" class="nav-link nav-toggle">
                                                <i class="icon-home"></i>
                                                <span class="title">Dashboard</span>
                                                <span class="selected"></span>
                                            </a>
                                        </li>
                                        <li class="heading">
                                            <h3 class="uppercase">MASTER DATA</h3>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="icon-users"></i>
                                                <span class="title">Master Data</span>
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item  ">
                                                    <a href="/admin/datakategori" class="nav-link ">
                                                        <span class="title">Data Kategori Web</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item  ">
                                                    <a href="/admin/datapartner" class="nav-link ">
                                                        <span class="title">Data Partner</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="heading">
                                            <h3 class="uppercase">PRODUCT</h3>
                                        </li>
                                        <li class="nav-item  ">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="icon-grid "></i>
                                                <span class="title">Product</span>
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item  ">
                                                    <a href="/admin/datatemplate" class="nav-link ">
                                                        <span class="title">Data Template</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item  ">
                                                    <a href="/admin/datapaket" class="nav-link ">
                                                        <span class="title">Data Paket</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item  ">
                                                    <a href="/admin/datafitur" class="nav-link ">
                                                        <span class="title">Data Fitur</span>
                                                    </a>
                                                </li>
                                    <!-- <li class="nav-item  ">
                                        <a href="/admin/datapaketfitur" class="nav-link ">
                                            <span class="title">Data Paket Fitur</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">TRANSACTION</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-basket-loaded"></i>
                                    <span class="title">Transaction</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="/admin/dataCustomer" class="nav-link ">
                                            <span class="title">Data Customer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="/admin/datapemesanan" class="nav-link ">
                                            <span class="title">Data Pemesanan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="/admin/dataperpanjangan" class="nav-link ">
                                            <span class="title">Data Perpanjangan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="/admin/datainvoice" class="nav-link ">
                                            <span class="title">Data Invoice</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="/admin/datainvoiceperpanjangan" class="nav-link ">
                                            <span class="title">Data Invoice Perpanjangan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="/admin/datapembayaran" class="nav-link ">
                                            <span class="title">Data Pembayaran</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="heading">
                                <h3 class="uppercase">Laporan</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="/admin/laporan" class="nav-link nav-toggle">
                                    <i class="icon-book-open"></i>
                                    <span class="title">Laporan Sistem</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEAD-->
                        <div class="page-head">
                            <!-- BEGIN PAGE TITLE -->
                            <div class="page-title">
                                <h1>@yield('judul')
                                </h1>
                            </div>
                            <!-- END PAGE TITLE -->
                        </div>
                        <!-- END PAGE HEAD-->
                        <!-- BEGIN PAGE BREADCRUMB -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">@yield('menu')</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span class="active">@yield('submenu')</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMB -->
                        <!-- BEGIN PAGE BASE CONTENT -->
                        <section class="content">
                            @yield('maincontent')
                        </section>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                
                

                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2019 &copy; Bali Web Project.
                    <a href="https://ganeshcomstudio.com/" target="blank">Ganeshcom Studio</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            <!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!--[if lt IE 9]>
        <script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
        <script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('assetss/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetss/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    
    
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('page-level-plugin-script')
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('page-level-script')
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>