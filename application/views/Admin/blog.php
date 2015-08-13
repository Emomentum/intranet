<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('Admin/includes/header');?>
</head>
<body>
    <div id="wrapper">
<?php $this->load->view('Admin/includes/navigation');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Emomentum Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row"> 
            	             <div class="col-lg-4">
            	             	<a href="#" class="btn btn-primary btn-block">New Post</a><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-comment fa-fw"></i>Blog Topics
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                            	<?php foreach ($blogTopics as $topic):?>
                                <div class="list-group-item" style = "padding-bottom:24px;">
                                    <?=anchor('home','$topic->Topic');?>
                                    <a href="#" class="pull-right text-muted small" style = "color: #05AA52;font-weight: 600;"><em>Edit</em></a><br>
                                    <a href="#" class="pull-right text-muted small" style = "color: #F70039;font-weight: 600;"><em>Delete</em></a>
                                   
                                </div>
                                <? endforeach ?>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Topic Description
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Topic Name</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>

                          
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
   
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('Admin/includes/scripts');?>

</body>

</html>
