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
    	<?php  foreach($blogDetails as $BlogDetails): ?>
    <div class="col-lg-4 service" id="service1">
    	<div class="panel panel-default">
                        <div class="panel-heading">
                            <?=anchor('',$BlogDetails->Topic,array("style"=>"color:#fff;text-decoration:none;font-weight:600;","class"=>"blog_topic"));?>
						</div>
                        <div class="panel-body blog_topics" style = "min-height:206px;">
                        	<?php echo form_open('blog/details/'.$BlogDetails->Blog_topicID);?>
							<img src = "<?=base_url()?>assets/images/blog.jpg" width = "150" height = "150" align = "left"/>  
							<div class = "description" style = "text-align: justify">
							<?php 
							echo substr("$BlogDetails->details;",0,170);
							echo " ...";
							?>
							</div>
							<div>
							<a href = "" style = "float:left;color:#00A94F;">10 <i class="fa fa-comment fa-1x"></i></a>
							</div>
							<div>
							<input style = "float:right;color:#00A94F;" type = "submit" value = "Readmore"/>  
							</div>
                        </form>
                        </div>
                        <!-- /.panel-body -->
         </div>
                    <!-- /.panel -->
    </div>
    <?php endforeach; ?> 
  </div><!--end of row -->
                  </div>
<?php $this->load->view('includes/footer');?>

</body>
</html>