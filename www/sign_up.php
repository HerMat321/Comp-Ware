<?php
//Skrypt zapisujacy uzytkownika do bazy danych
//Skrypt walidujący dane z formularza
    session_start();
    include '../script/signupScript.php';

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
                        <h2><i class="icon-user"></i></h2>
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
                            <h2><i class="icon-post"></i></h2>
                            <h2>Dane do wysyłki zamówienia:</h2>
                            <label for="city">Miasto:</label>
                            <br>
                            <input type="text" id="city" name="city" placeholder="Podaj miasto" required>

                            <br>
                            <label for="street">Ulica:</label>
                            <br>
                            <input type="text" id="street" name="street" placeholder="Podaj ulicę" required>
                            
                            <br>
                            <label for="houseNumber">Numer domu / mieszkania:</label>
                            <br>
                            <input type="text" id="houseNumber" name="houseNumber" placeholder="Podaj nr domu" required>

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