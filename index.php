<?php 
error_reporting(0);
session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="login.html"</script>';

	
	}
		
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
        <link href="css/morris.css" rel="stylesheet">
        <link href="css/select2.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
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
                       <? include  '/menu.php'; ?>
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Dashboard</li>
                                </ul>
                                <h4>Dashboard</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
					
					
					
					
					<? 
					include('dbcon.php');
					
					date_default_timezone_set("Asia/Kolkata"); 
				$date=date('d/m/Y');
				$date1=date('Y-m-d');
				
				//$date='2015-11-29' ;
				include('dbcon.php');
				
				$q1=mysql_query("select * from patient where appo_date='$date'");
				$c1=mysql_num_rows($q1);
				
				$q2=mysql_query("select * from patient where booking_date='$date1'");
				$c2=mysql_num_rows($q2);
				
				
				$q3=mysql_query("select * from patient where status='NOT VISITED' AND appo_date='$date'");
				$c3=mysql_num_rows($q3);
 
					
					
					?>
					
                    
                   <div class="contentpanel">
                        
                        <div class="row row-stat">
                       
                            
                            <div class="col-md-12">
                                <div class="panel panel-primary noborder">
                                    <div class="panel-heading noborder">
                                        <div class="panel-btns">
                                            <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-users"></i></div>
                                        <div class="media-body">
                                            <h5 class="md-title nomargin">TODAY'S APPOINTED PATIENT</h5>
                                            <h1 class="mt5"><? echo $c1 ; ?></h1>
                                        </div><!-- media-body -->
                                        <hr>
                                        <div class="clearfix mt20">
                                            <div class="pull-left">
                                                <h5 class="md-title nomargin">TOTAL MAKED APPOINTMENT(TODAY) </h5>
                                                <h4 class="nomargin"><? echo $c2 ; ?></h4>
                                            </div>
                                            <div class="pull-right">
                                                <h5 class="md-title nomargin">TODAY'S NOT VISITED PATIENT</h5>
                                                <h4 class="nomargin"><? echo $c3 ; ?></h4>
                                            </div>
                                        </div>
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                            
                           
                        
                       
                                    </div><!-- panel -->
                                    
                                </div><!-- panel-group -->
                            </div>
                        </div><!-- row -->
                        
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        
        <script src="js/flot/jquery.flot.min.js"></script>
        <script src="js/flot/jquery.flot.resize.min.js"></script>
        <script src="js/flot/jquery.flot.spline.min.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/raphael-2.1.0.min.js"></script>
        <script src="js/bootstrap-wizard.min.js"></script>
        <script src="js/select2.min.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/dashboard.js"></script>

    </body>

<!-- Mirrored from themepixels.com/demo/webpage/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 27 Oct 2014 12:55:17 GMT -->
</html>
