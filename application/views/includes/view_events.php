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
		//$type=2;
		$title= $object->Topic;
		$id=$object->Blog_topic_id;
		$details= $object->details;
		$start=$object->End_Date;
		$end= $object->Start_Date;
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
     
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading" style="color: #222;font-size: 18px;font-weight: bold;padding-bottom: 1px;"><?php echo $topic;?></h4>
    <b>Starts On: <?php echo $start; ?>  and Ends On:  <?php echo $end; ?></b><br /><br />
    <p><?php echo $string; ?></p>
  </div>
</div>
<?php
	   echo'<hr>';
	}
	?>
  </ul>
                    </div>
                    <?php 
	$this->load->view('includes/aside');
?>
                   </div>
                  </div>
<?php $this->load->view('includes/footer');?>

</body></html>