<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locationsmodel extends CI_Model {
 

public function fetchstate()
{
        $this->db->distinct();
  $q=$this->db->select('state')
              ->from('cities')
              ->order_by('state','asc')
              ->get();

           return $q->result();

}
public function deletestate($state)
{
   $this->db->where('state',$state)
           ->delete('cities');
}
public function stateinst($data)
{
   $this->db->insert('cities',$data);
}
public function districtinst($data)
{
   $this->db->insert('cities',$data);
}
public function fetchdistrict()
{
    $q=$this->db->select()
              ->from('cities')
              ->order_by('state','asc')
              ->get();

           return $q->result();
}
public function deletedistrict($id) 
{
     $this->db->where('id',$id)
              ->delete('cities');
}


public function blockinst($data)
{
   $this->db->insert('cities',$data);
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

public function fetchblockajax($district,$state)
{
     $this->db->distinct();
   $q=$this->db->select('block')
              ->from('cities')
              ->where('state',$district)
              ->where('district',$state)
              ->order_by('block','asc')
              ->get();

           return $q->result();
}
public function deletedblock($id)
{
     $this->db->where('id',$id)
              ->delete('cities');
}
public function villageinst($data)
{
   $this->db->insert('cities',$data);
}


}
