<html>
<head>
<?php $this->load->view('includes/scripts');?>
</head>
<body>

<?php 
	$this->load->view('includes/header');
	$this->load->view('includes/slider');
	$this->load->view('includes/breadcrum');
?>

    						 	
<!----------------service------------->
 
<div class="services" id="services">
    <div class="container">
    <div class="row">
    						 <div class="col-lg-4  service" id="service1">
    						 	<div class="panel panel-default">
                        <div class="panel-heading">
                            Announcement
                        </div>
                       
                          <!-- List group -->
  <ul class="list-group">
   <?php
    	
	foreach ($announcement as $object ) {
		$type=1;
		$title1= $object->Topic;
		$title= substr($title1, 0, 35);
		$id=$object->Blog_topic_id;
		$details= $object->details;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
		$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
	
	  
	  $string = strip_tags($details);

if (strlen($string) > 100) {

    // truncate string
    $stringCut = substr($string, 0, 99);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
}
	
	   echo '<li class="list-group-item" ><div style="color: #222;font-weight: bold;">'.$topic.'...</div><br />';  
	    echo '<p><img src="'.base_url().'assets/images/online_processes/ann.png" class="online-processes" align="left">'.$string.'</p></li>';      
	
	}
	?>
<li class="list-group-item"> <?php echo anchor('home/upcoming_events/'.$type.'','View All',array('style'=>'color:green'))?> </li> 
  
              
  </ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
                    
    <div class="col-lg-4 service" id="service1"><div class="panel panel-default">
                        <div class="panel-heading">
                            Communications
                        </div>
                        <!-- List group -->
  <ul class="list-group">
    <?php
    	
	foreach ($communications as $object ) {
		$type=2;
		$title1= $object->Topic;
		$title= substr($title1, 0, 35);
		$id=$object->Blog_topic_id;
		$details= $object->details;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');		
		$readmore=anchor('home/single_events/'.$id.'/'.$type.'','Read More',array('style'=>'color:green'));
	

$string = strip_tags($details);

if (strlen($string) > 100) {

    // truncate string
    $stringCut = substr($string, 0, 99);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... '.$readmore.''; 
}
	
	   echo '<li class="list-group-item" ><div style="color: #222;font-weight: bold;">'.$topic.'...</div><br />';  
	    echo '<p><img src="'.base_url().'assets/images/online_processes/com.png" class="online-processes" align="left">'.$string .'</p></li>';   
	
	}
	?>
	<li class="list-group-item"> <?php echo anchor('home/upcoming_events/'.$type.'','View All',array('style'=>'color:green'))?> </li>
</ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>

<?php 
	$this->load->view('includes/aside');
?>
                    <!-- /.panel --></div>
   </div>
  </div>
 
<hr />  
<div class="container" style="margin-bottom: 35px;">
<div class="row">
<div class="col-md-12" >

<div id="carousel-example-generic" class="carousel fade" data-ride="carousel">

    <ol class="carousel-indicators">

       

    </ol>



  <!-- Wrapper for slides -->

  <div class="carousel-inner">
   

    <div class="item active"><!---start item 1--->

        <img class="image" src="<?php echo base_url(); ?>assets/images/kk3.jpg" alt="...">

        <div class="carousel-caption">

            <div class="caption">


            <h1>"Dont be the same, be better"</h1>

            </div>

        </div>

    </div>

   </div>   
</div>
</div> <!-- end of col-md-12-->
</div> <!-- end of row-->
</div> <!-- end of container-->

 
<div class="services" id="services">
    <div class="container" >
    <div class="row">


   </div>
  </div>
  </div>
<?php $this->load->view('includes/footer');?>
</body></html>