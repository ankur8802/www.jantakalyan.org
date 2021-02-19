<?php include('sidenav.php')?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sahara Application Process </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sahara Application Process </li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-body">

                                 <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Form No.</th>
                                                <th>Scheme Type</th>
                                                <th>Policy Holder Name</th>
                                                <th>Certificate No./ band No./Policy No./ Account No. </th>
                                                <th>Policy Opening Date</th>
                                                <th>Date of Maturity</th>
                                                <th>Maturity Amount</th>
                                                <th>Maturity Amount (in word)</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Form No.</th>
                                                <th>Scheme Type</th>
                                                <th>Policy Holder Name</th>
                                                <th>Certificate No./ band No./Policy No./ Account No. </th>
                                                <th>Policy Opening Date</th>
                                                <th>Date of Maturity</th>
                                                <th>Maturity Amount</th>
                                                <th>Maturity Amount (in word)</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
                                           $i=1;
                                           foreach ($saharadetails as $saharadetails) {
                                         ?>
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $saharadetails->id?></td>
                                                <td><?= $saharadetails->schemetype?></td>
                                                <td><?= $saharadetails->policyholdername?></td>
                                                <td><?= $saharadetails->certificateno?></td>
                                                <td><?= $saharadetails->policyopeningdate?></td>
                                                <td><?= $saharadetails->dateofmaturity?></td>
                                                <td><?= $saharadetails->maturityamount?></td>
                                                <td><?= $saharadetails->maturityamountword?></td>
                                                <td>
                                                    <?php
                                                        if ($saharadetails->status=="process") {
                                                    ?>   
                                                    <button class="btn btn-danger">Process</button>
                                                <?php }?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url("Admincontrollermain/updatesaharaprocess/$saharadetails->id")?>"> <i class="far fa-check-circle" style="color:blue;font-size:25px;"></i> </a>

                                                    <a href="<?= base_url("Admincontrollermain/deletesaharaprocess/$saharadetails->id")?>"> <i class="far fa-trash-alt" style="color:red;font-size:25px;"></i> </a>
                                                </td>
                                            </tr>

                                          <?php $i++; }?>
                                       
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
