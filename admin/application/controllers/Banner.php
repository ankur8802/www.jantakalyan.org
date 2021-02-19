<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Bannermodel','banner');

		if(!$this->session->userdata('charity2020admin'))
		{
            return redirect('Admincontroller/index');
		}
	}


public function banner()
{
	$data['banner']=$this->banner->fetchbanner();
	$this->load->view('banner',$data);
}
public function bannerinst()
{
        $config['upload_path'] = '../uploads/banner/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_width']            = 1900;
        $config['max_height']           = 800;
        $config['min_width']            = 1900;
        $config['min_height']           = 800;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('image'))
         {
            $post=$this->upload->data();
            $bannerimage=$post['raw_name'].$post['file_ext'];
            $data['image']=$bannerimage;
            $this->banner->bannerinst($data);
            $this->session->set_flashdata('success','Successfully Submitted');
            return redirect('Banner/banner');
          }
         else
         { 
         	$this->session->set_flashdata('error','Wrong File Formate or Image Size');
         	return redirect('Banner/banner');
         }


}
public function deletebanner($id)
{
	$this->banner->deletebanner($id);
	$this->session->set_flashdata('success','Banner Delete Successfully');
     return redirect('Banner/banner');
}



}
