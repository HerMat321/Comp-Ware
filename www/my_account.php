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
                        
                        <button name="changePassword">Zmień hasło</button>
                        <button name="changeEmail">Zmień email</button>
                        <button name="toBasket">Przejdź do koszyka</button>
                    

                    <!--Obsługa przycisków-->
                    <?php
                        //Wylogowanie
                        if(isset($_POST['logout']))
                        { 
                            header("Location: index.php");
                            unset($_SESSION['user_login']);
                            exit(); 
                        }

                        //Usuniecie konta
                        if(isset($_POST['deleteAccount']))
                        {
                           require_once 'database.php';
                           $query = "DELETE FROM uzytkownicy WHERE id='$_SESSION[id]'";
                           $connection->query($query);

                           function alert($message)
                           {
                            echo "<script>alert('$message');</script>";
                           }

                           if($connection->query($query))
                           {
                             unset($_SESSION['user_login']);
                             alert("Usunałeś swoje konto!");
                             header("Location: index.php");
                           }
                        }

                        //Zmiana hasla

                    ?>
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