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
					 <div class="col-lg-8  service" id="service1"><div class="panel panel-default">
                        <div class="panel-heading">
                            Details
                        </div>
                       
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
        $topic= anchor('home/single_events/'.$id.'',''.$title.'');		
		$readmore=anchor('home/single_events/'.$id.'','Read More',array('style'=>'color:green'));
	

$string = strip_tags($details);

if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 199);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
}
	
	   echo '<li class="list-group-item" ><div style="color: #222;font-size: 18px;font-weight: bold;padding-bottom: 1px;">'.$topic.'</div><br />';  
	    echo '<p><img src="'.base_url().'assets/images/online_processes/com.png" class="online-processes" align="left"><b>Starts On:'.$start.'and Ends On:'.$end .'</b><br /><br />'.$string .'</p></li>';   
	
	}
	?>
  </ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
                    <?php 
	$this->load->view('includes/aside');
?>
                   </div>
                  </div>
<?php $this->load->view('includes/footer');?>

</body></html>