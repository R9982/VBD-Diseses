<?php
include('dbcon.php');

$name=$_POST['name'] ; 
$habit=implode("," ,$_POST['habit'] );
$symptom=implode("," ,$_POST['symp'] );

$update=mysql_query("insert into  disease (habit,symptom,name) values('$habit','$symptom','$name') ");

echo '<script>alert("New Disease Added Sucessfully..")</script>' ;
echo '<script>window.location="disease.php"</script>' ;
		



?>
