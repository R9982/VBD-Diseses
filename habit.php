
<?php
include('dbcon.php');
/*
include('dbcon.php');
session_start();
$session_id='14'; //$session id
?>

<? 
					  $q=mysql_query("select * from institute where id='$session_id'");
					  $r=mysql_fetch_array($q);
					  */
					  ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADMIN</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/bootstrap-wysihtml5.css" rel="stylesheet" />


    </head>

    <body>
        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        
                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                        
                       
                        
                        <div class="btn-group btn-group-list btn-group-notification">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                             
                            
                            </button>
                            <div class="dropdown-menu pull-right">
                              
                               
                                <div class="dropdown-footer text-center">
                                 
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-list btn-group-messages">
                          
                            
                              
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                          
                              <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        
       <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        
                            <img class="img-circle" src="images/logo.png" alt="" style="height:90px; width:90px;">
                     
                        <div class="media-body">
                            <h4 class="media-heading" style="color:#0033FF;"><i><? //echo $r['name']; ?></i></h4>
                            <small class="text-muted">ADMIN</small>
                        </div>
                    </div><!-- media -->
                    
                   
                 <ul class="nav nav-pills nav-stacked">
                       <? include('menu.php') ; ?>
						
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="#">HOME</a></li>
                                    <li>HABIT</li>
                                </ul>
                                <h4>HABIT</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                       
						
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> ADD HABIT</h4>
                             
                            </div>
							  
					
                                
                            <div class="panel-body">
							 <form action="add_habit.php" method="post" enctype="multipart/form-data" >
							 
							 <input type="text" class="form-control" name="name" placeholder="WRITE HABIT" >
						</div><!-- panel-body -->
                        </div><!-- panel -->
                        
						
						<input type="submit" value="DONE" class="btn btn-primary btn-rounded"/>
                      </form>
                </div>
				<div class="contentpanel">
                        
           
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="details-control">
                                    <tr>
                                     
                                        <th>HABIT</th>
                                    
                                   	  <th>ACTION</th>
										 
                                    </tr>
                                </thead>
                         
                                <tbody>
								<?
								$q=mysql_query("select * from habit");
					while($r=mysql_fetch_array($q))
					{
					?>
                                    <tr>
                                        <td><? echo $r['habit'] ; ?></td>
                                        
										
										
									<td><button class="btn btn-dark btn-sm" data-toggle="modal" data-target=".bs-example-modal-static<? echo $r['id'] ; ?>">Details</button></td>
                                    </tr>

									<? } ?>
                                
                                </tbody>
                            </table>
                        </div><!-- panel -->
            </div><!-- mainwrapper -->
        </section>


        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        
        <script src="js/wysihtml5-0.3.0.min.js"></script>
        <script src="js/bootstrap-wysihtml5.js"></script>
        <script src="js/ckeditor/ckeditor.js"></script>
        <script src="js/ckeditor/adapters/jquery.js"></script>

        <script src="js/custom.js"></script>
        <script>
            jQuery(document).ready(function(){
                
              // HTML5 WYSIWYG Editor
              jQuery('#wysiwyg').wysihtml5({color: true,html:true});
              
              // CKEditor
              jQuery('#ckeditor').ckeditor();
              
            });
        </script>

    </body>

<!-- Mirrored from themepixels.com/demo/webpage/chain/wysiwyg.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 27 Oct 2014 12:57:30 GMT -->
</html>
