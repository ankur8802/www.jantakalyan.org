<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Adminmodel');
			if($this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontrollermain/index');
		}
	}

	
	public function index()
	{
		$this->load->view('login');
	}
	public function checkdata()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$checkdataconnrow=$this->Adminmodel->checkdataconn($email,$password);

	    if($checkdataconnrow==1)
		{
		   $this->session->set_userdata('charity2020admin',$email);
          
		   return redirect('Admincontrollermain/index'); 
		}
		else
		{
			$this->session->set_flashdata('Wrong_password','msg');
			return redirect('Admincontroller/index');
		}

	}







}
