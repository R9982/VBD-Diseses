<?php

include("dbcon.php");

$id=$_GET['id'];

mysql_query("update patient set status='VISITED' where id='$id'");


echo '<script>window.location="patient_list.php" </script>'; 
?>