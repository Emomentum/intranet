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
            		  <span>Photo Albums</span>
    			</div> 
    			<div style ="padding: 36px 31px 31px 31px;;text-align: justify;">
    				
					<iframe style = "max-width:1045px;width:100%;background-color: #fff;" src = "https://drive.google.com/embeddedfolderview?id=0B4G2H5OFvlsmfjVJSVdPUjh6Y0ZiR29MMlE4UWk0RXFfYkdKaGZndUYtd2hkYUlBYzRCdk0#grid" width = "800" height = "281" frameborder = "0">
                    </iframe>
                      <a href = "https://drive.google.com/a/emomentum-interactive.com/folderview?hl=en&id=0B4G2H5OFvlsmfjVJSVdPUjh6Y0ZiR29MMlE4UWk0RXFfYkdKaGZndUYtd2hkYUlBYzRCdk0#grid" target ="_blank" style = "padding-bottom:8px;float:left"><img src = "https://cdn.rawgit.com/Emomentum/Jambojet/master/images/drive folder.png" width = "22"/>Open in drive</a> 
                
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