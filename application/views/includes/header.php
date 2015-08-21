<!----------------Header------------->
<div class=""style="width:90%margin-left: auto;margin-right: auto;">
<header>

<div class="top-header">

<div class="container">
<div class="row">
<div class="col-md-9 "><img src="<?php echo base_url(); ?>assets/images/emomentum-logo.png" style="width: 230px;" /></div><!-- end of col-md-4-->

<div class="col-md-3 "> 
<form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" />
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </div>
        </form>
 </div><!-- end of col-md-4-->
</div> <!-- end of row-->
</div> <!-- end of container-->

</div>


<div class="container">
<div class="row">

<nav class="navbar navbar-default navigation" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

    <div class=" main-nav">

        <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        </button>

        </div>

    

    <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="nav-holder collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

            <li class="active hide"><a href="#brand"></a></li>

            <li><?php echo anchor('home','HOME')?></li>
            <li>
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">DEPARTMENTS<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Business analytics</a></li>
					<li><a href="#">Web development</a></li>
					<li><a href="#">Information security</a></li>
					<li><a href="#">Consultancy services</a></li>
					<li><a href="#">Servers and cloud platforms</a></li>
					<li><a href="#">Network management</a></li>
					<li><a href="#">Support and deployment services</a></li>
					<li><a href="#">Collaboration</a></li>
					<li><a href="#">Client relationship management</a></li>
				</ul>
            </li>
            <li><?php echo anchor('gallery','GALLERY')?></li>
            <li><?php echo anchor('products','PRODUCTS')?></li>
            <li><?php echo anchor('blog','BLOG')?></li>
            </ul>

        </div>

    </div>
	

</div> <!-- end of row-->
</div> <!-- end of container-->
</nav> <!---end navbar-->


</header>