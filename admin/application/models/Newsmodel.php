<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsmodel extends CI_Model {
 
public function fetchnews()
{
  $q=$this->db->select()
              ->from('news')
              ->order_by('id','desc')
              ->get();
              return $q->result();
}

public function newsinst($data)
{
  $this->db->insert('news',$data);
}

public function deletenews($id)
{
  $this->db->where('id',$id)
           ->delete('news');
}

	


}
