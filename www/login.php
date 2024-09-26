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
                        <header>Panel Logowania</header>
                        <br>
                        <form method="POST">
                            <label for="email">Podaj adres e-mail:</label>
                            <br>
                            <input type="email" id="email" placeholder="Podaj swój e-mail" required>
                            <br>
                            <label for="password">Hasło:</label>
                            <br>
                            <input type="password" id="password" placeholder="Podaj hasło" required>
                            <br>
                            <label for="password2">Powtórz hasło:</label>
                            <br>
                            <input type="password2" id="password2" placeholder="Powtórz hasło" required>
                            <br>
                            <br>
                            <button type="submit">Zaloguj się</button><button type="reset">Resetuj Formularz</button>
                        </form>
                        <!--Skrypt walidujący dane z formularza-->
                        <!--Skrypt logujący uzytkownika na konto -->
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