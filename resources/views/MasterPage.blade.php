<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>AppStack - Admin &amp; Dashboard Template</title>

    <link rel="preconnect" href="http://fonts.gstatic.com/" crossorigin>

    <!-- PICK ONE OF THE STYLES BELOW -->
    <link href="{{asset('Admin_Assit1/css/corporate.css')}}" rel="stylesheet">


   
  
    <script src="{{asset('Admin_Assit1/js/settings.js')}}"></script>
    <!-- END SETTINGS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-6"></script>
  
</head>



<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content ">
                <a class="sidebar-brand" href="index.html">
                    <i class="align-middle" data-feather="box"></i>
                    <span class="align-middle">Project</span>
                </a>

                <ul class="sidebar-nav" id="menu_bar">
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="~/AdvertisementMaster/AddnewAdvertisment">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Add Listing Landing Page </span>
                        </a>

                        <a class="sidebar-link" href="~/AdvertisementDetailsMasterController/DetailPage">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">List </span>
                        </a>


                        <a class="sidebar-link" href="~/PostMaster/AddMaster">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Form </span>
                        </a>
                        
                    </li>








                </ul>



            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light bg-white">
                <a class="sidebar-toggle d-flex mr-2">
                    <i class="hamburger align-self-center"></i>
                </a>

              

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-circle"></i>
                                    <span class="indicator">7</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        jhjkhk
                                    </div>
                                </div>
                                <div class="list-group" id="NewNotifaction">

                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell-off"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                <div class="text-muted small mt-1">6h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.1</div>
                                                <div class="text-muted small mt-1">8h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Anna accepted your request.</div>
                                                <div class="text-muted small mt-1">12h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                                <!--<img src="~/Admin_Asst/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" />--> <span class="text-dark">{{session('FirstName')}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                <a class="dropdown-item" href="{{url('/LoginController/Lo')}}">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



              @yield('content')

             <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-right">
                            <p class="mb-0">
                                &copy; 2020 - <a href="index.html" class="text-muted">AppStack</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>




    <script src="{{asset('Admin_Assit1/js/app.js')}}"></script>

</body>



</html>

