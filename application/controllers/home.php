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
		$this->load->view('includes/view_blog',$data);
		
}		
	function single_events(){
		$id=$_GET['id'];
		$this->load->model('Home_model');
		$data['event']=$this->Home_model->getEvent($id);
		$this->load->view('includes/single_event',$data);
		
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
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews();
	$this->load->view('Admin/upcoming',$data);
}

function create_event()
{
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->createPage();
	$this->load->view('Admin/includes/create_page',$data);
	
	
}

function viewpage()
{
	$id=$_GET['id'];
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/viewpage',$data);
}

function edit_page()
{
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews();
	$this->load->view('Admin/includes/edit_page',$data);
}

function delete_page()
{
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews();
	$this->load->view('Admin/includes/delete_page',$data);
}

}