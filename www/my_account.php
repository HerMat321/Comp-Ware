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
                <div class="signup">
                    <header><h3>Moje Konto</h3></header>
                    
                    <!--Dane o uzytkowniku-->
                    <?php
                        include '../script/user_data.php';
                    ?>
                    <br>
                    <form method="POST">
                        <button name="logout">Wyloguj</button>
                    </form>

                    <form method="POST">
                        <button name="deleteAccount">Usuń konto</button>
                    </form>
                    
                    <form method="POST" action="changePassword.php">
                        <button name="changePassword">Zmień hasło</button>
                    </form>

                    <form method="POST" action="changeEmail.php">
                        <button name="changeEmail">Zmień email</button>
                    </form>
                        <button name="toBasket">Przejdź do koszyka</button>
                    

                    <!--Obsługa przycisków-->
                    <?php
                       include "../script/button_scripts.php";
                    ?>
                    <footer><br><img src="../img/logo.png" alt="logo"><br><br></footer>
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