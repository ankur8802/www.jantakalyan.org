<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngomodel extends CI_Model {


public function fetchbanner()
{
	$q=$this->db->select()
	            ->from('banner')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();
}
public function fetchevents()
{
	$q=$this->db->select()
	            ->from('events')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();	
}
public function fetchtestimonials()
{
	$q=$this->db->select()
	            ->from('testimonials')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();		
}
public function fetchbloglimit3()
{
	$q=$this->db->select()
	            ->from('blog')
	            ->order_by('id','desc')
	            ->limit(3)
	            ->get();
	            return $q->result();	
}
public function fetchgallery()
{
	$q=$this->db->select()
	            ->from('gallery')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();		
}
public function userregistration($data)
{
	$this->db->insert('user_registration',$data);
}

public function donateregistration($data)
{
	$this->db->insert('donate_user',$data);
}
public function fetchlastmemno()
{
	$q=$this->db->select('membership_no')
	            ->from('user_registration')
	            ->order_by('id','desc')
	            ->get();
	            return $q->row('membership_no');		
}
public function checkphoneno($phone)
{
	$q=$this->db->select()
	            ->from('user_registration')
	            ->where('phone',$phone)
	            ->get();
	            return $q->num_rows();
}
public function checklogin($membership_no,$password)
{
    $q=$this->db->select()
	            ->from('user_registration')
	            ->where('membership_no',$membership_no)
	            ->where('password',$password)
	            ->get();
	            return $q->num_rows();
}
public function fetchuserdata()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('user_registration')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->row();
}
public function userregistrationupdate($data)
{
  $userid=$this->session->userdata('ngouser2020login');
  $this->db->where('membership_no',$userid)->update('user_registration',$data);

}
public function checkuploadid()
{
 $userid=$this->session->userdata('ngouser2020login');
 $q=$this->db->select()
	            ->from('upload_documents')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->num_rows();	
}
public function userregistrationdocumentupload($data)
{
  $userid=$this->session->userdata('ngouser2020login');
  $data['membership_no']=$userid;
  $this->db->insert('upload_documents',$data);
}
public function documentupdate($data)
{
  $userid=$this->session->userdata('ngouser2020login');
  $this->db->where('membership_no',$userid)
	         ->update('upload_documents',$data);	
}
public function documentupload()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('upload_documents')
	            ->where('membership_no',$userid)
	            ->where('status','unpaid')
	            ->get();
	            return $q->row();
}
public function fetchuserstatus()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('user_registration')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->row();
}
public function fetchuserstatusarray()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('user_registration')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->row_array();
}
public function saharadetailinst($data)
{
  $this->db->insert('saharadetails',$data);
}
public function fetchsaharadetails()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('saharadetails')
	            ->where('membership_no',$userid)
	            ->where('status','unpaid')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();
}
public function deletesaharadetail($id)
{
	$this->db->where('id',$id)
	         ->delete('saharadetails');
}
public function bankdetailinst($data)
{
   $this->db->insert('bankdetails',$data);
}
public function fetchbankdetail()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('bankdetails')
	            ->where('membership_no',$userid)
	            ->where('status','latest')
	            ->get();
	            return $q->row();
}
public function checkbank($userid)
{
$q=$this->db->select()
	            ->from('bankdetails')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->num_rows();
}
public function bankdetailupdate($checkbankid,$data)
{
	$this->db->where('id',$checkbankid)
	         ->update('bankdetails',$data);	
}
public function checkbankid($userid)
{
$q=$this->db->select()
	            ->from('bankdetails')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->row('id');	
}
public function checksaharadetail()
{
	$userid=$this->session->userdata('ngouser2020login');
	$q=$this->db->select()
	            ->from('saharadetails')
	            ->where('membership_no',$userid)
	            ->where('status','unpaid')
	            ->get();
	            return $q->num_rows();
}
public function checkbankdetail()
{
	$userid=$this->session->userdata('ngouser2020login');
	$q=$this->db->select()
	            ->from('bankdetails')
	            ->where('membership_no',$userid)
	            ->where('status','latest')
	            ->get();
	            return $q->num_rows();
}
public function checkuploaddocument()
{
	$userid=$this->session->userdata('ngouser2020login');
	$q=$this->db->select()
	            ->from('upload_documents')
	            ->where('membership_no',$userid)
	            ->where('status','unpaid')
	            ->get();
	            return $q->num_rows();
}
public function fetchuserstatuspayment()
{
	$userid=$this->session->userdata('ngouser2020login');
	$q=$this->db->select('status')
	            ->from('user_registration')
	            ->where('membership_no',$userid)
	            ->get();
	            return $q->row('status');
}
public function updateuserstatusplus()
{
	$data['status']="plus";
	$userid=$this->session->userdata('ngouser2020login');
    $this->db->where('membership_no',$userid)->update('user_registration',$data);
}
public function updatestatusbankold()
{
	$data['status']="old";
	$userid=$this->session->userdata('ngouser2020login');
    $this->db->where('membership_no',$userid)->update('bankdetails',$data);
}
public function updatesaharastatuspaid()
{
	$data['status']="paid";
	$userid=$this->session->userdata('ngouser2020login');
    $this->db->where('membership_no',$userid)->update('saharadetails',$data);
}
public function fetchbankdetailarray()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('bankdetails')
	            ->where('membership_no',$userid)
	            ->where('status','latest')
	            ->get();
	            return $q->row_array();
}
public function documentuploadarray()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('upload_documents')
	            ->where('membership_no',$userid)
	            ->where('status','unpaid')
	            ->get();
	            return $q->row_array();
}
public function insertpaymentdata($data)
{
    $this->db->insert('user_payment_data',$data);
}
public function updatedocumentstatuspaid()
{
	$data['status']="paid";
	$userid=$this->session->userdata('ngouser2020login');
    $this->db->where('membership_no',$userid)->update('upload_documents',$data);	
}
public function updatesaharaformprocess()
{
	$data['status']="process";
	$userid=$this->session->userdata('ngouser2020login');
    $this->db->where('membership_no',$userid)->update('saharadetails',$data);		
}
public function fetchsaharadetailspaid()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select()
	            ->from('saharadetails')
	            ->where('membership_no',$userid)
	            ->where('status','paid')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();
}
public function fetchsaharadetailformunpaid()
{
	$userid=$this->session->userdata('ngouser2020login');
    $q=$this->db->select('id')
	            ->from('saharadetails')
	            ->where('membership_no',$userid)
	            ->where('status','unpaid')
	            ->get();
	            return $q->result();
}
public function fetchnews()
{
  $q=$this->db->select()
              ->from('news')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function fetchstate()
{
        $this->db->distinct();
  $q=$this->db->select('state')
              ->from('cities')
              ->order_by('state','asc')
              ->get();

           return $q->result();

}
public function fetchdistrictajax($state)
{
	 $this->db->distinct();
   $q=$this->db->select('district')
              ->from('cities')
              ->where('state',$state)
              ->order_by('district','asc')
              ->get();

           return $q->result();
}
public function fetchblockajax($state,$district)
{
	 $this->db->distinct();
   $q=$this->db->select('block')
              ->from('cities')
              ->where('district',$state)
              ->where('state',$district)
              ->order_by('block','asc')
              ->get();

           return $q->result();
}
public function fetchvillageajax($block,$district,$state)
{
	 $this->db->distinct();
   $q=$this->db->select('village')
              ->from('cities')
              ->where('block',$block)
              ->where('state',$state)
              ->where('district',$district)
              ->order_by('village','asc')
              ->get();

           return $q->result();
}

public function fetchuserstatusdonate($finalmemno)
{
    $q=$this->db->select()
	            ->from('user_registration')
	            ->where('membership_no',$finalmemno)
	            ->get();
	            return $q->row();
}
public function fetchuserstatusdonatemain($finalmemno)
{
    $q=$this->db->select()
	            ->from('donate_user')
	            ->where('membership_no',$finalmemno)
	            ->get();
	            return $q->row();
}

public function fetchedownload()
{
    $q=$this->db->select()
	            ->from('download')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();	
}
public function donatefailureuserdelete($membership_no)
{
  $this->db->where('membership_no',$membership_no)
           ->delete('user_registration');
}
public function donatefailureuserdeletemain($membership_no)
{
  $this->db->where('membership_no',$membership_no)
           ->delete('donate_user');
}
public function paymentquery($data)
{
	$this->db->insert('payment_query',$data);
}

public function checkcouponnoandamount($coupon_code)
{
    $q=$this->db->select()
	            ->from('coupon')
	            ->where('coupon_code',$coupon_code)
	            ->get();
	            return $q->row();
}
public function deletecoupon($coupon_code)
{
	$this->db->where('coupon_code',$coupon_code)
	         ->delete('coupon');
}
public function fetchuserdetailforotp($membership_no)
{
	$q=$this->db->select()
	            ->from('user_registration')
	            ->where('membership_no',$membership_no)
	            ->get();
	            return $q->row();
}
public function changepasswordlast($membership_no,$password)
{
  $data['password']=$password;
  $this->db->where('membership_no',$membership_no)
	         ->update('user_registration',$data);
}
public function findyourid($phone)
{
	$q=$this->db->select('membership_no')
	            ->from('user_registration')
				->where('phone',$phone)
				->order_by('id','desc')
				->limit(1)
	            ->get();
	            return $q->row('membership_no');	
}
public function checholdpassword($oldpassword)
{
	$userid=$this->session->userdata('ngouser2020login');
	$q=$this->db->select()
	            ->where('membership_no',$userid)
	            ->from('user_registration')
	            ->get();
	            return $q->row('password');
}
public function updatenewpassword($newpassword)
{
	$data['password']=$newpassword;
	$userid=$this->session->userdata('ngouser2020login');
	$this->db->where('membership_no',$userid)
			   ->update('user_registration',$data);	
}
public function changeuserpaymentstatus($saharaformnonew)
{
	$userid=$this->session->userdata('ngouser2020login');
	$this->db->where('membership_no',$userid)
	         ->where('sahara_form_no',$saharaformnonew)
	         ->detele('user_payment_data');	
}
}
