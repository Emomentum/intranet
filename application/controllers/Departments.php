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
			$this->load->view('development',$data);
		}
		function projects_and_consultancy(){
			$data['breadcrum'] = "Departments/Operations/projects and consultancy";
			$this->load->view('development',$data);
		}
		function sales(){
			$data['breadcrum'] = "Departments/Business Development/sales";
			$this->load->view('development',$data);
		}
		function presales(){
			$data['breadcrum'] = "Departments/Business Development/Pre Sales";
			$this->load->view('development',$data);
		}
		function marketing(){
			$data['breadcrum'] = "Departments/Business Development/Marketing";
			$this->load->view('development',$data);
		}
		function products(){
			$data['breadcrum'] = "Departments/Business Development/Products and Partnership";
			$this->load->view('development',$data);
		}
		function directors(){
			$data['breadcrum'] = "Departments/Administration/Directors";
			$this->load->view('development',$data);
		}
		function finance(){
			$data['breadcrum'] = "Departments/Administration/Finance";
			$this->load->view('development',$data);
		}
		function hr(){
			$data['breadcrum'] = "Departments/Adninistration/Human Resource";
			$this->load->view('development',$data);
		}
		function risk(){
			$data['breadcrum'] = "Departments/Aministration/Risk and Compliance";
			$this->load->view('technical',$data);
		}
		
		
}
