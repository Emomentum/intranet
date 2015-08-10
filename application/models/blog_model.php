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
	public function getTopics()
	{
		$blogId = 5;
		$result = $this->db->get_where('blog_topic',array('Blog_type_ID ='=> $blogId))->result();
		return $result;
	}
    public function getComments($topicid)
    {
        $result = $this->db->get_where('blog_comments',array('Blog_topic_ID ='=> $topicid))->result();
            return $result;
    }
    public function setComments($topicid,$mydetails)
    {
        $mycomment = array('details'=>$mydetails,'topicid'=>$topicid);
        $this->db->insert('comments',$mycomment);
        return true;
    }
}  