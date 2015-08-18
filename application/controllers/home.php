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
		$data['breadcrum'] = "Upcoming Events";
		$this->load->view('includes/view_blog',$data);
		
}		
	function single_events($id){
		//$id=$_GET['id'];
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


/*..............................................upcoming Events Blog......................................................*/
function upcoming()
{
	$type=4;
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews($type);
	$this->load->view('Admin/upcoming',$data);
}

function create_events()
{	
	$this->load->view('Admin/includes/create_page');

}

function viewpage($id)
{
	//$id=$_GET['id'];
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/viewpage',$data);
}

function edit_page($id)
{
	//$id=$_GET['id'];
	$this->load->model('Home_model');
	$this->Home_model->getEvent($id);
	$data['edit_page']=$this->Home_model->getEvent($id);
	$this->load->view('Admin/includes/edit_page',$data);
	
}

function delete_page($id)
{
	//$id=$_GET['id'];
	$this->load->model('Home_model');
	$this->Home_model->delete_Event($id);
	$data['action']='Deleted';
	//$this->load->view('Admin/includes/upcoming',$data);
	$this->upcoming();
}

function save_events()
{	  	
	$this->load->model('Home_model');
	
	$postTitle = $this->input->post('title');
	$postCont = $this->input->post('content');
			
	$this->Home_model->createPage($postTitle,$postCont);
	
	$data['message'] = 'Data Inserted Successfully';
	$this->upcoming();

}

function update_events($id)
{ 
	$this->load->model('Home_model');
	$topic= $this->input->post('title');
	$description=$this->input->post('content');
	$postDate = date('Y-m-d H:i:s');
	// $data = array(
			// 'postTitle' => $this->input->post('title'),
			// 'postCont' => $this->input->post('content'),
			// 'postDate' => date('Y-m-d H:i:s'));
	
	$this->Home_model->update_Event($id,$topic,$description,$postDate);
	$data['message'] = 'Data Inserted Successfully';
	$this->upcoming();

}


}
