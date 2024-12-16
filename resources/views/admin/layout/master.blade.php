<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SBC</title>
    <link rel="shortcut icon" href="{{asset('admin/assets/img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
</head>
<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('admin/assets/img/logo.png')}}" alt="Logo">
                </a>
                
            </div>
            
            <ul class="nav user-menu">
                
                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{asset('admin/assets/img/icons/header-icon-05.svg')}}" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                           
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mohammed</span> Registered on the app. <span class="noti-title">First project.
                                                        </span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Ahmad</span> replied to the message.</p>
                                                <p class="noti-time"><span class="notification-time">9 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="{{asset('admin/assets/img/icons/header-icon-04.svg')}}" alt="">
                    </a>
                </li>
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a>
                        <span class="user-img">
                            <div class="user-text">
                                <h6>Smart Buildings</h6>
                                <p class="text-muted mb-0">Consultancy</p>
                            </div>
                        </span>
                    </a>
                </li>
                
            </ul>

        </div>

       
        @include('admin.includes.nav')

        @yield('content')
    </div>
    
    <script src="{{asset('admin/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/apexchart/chart-data.js')}}"></script>
    <script src="{{asset('admin/assets/js/script.js')}}"></script>
</body>

</html>