<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_model
{
	public function setTopic($newTopic)//Gets Runnable positions
	{
		$result = $this->db->get_where('topics',array('topic ='=>$newTopic))->result();
		if(empty($result))
		{
		$data['topic'] = $newTopic;
		$topic = $this->db->insert('topics',$data);
		return true;
		}
		else
		{
		return false;
		}
	}
	public function getTopic()
	{
		$result = $this->db->get('topics')->result();
		return $result;
	}
    public function getComment($topicid)
    {
        $result = $this->db->get_where('comments',array('topicid ='=> $topicid))->result();
        if(empty($result)):
            return false;
        else:
            return $result;
        endif;
    }
    public function setComments($topicid,$mydetails)
    {
        $mycomment = array('details'=>$mydetails,'topicid'=>$topicid);
        $this->db->insert('comments',$mycomment);
        return true;
    }
}  