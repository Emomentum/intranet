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
	$this->load->model('Home_model');
	$data['upcoming']=$this->Home_model->getUpcomingEventNews();
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
	$data = array(
			'postTitle' => $this->input->post('title'),
			'postDesc' => $this->input->post('desc'),
			'postCont' => $this->input->post('content'),
			'postDate' => date('Y-m-d H:i:s') );
	$this->Home_model->createPage($data);
	$data['message'] = 'Data Inserted Successfully';
	$this->upcoming();

}

function update_events($id)
{
	//$id=$_GET['id'];  
	$this->load->model('Home_model');
	$date=date('hgghfh');
	$data = array(
			'postTitle' => $this->input->post('title'),
			'postDesc' => $this->input->post('desc'),
			'postCont' => $this->input->post('content'),
			'postDate' => date('Y-m-d H:i:s'));
	$this->Home_model->update_Event($id,$data);
	$data['message'] = 'Data Inserted Successfully';
	$this->upcoming();

}


}
