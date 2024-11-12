<?php
    session_start();
    include '../script/if_!userLogin.php';
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
                <div class="newsletter">
                    <header><h1>Zmień Hasło</h1></header>
                    <form method="POST">
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
                        <label for="newPassword">Hasło</label>
                        <br>
                        <input type="password" placeholder="Wprowadź nowe hasło" name="newPassword">
                        <br>
                        <label for="newPassword2">Powtórz Hasło</label>
                        <br>
                        <input type="password" placeholder="Powtórz nowe hasło" name="newPassword2">
                        <br>
                        <button type="submit">Zmień Hasło</button>
                        <br>
                        <br>
                    </form>

                    <!--Skrypt zmiany hasla-->
                    <?php
                       include "../script/change_passwordScript.php";
                    ?>
                    <footer><img src="../img/logo.png" alt="logo"></footer>
                    <br>
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