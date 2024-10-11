<?php
    session_start();
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
                <div class="signup">
                    <header><h3>Moje Konto</h3></header>
                    <?php
                        echo "<h3>Witaj {$_SESSION['username']}!</h3>
                                <p>Oto twój panel użytkownika. Z tego miejsca możesz zarządzać swoim kontem!</p>
                                <p>Twój adres email: {$_SESSION['email']}";
                    ?>
                    <br>
                    <br>
                    <button name="logout">Wyloguj</button>
                    <button name="deleteAccount">Usuń konto</button>
                    <button name="changePassword">Zmień hasło</button>
                    <button name="changeEmail">Zmień email</button>
                    <button name="toBasket">Przejdź do koszyka</button>
                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
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