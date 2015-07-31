<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('homeModel');		
		$data['content']=$this->homeModel->getNews();
		$data['breadcrum'] = "Home";
		$this->load->view('home',$data);
	}					
}
