<?php
 session_start();
unset($_SESSION['id']);
 header('Location:login.html');

unset($_SESSION['admin']);
 header('Location:login.html');
 
?>