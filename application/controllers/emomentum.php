<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emomentum extends CI_Controller {

	public function index()
	{
		$this->load->model('data_manager');
		$this->home();
	}
		
		
	
	function home()
	{
		$data['content']=$this->data_manager->getNews();
		$this->load->view('home',$data);
		
}
}
