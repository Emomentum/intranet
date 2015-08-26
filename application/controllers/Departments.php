<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
			$this->load->model('Team_model');
        }
		function development(){
			$id = 1;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Operations/Development";
			$this->load->view('development',$data);
		}
		function technical(){
			$id = 2;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Operations/technical";
			$this->load->view('development',$data);
		}
		function projects_and_consultancy(){
			$id = 3;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Operations/projects and consultancy";
			$this->load->view('development',$data);
		}
		function sales(){
			$id = 4;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Business Development/sales";
			$this->load->view('development',$data);
		}
		function presales(){
			$id = 5;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Business Development/Pre Sales";
			$this->load->view('development',$data);
		}
		function marketing(){
			$id = 6;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Business Development/Marketing";
			$this->load->view('development',$data);
		}
		function products(){
			$id = 7;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Business Development/Products and Partnership";
			$this->load->view('development',$data);
		}
		function directors(){
			$id = 8;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Administration/Directors";
			$this->load->view('development',$data);
		}
		function finance(){
			$id = 9;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Administration/Finance";
			$this->load->view('development',$data);
		}
		function hr(){
			$id = 10;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Adninistration/Human Resource";
			$this->load->view('development',$data);
		}
		function risk(){
			$id = 11;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Departments/Aministration/Risk and Compliance";
			$this->load->view('technical',$data);
		}
		
		
}
