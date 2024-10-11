<?php
    //Skrypt walidujący dane z formularza
    //Skrypt logujący uzytkownika na konto

    session_start();

    require_once "database.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try
    {
        if($connection->connect_errno != 0)
        {
            throw new Exception($connection->connect_errno);
        }
        else
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $query = "SELECT * FROM uzytkownicy WHERE email='$email'";

            if($result = $connection->query($query))
            {
                $how_users = $result->num_rows;

                if($how_users > 0)
                {
                    $row = $result->fetch_object();
                    if(password_verify($password,$row->haslo))
                    {
                        $user = $row->email;
                        $result->close();
                        $_SESSION['username'] = $row->nazwa_uzytkownika;
                        $_SESSION['email'] = $row->email;

                        header("Location: my_account.php");
                    }
                    else
                    {
                        echo "<span style=\"color:red\">Nieprawidłowy login lub hasło!</span>";
                    }
                }
                else
                {
                    echo "<span style=\"color:red\">Nieprawidłowy login lub hasło!</span>";
                }
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