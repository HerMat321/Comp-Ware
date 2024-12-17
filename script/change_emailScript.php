<?php
    //Zmiana adresu email
    if(isset($_POST['newEmail']))
    {
        require_once "database.php";
        $new_email = $_POST['newEmail'];
        $id = $_SESSION['id'];
        $query = "UPDATE uzytkownicy SET uzytkownicy.email=\"$new_email\" WHERE uzytkownicy.id=\"$id\"";
        $connection->query($query);

        function alert($message)
        {
            echo "<script>alert('$message');</script>";
        }

        if($connection->query($query))
        {
            alert("Email został zmieniony!");
            //header("Location: index.php");
            echo "<script>location.replace(\"my_account.php\")</script>";
        }
    }
?>