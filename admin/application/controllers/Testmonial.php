<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmonial extends CI_Controller {
 
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Testmonialmodel','model');
		if(!$this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontroller/index');
		}
	}

public function testmonial()
{
	$data['testmonial']=$this->model->fetchtestmonial();
	$this->load->view('testimonials',$data);
}
public function testimonialinst()
{
	    $config['upload_path'] = '../uploads/testimonials/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('testimonial_image'))
         {
            $post=$this->upload->data();
            $testmonialimage=$post['raw_name'].$post['file_ext'];
            $data=$this->input->post();
            $data['testimonial_image']=$testmonialimage;
            $this->model->testimonialinst($data);
            $this->session->set_flashdata('success','Successfully Submitted');
            return redirect('Testmonial/testmonial');
          }
         else
         { 
         	$this->session->set_flashdata('error','Wrong File Formate');
         	return redirect('Testmonial/testmonial');
         }

}
public function deletetestmonial($id)
{
	$this->model->deletetestmonial($id);
	$this->session->set_flashdata('success','Testmonial Delete Successfully');
    return redirect('Testmonial/testmonial');
}


}
