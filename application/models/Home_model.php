<?php
/**
 * 
 */
class Home_model extends CI_Model {
	
	  function __construct() {
            parent::__construct(); //call the model contructor
        }
	 function getNews(){
			$query=$this->db->query("SELECT * FROM blog_topic  LIMIT 6");
		 
		 if ($query->num_rows()> 0) {
		 	
		 	return $query->result(); //return an array of objects
			 
		 } else {
			 return NULL;
		 }
		}
	 function getNewsdetails($id){
			$query=$this->db->query("SELECT * FROM blog_details where Blog_topic_id='$id'");
		 
		 if ($query->num_rows()> 0) {
		 	
		 	return $query->result(); //return an array of objects
			 
		 } else {
			 return NULL;
		 }
		}
	 
	 	 function getUpComingEvents(){
	 	 	
	 	 	$query =$this->db->query('SELECT * FROM blog_posts ORDER BY postID DESC');
	
		 
		 if ($query->num_rows()> 0) {
		 	
		 	return $query->result(); //return an array of objects
			 
		 } else {
			 return NULL;
		 }
		}
		 
		 function getEvent($id){
	 	 	
	 	 	$query =$this->db->query('SELECT * FROM blog_posts where postID='.$id.' ');
	
		 
		 if ($query->num_rows()> 0) {
		 	
		 	return $query->result(); //return an array of objects
			 
		 } else {
			 return NULL;
		 }
		}
	 
    
	 
    
/*.....................................................Admin section.............................................*/
     
     function getUpcomingEventNews(){
			$query=$this->db->query("SELECT * FROM blog_posts ");
		 
		 if ($query->num_rows()> 0) {
		 	
		 	return $query->result(); //return an array of objects
			 
		 } else {
			 return NULL;
		 }
		}
	 
	 function createPage(){
	 	
			$query=$this->db->query("INSERT INTO blog_posts(title,content,date,page_type,child_of) VALUES ('$title','$content','$date','$page_type','$child_of')");

		}
	 


}
	

?>