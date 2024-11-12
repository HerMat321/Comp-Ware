<?php
     //Wylogowanie
     if(isset($_POST['logout']))
    { 
        header("Location: index.php");
        unset($_SESSION['user_login']);
        exit(); 
    }

     //Usuniecie konta
     if(isset($_POST['deleteAccount']))
    {
        require_once 'database.php';
        $query = "DELETE FROM uzytkownicy WHERE id='$_SESSION[id]'";
        $connection->query($query);

        function alert($message)
        {
         echo "<script>alert('$message');</script>";
        }

        if($connection->query($query))
        {
          unset($_SESSION['user_login']);
          alert("Usunałeś swoje konto!");
          header("Location: index.php");
        }

        $connection->close();
    }
?>