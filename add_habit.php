<?php
include('dbcon.php');
$title=$_POST['name'];			
$update=mysql_query("insert into habit (habit) values('$title') ");
echo '<script>alert("New habit Added Sucessfully..")</script>' ;
echo '<script>window.location="habit.php"</script>' ;
?>
