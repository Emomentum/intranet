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
	<div class="col-lg-12  service" id="service1">
		<div class="panel panel-default">
			<?php foreach($blogTopicDescription as $description):?>
    			<div class="panel-heading">
            		  <span id = "BlogTopic"><?=$description->Topic ;?></span>
            		  <?php 
            		  	$blogid = $description->Blog_topicID;
            		  ?>"
            		 
    			</div> 
    			<div style ="padding: 13px 31px 6px 31px;text-align: justify;" id = "BlogDescription">
    				
    					<?=$description->details;?>
    			</div>
    			<?php endforeach; ?> 
    			<div class = "comments">
    				<h4 style ="padding: 9px 31px 11px 31px">Comments</h4>
    				<div id = "comments_holder" style ="padding: 13px 31px 25px 31px">
    					<?php foreach($topicComments as $TopicComments):?>
    				<p><?=$TopicComments->Comments?></p>
    				<p style="font-size:9px;margin: 10px 0 10px;color: #07AB54;">Author : <?=$TopicComments->Email; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted on: <?=$TopicComments->Timestamp; ?><br>
    				<hr style ='color: #07AA53;border: dotted 1px;'>
    					<?php endforeach ?>
    				</div> 
    				<?php echo form_open('blog/setComment/'.$blogid);
					?>
    				<div style ="padding: 13px 31px 25px 31px;height: 41%;">
	    				<textarea placeholder = "Type Your Comment here" style = "width:100%;height:121px" name="newcomments" id = "newcomments" class = "newcomments form-control"></textarea><br/>
	    				<input type ="submit" value = "Submit" id ="add_comments" class = "btn btn-primary newCmt" style = "margin:10px;float:right;font-size:13px;"/>
    			    </div>  
    			    </form>				
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