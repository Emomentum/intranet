<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['breadcrum'] = "Blog";
		$this->load->view('blog',$data);
	}					
}