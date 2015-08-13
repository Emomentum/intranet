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
}
?>
	
