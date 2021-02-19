<?php include('sidenav.php')?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(230, 170, 227,1) 5.533854166666667%,rgba(239, 175, 164,1) 96.67968749999999%);">
                                    <div class="card-body">Total Users <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalusers?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Admincontrollermain/userdetail')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(250, 233, 155,1) 5.533854166666667%,rgba(229, 151, 64,1) 96.67968749999999%);">
                                    <div class="card-body">Total Banner <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalbanner?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Banner/banner')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(86, 216, 228,1) 5.533854166666667%,rgba(154, 206, 149,1) 96.67968749999999%);">
                                    <div class="card-body">Total Gallery Images <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalgallery?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Gallery/gallery')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(231, 62, 162,1) 5.533854166666667%,rgba(248, 193, 105,1) 96.67968749999999%);">
                                    <div class="card-body">Total Testmonial <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotaltestmonial?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Testmonial/testmonial')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(245, 196, 207,1) 5.533854166666667%,rgba(66, 82, 183,1) 96.67968749999999%);">
                                    <div class="card-body">Total Events <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalevents?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Events/events')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(240, 94, 7,1) 5.533854166666667%,rgba(30, 189, 177,1) 96.67968749999999%);">
                                    <div class="card-body">Total News <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalnews?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('News/news')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(136, 156, 118,1) 5.533854166666667%,rgba(6, 94, 96,1) 96.67968749999999%);">
                                    <div class="card-body">Total Blogs <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalblogs?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Blog/blog')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(2, 27, 62,1) 5.533854166666667%,rgba(81, 119, 149,1) 96.67968749999999%);">
                                    <div class="card-body">Total Paid Application <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalpaidapplication?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Admincontrollermain/userapplication')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(91, 50, 97,1) 5.533854166666667%,rgba(51, 37, 73,1) 96.67968749999999%);">
                                    <div class="card-body">Total Sahara Paid Application <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalsaharapaidapplication?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Admincontrollermain/saharaapplication')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="background:linear-gradient(111.95647678511193deg, rgba(249, 87, 159,1) 5.533854166666667%,rgba(99, 36, 126,1) 96.67968749999999%);">
                                    <div class="card-body">Total Sahara Unpaid Application <span style="padding:5px;background:linear-gradient(111.95647678511193deg, rgba(236, 236, 236,1) 5.533854166666667%,rgba(195, 229, 248,1) 96.67968749999999%);color:#000;border-radius:50%;border:3px solid #9DAAF0;"><?= $fetchtotalsaharaunpaidapplication?></span> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url('Admincontrollermain/saharaapplicationunpaid')?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                          
                        </div>
                   
                     
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <?php include('copyright.php')?>
                          
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url()?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
