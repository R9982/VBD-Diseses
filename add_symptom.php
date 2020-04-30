<?php
include('dbcon.php');
$title=$_POST['name'];			
$update=mysql_query("insert into symptom (symptom) values('$title') ");
echo '<script>alert("New symptom Added Sucessfully..")</script>' ;
echo '<script>window.location="symptom.php"</script>' ;
?>
