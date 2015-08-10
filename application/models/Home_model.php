<?php
/**
 * 
 */
class Home_model extends CI_Model {
	
	  function __construct() {
            parent::__construct(); //call the model contructor
        }
	 function getNews(){
			$query=$this->db->query("SELECT * FROM blog_topic Limit 15");
		 
		 if ($query->num_rows()> 0) {
		 	
		 	return $query->result(); //return an array of objects
			 
		 } else {
			 return NULL;
		 }
		}
	 
    
	 
    }
     
	

?>