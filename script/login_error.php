<?php
    if(isset($_SESSION['login_error']))
    {
        echo $_SESSION['login_error'];
        unset($_SESSION['login_error']);
    }
?>