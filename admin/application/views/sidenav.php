<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Charity Dashboard </title>
        <link href="<?= base_url()?>assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url('Admincontrollermain/index')?>"> Charity Admin</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
               
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('Admincontrollermain/logout')?>">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?= base_url()?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>

                            <!--   6th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/userdetail')?>"> Registered User</a>
                            </div>
                         
                             <!--  6th  end -->


                             <!--    1st  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Banner

                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Banner/banner')?>"> Manage Banner</a>
                            </div>
                         
                             <!--   1st  end -->

                             <!--    2nd  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gallery

                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Gallery/gallery')?>"> Manage Gallery</a>
                            </div>
                         
                             <!--   2nd  end -->

                               <!--   3rd  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Testmonial

                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Testmonial/testmonial')?>"> Manage Testmonial</a>
                            </div>
                         
                             <!--  3rd  end -->

                              <!--   4th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Events/events')?>"> Manage Events</a>
                            </div>
                         
                             <!--  4th  end -->

                             <!--   8th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts8" aria-expanded="false" aria-controls="collapseLayouts8">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                News
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts8" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('News/news')?>"> Add News</a>

                            </div>
                         
                             <!--  8th  end -->

                             <!--   5th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Blog/blog')?>"> Manage Blog</a>
                            </div>
                         
                             <!--  5th  end -->

                             <!--   6th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts6">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Application 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/userapplication')?>"> User Paid Application </a>
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/saharaapplication')?>"> Sahara Application Paid </a>
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/saharaapplicationunpaid')?>"> Sahara Application Unpaid </a>
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/erroeapplication')?>"> Error Application </a>
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/erroeapplicationsahara')?>"> Error Sahara Application </a>
                            </div>
                         
                             <!--  6th  end -->

                             <!--   7th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts7" aria-expanded="false" aria-controls="collapseLayouts7">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Locations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts7" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Location/state')?>"> State</a>
                                    <a class="nav-link" href="<?= base_url('Location/district')?>"> District</a>
                                    <a class="nav-link" href="<?= base_url('Location/block')?>"> Block</a>
                                    <a class="nav-link" href="<?= base_url('Location/village')?>"> Village</a>

                            </div>
                         
                             <!--  7th  end -->

                               <!--   7th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts77" aria-expanded="false" aria-controls="collapseLayouts77">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Download
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts77" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/uploadcertificate')?>"> Download Documents</a>

                            </div>
                         
                             <!--  7th  end -->

                              <!--   7th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts777" aria-expanded="false" aria-controls="collapseLayouts777">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Query's
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts777" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/paymentquery')?>"> Payment Query</a>

                            </div>
                         
                             <!--  7th  end -->

                             <!--   7th  -->
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts7777" aria-expanded="false" aria-controls="collapseLayouts7777">

                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Manage Coupon
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                            </a>

                            <div class="collapse" id="collapseLayouts7777" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('Admincontrollermain/generatecoupon')?>"> Generate Coupon Code</a>

                            </div>
                         
                             <!--  7th  end -->

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                          Admin
                    </div>
                </nav>
            </div>