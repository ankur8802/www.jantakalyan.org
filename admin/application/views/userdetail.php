<?php include('sidenav.php')?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">User </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-body">

                                 <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Membership No.</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Village</th>
                                                <th>Block</th>
                                                <th>Tehseel</th>
                                                <th>District</th>
                                                <th>State</th>
                                                <th>Pin Code</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Date</th>
<!--                                                 <th>Time</th>
 -->                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Membership No.</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Village</th>
                                                <th>Block</th>
                                                <th>Tehseel</th>
                                                <th>District</th>
                                                <th>State</th>
                                                <th>Pin Code</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Date</th>
<!--                                                 <th>Time</th>
 -->                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         
                                         <?php
                                         $i=1;
                                        foreach ($userdetail as $key) {
                                         ?>
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $key->membership_no?></td>
                                                <td><?= $key->name?> </td>
                                                <td><?= $key->fname?> </td>
                                                <td><?= $key->mname?> </td>
                                                <td><?= $key->phone?> </td>
                                                <td>
                                                    <button class="btn btn-success"  data-toggle="modal" data-target="#<?= $key->membership_no?>">View</button>


                                              <!-- Modal -->
                                              <div class="modal fade" id="<?= $key->membership_no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                         <div class="modal-dialog">
                                                           <div class="modal-content">
                                                             <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                             </div>
                                                             <div class="modal-body">
                                                                  <p><?= $key->address;?></p>
                                                             </div>
                                                             <div class="modal-footer" style="display:block;">
                                                                  <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                                                             </div>
                                                           </div>
                                                         </div>
                                                       </div>

                                                    <!-- Modal End -->
                                                </td>
                                                <td><?= $key->village?> </td>
                                                <td><?= $key->block?> </td>
                                                <td><?= $key->tehseel?> </td>
                                                <td><?= $key->district?> </td>
                                                <td><?= $key->state?> </td>
                                                <td><?= $key->pincode?> </td>
                                                <td><?= $key->gender?> </td>
                                                <td>
                                                    <?php
                                                        if ($key->status=="plus") {
                                                    ?>
                                                    <button class="btn btn-success">Plus User</button>
                                                    <?php }
                                                     else
                                                     {
                                                     ?>
                                                     <button class="btn btn-warning">Unpaid User</button>
                                                     <?php  }?>
                                                </td>
                                                <td><?= $key->date?></td>
<!--                                                 <td><?= $key->time?></td>
 -->                                            </tr>
                                        <?php $i++; }   ?>
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
     CKEDITOR.replace( 'eventsdetail' );
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
