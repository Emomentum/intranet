<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('Admin/includes/header');?>
</head>
<body>
    <div id="wrapper">
<?php $this->load->view('Admin/includes/navigation');?>

 
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">New Page</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                       <div class="col-lg-12">
                       	 
						
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill In All fields
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								
								
                                    <!--<form  method="post" action="" role="form">-->
    <?php
        echo form_open('home/save_events/'.$type.'');    
    ?>

 <div class="form-group">
  <label>Page Title</label>
<<<<<<< .mine
 <input name="title" class="form-control">
</div >
=======
 <input name="title" class="form-control">
</div >
 <div class="form-group" name="dates" type="hidden">
  <label>Start Date</label>
 <input id="start" name="title" class="form-control" >
</div>
>>>>>>> .r57
 <div class="form-group" name="dates">
  <label>End Date</label>
 <input id="end" name="title" class="form-control" >
</div>

  <div class="form-group"> 
     
  <label>Event Content</label>
  <textarea name="content"class="form-control" rows="10"></textarea> 
  </div>
  

<a href="#"  name="save" type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#basicModal">Save</a>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                <h3>Do you want to Save this Page?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button name="save" type="submit" class="btn btn-primary">Save Now</button>
        </div>
    </div>
  </div>
</div>

<!-- /#modal -->
                                   <!-- </form>-->
                                    <?php
        echo form_close();
    ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div> 
		
		
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('Admin/includes/scripts');?>

</body>

</html>
