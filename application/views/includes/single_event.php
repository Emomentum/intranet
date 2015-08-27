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
<div class="panel-body">
					 <?php
    	
						foreach ($event as $row ) {
							$title= $row->Topic;
							$id= $row->Blog_topic_id;
							$content=$row->details;
							$posted=$row->Timestamp;
					?>
				<form method = "post">
					<h1><?php echo $title;?></h1>
					<input type = "hidden" class = "news_id" value = "<?php echo $id; ?>" name = 'blog_topic_id'/>
				
					<p style = "text-align:justify">
					<?php
						
						echo "<b>Posted On: </b>".$posted."<br /><br />";
						echo '<p>'.$content.'</p>';
						
                    ?>
					</p>
					
					</form>
				
				
					<?php }?>
				
             </div>
                       </div>
                    <?php 
	$this->load->view('includes/aside');
?>
                   </div>
                  </div>
<?php $this->load->view('includes/footer');?>

</body></html>






