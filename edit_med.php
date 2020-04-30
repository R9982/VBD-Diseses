
<?php

include('dbcon.php');


$id=$_GET['id'];

?>

<? 
					  $q=mysql_query("select * from med where id='$id'");
					  $r=mysql_fetch_array($q);
					  
					  ?>


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themepixels.com/demo/webpage/chain/wysiwyg.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 27 Oct 2014 12:57:16 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADMIN</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/bootstrap-wysihtml5.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
		
		
		
		
        <![endif]-->
		
		
		<script type="text/javascript" src="jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result).css({ 'height': '90px', 'width': '150px' });
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
</script>
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
                            <small class="text-muted">Admin</small>
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
                                    <li><a href="#">Forms</a></li>
                                    <li>Edit Medicine</li>
                                </ul>
                                <h4> Edit Medicine</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                       
						
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> Your 'Depertment' tab Containt </h4>
                             
                            </div>
							  
					  <? 
					  $q=mysql_query("select * from med where id='$id'");
					  $r=mysql_fetch_array($q);
					  
					  ?>
					
                                
                            <div class="panel-body">
							 <form action="edit_medi.php" method="post" enctype="multipart/form-data" >
							 
							 <input type="hidden" name="idx" value="<?  echo $r['id']; ?>" >
							 
							 <input type="text" class="form-control" name="name" value="<?  echo $r['title']; ?>" placeholder="Department Title" >
							 <br/>
							 
         <textarea placeholder="Enter Depertment description   text here..." name="contact" class="form-control" rows="7"><?  echo $r['description']; ?> </textarea>
							  
							  <br/>
							  
							 <div class="form-group">
                                               
                                                <div class="col-sm-8">
                                                    <input type="file" name="image" class="form-control" id="fileupload"  required />
													
                                                </div>
												<div id="dvPreview"> </div>
												</div>
							  
                            </div><!-- panel-body -->
                        </div><!-- panel -->
                        
						
						<input type="submit" value="UPDATE" class="btn btn-primary btn-rounded"/>
                      </form>
                </div>
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
