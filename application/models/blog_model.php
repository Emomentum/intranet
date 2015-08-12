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
		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $blogId));
		//$this->db->join('blog_details','blog_details.Blog_topic_id = blog_topic.Blog_topicID');
		$this->db->order_by('Blog_topicID','desc');
		$result = $this->db->get();
		return $result->result();
	}
	public function getTopicDescription(){		
		$blogId = 5;
		$this->db->select('*');
		$this->db->from('blog_topic');
		$this->db->where(array('Blog_type_ID ='=> $blogId));
		$this->db->join('blog_details','blog_details.Blog_topic_id = blog_topic.Blog_topicID');
		$this->db->order_by('Blog_topicID','desc');
		$this->db->limit(1);
		$result = $this->db->get();
		return $result->result();
	}
	public function getTopicDescriptions ($topicid){
		$result = $this->db->get_where('blog_details',array('Blog_topic_id ='=> $topicid));
				  $this->db->limit(1);
        return $result->result();
		
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