<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$data['breadcrum'] = "Gallery";
		$this->load->view('gallery',$data);
	}					
}
