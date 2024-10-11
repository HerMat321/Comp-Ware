<?php
if (isset($_POST['email']))
{
    //Założenie udanej walidacji
    $flag_ok = true;

    //Poprawność nazwy użytkownika
    $username = $_POST['username'];

    //Walidacja nazwy użytkownika
    if ((strlen($username) <3 ) || (strlen($username) > 20))
    {
        $flag_ok = false;
        $_SESSION['error_username'] = "Nazwa musi posiadać od 3 do 20 znaków";
    }

    if (ctype_alnum($username) == false)
    {
        $flag_ok = false;
        $_SESSION['error_username'] = "Nazwa może zawierać tylko litery i cyfry! [bez polskich znaków]";
    }

    //Walidacja adresu e-mail
    $email = $_POST['email'];
    $email_filter = filter_var($email,FILTER_SANITIZE_EMAIL);

    if ((filter_var($email_filter,FILTER_VALIDATE_EMAIL) == false || $email_filter != $email))
    {
        $flag_ok = false;
        $_SESSION['error_email'] = "Podaj poprawny adres e-mail!";
    }

    //Walidacja poprawności hasła
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

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

    //Akceptacja regulaminu
    if (!isset($_POST['reg']))
    {
        $flag_ok = false;
        $_SESSION['error_reg'] = "Potwierdź akceptację regulaminu!";
    }

    //Sprawdzenie reCaptchy
    $secret_key = "6LeGwk8qAAAAADP2pqzHK0U2uLzk4JYPM5_S_Bbm";
    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
    
    $answer = json_decode($verify);

    if ($answer->success == false)
    {
        $flag_ok = false;
        $_SESSION['error_bot'] = "Potwierdź że nie jesteś botem!";
    }

    require_once 'database.php';
    mysqli_report(MYSQLI_REPORT_STRICT);

    try
    {
        if ($connection->connect_errno != 0)
        {
            throw new Exception (mysqli_connect_errno());
        }
        else
        {
            //Czy email już istnieje w bazie danych ?
            $query = "SELECT id FROM uzytkownicy WHERE email='$email'";

            $result = $connection->query($query);

            if(!$result) throw new Exception ($connect->error);

            $how_emails = $result->num_rows;

            if ($how_emails > 0)
            {
                $flag_ok = false;
                $_SESSION['error_email'] = "Istnieje już konto przypisane do tego adresu e-mail!";
            }

            //Czy nazwa użytkownika jest już zarezerwowana?
            $query = "SELECT id FROM uzytkownicy WHERE nazwa_uzytkownika='$username'";

            $result = $connection->query($query);

            if (!$result) throw new Exception ($connection->error);

            $how_users = $result->num_rows;

            if ($how_users > 0)
            {
                $flag_ok = false ;
                $_SESSION['username'] = "Nazwa użytkownika jest już zajęta";
            }
            
            if($flag_ok == true)
            {
                //Walidacja się udała, dodajemy użytkownika do bazy
                if ($connection->query("INSERT INTO uzytkownicy VALUES (NULL,'$username','$password_hash','$email','{$_POST['city']}','{$_POST['street']}','{$_POST['houseNumber']}')"))
                {
                    $_SESSION['success_add'] = true;
                    header('Location: login.php');
                }
                else
                {
                    throw new Exception ($connection->error);
                }
            }
            $connection->close();
        }
    }
    catch (Exception $e)
    {
        echo "<span style:\"color:red\">Błąd serwera. Rejestracja aktualnie nie jest możliwa</span>";

        echo "<br>Informacja developerska: {$e}";
    }
}
?>