<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
        }
		function development(){
			$data['breadcrum'] = "Departments/Operations/Development";
			$this->load->view('development',$data);
		}
		function technical(){
			$data['breadcrum'] = "Departments/Operations/technical";
			$this->load->view('technical',$data);
		}
		function projects_and_consultancy(){
			$data['breadcrum'] = "Departments/Operations/projects and consultancy";
			$this->load->view('projects_and_consultancy',$data);
		}
		
}
