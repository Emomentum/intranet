<html>
<head>
<style>
.scrollable {
  position:relative;
  overflow:hidden;
  max-width: 995px;
  width:100%;
  height:115px;
  margin-bottom:35px;
}
.scrollable .items {
  width:20000em;
  position:absolute;
}
.items div {
  float:left;
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
	<div class="col-lg-12  service" id="service1">
		<div class="panel panel-default">
    			<div class="panel-heading">
            		  <span>Our Team</span>
    			</div> 
    			<div style ="padding: 13px 31px 6px 31px;text-align: justify;min-height: 163px;">
				<!-- "previous page" action -->
					<a class="prev browse left"></a>
 
<!-- root element for scrollable -->
					<div class="scrollable" id="scrollable">
 
  <!-- root element for the items -->
					<div class="items">
 
			<!-- 1-5 -->
   
                <div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Development Lead</p>
					<p style = "padding-left:37px;">Grace Mureithi </p>
                </div>
				<div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Developer</p>
					<p style = "padding-left:37px;">Adam Mohammed </p>
                </div>
					<div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Developer</p>
					<p style = "padding-left:37px;">David Odhiambo </p>
                </div>
					<div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Developer</p>
					<p style = "padding-left:37px;">David Odhiambo </p>
                </div>
					<div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Developer</p>
					<p style = "padding-left:37px;">David Odhiambo </p>
                </div>
					<div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Developer</p>
					<p style = "padding-left:37px;">David Odhiambo </p>
                </div>
					<div>
					<img src = ""width="150"/><br><br>
					<p style = "padding-left:37px;">Developer</p>
					<p style = "padding-left:37px;">David Odhiambo </p>
                </div>
  </div>
    			</div>    
 
<!-- "next page" action -->
<a class="next browse right"></a>

     				
                          <!-- List group -->
  				
                        <!-- /.panel-body -->
       </div>
 <!-- /.panel -->
 	</div>
		<div class="col-lg-12  service" id="service1">
		<div class="panel panel-default">
    			<div class="panel-heading">
            		  <span>Public Folders</span>
    			</div> 
    			<div style ="padding: 13px 31px 6px 31px;text-align: justify;">
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