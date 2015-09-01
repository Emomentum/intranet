<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
			$this->load->model('Team_model');
			$this->load->model('Home_model');
			$type = 4;
        }
		function development(){
			$id = 1;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$data['breadcrum'] = "Development";
			$this->load->view('development',$data);
		}
		function technical(){
			$id = 2;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$data['breadcrum'] = "technical";
			$this->load->view('development',$data);
		}
		function projects_and_consultancy(){
			$id = 3;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$data['breadcrum'] = "projects and consultancy";
			$this->load->view('development',$data);
		}
		function sales(){
			$id = 4;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "sales";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function presales(){
			$id = 5;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Pre Sales";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function marketing(){
			$id = 6;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Marketing";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function products(){
			$id = 7;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Products and Partnership";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function directors(){
			$id = 8;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Directors";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function finance(){
			$id = 9;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Finance";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function hr(){
			$id = 10;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "uman Resource";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('development',$data);
		}
		function risk(){
			$id = 11;
			$data['team'] = $this->Team_model->getTeam($id);
			$data['breadcrum'] = "Risk and Compliance";
			$data['upcoming']=$this->Home_model->eventNews($type=4);
			$this->load->view('technical',$data);
		}
		
		
}
