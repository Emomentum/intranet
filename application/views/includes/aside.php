					 <div class="col-lg-4 service" id="service1">
					 	
					 	
					 	
<div class="panel panel-default" >
                        <div class="panel-heading">
                            Online Processes
                        </div>
                          <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/crm.png" class="online-processes">Suger CRM</a></li>
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/zoho.png" class="online-processes">Zoho people</a></li>
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/pm.png" class="online-processes">ProjectManager.com</a></li>
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/fresh.png" class="online-processes">Fresh Desk</a></li>
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/chimp.png" class="online-processes">Mail Chimp</a></li>
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/quickbooks.png" class="online-processes">Quick books</a></li>
    <li class="list-group-item"><a href="#"><img src="<?php echo base_url()?>assets/images/online_processes/emomentum.png" class="online-processes">websites</a></li>
  </ul>
                            
                        <!-- /.panel-body -->
                    </div>
                    
            
            <div class="panel panel-default">
                        <div class="panel-heading">
                            Upcoming Events
                        </div>
                        <!-- List group -->
  <ul class="list-group">
     <?php
		
		
		
	foreach ($upcoming as $object ) {
		$type=4;
		$title1= $object->Topic;
		$title= substr($title1, 0, 45);
		$details= $object->details;
		$id=$object->Blog_topic_id;
		$start= $object->Start_Date;
		$end=$object->End_Date;
        $topic= anchor('home/single_events/'.$id.'/'.$type.'',''.$title.'');
		
	
	   echo '<li class="list-group-item" style="color:green" >'.$topic.'...<br />';  
	    echo '<p>Starts on: '.$start.' and Ends On: '.$end.'</p></li>';  
	
	}
	?>
<li class="list-group-item"> <?php echo anchor('home/upcoming_events/'.$type.'','View All',array('style'=>'color:green'))?> </li> 
</ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>