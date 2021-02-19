<?php include('sidenav.php')?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('Blog/bloginst')?>" method="post" enctype="multipart/form-data">
                                <div class="row form-group">
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter blog Title" required>
                                </div>

                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control dropify" required>
                                </div>

                                 <div class="col-md-12" style="margin-bottom:10px;">
                                    <label>Blog Detail</label>
                                    <textarea name="blogdetail" required></textarea>
                                </div>

                             
                                <div class="col-md-12 text-center" style="margin-bottom:10px;">
                                    <input type="submit" class="btn btn-primary">
                                </div>

                                </div>

                                </form>


                                 <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Blog Detail</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>Title</th>
                                                <th>Blog Detail</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         
                                         <?php
                                        foreach ($blog as $key) {
                                         ?>
                                            <tr>
                                                <td><?= $key->title?></td>
                                                <td>
                                                    <button class="btn btn-success"  data-toggle="modal" data-target="#blogdetaildata">View</button>


                                              <!-- Modal -->
                                              <div class="modal fade" id="blogdetaildata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                         <div class="modal-dialog">
                                                           <div class="modal-content">
                                                             <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                             </div>
                                                             <div class="modal-body">
                                                                  <?= $key->blogdetail;?>
                                                             </div>
                                                             <div class="modal-footer" style="display:block;">
                                                                  <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                                                             </div>
                                                           </div>
                                                         </div>
                                                       </div>

                                                    <!-- Modal End -->

                                                </td>
                                                <td>
                                                    <img src="<?= base_url('../')?>uploads/blog/<?= $key->image;?>" alt="testmonial" style="max-width:100px;max-height: 100px;">
                                                </td>
                                                <td><?= $key->date?></td>
                                                <td><a href="<?= base_url("blog/deleteblog/$key->id")?>">   <i class="fas fa-trash-alt"></i>  </a></td>
                                            </tr>
                                        <?php }   ?>
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
        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
     CKEDITOR.replace( 'blogdetail' );
     $('.dropify').dropify();
  </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
