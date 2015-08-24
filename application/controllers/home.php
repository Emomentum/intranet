<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Home_model');		
		$data['announcement']=$this->Home_model->getUpcomingEventNews($type=1);
		$data['communications']=$this->Home_model->getUpcomingEventNews($type=2);
		$data['upcoming']=$this->Home_model->getUpcomingEventNews($type=4);
		$data['breadcrum'] = "Home";
		//$data = array('active_state_home'=>'active_state','active_state_department'=>'blank','active_state_gallery'=>'blank','active_state_blog'=>'blank');
		$this->load->view('home',$data);
		
	}	
	
	function upcoming_events($type)
	{
		$data['type']=$type;
		if($type==4){
		$this->load->model('Home_model');
		$data['events']=$this->Home_model->getAllUpcomingEventNews($type);
		$data['upcoming']=$this->Home_model->getUpcomingEventNews($type=4);
		$data['breadcrum'] = "Upcoming Events";
		$this->load->view('includes/view_events',$data);
		}else{
		$this->load->model('Home_model');
		$data['events']=$this->Home_model->getAllUpcomingEventNews($type);
		$data['upcoming']=$this->Home_model->getUpcomingEventNews($type=4);
		$data['breadcrum'] = "Upcoming Events";
		$this->load->view('includes/view_blog',$data);
		}
		
}		

	function single_events($id,$type){
		$data['type']=$type;
		$this->load->model('Home_model');
		$data['event']=$this->Home_model->getEvent($id);
		$data['upcoming']=$this->Home_model->getUpcomingEventNews($type=4);
		$data['breadcrum'] = "Upcoming Event";
		$this->load->view('includes/single_event',$data);
		
}					
				

function announcement()
{
	$type=1;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getAllUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function communications()
{
	$type=2;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getAllUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function upcoming()
{
	$type=4;
	$data['type']=$type;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getAllUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function create_events($type)
{
	if($type==4){
	$data['type']=$type;	
	$this->load->view('Admin/includes/create_page_upcoming',$data);
	}else{
		$data['type']=$type;
		$this->load->view('Admin/includes/create_page',$data);
	}
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
	
	$this->load->model('Home_model');
	if($type==4){
	$data['type']=$type;
	$this->Home_model->getEvent($id);
	$data['edit_page']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/edit_page_upcoming',$data);
	}else{
		
	$data['type']=$type;
	$this->Home_model->getEvent($id);
	$data['edit_page']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/edit_page',$data);
	
	}
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
	if($type==4){
		
	$postTitle = $this->input->post('title');
	$postStart = $this->input->post('start');
	$postEnd = $this->input->post('end');
	$postCont = $this->input->post('content');
			
	$this->Home_model->createPage($postTitle,$postCont,$postStart,$postEnd,$type);
	}
	
	else{	 	
	
	$postTitle = $this->input->post('title');
	$postStart = "N/A";
	$postEnd = "N/A";
	$postCont = $this->input->post('content');
			
	$this->Home_model->createPage($postTitle,$postCont,$postStart,$postEnd,$type);
	}
	$data['message'] = 'Data Inserted Successfully';
	$this->callPage($type);

}

function update_events($id,$type)
{
	if($type==4){ 
	$this->load->model('Home_model');
	$topic= $this->input->post('title');
	$description=$this->input->post('content');
	$postDate = date('Y-m-d H:i:s');
	$postStart = $this->input->post('start');
	$postEnd = $this->input->post('end');
	$this->Home_model->update_Event($id,$topic,$description,$postDate,$postStart,$postEnd);
	$data['message'] = 'Data Inserted Successfully';
	$this->callPage($type);
	}else{
		
	$this->load->model('Home_model');
	$topic= $this->input->post('title');
	$description=$this->input->post('content');
	$postDate = date('Y-m-d H:i:s');
	$postStart = "N/A";
	$postEnd = "N/A";
	$this->Home_model->update_Event($id,$topic,$description,$postDate,$postStart,$postEnd);
	$data['message'] = 'Data Inserted Successfully';
	$this->callPage($type);
	}

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
