<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
            $this->load->model('blog_model');
        }

	public function index()
	{
		$this->load->view('Admin/dashboard');
	}
	public function blog()
	{
		$data['blogTopics'] = $this->getTopic();
		$data['blogTopicDescription'] = $this->blog_model->getTopicDescription();	
		$this->load->view('Admin/blog',$data);
	}
	function getTopic()
	{
	   if(empty($this->blog_model->getTopics())): 
         $array = array();
         $notopic = new stdClass;
         $notopic->topic= 'No Topics available';
         $array=$notopic;
         return array($array);  
       else:
       return $this->blog_model->getTopics();
       endif;
	}
	function newBlog(){
		$blogTopic = $this->input->post('new_topic');
		$blogDescription = $this->input->post('new_Description');
		$result = $this->blog_model->newblog($blogTopic,$blogDescription);
		if($result == "Topic already exist"):
			 $this->session->set_flashdata('fail_new_blog','<div class="alert alert-danger">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Unable to create New blog post.Topic Already already exist
                                                                 </div>
                                                                '); 
			redirect('admin/blog');
		else:
		redirect('admin/blog');
		endif;
		
	}
	function UpdateBlog(){
		$blogtopicId = $this->input->post('topicId');
		$blogTopic = $this->input->post('topic');
		$blogDescription = $this->input->post('blogDescription');
		$this->blog_model->updateblog($blogtopicId,$blogTopic,$blogDescription);
		$this->session->set_flashdata('success_update','<div class="alert alert-success">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Update successful
                                                                 </div>
                                                                '); 
               redirect('admin/blog');
	}
	function DeleteBlog(){
		$blogtopicId = $this->input->post('topicId');
		if($this->blog_model->deleteblog($blogtopicId) == 1):
			$this->session->set_flashdata('success_delete','<div class="alert alert-success">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Deleted successful
                                                                 </div>
                                                                '); 
			redirect('admin/blog');
			
		elseif($this->blog_model->deleteblog($blogtopicId) == 0):
			$this->session->set_flashdata('fail_deletion','<div class="alert alert-danger">
                                                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                    Failed to delete.Please Try again Later
                                                                 </div>
                                                                '); 
			redirect('admin/blog');
			
		endif;
	}
}
?>
