<?php include('sidenav.php')?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">User Application  </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">User Application </li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-body">

                                 <div class="table-responsive"> 
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Payu Money Id</th>
                                                <th>Payment Date And Time</th>
                                                <th>Pay Amount</th>
                                                <th>txnid</th>
                                                <th>Membership No</th>
                                                <th>Sahara Form No.</th>
                                                <th>Bank Account No</th>
                                                <th>Bank Name</th>
                                                <th>Bank Branch Name</th>
                                                <th>IFSC</th>
                                                <th>Applicant Photo</th>
                                                <th>Applicant Aadhar</th>
                                                <th>Applicant Bank</th>
                                                <th>Applicant Signature</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Phone</th>
                                                <th>Aadhar No.</th>
                                                <th>D.O.B</th>
                                                <th>Nationality</th>
                                                <th>Marital Status</th>
                                                <th>Address</th>
                                                <th>Village</th>
                                                <th>Block</th>
                                                <th>Tehseel</th>
                                                <th>District</th>
                                                <th>State</th>
                                                <th>Pin Code</th>
                                                <th>Gender</th>
                                                <th>Date</th>

                                           </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Payu Money Id</th>
                                                <th>Payment Date And Time</th>
                                                <th>Pay Amount</th>
                                                <th>txnid</th>
                                                <th>Membership No</th>
                                                <th>Sahara Form No.</th>
                                                <th>Bank Account No</th>
                                                <th>Bank Name</th>
                                                <th>Bank Branch Name</th>
                                                <th>IFSC</th>
                                                <th>Applicant Photo</th>
                                                <th>Applicant Aadhar</th>
                                                <th>Applicant Bank</th>
                                                <th>Applicant Signature</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Phone</th>
                                                <th>Aadhar No.</th>
                                                <th>D.O.B</th>
                                                <th>Nationality</th>
                                                <th>Marital Status</th>
                                                <th>Address</th>
                                                <th>Village</th>
                                                <th>Block</th>
                                                <th>Tehseel</th>
                                                <th>District</th>
                                                <th>State</th>
                                                <th>Pin Code</th>
                                                <th>Gender</th>
                                                <th>Date</th>
                                          </tr>
                                        </tfoot>
                                        <tbody>
                                         
                                         <?php
                                         $i=1;
                                        foreach ($userapplication as $key) {
                                         ?>
                                            <tr>
                                                <td><?= $i;?></td>
                                                <td><?= $key->payuMoneyId ?></td>
                                                <td><?= $key->addedon ?></td>
                                                <td><?= $key->amount ?></td>
                                                <td><?= $key->txnid ?></td>
                                                <td><?= $key->membership_no ?></td>
                                                <td><?= $key->sahara_form_no ?></td>
                                                <td><?= $key->accountno ?></td>
                                                <td><?= $key->bankname ?></td>
                                                <td><?= $key->branchname ?></td>
                                                <td><?= $key->ifsc ?></td>
                                                <td>
                                                     <a href="<?= base_url('../')?>uploads/user/profileimage/<?= $key->photo ?>" target="_blank">
                                                        <button class="btn btn-success">View</button>
                                                    </a>

                                                    <br><br>

                                                    <a href="<?= base_url('../')?>uploads/user/profileimage/<?= $key->photo ?>" download>
                                                        <button class="btn btn-primary">Download</button>
                                                    </a>
                                                </td>
                                                <td>
                                                     <a href="<?= base_url('../')?>uploads/user/aadhar/<?= $key->aadhar ?>" target="_blank">
                                                        <button class="btn btn-success">View</button>
                                                    </a>

                                                    <br><br>

                                                    <a href="<?= base_url('../')?>uploads/user/aadhar/<?= $key->aadhar ?>" download>
                                                        <button class="btn btn-primary">Download</button>
                                                    </a>
                                                </td>
                                                <td>
                                                     <a href="<?= base_url('../')?>uploads/user/bank/<?= $key->bank ?>" target="_blank">
                                                        <button class="btn btn-success">View</button>
                                                    </a>

                                                    <br><br>

                                                    <a href="<?= base_url('../')?>uploads/user/bank/<?= $key->bank ?>" download>
                                                        <button class="btn btn-primary">Download</button>
                                                    </a>
                                                </td>
                                                <td>
                                                     <a href="<?= base_url('../')?>uploads/user/signature/<?= $key->signature ?>" target="_blank">
                                                        <button class="btn btn-success">View</button>
                                                    </a>

                                                    <br><br>

                                                    <a href="<?= base_url('../')?>uploads/user/signature/<?= $key->signature ?>" download>
                                                        <button class="btn btn-primary">Download</button>
                                                    </a>
                                                </td>
                                                <td><?= $key->name ?></td>
                                                <td><?= $key->fname ?></td>
                                                <td><?= $key->mname ?></td>
                                                <td><?= $key->phone ?></td>
                                                <td><?= $key->aadharno ?></td>
                                                <td><?= $key->dob ?></td>
                                                <td><?= $key->nationality ?></td>
                                                <td><?= $key->maritalstatus ?></td>
                                                <td><?= $key->address ?></td>
                                                <td><?= $key->village ?></td>
                                                <td><?= $key->block ?></td>
                                                <td><?= $key->tehseel ?></td>
                                                <td><?= $key->district ?></td>
                                                <td><?= $key->state ?></td>
                                                <td><?= $key->pincode ?></td>
                                                <td><?= $key->gender ?></td>
                                                <td><?= $key->date ?></td>
                                                 
                                            </tr>
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
