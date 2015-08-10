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
                        			<li class="list-group-item blog_topic"><input class = "blogTopicId" type = "text" value = "<?=$BlogTopics->Blog_topic_ID?>" hidden = "true"/><?=anchor('',$BlogTopics->Topic,array("style"=>"color:#0497D7;text-decoration:none;font-weight:600;","class"=>"blog_topic"));?></li>
						 
							<?php endforeach; ?> 
							</ul>   
							   
                        </div>
                        <!-- /.panel-body -->
         </div>
                    <!-- /.panel -->
    </div>
	<div class="col-lg-7  service" id="service1">
		<div class="panel panel-default"  style="min-height: 609px;">
    			<div class="panel-heading">
            		  Comments
    			</div> 
    			<div class = "comments">
    				<div id = "comments_holder" style ="padding: 13px 31px 25px 31px">  			
    				
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