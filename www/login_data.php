<?php
    
    require_once "database.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try
    {
        if($connection->connect_errno != 0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $query = "SELECT * FROM uzytkownicy WHERE email='$email' AND haslo='$password'";

            $result = $connection->query($query);

            if($result)
            {
                $how_users = $result->num_rows;
            }
            else
            {
                throw new Exception ($connection->error);
            }

            $connection->close();
        }
    }
    catch(Exception $e)
    {
        echo "<span style=\"color:red\">Błąd serwera! Logowanie niemożliwe!</span>";
        echo "<br> Informacja developerska".$e->getMessage();
    }
    
     


?>