<?php
    if((isset($_SESSION['user_login'])) && ($_SESSION['user_login'] == true))
    {
        header('Location: my_account.php');
        exit();
    }
?>