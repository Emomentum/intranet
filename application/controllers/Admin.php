<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
        }

	public function index()
	{
		$this->load->view('Admin/dashboard');
	}
}
?>
	
