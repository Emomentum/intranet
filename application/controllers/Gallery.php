<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$this->load->model('Home_model');
		$data['upcoming']=$this->Home_model->eventNews($type=4);
		$data['breadcrum'] = "Gallery";
		$this->load->view('album',$data);
	}					
}
