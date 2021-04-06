<!DOCTYPE html>

<html class="app-ui">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Document title -->
    <title>Pages &ndash; Blank | AppUI</title>

    <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
    <meta name="author" content="rustheme" />
    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" href="assets/img/favicons/favicon.ico" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- AppUI CSS stylesheets -->
    <link rel="stylesheet" id="css-font-awesome" href="{{ asset('app/css/font-awesome.css')}}" />
    <link rel="stylesheet" id="css-ionicons" href="{{ asset('app/css/ionicons.css')}}" />
    <link rel="stylesheet" id="css-bootstrap" href="{{ asset('app/css/bootstrap.css')}}" />
    <link rel="stylesheet" id="css-app" href="{{ asset('app/css/app.css')}}" />
    <link rel="stylesheet" id="css-app-custom" href="{{ asset('app/css/app-custom.css')}}" />
    <!-- End Stylesheets -->
</head>

<body class="app-ui layout-has-drawer layout-has-fixed-header">
<div class="app-layout-canvas">
    <div class="app-layout-container">

        <!-- Drawer -->
        <aside class="app-layout-drawer">

            <!-- Drawer scroll area -->
            <div class="app-layout-drawer-scroll">
                <!-- Drawer logo -->
                <div id="logo" class="drawer-header">
                  ProVida - Vendedores
                </div>

                <!-- Drawer navigation -->
                <nav class="drawer-main">
                    <ul class="nav nav-drawer">

                        <li class="nav-item nav-drawer-header">Gerenciamento</li>

                        <li class="nav-item">
                            <a href="#"><i class="ion-ios-speedometer-outline"></i> Clientes</a>
                        </li>

                        <li class="nav-item">
                            <a href="#"><i class="ion-ios-monitor-outline"></i> Propostas</a>
                        </li>

                        <li class="nav-item nav-drawer-header">Relatórios</li>

                        <li class="nav-item">
                            <a href="#"><i class="ion-ios-monitor-outline"></i> Emitidas</a>
                        </li>

                        <li class="nav-item">
                            <a href="#"><i class="ion-ios-monitor-outline"></i> Canceladas</a>
                        </li>

                        <li class="nav-item">
                            <a href="#"><i class="ion-ios-monitor-outline"></i> Faturamento</a>
                        </li>

                    </ul>
                </nav>
                <!-- End drawer navigation -->

                <div class="drawer-footer">
                    <p class="copyright">ProVida App &copy;</p>
                </div>
            </div>
            <!-- End drawer scroll area -->
        </aside>
        <!-- End drawer -->

        <!-- Header -->
        <header class="app-layout-header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
                            <span class="sr-only">Toggle drawer</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="navbar-page-title">

					Seja bem vindo
				</span>
                    </div>

                    <div class="collapse navbar-collapse" id="header-navbar-collapse">
                        <!-- Header search form -->
                        <form class="navbar-form navbar-left app-search-form" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="search" id="search-input" placeholder="Pesquisar no sistema..." />
                                    <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                </div>
                            </div>
                        </form>


                        <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                            <li>
                                <!-- Opens the modal found at the bottom of the page -->
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                            </li>

                            <li class="dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">Profile</li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">More</li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-profile">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <span class="m-r-sm">John Doe <span class="caret"></span></span>
                                    <img class="img-avatar img-avatar-48" src="assets/img/avatars/avatar3.jpg" alt="User profile pic" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">
                                        Pages
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                    </li>
                                    <li>
                                        <a href="frontend_login_signup.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .navbar-right -->
                    </div>
                </div>
                <!-- .container-fluid -->
            </nav>
            <!-- .navbar-default -->
        </header>
        <!-- End header -->

        <main class="app-layout-content">

            <!-- Page Content -->
            <div class="container-fluid p-y-md">
                @yield('content')
            </div>
            <!-- End Page Content -->

        </main>

    </div>
    <!-- .app-layout-container -->
</div>
<!-- .app-layout-canvas -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps card -->
            <div class="card m-b-0">
                <div class="card-header bg-app bg-inverse">
                    <h4>Apps</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                <i class="ion-speedometer fa-4x"></i>
                                <p>Admin</p>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                <i class="ion-laptop fa-4x"></i>
                                <p>Frontend</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .card-block -->
            </div>
            <!-- End Apps card -->
        </div>
    </div>
</div>
<!-- End Apps Modal -->

<div class="app-ui-mask-modal"></div>

<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
<script src="{{ asset('app/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('app/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('app/js/core/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('app/js/core/jquery.scrollLock.min.js')}}"></script>
<script src="{{ asset('app/js/core/jquery.placeholder.min.js')}}"></script>
<script src="{{ asset('app/js/app.js')}}"></script>
<script src="{{ asset('app/js/app-custom.js')}}"></script>

</body>

</html>

