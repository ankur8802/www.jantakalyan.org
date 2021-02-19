<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
 

 public function checkdataconn($email,$password)
 {
     $q=$this->db->select()
              ->from('admin')
              ->where('email',$email)
              ->where('password',$password)
              ->get();
              return $q->num_rows();
 }
 public function userdetail()
 {
      $q=$this->db->select()
                  ->from('user_registration')
                  ->order_by('id','desc')
                  ->get();
              return $q->result();	
 }
public function userapplicationpaymentdetail()
{
       $q=$this->db->select()
                  ->from('user_payment_data')
                  ->order_by('id','desc')
                  ->where('status',1)
                  ->get();
              return $q->result();
}
public function fetchsaharadetailspaid()
{
    $q=$this->db->select()
              ->from('saharadetails')
              ->where('status','paid')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}

public function fetchsaharadetailsunpaid()
{
    $q=$this->db->select()
              ->from('saharadetails')
              ->where('status','unpaid')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}

public function uploadcertificateinst($data)
{
  $this->db->insert('download',$data);
}

public function fetchdownload()
{
    $q=$this->db->select()
              ->from('download')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}

public function deletedownload($id)
{
    $this->db->where('id',$id)
           ->delete('download');
}
public function paymentquery()
{
    $q=$this->db->select()
              ->from('payment_query')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function fetchcoupon()
{
    $q=$this->db->select()
              ->from('coupon')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function generatecouponinst($data)
{
  $this->db->insert('coupon',$data);
}
public function checkcoupon($checkcoupon)
{
    $q=$this->db->select()
              ->from('coupon')
              ->where('coupon_code',$checkcoupon)
              ->get();
              return $q->num_rows();
}
public function deletegeneratecoupon($id)
{
    $this->db->where('id',$id)
           ->delete('coupon');
}
public function fetchtotalusers()
{
    $q=$this->db->select()
              ->from('user_registration')
              ->get();
              return $q->num_rows();
}	
public function fetchtotalbanner()
{
    $q=$this->db->select()
              ->from('banner')
              ->get();
              return $q->num_rows();
}
public function fetchtotalgallery()
{
    $q=$this->db->select()
              ->from('gallery')
              ->get();
              return $q->num_rows(); 
}
public function fetchtotaltestmonial()
{
    $q=$this->db->select()
              ->from('testimonials')
              ->get();
              return $q->num_rows(); 
}
public function fetchtotalevents()
{
    $q=$this->db->select()
              ->from('events')
              ->get();
              return $q->num_rows(); 
}
public function fetchtotalnews()
{
    $q=$this->db->select()
              ->from('news')
              ->get();
              return $q->num_rows();  
}
public function fetchtotalblogs()
{
    $q=$this->db->select()
              ->from('blog')
              ->get();
              return $q->num_rows(); 
}
public function fetchtotalpaidapplication()
{
       $q=$this->db->select()
                  ->from('user_payment_data')
                  ->get();
              return $q->num_rows();
}
public function fetchtotalsaharapaidapplication()
{
    $q=$this->db->select()
              ->from('saharadetails')
              ->where('status','paid')
              ->get();
              return $q->num_rows();
}
public function fetchtotalsaharaunpaidapplication()
{
    $q=$this->db->select()
              ->from('saharadetails')
              ->where('status','unpaid')
              ->get();
              return $q->num_rows(); 
}
public function userapplicationpaymentdetailerror()
{
       $q=$this->db->select()
                  ->from('user_payment_data')
                  ->order_by('id','desc')
                  ->where('status',0)
                  ->get();
              return $q->result(); 
}
public function deleteapplicationerrordata($id)
{
    $this->db->where('id',$id)
           ->delete('user_payment_data');
}
public function addpaymentdata($id,$data)
{
  $this->db->where('id',$id)
           ->update('user_payment_data',$data);
}
public function erroeapplicationsahara()
{
    $q=$this->db->select()
              ->from('saharadetails')
              ->where('status','process')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}
public function deletesaharaprocess($id)
{
    $this->db->where('id',$id)
           ->delete('saharadetails');
}
public function updatesaharaprocess($id)
{
  $data['status']="paid";
  $this->db->where('id',$id)
           ->update('saharadetails',$data);
}

}
