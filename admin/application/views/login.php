<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Charity Admin</title>
        <link href="<?= base_url()?>assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">
                                      <img src="<?= base_url('../')?>assets/img/logo/logo.png">
                                        <br> Admin Login</h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('index.php/Admincontroller/checkdata')?>" method="post">
                                            <div class="form-group"><label>Email</label>
                                                <input class="form-control py-4" name="email" type="email" placeholder="Enter email address" />
                                            </div>

                                            <div class="form-group"><label>Password</label>
                                                <input class="form-control py-4" name="password"  type="password" placeholder="Enter password" />
                                            </div>
                                           
                                            <div class="form-group text-center">
                                                <input type="submit" class="btn btn-primary" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        <script src="<?= base_url()?>/assets/js/scripts.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
  if($this->session->flashdata('Wrong_password'))
  {
?>
<script type="text/javascript">
   swal("", "Wrong Email And Password", "error"); 
</script>

<?php
}
?>






    </body>
</html>
