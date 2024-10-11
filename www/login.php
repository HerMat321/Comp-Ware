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
                        <h2><i class="icon-user"></i></h2>
                        <form method="POST" action="login_data.php">
                            <label for="email">Podaj adres e-mail:</label>
                            <br>
                            <input type="email" id="email" name="email"  placeholder="Podaj swój e-mail" required>
                            <br>
                            <label for="password">Hasło:</label>
                            <br>
                            <input type="password" id="password" name="password" placeholder="Podaj hasło" required>
                            <br>
                            <br>
                            <button type="submit">Zaloguj się</button><button type="reset">Resetuj Formularz</button>
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