<?php
   session_start();
   if(isset($_SESSION['username'])){
       session_destroy();
       header('location: admin_login.php');
   }
   else{
       header('location: admin_login.php');
   }
?>