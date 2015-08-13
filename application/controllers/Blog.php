<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	 function __construct() {
            parent::__construct(); //call the contructor
            $this->load->model('blog_model');
        }

	public function index()
	{
		$data['blogTopics'] = $this->getTopic();
		$data['blogTopicDescription'] = $this->blog_model->getTopicDescription();
		$data['topicComments'] = $this->blog_model->getComments($data['blogTopicDescription'][0]->Blog_topicID);
		$data['breadcrum'] = "Blog";
		$this->load->view('blog',$data);
		// echo "<pre>";
		// print_r($data['blogTopicDescription'][0]->Blog_topicID);
		// echo "</pre>";
		
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
}