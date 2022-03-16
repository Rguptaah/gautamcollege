<?php require_once("temp/op_lib.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="Gautam College Of Education is a best college for B.Ed.">
    <meta name="author" content="OfferPlant Technologies Private Limited">
    <link rel="shortcut icon" type="image/x-icon" href="images/logoc.png">
    <title><?php echo $inst_name; ?></title>
    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <div class="contact_info mt-2">
                        <a href="tel:<?php echo $inst_contact; ?>"> <i class="fa fa-phone"></i> <?php echo $inst_contact;  ?></a>&nbsp;&nbsp;
                        <a href="mailto:<?php echo $inst_email; ?>"> <i class="fa fa-envelope-o"></i> <?php echo $inst_email;  ?></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row" align="center">
                <span class=""><a href="index"><img src="images/logo_gce.png" class="img-responsive" alt="logo" style="height:100px; width:600px;"></a></span>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <!-- <form class="navbar-form navbar-right">
                        <input type="text" placeholder="Search Now" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button>
                    </form> -->
                    <ul class="nav navbar-nav">
                        <li> <a href="index">Home</a>
                        </li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">About <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="about">About Us</a></li>
                                <li><a href="chairman_message">Chairman's Message</a></li>
                                <li><a href="mission_vision">Mission & Visions</a></li>
                                <li><a href="#college_at_glance">College At Glance</a></li>
                                <li><a href="#college_at_glance">Management Committees</a></li>
                                <li><a href="#college_at_glance">Mandatory Disclosure</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Academics <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#course-listing">Courses</a></li>
                                <li><a href="#calender">Academic Calender</a></li>
                                <li><a href="#criteria">Admission Criteria</a></li>
                                <li><a href="#recogninition">Recognition & Approval</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="#blog">Blog</a></li> -->
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="#admission">Admission Form</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Student Zone <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#course-listing">Syllabus</a></li>
                                <li><a href="#calender">Routine</a></li>
                                <li><a href="#criteria">Course Materials</a></li>
                                <li><a href="#recogninition">Online Class</a></li>
                                <li><a href="#recogninition">Placement</a></li>
                            </ul>
                        </li>
                        <li><a href="#fees">Payment</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>