<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventsmodel extends CI_Model {
 

public function eventsinst($data)
{
   $this->db->insert('events',$data);
}
public function fetchevents()
{
	$q=$this->db->select()
	            ->from('events')
	            ->order_by('id','desc')
	            ->get();
	            return $q->result();
}
public function deleteevents($id)
{
	$this->db->where('id',$id)
	         ->delete('events');
}



}
