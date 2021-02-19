<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngo extends CI_Controller {

   function __construct()
   {
   	parent::__construct();
   	$this->load->model('Ngomodel','model');
   }
 

public function index()
{
	$data['events']=$this->model->fetchevents();
	$data['banner']=$this->model->fetchbanner();
	$data['testimonials']=$this->model->fetchtestimonials();
	$data['blog']=$this->model->fetchbloglimit3();
  $data['news']=$this->model->fetchnews();
	$this->load->view('index',$data);
}
public function about_us()
{
	$this->load->view('about');
}
public function gallery()
{
    $data['gallery']=$this->model->fetchgallery();
	$this->load->view('gallery',$data);
}
public function contact()
{
	$this->load->view('contact');
}
public function signup()
{
  $data['state']=$this->model->fetchstate();
  $this->load->view('signup',$data);
}
public function userregistration()
{
	$data=$this->input->post();
	$phone=$this->input->post('phone');
  $cphone=$this->input->post('cphone');
	$password=$this->input->post('password');
	$cpassword=$this->input->post('cpassword');
  $checkphoneno=$this->model->checkphoneno($phone);
  if(!$phone)
  {
       return redirect(); 
  }
	elseif($checkphoneno>=1)
    {
	   $this->session->set_flashdata('warning',"Already Registered");
       return redirect();
	}
  elseif($phone!=$cphone)
  {
      $this->session->set_flashdata('error',"Mobile No. And Confirm Mobile No. Does Not Match");
       return redirect('signup');
  }
	elseif($password!=$cpassword)
	{
      $this->session->set_flashdata('error',"Password and confirm password does not match");
       return redirect('signup');
	}

      $lastmemno=$this->model->fetchlastmemno();
      if (!$lastmemno) 
      {
      	$lastmemno="K15082000";
      }
      unset($data['cpassword']);
      unset($data['cphone']);
      $newmemno=substr($lastmemno,-8)+1;
      $finalmemno="K".$newmemno;
      $data['membership_no']=$finalmemno;
      $data['status']="normal";
     
  // sms api  
$msg="Registered Successfully Your Login Id is '$finalmemno' And Password is '$password'";
$url  = "http://www.pertinaxsolution.com/api/mt/SendSMS?user=rlnfinance&password=del12345&senderid=RLNFIN&channel=Trans&DCS=1&flashsms=0&number=$phone&text=$msg&route=4";
$url = preg_replace("/ /", "%20", $url);
$xml = file_get_contents($url);
// sms api end
      $this->model->userregistration($data);
      $this->session->set_flashdata('success',"Registered Successfully Your Membership No is $finalmemno");
       	return redirect('login');
}
public function login()
{
	$this->load->view('login');
}
public function loginaccount()
{
	$membership_no=$this->input->post('membership_no');
	$password=$this->input->post('password');
	$checklogin=$this->model->checklogin($membership_no,$password);

	if ($checklogin==1)
	{
	   $this->session->set_userdata('ngouser2020login',$membership_no);
      $this->session->set_flashdata('popup','pop up');
	   return redirect();
	}
	else
      { 
     	$this->session->set_flashdata('error','Membership No. And Password Does Not Match');
       	return redirect('login');
      }
}
public function services()
{
  $this->load->view('services');
}


public function fetchdistrictajax()
{
  $state=$this->input->post('title');
  $fetchdistrictajax=$this->model->fetchdistrictajax($state);
   
     echo "<option value=''>Choose District </option>";
  foreach ($fetchdistrictajax as $fetchdistrictajax ) 
  {
    echo "<option>";
    echo $fetchdistrictajax->district;
    echo "</option>";
  }
}
public function fetchblockajax()
{
  $district=$this->input->post('title');
  $state=$this->input->post('state');
  $fetchblockajax=$this->model->fetchblockajax($district,$state);
    echo "<option value=''>Choose Block </option>";
  foreach ($fetchblockajax as $fetchblockajax ) 
  {
    echo "<option>";
    echo $fetchblockajax->block;
    echo "</option>";
  }
}

public function fetchvillageajax()
{
  $block=$this->input->post('block');
  $district=$this->input->post('district');
  $state=$this->input->post('state');
  $fetchvillageajax=$this->model->fetchvillageajax($block,$district,$state);
    echo "<option value=''>Choose Village </option>";
  foreach ($fetchvillageajax as $fetchvillageajax ) 
  {
    echo "<option>";
    echo $fetchvillageajax->village;
    echo "</option>";
  }
}

public function donate()
{
  $data['state']=$this->model->fetchstate();
  $this->load->view('donate',$data);
}

public function donatecheckout()
{
   $data=$this->session->userdata('donatecheckout');
   $total_fee=$data['total_fee'];
   $membership_no=$data['membership_no'];
   $data['userdetail']=$this->model->fetchuserstatusdonate($membership_no);
   $this->load->view('donatecheckout',$data);
}

public function donatereg()
{
  $data=$this->input->post();
  $total_fee=$this->input->post('donateam');
  $phone=$this->input->post('phone');
  $lastmemno=$this->model->fetchlastmemno();

  if (!$lastmemno) 
      {
        $lastmemno="D15082000";
      }
  $newmemno=substr($lastmemno,-8)+1;
  $finalmemno="D".$newmemno;
  $data['membership_no']=$finalmemno;
  $data['status']="donate";
 
  unset($data['donateam']);
  $this->model->donateregistration($data);
  $data['userdetail']=$this->model->fetchuserstatusdonatemain($finalmemno);
  $data['total_fee']=$total_fee;
  $this->session->set_userdata('donatecheckout',$data);
  return redirect("Ngo/donatecheckout/$total_fee");
}
public function donatesuccess()
{   
   $data=$this->session->userdata('donatecheckout');
   $membership_no=$data['membership_no']; 
   $phone=$data['phone']; 
  // sms api  
$msg="Thank You For Donate | Your Donate Id is '$membership_no'";
$url  = "http://www.pertinaxsolution.com/api/mt/SendSMS?user=rlnfinance&password=del12345&senderid=RLNFIN&channel=Trans&DCS=1&flashsms=0&number=$phone&text=$msg&route=4";
$url = preg_replace("/ /", "%20", $url);
$xml = file_get_contents($url);
// sms api end
  $this->session->set_flashdata('success',"Payment Successfully Completed");
  $this->session->sess_destroy('donatecheckout');
  return redirect();
}
public function donatefailure()
{
  $data=$this->session->userdata('donatecheckout');
  $membership_no=$data['membership_no']; 
  $this->model->donatefailureuserdeletemain($membership_no);
  $this->session->set_flashdata('error',"Payment Failed");
  $this->session->sess_destroy('donatecheckout');
  return redirect();
}
public function download()
{
  $data['download']=$this->model->fetchedownload();
  $this->load->view('download',$data);
}

public function forgot_password()
{
  $this->load->view('forgot-password');
}
public function sendotp()
{
  if(!$this->input->post('membership_no'))
  {
      $otpdata=$this->session->userdata('otpdata');
      $membership_no=$otpdata['membership_no'];
  }
  else
  {
      $membership_no=$this->input->post('membership_no');
  }

  $data['userdata']=$this->model->fetchuserdetailforotp($membership_no);
  $phone=$data['userdata']->phone;
  $otp=rand( 10000 , 99999 );

    // sms api  
$msg="Your OTP is '$otp'";
$url  = "http://www.pertinaxsolution.com/api/mt/SendSMS?user=rlnfinance&password=del12345&senderid=RLNFIN&channel=Trans&DCS=1&flashsms=0&number=$phone&text=$msg&route=4";
$url = preg_replace("/ /", "%20", $url);
$xml = file_get_contents($url);
// sms api end

  $otpdata = array(
    'membership_no'=>$membership_no,
    'phone' => $phone, 
    'otp' => $otp,
  );
  $this->session->set_userdata('otpdata',$otpdata);
  $this->load->view('check-otp');  
}

public function checkotp()
{
  $userotp=$this->input->post('otp');
  $otpdata=$this->session->userdata('otpdata');
  $otp=$otpdata['otp'];
  $membership_no=$otpdata['membership_no'];
  if($userotp==$otp)
  {
      $data['userdata']=$this->model->fetchuserdetailforotp($membership_no);
      $this->load->view('change-password-by-otp',$data);
  }
  else
  {
      $this->session->set_flashdata('error',"Wrong OTP");
      $this->load->view('check-otp'); 
  }
}
public function changepasswordlast()
{
  $membership_no=$this->input->post('membership_no');
  $password=$this->input->post('password');
  $this->model->changepasswordlast($membership_no,$password);
  $this->session->set_flashdata('success','Password Change Successfully');
   return redirect('login');
}
public function find_id()
{
  $this->load->view('find-id');
}
public function findyourid()
{
  $phone=$this->input->post('phone');
  $membership_no=$this->model->findyourid($phone);
  if(!$membership_no)
  {
    $this->session->set_flashdata('error',"This Mobile No. Not Registered | Please Check Your Mobile And Try Again");
    return redirect('login');
  }
  $this->session->set_flashdata('success',"Your Membership ID is $membership_no");
  return redirect('login');
}

}