<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngologin extends CI_Controller {

   function __construct()
   {
   	parent::__construct();
   	$this->load->model('Ngomodel','model');
   	if (!$this->session->userdata('ngouser2020login'))
   	{
   		return redirect(); 
   	}
   }
public function logout()
{
	session_destroy();
	return redirect();
}
public function updateprofile()
{
  $data['state']=$this->model->fetchstate();
  $data['userdata']=$this->model->fetchuserdata();
  $this->load->view('update-profile',$data);
}
public function userregistrationupdate()
{   
	$data=$this->input->post();
	$config['upload_path'] = 'uploads/user/profileimage';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);
    if($this->upload->do_upload('profileimage'))
      {
        $post2=$this->upload->data();
        $bannerprofileimage2=$post2['raw_name'].$post2['file_ext'];
        $data['profileimage']=$bannerprofileimage2;
       }
      $this->model->userregistrationupdate($data);
      $this->session->set_flashdata('success',"Profile Update Successfully ");
       	return redirect('update-profile');
}
public function documentupload()
{
  $data['document']=$this->model->documentupload();
  $this->load->view('document-uploads',$data);
}
public function userregistrationdocumentupload()
{
    $data['status']="unpaid";
	// profile image
   	$config = array();
	  $config['upload_path'] = 'uploads/user/profileimage';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload',$config,'profile');
    $this->profile->initialize($config);
    if($this->profile->do_upload('photo'))
    {
       $profile=$this->profile->data();
       $profileimage=$profile['raw_name'].$profile['file_ext'];
       $data['photo']=$profileimage;
    }
    elseif(!$this->profile->do_upload('photo'))
    {
    	$profileerror=$this->profile->display_errors();
    	if ($profileerror="The filetype you are attempting to upload is not allowed.") 
    	{
    		$this->session->set_flashdata('error',"Wrong Profile Photo File Formate");
    		return redirect('document-upload');
    	}
    }
    // profile image end

    // aadhar 
	$config = array();
	$config['upload_path'] = 'uploads/user/aadhar';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'aadhar');
    $this->aadhar->initialize($config);
    if($this->aadhar->do_upload('aadhar'))
    {
       $aadhar=$this->aadhar->data();
       $aadharimage=$aadhar['raw_name'].$aadhar['file_ext'];
       $data['aadhar']=$aadharimage;
    }
    elseif(!$this->aadhar->do_upload('aadhar'))
    {
    	$aadharerror=$this->aadhar->display_errors();
    	if ($aadharerror="The filetype you are attempting to upload is not allowed.") 
    	{
    		$this->session->set_flashdata('error',"Wrong Aadhar File Formate");
    		return redirect('document-upload');
    	}
    }
    // aadhar end

    // bank 
	$config = array();
	$config['upload_path'] = 'uploads/user/bank';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'bank');
    $this->bank->initialize($config);
    if($this->bank->do_upload('bank'))
    {
       $bank=$this->bank->data();
       $bankimage=$bank['raw_name'].$bank['file_ext'];
       $data['bank']=$bankimage;
    }
    elseif(!$this->bank->do_upload('bank'))
    {
    	$bankerror=$this->bank->display_errors();
    	if ($bankerror="The filetype you are attempting to upload is not allowed.") 
    	{
    		$this->session->set_flashdata('error',"Wrong Bank Passbook File Formate");
    		return redirect('document-upload');
    	}
    }
    // bank end

    // Declaration 
  $config = array();
  $config['upload_path'] = 'uploads/user/declaration';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload',$config,'declaration');
    $this->declaration->initialize($config);
    if($this->declaration->do_upload('declaration'))
    {
       $declaration=$this->declaration->data();
       $declarationimage=$declaration['raw_name'].$declaration['file_ext'];
       $data['declaration']=$declarationimage;
    }
    elseif(!$this->declaration->do_upload('declaration'))
    {
      $declarationerror=$this->declaration->display_errors();
      if ($declarationerror="The filetype you are attempting to upload is not allowed.") 
      {
        $this->session->set_flashdata('error',"Wrong File Formate");
        return redirect('document-upload');
      }
    }
    // Declaration end


        // signature 
	$config = array();
	$config['upload_path'] = 'uploads/user/signature';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload',$config,'signature');
    $this->signature->initialize($config);
    if($this->signature->do_upload('signature'))
    {
       $signature=$this->signature->data();
       $signatureimage=$signature['raw_name'].$signature['file_ext'];
       $data['signature']=$signatureimage;
    }
    elseif(!$this->signature->do_upload('signature'))
    {
    	$signatureerror=$this->signature->display_errors();
    	if ($signatureerror="The filetype you are attempting to upload is not allowed.") 
    	{
    		$this->session->set_flashdata('error',"Wrong Signature File Formate");
    		return redirect('document-upload');
    	}
    }
    $checkuploadid=$this->model->checkuploadid();
    if ($checkuploadid==0) {
     $this->model->userregistrationdocumentupload($data);
     $this->session->set_flashdata('success',"Upload Document Successfully");
     return redirect('document-upload');
    }
    else
    {
      $this->model->documentupdate($data);
      $this->session->set_flashdata('success',"Update Document Successfully");
      return redirect('document-upload');
    }
    
}
public function forms()
{
	$data['userdata']=$this->model->fetchuserstatus();
	$this->load->view('forms',$data);
}
public function saharadetails()
{
  $data['userdata']=$this->model->fetchuserdata();
  $data['saharadetails']=$this->model->fetchsaharadetails();
  $this->load->view('sahara',$data);
}

public function saharadetailinst()
{

    $data=$this->input->post();
    $config['upload_path'] = 'uploads/user/saharafile';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    $this->load->library('upload', $config);
    if($this->upload->do_upload('policyfile'))
      {
        $policyfile=$this->upload->data();
        $policyfiledata=$policyfile['raw_name'].$policyfile['file_ext'];
        $data['policyfile']=$policyfiledata;
      }
     else
     {
      $this->session->set_flashdata('error',"Wrong File Formate");
      return redirect('sahara-details');
     }
     $userid=$this->session->userdata('ngouser2020login');
     $data['membership_no']=$userid;
     $data['status']="unpaid";
     $this->model->saharadetailinst($data);
     $this->session->set_flashdata('success',"Sahara Detail Add");
      return redirect('sahara-details');
 

}
public function deletesaharadetail($id)
{
     $this->model->deletesaharadetail($id);
     $this->session->set_flashdata('success','Sahara Detail Delete Successfully');
     return redirect('sahara-details');
}
public function bankdetail()
{
  $data['bankdetail']=$this->model->fetchbankdetail();
  $this->load->view('bankdetail',$data);

}
public function bankdetailinst()
{
      $data=$this->input->post();
      $userid=$this->session->userdata('ngouser2020login');
      $checkbank=$this->model->checkbank($userid);
      $data['membership_no']=$userid;
      $data['status']="latest";
      if($checkbank==0)
      {
        $this->model->bankdetailinst($data);
        $this->session->set_flashdata('success',"Bank Detail Add Successfully");
        return redirect('bank-detail');
      }
      else
      {
        $checkbankid=$this->model->checkbankid($userid);
        $this->model->bankdetailupdate($checkbankid,$data);
        $this->session->set_flashdata('success',"Bank Detail Update Successfully");
        return redirect('bank-detail');
      }
      
}
public function payment()
{
    $checksaharadetail=$this->model->checksaharadetail(); 
    
    if ($checksaharadetail==0)
    {
     $this->session->set_flashdata('warning',"Fill Your Sahara Detail");
     return redirect('sahara-Details');
    }

    $checkbankdetail=$this->model->checkbankdetail(); 
    
    if ($checkbankdetail==0)
    {
      $this->session->set_flashdata('warning',"Fill Your Bank Detail");
     return redirect('bank-detail');
    }

    $checkuploaddocument=$this->model->checkuploaddocument(); 
    
    if ($checkuploaddocument==0)
    {
      $this->session->set_flashdata('warning',"Upload Your Document");
     return redirect('document-upload');
    }
    $data['coupon']="";
    $data['sahara']=$this->model->fetchsaharadetails();
    $data['userstatus']=$this->model->fetchuserstatuspayment();
    $this->load->view('payment',$data);

}

function processpayment($total_fee)
{
     $fetchuserstatusarray=$this->model->fetchuserstatusarray();
     $fetchbankdetailarray=$this->model->fetchbankdetailarray();
     $documentuploadarray=$this->model->documentuploadarray();
     $fetchsaharadetailformunpaid=$this->model->fetchsaharadetailformunpaid();
    
     $i=1;
     foreach ($fetchsaharadetailformunpaid as $fetchsaharadetailformunpaid) {
        $saharaformno["$i"]=$fetchsaharadetailformunpaid->id;
        $i++;
     }
     $saharaformnonew= implode(',', $saharaformno);

     $data['membership_no']=$this->session->userdata('ngouser2020login');
     $data['sahara_form_no']=$saharaformnonew;
     $data['accountno']=$fetchbankdetailarray['accountno'];
     $data['bankname']=$fetchbankdetailarray['bankname'];
     $data['branchname']=$fetchbankdetailarray['branchname'];
     $data['ifsc']=$fetchbankdetailarray['ifsc'];
     $data['photo']=$documentuploadarray['photo'];
     $data['aadhar']=$documentuploadarray['aadhar'];
     $data['bank']=$documentuploadarray['bank'];
     $data['signature']=$documentuploadarray['signature'];
     $data['name']=$fetchuserstatusarray['name'];
     $data['fname']=$fetchuserstatusarray['fname'];
     $data['mname']=$fetchuserstatusarray['mname'];
     $data['phone']=$fetchuserstatusarray['phone'];
     $data['aadharno']=$fetchuserstatusarray['aadharno'];
     $data['dob']=$fetchuserstatusarray['dob'];
     $data['nationality']=$fetchuserstatusarray['nationality'];
     $data['maritalstatus']=$fetchuserstatusarray['maritalstatus'];
     $data['village']=$fetchuserstatusarray['village'];
     $data['address']=$fetchuserstatusarray['address'];
     $data['block']=$fetchuserstatusarray['block'];
     $data['tehseel']=$fetchuserstatusarray['tehseel'];
     $data['district']=$fetchuserstatusarray['district'];
     $data['state']=$fetchuserstatusarray['state'];
     $data['pincode']=$fetchuserstatusarray['pincode'];
     $data['gender']=$fetchuserstatusarray['gender'];
     $data['status']=0;
  
     $this->model->insertpaymentdata($data);
     $this->model->updatesaharaformprocess();
     
     return redirect("Ngologin/extracheckout/$total_fee");

}
public function extracheckout($total_fee)
{

  $datanew['userdetail']=$this->model->fetchuserstatus();
  $datanew['total_fee']=$total_fee;
  $this->load->view('checkout',$datanew);
}
public function success()
{
    $coupon=$this->session->userdata('coupon');
    $coupon_code=$coupon['coupon']->coupon_code;
    $this->model->deletecoupon($coupon_code);

     $fetchuserstatusarray=$this->model->fetchuserstatusarray();
     $fetchbankdetailarray=$this->model->fetchbankdetailarray();
     $documentuploadarray=$this->model->documentuploadarray();
     $fetchsaharadetailformunpaid=$this->model->fetchsaharadetailformunpaid();
    
     $i=1;
     foreach ($fetchsaharadetailformunpaid as $fetchsaharadetailformunpaid) {
        $saharaformno["$i"]=$fetchsaharadetailformunpaid->id;
        $i++;
     }
     $saharaformnonew= implode(',', $saharaformno);

     $data['membership_no']=$this->session->userdata('ngouser2020login');
     $data['sahara_form_no']=$saharaformnonew;
     $data['amount']=$this->input->post('amount');
     $data['payuMoneyId']=$this->input->post('payuMoneyId');
     $data['addedon']=$this->input->post('addedon');
     $data['txnid']=$this->input->post('txnid');
     $data['accountno']=$fetchbankdetailarray['accountno'];
     $data['bankname']=$fetchbankdetailarray['bankname'];
     $data['branchname']=$fetchbankdetailarray['branchname'];
     $data['ifsc']=$fetchbankdetailarray['ifsc'];
     $data['photo']=$documentuploadarray['photo'];
     $data['aadhar']=$documentuploadarray['aadhar'];
     $data['bank']=$documentuploadarray['bank'];
     $data['signature']=$documentuploadarray['signature'];
     $data['name']=$fetchuserstatusarray['name'];
     $data['fname']=$fetchuserstatusarray['fname'];
     $data['mname']=$fetchuserstatusarray['mname'];
     $data['phone']=$fetchuserstatusarray['phone'];
     $data['aadharno']=$fetchuserstatusarray['aadharno'];
     $data['dob']=$fetchuserstatusarray['dob'];
     $data['nationality']=$fetchuserstatusarray['nationality'];
     $data['maritalstatus']=$fetchuserstatusarray['maritalstatus'];
     $data['village']=$fetchuserstatusarray['village'];
     $data['address']=$fetchuserstatusarray['address'];
     $data['block']=$fetchuserstatusarray['block'];
     $data['tehseel']=$fetchuserstatusarray['tehseel'];
     $data['district']=$fetchuserstatusarray['district'];
     $data['state']=$fetchuserstatusarray['state'];
     $data['pincode']=$fetchuserstatusarray['pincode'];
     $data['gender']=$fetchuserstatusarray['gender'];
     $data['status']=1;

  $this->model->insertpaymentdata($data);
  $this->model->changeuserpaymentstatus($saharaformnonew);
  $this->model->updateuserstatusplus();
  $this->model->updatestatusbankold();
  $this->model->updatesaharastatuspaid();
  $this->model->updatedocumentstatuspaid();

  $this->session->set_flashdata('success',"Payment Successful");
  return redirect();
}
public function failure()
{
   $this->session->set_flashdata('error',"Payment Failed");
   return redirect();
}
public function history()
{
  $data['userdata']=$this->model->fetchuserdata();
  $data['saharadetails']=$this->model->fetchsaharadetailspaid();
  $this->load->view('history',$data);
}
public function ajaxdonateamount()
{
   $amount=$this->input->post('amount');
   $donate['amount']=$amount;
   $this->session->set_userdata('donate',$donate);
}
public function ajaxdonateamount2()
{
   $amount=$this->input->post('amount');
   if($amount=="no")
   {
      $donate['amount']=0;
   }
   elseif ($amount=="yes") {
       $donate['amount']=100;
   }
   $this->session->set_userdata('donate',$donate);
}

public function print()
{
   $data['userdata']=$this->model->fetchuserdata();
   $data['saharadetails']=$this->model->fetchsaharadetails();
  $this->load->view('print',$data);
}
public function paymentquery()
{
  $data=$this->input->post();
  if(!$data)
  {
    return redirect();
  }
  $this->model->paymentquery($data);
  $this->session->set_flashdata('success',"Payment Related Query Submitted");
  return redirect('history');
}
public function applycoupon()
{
  $coupon_code=$this->input->post('coupon_code');
  $data['coupon']=$this->model->checkcouponnoandamount($coupon_code);
  if(!$data['coupon'])
  {
    $this->session->set_flashdata('error',"Wrong Coupon Code");
     return redirect('payment'); 
  }
  $this->session->set_userdata('coupon',$data);

    $checksaharadetail=$this->model->checksaharadetail(); 
    
    if ($checksaharadetail==0)
    {
     $this->session->set_flashdata('warning',"Fill Your Sahara Detail");
     return redirect('sahara-Details');
    }

    $checkbankdetail=$this->model->checkbankdetail(); 
    
    if ($checkbankdetail==0)
    {
      $this->session->set_flashdata('warning',"Fill Your Bank Detail");
     return redirect('bank-detail');
    }

    $checkuploaddocument=$this->model->checkuploaddocument(); 
    
    if ($checkuploaddocument==0)
    {
      $this->session->set_flashdata('warning',"Upload Your Document");
     return redirect('document-upload');
    }

    $data['sahara']=$this->model->fetchsaharadetails();
    $data['userstatus']=$this->model->fetchuserstatuspayment();
    $this->load->view('payment',$data);

}
public function change_password()
{
  
    $this->load->view('change-password');
}
public function checholdpassword()
{
  $oldpassword=$this->input->post('oldpassword');
  $newpassword=$this->input->post('newpassword');
  $currentpassword=$this->model->checholdpassword($oldpassword); 
  if($oldpassword==$currentpassword)
  {
    $this->model->updatenewpassword($newpassword);
    $this->session->set_flashdata('success',"Password Change Successfully");
    return redirect();
  }
  else
  {
    $this->session->set_flashdata('error',"Old Password Not Match");
    return redirect('change-password');
  }
}

}