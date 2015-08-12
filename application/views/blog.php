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
    <div class="col-lg-5 service" id="service1">
    	<div class="panel panel-default">
                        <div class="panel-heading">
                            Topics
						</div>
                        <div class="panel-body blog_topics">
                        	<ul class="list-group">
                        	<?php  foreach($blogTopics as $BlogTopics): ?>
                        			<li class="list-group-item blog_topic"><input class = "blogTopicId" type = "text" value = "<?=$BlogTopics->Blog_topicID?>" hidden = "true"/><?=anchor('',$BlogTopics->Topic,array("style"=>"color:#0497D7;text-decoration:none;font-weight:600;","class"=>"blog_topic"));?></li>
						 
							<?php endforeach; ?> 
							</ul>   
							   
                        </div>
                        <!-- /.panel-body -->
         </div>
                    <!-- /.panel -->
    </div>
	<div class="col-lg-7  service" id="service1">
		<div class="panel panel-default"  style="min-height: 609px;">
			<?php foreach($blogTopicDescription as $description):?>
    			<div class="panel-heading">
            		  <span><?=$description->Topic ;?></span>
    			</div> 
    			<div style ="padding: 13px 31px 6px 31px;text-align: justify;">
    				
    					<?=$description->details;?>
    			</div>
    			<?php endforeach; ?> 
    			<div class = "comments">
    				<h4 style ="padding: 9px 31px 11px 31px">Comments</h4>
    				<div id = "comments_holder" style ="padding: 13px 31px 25px 31px">
    					<?php foreach($topicComments as $TopicComments):?>
    				<p><?=$TopicComments->Comments?></p>
    				<p style="font-size:9px;margin: 10px 0 10px;color: #07AB54;">Author : kingsley.amaitsa@emomentum-interactive.com \n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted 3 days ago<br>
    				<hr style ='color: #07AA53;border: dotted 1px;'>
    					<?php endforeach ?>
    				<textarea placeholder = "Type Your Comment here" style = "width:100%;height:121px" name="comments" id = "comments" class = "newcomments">
    					
    				</textarea><br/>
    				<input type ="submit" value = "Submit" id ="add_comments" class = "btn btn-primary" style = "margin:10px;float:right;font-size:13px;"/>
    			   </div>    				
    			</div>                      
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
 <!-- /.panel -->
 	</div>
  </div><!--end of row -->
                  </div>
<?php $this->load->view('includes/footer');?>

</body>
</html>