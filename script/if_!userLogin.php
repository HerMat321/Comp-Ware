<?php
    if(!isset($_SESSION['user_login']))
    {
        header('Location: index.php');
        exit();
    }
?>