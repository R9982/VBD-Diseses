

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themepixels.com/demo/webpage/chain/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 27 Oct 2014 12:57:34 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADMIN</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/select2.css" rel="stylesheet" />
        <link href="css/style.datatables.css" rel="stylesheet">
        <link href="css/dataTables.responsive.css" rel="stylesheet">

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
                    
        
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
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
                       
                        <div class="media-body">
                           <h4 class="media-heading">Welcome Admin</h4>
                        </div>
                    </div><!-- media -->
					
            <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                     <? include('menu.php') ; ?>
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-th-list"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                   
                                </ul>
                                <h4>Medicine</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
					
					<? 
					
					include('dbcon.php');
					
					?>
                    
                    <div class="contentpanel">
                        
           
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="details-control">
                                    <tr>
                                        <th>NAME</th>
                                        <th>DESCRIPTION</th>
                                        <th>IMAGE</th>
                                        
                                        <th>  STATUS</th>
										 
                                    </tr>
                                </thead>
                         
                                <tbody>
								<?
								$q=mysql_query("select * from med");
					while($r=mysql_fetch_array($q))
					{
					?>
                                    <tr>
                                        
                                        <td><? echo $r['title'] ; ?></td>
                                        <td><? echo $r['description'] ; ?></td>
                                        <td><img src="dept/<? echo $r['photo']; ?>" style="height:50px; width:80px;">       </td>
										<td><a href="edit_med.php?id=<? echo $r['id']; ?>" title="CLICK TO EDIT"><span class="glyphicon glyphicon-pencil"></span></a>
										&nbsp;&nbsp;&nbsp;
<a href="del_med.php?id=<? echo $r['id']; ?>" title="CLICK TO DELETE"   onClick=" return confirm('Are you sure Delete this ??');" ><span class="glyphicon glyphicon-remove"></span></a>
										</td>
                                        
										
                                    </tr>
									
									<? } ?>
                                
                                </tbody>
                            </table>
                        </div><!-- panel -->
                        
                        <br />
                        
                                </div><!-- panel -->
                        
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
        
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script src="js/dataTables.responsive.js"></script>
        <script src="js/select2.min.js"></script>

        <script src="js/custom.js"></script>
        <script>
            jQuery(document).ready(function(){
                
                jQuery('#basicTable').DataTable({
                    responsive: true,
					"order": [],
					
					
					
                });
              
            });
            
           
        </script>

    </body>

<!-- Mirrored from themepixels.com/demo/webpage/chain/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 27 Oct 2014 12:57:37 GMT -->
</html>
