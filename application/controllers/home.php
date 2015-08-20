<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Home_model');		
		$data['announcement']=$this->Home_model->getUpcomingEventNews($type=1);
		$data['communications']=$this->Home_model->getUpcomingEventNews($type=2);
		$data['events']=$this->Home_model->getUpcomingEventNews($type=4);
		$data['breadcrum'] = "Home";
		$this->load->view('home',$data);
		
	}	
	
	function upcoming_events($type)
	{
		$this->load->model('Home_model');
		$data['events']=$this->Home_model->getUpcomingEventNews($type);
		$data['breadcrum'] = "Upcoming Events";
		$this->load->view('includes/view_blog',$data);
		
}		

	function single_events($id){
		
		$this->load->model('Home_model');
		$data['event']=$this->Home_model->getEvent($id);
		$data['breadcrum'] = "Upcoming Event";
		$this->load->view('includes/single_event',$data);
		
}					
				

function announcement()
{
	$type=1;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function communications()
{
	$type=2;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function upcoming()
{
	$type=4;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function create_events($type)
{
	$data['type']=$type;	
	$this->load->view('Admin/includes/create_page',$data);
}

function viewpage($id,$type)
{
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/viewpage',$data);
}

function edit_page($id,$type)
{
	$data['type']=$type;
	$this->load->model('Home_model');
	$this->Home_model->getEvent($id);
	$data['edit_page']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/edit_page',$data);
	
}

function delete_page($id,$type)
{
	$this->load->model('Home_model');
	$this->Home_model->delete_Event($id);
	$data['action']='Deleted';
	$this->callPage($type);
}

function save_events($type)
{	  	
	$this->load->model('Home_model');
	
	$postTitle = $this->input->post('title');
	$postCont = $this->input->post('content');
			
	$this->Home_model->createPage($postTitle,$postCont,$type);
	
	$data['message'] = 'Data Inserted Successfully';
	$this->callPage($type);

}

function update_events($id,$type)
{ 
	$this->load->model('Home_model');
	$topic= $this->input->post('title');
	$description=$this->input->post('content');
	$postDate = date('Y-m-d H:i:s');
	$this->Home_model->update_Event($id,$topic,$description,$postDate);
	$data['message'] = 'Data Inserted Successfully';
	$this->callPage($type);

}
function callPage($type)
{
	if ($type==1) {
		$this->announcement();
	} else if ($type==2) {
		$this->communications();
	} else if ($type==4) {
		$this->upcoming();
	}
}

}
