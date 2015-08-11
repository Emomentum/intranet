<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Home_model');		
		$data['content']=$this->Home_model->getNews();
		$data['events']=$this->Home_model->getUpComingEvents();
		$data['breadcrum'] = "Home";
		$this->load->view('home',$data);
		
	}	
	
	function upcoming_events()
	{
		$this->load->model('Home_model');
		$data['events']=$this->Home_model->getUpComingEvents();
		$this->load->view('views/includes/view_blog',$data);
		
}		
	function single_events(){
		$id=$_GET['id'];
		$this->load->model('Home_model');
		$data['event']=$this->Home_model->getEvent($id);
		$this->load->view('views/includes/single_event',$data);
		
}					
}
					
/*..............................................Codes for admin section......................................................*/
function slider()
{
	
}

function announcement()
{
	
}

function communications()
{
	
}

function upcoming()
{
	$this->load->view('Admin/upcoming');
}
