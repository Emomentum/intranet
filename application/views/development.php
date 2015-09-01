<html>
<head>
<style>
.items div {
  float:left;
}
.overlay.employee_details:hover{
	opacity:0.3;
	background-color:#ccc;	
}
.overlay p:hover{
		opacity:1;
	}
</style>
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
		<div>
    			<div>
            		  <span><u><h4>Our Team</h4></u></span>
    			</div> 
    			<div>
					<div>
						<div class="items">
							<?php
							 foreach($team as $team):
								 ?>
				   
                <div class = "employee_details" style = "border: 1px solid #ccc;margin: 2px 2px 17px 6px;">
                	<div style = "text-align:center">
					<img src = "<?=base_url();?>assets/images/profile.png"width="213" style = "width: 98%;padding-top: 1px;"/><br><br>
					</div>
					<p style = "padding-left:37px;"><?=$team->First_Name?> <?=$team->Last_Name; ?> </p>
					<div class = "overlay" style = "opacity:1"><p style = "padding-left:37px;"><?=$team->Position;?></p></div>			
                </div>
                <?php
			 endforeach;
                ?>
  </div>
    			</div>    
       </div>
 <!-- /.panel -->
 	</div>
 	<hr  class = "col-lg-11" style="margin-top: 0px;"/>
		<div class="col-lg-8  service" id="service1">
		<div>
    			<div>
            		  <span><u><h4>Public Folders</h4></u></span>
    			</div> 
    			<div>
    				
					<iframe style = "max-width:650px;width:130%;background-color: #fff;" src = "https://drive.google.com/embeddedfolderview?id=0B4G2H5OFvlsmfkNNNjhWdWdjSVpIblpZTnE1LW1hR1ZzX3pyM0pIS1ozbXB4WWhYQUFjb2M#list" width = "800" height = "281" frameborder = "0">
                    </iframe>
                      <a href = "https://drive.google.com/a/emomentum-interactive.com/folderview?hl=en&id=0B4G2H5OFvlsmfkNNNjhWdWdjSVpIblpZTnE1LW1hR1ZzX3pyM0pIS1ozbXB4WWhYQUFjb2M#list" target ="_blank" style = "padding-bottom:8px;float:left"><img src = "https://cdn.rawgit.com/Emomentum/Jambojet/master/images/drive folder.png" width = "22"/>Open in drive</a> 
                
    			</div>                     
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
 <!-- /.panel -->
 	</div>
  </div>
                    <?php 
	$this->load->view('includes/aside');
?>
  <!--end of row -->
                  </div>

<?php $this->load->view('includes/footer');?>

</body>
</html>