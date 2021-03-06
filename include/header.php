<!DOCTYPE html>
<html lang="en" >

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.2
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2015 22:13:15 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>لوحة التحكم الرئيسية</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">



    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">

                    <ul class="left">
                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img style="width: 50px; height: 50px;" src="images/Vanamo_Logo.png" alt="logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <form action="index.php?page=search">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="search" class="header-search-input z-depth-2" placeholder="بحث بالرقم أو بالاسم أو بالايميل"/>
                        </form>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>

                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="index.php" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>الصفحة الرئيسية</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=addstudent"  class="cyan-text">
                            <i class="mdi-content-add"></i>
                            <span>اضافة طالب</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=students"  class="cyan-text">
                            <i class="mdi-communication-contacts"></i>
                            <span>صفحة الطلاب</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?page=app-email"  class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>صفحة البريد والرسائل</span>
                        </a>
                    </li>
                     <li>
                        <a class="dropdown-menu cyan-text" href="index.php?page=admin-profile" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>تعديل بيانات الدخول</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="logout.php" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>تسجيل الخروج</span>
                        </a>
                    </li>


                  </ul>
                </div>
              </nav>



            <!-- HORIZONTL NAV END-->

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->