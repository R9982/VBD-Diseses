<?php

include('dbcon.php');
 session_start();
 

 $login = mysql_query("SELECT * FROM admin WHERE (user = '" .($_POST['user']) . "') and (pass = '" .($_POST['pass']) . "')");
 $row=mysql_fetch_array($login);  
 
 if($row){
 $_SESSION['id'] = $row['id'];

 echo '<script>windows: location="index.php"</script>';
	}
	else {
		 echo '<script>windows: location="login2.html"</script>';
		}
 
 
?>
