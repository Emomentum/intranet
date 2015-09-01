<?php
/**
 * 
 */
class Team_model extends CI_Model {
	
	  function __construct() {
            parent::__construct(); //call the model contructor
        }
		 
	function getTeam($id){
	 	 	
	 	$this->db->select('*');
		$this->db->from('team');
		$this->db->where(array('Department_id ='=> $id));
		$result = $this->db->get();
        return $result->result();
		}
}
	

?>