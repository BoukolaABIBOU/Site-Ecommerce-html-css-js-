<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('../assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendor/select2/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendor/summernote/css/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <title>E-Book</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{route('index')}}">Admin E-book</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">

                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Voir tous les notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Compte</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Paramètre</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('index')}}"> Pourcentage</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('ecommerce-product')}}">Liste des produits</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('ecommerce-product-checkout')}}">Payement au vendeur</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-divider">
                                Caractéristiques
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('login')}}">Connexion</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('sign-up')}}">Page d'inscription</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('forgot-password')}}">Mot de passe oublié</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('inbox')}}">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('email-details')}}">Email reçues</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('email-compose')}}">Emails envoyés</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('message-chat')}}">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid">
                <aside class="page-aside">
                    <div class="aside-content">
                        <div class="aside-header">
                            <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i class="fas fa-caret-down"></i></span></button><span class="title">Mail Service</span>
                            <p class="description">Service description</p>
                        </div>
                        <div class="aside-compose"><a class="btn btn-lg btn-secondary btn-block" href="#">Compose Email</a></div>
                        <div class="aside-nav collapse">
                            <ul class="nav">
                                <li><a href="#"><span class="icon"><i class="fas fa-fw fa-inbox"></i></span>Inbox<span class="badge badge-primary float-right">8</span></a></li>
                                <li class="active"><a href="#"><span class="icon"><i class="fas fa-fw  fa-envelope"></i></span>Sent Mail</a></li>
                                <li><a href="#"><span class="icon"><i class="fas fa-fw fa-briefcase"></i></span>Important<span class="badge badge-secondary float-right">4</span></a></li>
                                <li><a href="#"><span class="icon"><i class="fas fa-fw fa-file"></i></span>Drafts</a></li>
                                <li><a href="#"><span class="icon"><i class="fas fa-fw fa-star"></i></span>Tags</a></li>
                                <li><a href="#"><span class="icon"><i class="fas fa-fw fa-trash"></i></span>Trash</a></li>
                            </ul><span class="title">Labels</span>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="m-r-10 mdi mdi-label text-secondary"></i>
                                    Important </a></li>
                                <li><a href="#">
                                   <i class="m-r-10 mdi mdi-label text-primary"></i> Business   </a></li>
                                <li><a href="#"> <i class="m-r-10 mdi mdi-label text-brand"></i>
                                   Inspiration </a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="main-content container-fluid p-0">
                    <div class="email-head">
                        <div class="email-head-title">Compose new message<span class="icon mdi mdi-edit"></span></div>
                    </div>
                    <div class="email-compose-fields">
                        <div class="to">
                            <div class="form-group row pt-0">
                                <label class="col-md-1 control-label">To:</label>
                                <div class="col-md-11">
                                    <select class="js-example-basic-multiple" multiple="multiple">
                                        <option value="Yellow" selected="selected">Yellow</option>
                                        <option value="White">White</option>
                                        <option value="Blue" selected="selected">Blue</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="to cc">
                            <div class="form-group row pt-2">
                                <label class="col-md-1 control-label">Cc</label>
                                <div class="col-md-11">
                                    <select class="js-example-basic-multiple" multiple="multiple">
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska" selected="selected">Alaska</option>
                                        <option value="Melbourne">Melbourne</option>
                                        <option value="Victoria" selected="selected">Victoria</option>
                                        <option value="Newyork">Newyork</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="subject">
                            <div class="form-group row pt-2">
                                <label class="col-md-1 control-label">Subject</label>
                                <div class="col-md-11">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email editor">
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <label class="control-label sr-only" for="summernote">Descriptions </label>
                                <textarea class="form-control" id="summernote" name="editordata" rows="6" placeholder="Write Descriptions"></textarea>
                            </div>
                        </div>
                        <div class="email action-send">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Send</button>
                                    <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('../assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('../assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('../assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('../assets/vendor/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('../assets/vendor/summernote/js/summernote-bs4.js')}}"></script>
    <script src="{{asset('../assets/libs/js/main-js.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({ tags: true });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300

        });
    });
    </script>
</body>
 
</html>