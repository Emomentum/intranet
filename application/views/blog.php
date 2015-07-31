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
    <div class="col-lg-5 service" id="service1">
    	<div class="panel panel-default">
                        <div class="panel-heading">
                            Topics
							</div>
                        <div class="panel-body">
								<p>No topics available</p>         
                        </div>
                        <!-- /.panel-body -->
         </div>
                    <!-- /.panel --></div>
					 <div class="col-lg-7  service" id="service1"><div class="panel panel-default"  style="min-height: 609px;">
                        <div class="panel-heading">
                            Comments
                        </div>
                       
                          <!-- List group -->
  <ul class="list-group">
  </ul>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>
                   </div>
                  </div>
<?php $this->load->view('includes/footer');?>

</body></html>