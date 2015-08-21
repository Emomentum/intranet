<?php 
	$this->load->view('includes/header');
?>
<?php $this->load->view('includes/scripts');?>
<title>
  <?php 
    if (isset($_GET['album'])) {
	  echo $_GET['album'];
	} else {
	  echo 'Photo Gallery';
	}
  ?>
</title>

<!--<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.min.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {	
	
	// colorbox settings
	$(".albumpix").colorbox({rel:'albumpix'});
	
	// fancy box settings
	/*
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
	*/
});
</script>
<!-- end gallery header -->
</head>
<body>


<p>&nbsp;</p>

<div class="gallery"> 
<?php
  $this->load->view('bgallery');
 //include('http://localhost/Ci/assets/folio-gallery.php')
  // include "assets/folio-gallery.php";
 ?>
</div>   

</body>
</html>