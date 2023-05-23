<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Aero Admin Template')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Favicon-->
    <link rel="icon" href="{{url('Assets/img/favicon.ico')}}" type="image/x-icon">
    <!-- bootstrap cdn CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('Assets/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> -->
    <!-- FontAwsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('Assets/css/footable.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Assets/css/style.min.css')}}">

</head>

<body class="theme-blush">
    <!-- Right Icon menu Sidebar -->
    <div class="navbar-right">
        <ul class="navbar-nav">
            <li>
                <a href="#search" class="main_search" title="Search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown" role="button">
                    <i class="fa-solid fa-sort"></i>
                </a>
                <ul class="dropdown-menu slideUp2">
                    <li class="header">App Sortcute</li>
                    <li class="body">
                        <ul class="menu app_sortcut list-unstyled">
                            <li>
                                <a href="image-gallery.html">
                                    <div class="icon-circle mb-2 bg-blue">
                                        <i class="zmdi zmdi-camera"></i>
                                    </div>
                                    <p class="mb-0">Photos</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-translate"></i></div>
                                    <p class="mb-0">Translate</p>
                                </a>
                            </li>
                            <li>
                                <a href="events.html">
                                    <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
                                    <p class="mb-0">Calendar</p>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-account-calendar"></i>
                                    </div>
                                    <p class="mb-0">Contacts</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle mb-2 bg-red"><i class="zmdi zmdi-tag"></i></div>
                                    <p class="mb-0">News</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle mb-2 bg-grey"><i class="zmdi zmdi-map"></i></div>
                                    <p class="mb-0">Maps</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown"
                    role="button">
                    <i class="fa-solid fa-bell"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <ul class="dropdown-menu slideUp2">
                    <li class="header">Notifications</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="menu-info">
                                        <h4>8 New Members joined</h4>
                                        <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                    <div class="menu-info">
                                        <h4>4 Sales made</h4>
                                        <p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy Doe</b> Deleted account</h4>
                                        <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy</b> Changed name</h4>
                                        <p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> Commented your post</h4>
                                        <p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> Updated status</h4>
                                        <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                    <div class="menu-info">
                                        <h4>Settings Updated</h4>
                                        <p><i class="zmdi zmdi-time"></i> Yesterday </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <i class="fa-solid fa-flag"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <ul class="dropdown-menu slideUp2">
                    <li class="header">Tasks List
                        <small class="float-right">
                            <a href="javascript:void(0);">View All</a>
                        </small>
                    </li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li>
                                <div class="progress-container progress-primary">
                                    <span class="progress-badge">eCommerce Website</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="progress-container">
                                    <span class="progress-badge">iOS Game Dev</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 45%;">
                                            <span class="progress-value">45%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">Home Development</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 29%;">
                                            <span class="progress-value">29%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small>Team</small></li>
                                        <li>
                                            <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="app_calendar" title="Calendar">
                    <i class="fa-solid fa-calendar-days"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="app_google_drive" title="Google Drive">
                    <i class="fa-brands fa-google-drive"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="app_group_work" title="Group Work">
                    <i class="fa-solid fa-layer-group"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="js-right-sidebar" title="Setting">
                    <i class="fa-solid fa-gear zmdi-hc-spin"></i>
                </a>
            </li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <li>
                    <button class="mega-menu bg-transparent border-0" title="Sign Out">
                        <i class="icon fa-solid fa-power-off"></i>
                    </button>
                </li>
            </form>
        </ul>
    </div>
    <!-- left sidebar -->
    <x-sidebar-left />
    <!-- right sidebar -->
    <x-sidebar-right />
    <!-- main content start -->
    @yield('content')


    <!-- bootstrap cdn JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{asset('Assets/js/bootstrap.bundle.js')}}"></script>
    <!-- FontAwsome JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="{{asset('Assets/js/jquery.min.js')}}"></script>

    <!-- Bundle JS -->
    <script src="{{asset('Assets/js/libscripts.bundle.js')}}"></script>
    <script src="{{asset('Assets/js/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('Assets/js/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('Assets/js/footable.bundle.js')}}"></script>
    <script src="{{asset('Assets/js/footable.js')}}"></script>
    <script src="{{asset('Assets/js/searchContacts.js')}}"></script>
    <script src="{{asset('Assets/js/ajaxFormSubmit.js')}}"></script>
</body>

</html>