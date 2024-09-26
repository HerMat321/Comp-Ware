<?php
//Skrypt walidujący dane z formularza
    session_start();
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
        $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response'.$_POST['g-recaptcha-response']);
        
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
                
                if($flag_ok = true)
                {
                    //Walidacja się udała, dodajemy użytkownika do bazy
                    if ($connection->query("INSERT INTO uzytkownicy VALUES (NULL,'$username','$password_hash','$email',NULL,NULL,NULL)"))
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

<!DOCTYPE php>
<php lang="pl">

<?php
    include 'page_structure/head.php';
?>

<body>
    <?php
        include 'page_structure/header.php';
    ?>

    <div style="clear: both;"></div>

    <!--Menu-->
    <?php
        include 'page_structure/menu.php';
    ?>

    <!--Main-->
    <main>
        <article>

            <!--ScrollUp-->
            <a href="#" class="scrollUp"></a>

            
            <div class="main">
                <!--Sign Up-->
                <section>
                    <div class="signup">
                        <header>Panel Rejestracji</header>
                        <br>
                        <form method="POST">
                            <label for="username">Nazwa użytkownika:</label>
                            <br>
                            <input type="text" id="username" name="username" placeholder="Podaj nazwę użytkownika" required>

                            <!--Obsługa błędu-->
                            <?php
                                if(isset($_SESSION['error_username']))
                                {
                                    echo "<div style=\"color:blue; margin-top: 15px; background-color:white; box-shadow: 10px 10px 10px black\";>
                                        <strong>{$_SESSION['error_username']}</strong>
                                    </div>";
                                    unset($_SESSION['error_username']);
                                }
                            ?>

                            <br>
                            <label for="password">Hasło:</label>
                            <br>
                            <input type="password" id="password" name="password" placeholder="Podaj hasło" required>

                            <!--Obsługa błędu-->
                            <?php
                                if(isset($_SESSION['error_password']))
                                {
                                    echo "<div style=\"color:blue; margin-top: 15px; background-color:white; box-shadow: 10px 10px 10px black\";>
                                        <strong>{$_SESSION['error_password']}</strong>
                                    </div>";
                                    unset($_SESSION['error_password']);
                                }
                            ?>

                            <br>
                            <label for="password2">Powtórz hasło:</label>
                            <br>
                            <input type="password" id="password2" name="password2" placeholder="Powtórz hasło" required>
                            <br>
                            <label for="email">Podaj adres e-mail:</label>
                            <br>
                            <input type="email" id="email" name="email" placeholder="Podaj swój e-mail">

                            <!--Obsługa błędu-->
                            <?php
                                if(isset($_SESSION['error_email']))
                                {
                                    echo "<div style=\"color:blue; margin-top: 15px; background-color:white; box-shadow: 10px 10px 10px black\";>
                                        <strong>{$_SESSION['error_email']}</strong>
                                    </div>";
                                    unset($_SESSION['error_email']);
                                }
                            ?>

                            <br>
                            <br>
                            <input type="checkbox" id="reg" name="reg"><label for="reg">Akceptuje Regulamin</label>

                            <!--Obsługa błędu-->
                            <?php
                                if(isset($_SESSION['error_reg']))
                                {
                                    echo "<div style=\"color:blue; margin-top: 15px; background-color:white; box-shadow: 10px 10px 10px black\";>
                                        <strong>{$_SESSION['error_reg']}</strong>
                                    </div>";
                                    unset($_SESSION['error_reg']);
                                }
                            ?>

                            <!--ReCaptcha!-->
                            <div class="g-recaptcha" data-sitekey="6LeGwk8qAAAAAKB_w4VN3huZx2F91BYIHzP_IFpa" style="margin-left: 36%; margin-top: 15px;"></div>

                            <!--Obsługa błędu-->
                            <?php
                                if(isset($_SESSION['error_bot']))
                                {
                                    echo "<div style=\"color:blue; margin-top: 15px; background-color:white; box-shadow: 10px 10px 10px black\";>
                                        <strong>{$_SESSION['error_bot']}</strong>
                                    </div>";
                                    unset($_SESSION['error_bot']);
                                }
                            ?>

                            <br>
                            <br>
                            <button type="submit">Zarejestruj się!</button><button type="reset">Resetuj Formularz</button>
                        </form>
                        <!--Skrypt zapisujacy uzytkownika do bazy danych-->
                    </div>
                </section>
            </div>
        </article>

        <!--Newsletter-->
        <?php
            include 'page_structure/newsletter.php';
        ?>

        <!--Banks-->
        <?php
            include 'page_structure/banks.php';
        ?>
    </main>

    <!--Footer-->
    <?php
        include 'page_structure/footer.php';
    ?>
</body>
</php>