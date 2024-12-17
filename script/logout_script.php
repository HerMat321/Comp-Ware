<?php
   //Wylogowanie
   if(isset($_POST['logout']))
   { 
       echo "<script>location.replace(\"index.php\")</script>";
       unset($_SESSION['user_login']);
       exit(); 
   }
?>