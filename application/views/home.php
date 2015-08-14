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
    <div class="col-lg-5 service" id="service1" >
    	<div class="panel panel-default" style="min-height: 550px;">
                        <div class="panel-heading">
                            Vision And Mission
							</div>
                        <div class="panel-body">

          <h3>Our Mission</h3>
          <p align="justify">
           </p><ul><li> Make a difference in our customers unique environments</li>
                <li> Leverage on our partners and our methodology</li>
                <li>Provide  innovative and transformative technology</li>
                 <li>Exceed our stakeholders� expectations.</li></ul> <p></p>
  
          <h3>Our Vision </h3>
  
          <p align="justify">To be a trusted technology services and solutions partner of choice.</p>
  
          <h3>Our Methodology </h3>
  
          <p align="justify">The E.I.N.S.T.E.I.N.S methodology is designed to deliver value by addressing all areas of the business with very 
                    meticulous eye. The methodology has five phases namely:</p>
                    <ul>
                    <li>Initiate</li>
                    <li>Build</li>
                    <li>Develop</li>
                    <li>Implement</li>
                    <li>Review</li>
                    </ul>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
					 <div class="col-lg-4  service" id="service1"><div class="panel panel-default"  style="min-height: 550px;">
                        <div class="panel-heading">
                            Announcement
                        </div>
                       
                          <!-- List group -->
  <ul class="list-group">
  	<?php	
	foreach ($content as $object ) {
		
		//$title= $object->Topic;
		$title= $object->postTitle;
		//$id=$object->Blog_topicID;
		$id=$object->postID;
        $topic= anchor('home/upcoming_events?id='.$id.'',''.$title.'');
	
	   echo '<li class="list-group-item">'.$topic.'</li>';   
	
	}
	?>
<li class="list-group-item"> <?php echo anchor('home/upcoming_events','View All')?> </li> 
  
              
  </ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
					 <div class="col-lg-3 service" id="service1"><div class="panel panel-default" style="min-height: 550px;">
                        <div class="panel-heading">
                            Online Processes
                        </div>
                          <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
                            
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
   </div>
  </div>
  </div>
  
<div class="container" style="margin-bottom: 35px;">
<div class="row">
<div class="col-md-12" >

<div id="carousel-example-generic" class="carousel fade" data-ride="carousel">

    <ol class="carousel-indicators">

       

    </ol>



  <!-- Wrapper for slides -->

  <div class="carousel-inner">
   

    <div class="item active"><!---start item 1--->

        <img class="image" src="<?php echo base_url(); ?>assets/images/kk2.jpeg" alt="...">

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
    <div class="col-lg-6 service" id="service1"><div class="panel panel-default">
                        <div class="panel-heading">
                            Communications
                        </div>
                        <!-- List group -->
  <ul class="list-group">
    <?php
    	
	foreach ($events as $object ) {
		
		$title= $object->postTitle;
		$title= $object->postTitle;
		$id=$object->postID;
        $topic= anchor('home/single_events?id='.$id.'',''.$title.'');
	
	   echo '<li class="list-group-item">'.$topic.'</li>';   
	
	}
	?>
<li class="list-group-item"> <?php echo anchor('home/upcoming_events','View All')?> </li> </ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
					 <div class="col-lg-6  service" id="service1"><div class="panel panel-default">
                        <div class="panel-heading">
                            Upcoming Events
                        </div>
                        <!-- List group -->
  <ul class="list-group">
     <?php
    	
	foreach ($events as $object ) {
		
		$title= $object->postTitle;
		$title= $object->postTitle;
		$id=$object->postID;
        $topic= anchor('home/single_events/'.$id.'',''.$title.'');
	
	   echo '<li class="list-group-item">'.$topic.'</li>';   
	
	}
	?>
<li class="list-group-item"> <?php echo anchor('home/upcoming_events','View All')?> </li> 
</ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
   </div>
  </div>
  </div>
<?php $this->load->view('includes/footer');?>
</body></html>