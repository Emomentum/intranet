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
  	<?php
    	
	foreach ($events as $object ) {
		
		$title= $object->Topic;
		$id=$object->Blog_topic_id;
		$details= $object->details;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');		
		$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
	

$string = strip_tags($details);

if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 199);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
}
?>
	<div class="media">
  <div class="media-left">
    <a href="#">
     <img src="<?php echo base_url();?>assets/images/online_processes/com.png" class="online-processes" align="left">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading" style="color: #222;font-size: 18px;font-weight: bold;padding-bottom: 1px;"><?php echo $topic;?></h4>
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
                   </div>
                  </div>
<?php $this->load->view('includes/footer');?>

</body></html>