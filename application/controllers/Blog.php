<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
            $this->load->model('blog_model');
			$this->load->model('Home_model');
        }

	public function index()
	{   $data['upcoming']=$this->Home_model->eventNews($type=4);
		$data['blogTopics'] = $this->getTopic();
		$data['blogTopicDescription'] = $this->blog_model->getTopicDescription();
		$data['blogDetails'] = $this->getBlogDetails();
		$data['topicComments'] = $this->blog_model->getComments($data['blogTopicDescription'][0]->Blog_topicID);
		//$data['NoofComments'] = $this->blog_model->getCommentsNo($data['blogTopicDescription'][0]->Blog_topicID);
		$data['breadcrum'] = "Blog";
		// echo "<pre>";
		// echo print_r($data);
		// echo "</pre>";
		// die();
	//	$data = array('active_state_home'=>'blank','active_state_department'=>'blank','active_state_gallery'=>'blank','active_state_blog'=>'active_state');
		$this->load->view('blog',$data);
	}
	function details($id){
		$data['upcoming']=$this->Home_model->eventNews($type=4);
		$data['blogTopicDescription'] = $this->blog_model->getTopicDescriptions($id);
		$data['topicComments'] = $this->blog_model->getComments($id);
		$data['breadcrum'] = "Blog";
		// echo "<pre>";
		// echo print_r($data);
		// echo "</pre>";
		$this->load->view('blog_details',$data);
		
	}
	function getBlogDetails()
	{
		return $this->blog_model->getBlogDetails();
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
	function getBlogDescription($topicid){
		print_r(json_encode($this->blog_model->getTopicDescriptions($topicid)));
		
	}
   public function getBlogComments($topicId){
     	 if(empty($this->blog_model->getComments($topicId))): 
         $array = array();
         $notopic = new stdClass;
         $notopic->Comments= 'No Comments available';
         $array=$notopic;
         print_r(json_encode(array($array)));  
       else:
       print_r(json_encode($this->blog_model->getComments($topicId)));
       endif; 
	 }	
   public function setComment($topicid){
   	
	   $comment = $this->input->post("newcomments");
	   $userEmail = $_SERVER['USER_EMAIL'];
       $this->blog_model->setcomment($topicid,$comment,$userEmail);
	   redirect('blog/details/'.$topicid);
   }
}
