<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
 
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Eventsmodel','model');
		if(!$this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontroller/index');
		}
	}

public function events()
{
	$data['events']=$this->model->fetchevents();
	$this->load->view('events',$data);
}
public function eventsinst()
{
	  $config['upload_path'] = '../uploads/events/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_width']            = 350;
      $config['max_height']           = 400;
      $config['min_width']            = 350;
      $config['min_height']           = 400;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('image'))
         {
            $post=$this->upload->data();
            $eventsimage=$post['raw_name'].$post['file_ext'];
            $data=$this->input->post();
            $data['image']=$eventsimage;
            $this->model->eventsinst($data);
            $this->session->set_flashdata('success','Event Successfully Submitted');
            return redirect('Events/events');
          }
         else
         { 
         	$this->session->set_flashdata('error','Wrong File Formate Or Image Size');
         	return redirect('Events/events');
         }
}

public function deleteevents($id)
{
    $this->model->deleteevents($id);
	$this->session->set_flashdata('success','Events Delete Successfully');
    return redirect('Events/events');
}



}