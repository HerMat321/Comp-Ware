<?php
    if (isset($_POST['newPassword']))
    {
        //Założenie udanej walidacji
        $flag_ok = true;

        //Walidacja poprawności hasła
        $password = $_POST['newPassword'];
        $password2 = $_POST['newPassword2'];

        if ((strlen($password) < 8 ) || (strlen($password) > 20))
        {
            $flag_ok = false;
            $_SESSION['error_password'] = "Hasło musi składać się z przynajmniej 8 do 20 znaków!";
        }

        if ($password != $password2)
        {
            $flag_ok = false;
            $_SESSION['error_password'] = "Podane hasła nie są identyczne!";
        }

        $password_hash = password_hash($password,PASSWORD_DEFAULT);

        require_once 'database.php';
        $query = "UPDATE uzytkownicy SET haslo='$password_hash' WHERE id='$_SESSION[id]'";

        function alert($message)
        {
            echo "<script>alert('$message');</script>";
        }

        $connection->query($query);

        if($connection->query($query))
        {
            alert("Hasło zostało zmienione!");
            header("Location: my_account.php");
        }

    }
?>