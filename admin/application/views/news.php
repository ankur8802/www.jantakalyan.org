<?php include('sidenav.php')?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">News</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('News/newsinst')?>" method="post" enctype='multipart/form-data'>
                                <div class="row form-group">


                                <div class="col-md-6" style="margin-bottom:10px;">
                                    <label>Title</label>
                                    <input type="text" class="form-control" pattern="[a-zA-Z-\s-0-9\/]+" placeholder="Enter News Title " name="title" required>
                                </div>

                                 <div class="col-md-6" style="margin-bottom:10px;">
                                    <label>Link</label>
                                    <input type="text" class="form-control" value="#" name="link" required>
                                </div>

                                <div class="col-md-12 text-center" style="margin-bottom:10px;">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>

                                </div>
                            </form>



                            <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Title</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Title</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                             
                                        <?php
                                        $i=1;
                                         foreach ($news as $key ) {
                                        ?>
                                         
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $key->title?></td>
                                                <td><?= $key->link?></td>
                                                <td>
                                                     <a href="<?= base_url("News/deletenews/$key->id")?>">   <i class="fas fa-trash-alt"></i>  </a>
                                                </td>
                                            </tr>

                                         <?php $i++; }  ?>
                                        </tbody>
                                    </table>
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
        <script src="<?= base_url()?>/assets/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url()?>assets/js/datatables-demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script type="text/javascript">
    $('.dropify').dropify();
</script>

<?php 
if($this->session->flashdata('error'))
{
?>
<script type="text/javascript">
    swal("", "<?= $this->session->flashdata('error');?>", "error");
</script>
<?php
}
?>

<?php 
if($this->session->flashdata('success'))
{
?>
<script type="text/javascript">
    swal("", "<?= $this->session->flashdata('success');?>", "success");
</script>
<?php
}
?>



    </body>
</html>
