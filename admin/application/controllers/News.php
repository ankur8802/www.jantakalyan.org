<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Newsmodel','news');

		if(!$this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontroller/index');
		}
	}


public function news()
{
   $data['news']=$this->news->fetchnews();
   $this->load->view('news',$data);
}

public function newsinst()
{
    $data=$this->input->post();
    $this->news->newsinst($data);
    $this->session->set_flashdata('success','News Successfully Submitted');
    return redirect('News/news');
}
public function deletenews($id)
{
   $this->news->deletenews($id);
   $this->session->set_flashdata('success','News Delete Successfully');
   return redirect('News/news');
}





}
