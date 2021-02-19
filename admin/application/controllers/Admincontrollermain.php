<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontrollermain extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
        $this->load->model('Adminmodel','model');
		if(!$this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontroller/index');
		}
	}
public function logout()
{
	session_destroy();
	return redirect('Admincontroller/index');
}

public function index()
{
   $data['fetchtotalusers']=$this->model->fetchtotalusers();
   $data['fetchtotalbanner']=$this->model->fetchtotalbanner();
   $data['fetchtotalgallery']=$this->model->fetchtotalgallery();
   $data['fetchtotaltestmonial']=$this->model->fetchtotaltestmonial();
   $data['fetchtotalevents']=$this->model->fetchtotalevents();
   $data['fetchtotalnews']=$this->model->fetchtotalnews();
   $data['fetchtotalblogs']=$this->model->fetchtotalblogs();
   $data['fetchtotalpaidapplication']=$this->model->fetchtotalpaidapplication();
   $data['fetchtotalsaharapaidapplication']=$this->model->fetchtotalsaharapaidapplication();
   $data['fetchtotalsaharaunpaidapplication']=$this->model->fetchtotalsaharaunpaidapplication();
   $this->load->view('index',$data);
}
public function application()
{
	$this->load->view('data');
}

public function form()
{
	$this->load->view('form');
}
public function userdetail()
{ 
	$data['userdetail']=$this->model->userdetail();
	$this->load->view('userdetail',$data);
}
public function userapplication()
{ 
	$data['userapplication']=$this->model->userapplicationpaymentdetail();
	$this->load->view('userapplication',$data);
}
public function saharaapplication()
{
	$data['saharadetails']=$this->model->fetchsaharadetailspaid();
	$this->load->view('saharaapplication',$data);
}
public  function uploadcertificate()
{
	$data['download']=$this->model->fetchdownload();   
    $this->load->view('uploadcertificate',$data);
}
public function uploadcertificateinst()
{          
	    $data=$this->input->post();
        $config['upload_path'] = '../uploads/download/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('image'))
         {
            $post=$this->upload->data();
            $downloadimage=$post['raw_name'].$post['file_ext'];
            $data['image']=$downloadimage;
            $this->model->uploadcertificateinst($data);
            $this->session->set_flashdata('success','Download Document Successfully Uploaded');
            return redirect('Admincontrollermain/uploadcertificate');
          }
         else
         { 
         	$this->session->set_flashdata('error','Wrong File Formate');
         	return redirect('Admincontrollermain/uploadcertificate');
         }
	
}
public function deletedownload($id)
{
  	$this->model->deletedownload($id);
	$this->session->set_flashdata('success','Download Document Delete Successfully');
    return redirect('Admincontrollermain/uploadcertificate');
}

public function saharaapplicationunpaid()
{
    $data['saharadetails']=$this->model->fetchsaharadetailsunpaid();
    $this->load->view('saharaapplicationunpaid',$data);  
}
public function paymentquery()
{
    $data['paymentquery']=$this->model->paymentquery();
    $this->load->view('paymentquery',$data);  
}
public function generatecoupon()
{
    $data['coupon']=$this->model->fetchcoupon();
    $this->load->view('generatecoupon',$data);  
}
public function generatecouponinst()
{
    $data=$this->input->post();
    $checkcoupon=$this->input->post('coupon_code');
    $checkcouponexitst=$this->model->checkcoupon($checkcoupon);
    if($checkcouponexitst==0)
    {
    $this->model->generatecouponinst($data);
    $this->session->set_flashdata('success','Coupon Generate Successfully');
    return redirect('Admincontrollermain/generatecoupon');
    }
    else
    {
    $this->session->set_flashdata('error','Coupon Code Already Used');
    return redirect('Admincontrollermain/generatecoupon');
    }
}

public function deletegeneratecoupon($id)
{
    $this->model->deletegeneratecoupon($id);
    $this->session->set_flashdata('success','Coupon Delete Successfully');
    return redirect('Admincontrollermain/generatecoupon');
}
public function erroeapplication()
{
    $data['userapplication']=$this->model->userapplicationpaymentdetailerror();
    $this->load->view('userapplicationerror',$data);
}
public function deleteapplicationerrordata($id)
{
  $this->model->deleteapplicationerrordata($id);
  $this->session->set_flashdata('success',' Delete Successfully');
  return redirect('Admincontrollermain/erroeapplication');
}
public function addpaymentdata()
{
  $id=$this->input->post('id');
  $data=$this->input->post();
  $data['status']=1;
  $this->model->addpaymentdata($id,$data);
  $this->session->set_flashdata('success','Update Successfully');
  return redirect('Admincontrollermain/erroeapplication');
}
public function erroeapplicationsahara()
{
    $data['saharadetails']=$this->model->erroeapplicationsahara();
    $this->load->view('saharaapplicationprocess',$data);
}
public function deletesaharaprocess($id)
{
  $this->model->deletesaharaprocess($id);
  $this->session->set_flashdata('success',' Delete Successfully');
  return redirect('Admincontrollermain/erroeapplicationsahara');
}
public function updatesaharaprocess($id)
{
  $this->model->updatesaharaprocess($id);
  $this->session->set_flashdata('success','Update Successfully');
  return redirect('Admincontrollermain/erroeapplicationsahara');
}

}
