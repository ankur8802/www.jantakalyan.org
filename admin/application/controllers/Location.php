<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
        $this->load->model('Locationsmodel','model');
		if(!$this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontroller/index');
		}
	}
public function state()
{
	$data['state']=$this->model->fetchstate();
	$this->load->view('state',$data);
}

public function deletestate($new_state)
{
  $state=str_replace('-', ' ', $new_state);
  $this->model->deletestate($state);
  $this->session->set_flashdata('success','State Delete Successfully');
  return redirect('Location/state');
}
public function stateinst()
{
	$data['state']=$this->input->post('state');
	$this->model->stateinst($data); 
	$this->session->set_flashdata('success','State Add Successfully');
  return redirect('Location/state');
}

public function district()
{
	$data['state']=$this->model->fetchstate();
    $data['district']=$this->model->fetchdistrict();
	$this->load->view('district',$data);
}
public function districtinst()
{
    $data['state']=$this->input->post('state');
    $data['district']=$this->input->post('district');
	$this->model->districtinst($data);
	$this->session->set_flashdata('success','District Add Successfully');
    return redirect('Location/district');	
}

public function deletedistrict($id)
{
  $this->model->deletedistrict($id);
  $this->session->set_flashdata('success','District Delete Successfully');
  return redirect('Location/district');
}
public function block()
{   
	$data['state']=$this->model->fetchstate();
	$data['district']=$this->model->fetchdistrict();
	$this->load->view('block',$data);
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

public function blockinst()
{
    $data['state']=$this->input->post('state');
    $data['district']=$this->input->post('district');
    $data['block']=$this->input->post('block');
	$this->model->blockinst($data);
	$this->session->set_flashdata('success','Block Add Successfully');
    return redirect('Location/block');
}
public function village()
{   
	$data['state']=$this->model->fetchstate();
	$data['district']=$this->model->fetchdistrict();
	$this->load->view('village',$data);
}

public function fetchblockajax()
{
	$district=$this->input->post('district');
	$state=$this->input->post('state');
	$fetchblockajax=$this->model->fetchblockajax($state,$district);
    echo "<option value=''>Choose District </option>";
	foreach ($fetchblockajax as $fetchblockajax ) 
	{
		echo "<option>";
		echo $fetchblockajax->block;
		echo "</option>";
	}
}

public function deletedblock($id)
{ 
  $this->model->deletedblock($id);
  $this->session->set_flashdata('success','Block Delete Successfully');
  return redirect('Location/block');
}
public function villageinst()
{
    $data['state']=$this->input->post('state');
    $data['district']=$this->input->post('district');
    $data['block']=$this->input->post('block');
    $data['village']=$this->input->post('village');    
	$this->model->villageinst($data);
	$this->session->set_flashdata('success','Village Add Successfully');
    return redirect('Location/village');	
}
public function deletevillage($id)
{ 
  $this->model->deletedblock($id);
  $this->session->set_flashdata('success','Village Delete Successfully');
  return redirect('Location/village');
}





}
