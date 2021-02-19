<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bannermodel extends CI_Model {
 

public function bannerinst($data)
{
	$this->db->insert('banner',$data);
}
public function fetchbanner()
{
$q=$this->db->select()
         ->from('banner')
         ->order_by('id','desc')
         ->get();	
         return $q->result();
}
public function deletebanner($id)
{
	$this->db->where('id',$id)
	         ->delete('banner');
}




}
