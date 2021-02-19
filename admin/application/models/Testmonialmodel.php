<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmonialmodel extends CI_Model {
 

public function testimonialinst($data)
{
	$this->db->insert('testimonials',$data);
}
public function fetchtestmonial()
{
	$q=$this->db->select()
	            ->from('testimonials')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();
}
public function deletetestmonial($id)
{
	$this->db->where('id',$id)
	         ->delete('testimonials');
}


}
