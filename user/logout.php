<?php
   session_start();
   if(isset($_SESSION['username'])){
       session_destroy();
       header('location: userLogin.php');
   }
   else{
       header('location: userLogin.php');
   }
?>