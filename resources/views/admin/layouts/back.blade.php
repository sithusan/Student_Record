<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ Request::root() }}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ Request::root() }}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ Request::root() }}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ Request::root() }}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ Request::root() }}/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="images/icon/logo.png" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Charts</a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="" alt="">
            </a>

        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">

                    <li>
                        <a href="{{ action('UserController@index') }}">
                            <i class="fas fa-chart-bar"></i> User </a>
                    </li>
                    @if(Auth::user()->user_level == "ADMIN")
                    <li>
                        <a href="{{ action('UserController@getadmin') }}">
                            <i class="fas fa-chart-bar"></i> Admin </a>
                    </li>
                    @endif

                    <li>
                        <a href="{{ action('StudentController@getMajor') }}">
                            <i class="fas fa-chart-bar"></i> Student </a>
                    </li>
                    <li>
                        <a href="{{ action('AcademicController@index') }}">
                            <i class="fas fa-chart-bar"></i> Academic Year </a>
                    </li>
                    <li>
                        <a href="{{ action('MajorController@index') }}">
                            <i class="fas fa-chart-bar"></i> Major </a>
                    </li>
                    <li>
                        <a href="{{ action('SubjectController@getMajor') }}">
                            <i class="fas fa-chart-bar"></i> Subject </a>
                    </li>
                    <li>
                        <a href="{{ action('TeacherController@index') }}">
                            <i class="fas fa-chart-bar"></i> Teacher </a>
                    </li>
                    <li>
                        <a href="{{ action('TeacherStudentController@getteacher') }}">
                            <i class="fas fa-chart-bar"></i> Teacher By Subject and Major </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="{{ action('SearchController@search') }}" method="POST">
                            @csrf
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search" />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a class="js-acc-btn" href="#"> {{ Auth::user()->name }} </a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"> {{ Auth::user()->name }} </a>
                                                </h5>
                                                <span class="email"> {{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>

                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                                <i class="zmdi zmdi-power"></i>
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

                <div class="container-fluid">
                    @yield('content')


                </div>
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018  . All rights reserved</p></div>
        </div>

    </div>

</div>

<!-- Jquery JS-->
<script src="{{ Request::root() }}/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ Request::root() }}/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{ Request::root() }}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{ Request::root() }}/vendor/slick/slick.min.js">
</script>
<script src="{{ Request::root() }}/vendor/wow/wow.min.js"></script>
<script src="{{ Request::root() }}/vendor/animsition/animsition.min.js"></script>
<script src="{{ Request::root() }}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{ Request::root() }}/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{ Request::root() }}/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{ Request::root() }}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ Request::root() }}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ Request::root() }}/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{ Request::root() }}/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="{{ Request::root() }}/js/main.js"></script>

</body>

</html>
<!-- end document-->
