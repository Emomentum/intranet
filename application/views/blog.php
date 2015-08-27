<html>
<head>
<?php $this->load->view('includes/scripts');?>
</head>
<body>

<?php 
	$this->load->view('includes/header');
	$this->load->view('includes/breadcrum');
?>
<div class="container">
    <div class="row">
    	
    <div class="col-lg-8  service" id="service1">
                       
                          <!-- List group -->
  <ul class="list-group">
  	<?php foreach($blogDetails as $BlogDetails){
		
		$title= $BlogDetails->Topic;
		$id=$BlogDetails->Blog_topic_id;
		$details= $BlogDetails->details;
        $topic= anchor('blog/details/'.$id.'',''.$title.'');		
		$readmore=anchor('blog/details/'.$id.'','Read More',array('style'=>'color:green'));
		$this->load->model('blog_model');
		$comments=$this->blog_model->getCommentsNo($BlogDetails->Blog_topicID);  
	

$string = strip_tags($details);

if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 199);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
}?>
	<div class="media">
  <div class="media-left">
    <a href="#">
     <img src="<?php echo base_url();?>assets/images/online_processes/com.png" class="online-processes" align="left">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading" style="color: #222;font-size: 18px;font-weight: bold;padding-bottom: 1px;"><?php echo $topic;?></h4>
    <i class="fa fa-comment fa-1x"></i> <?php echo $comments;?> Comments</a>
    <p><?php echo $string; ?></p>
  </div>
</div>
<?php
	   echo'<hr>';
	}
	
	?>
  </ul>
                        <!-- /.panel-body -->
                    
                    <!-- /.panel --></div>
                     <?php 
	$this->load->view('includes/aside');
?>
  </div><!--end of row -->
                  </div>
<?php $this->load->view('includes/footer');?>

</body>
</html>