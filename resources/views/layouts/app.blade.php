<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('tittle')</title>
    @include('includes.css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
        data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="navbar-brand"
                        href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                            <img class="image" border="0" src="../../../app-assets/images/pages/udiklat.png"
                                width="20px" style=" margin: 0px;padding: 0px color:white;">
                        </span>
                        <h2 class="brand-text mb-0">UDPL BOGOR</h2>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <h2 class="brand-text mb-0">Sistem Laporan</h2>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{ Auth::user()->name }}</span><span
                                class="user-status">{{ Auth::user()->role->name }}</span></div><span class="avatar"><img
                                class="round" src="../../../app-assets//images/portrait/small/avatar-s-11.jpg"
                                alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                            Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50"
                                data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item"
                            href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a><a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="me-50" data-feather="power"></i> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('includes.dashmenu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a
                    class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">UPDL
                    BOGOR</a><span class="d-none d-sm-inline-block">, PLN UDIKLAT BOGOR</span></span><span
                class="float-md-end d-none d-md-block">Hand-crafted & Made with Mahasiswa Unpak<i
                    data-feather='cloud-lightning'></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    @include('includes.js')
</body>
<!-- END: Body-->

</html>
