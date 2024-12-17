<header>
        <!--Logo-->
        <section>
            <div class="logo">
                <a href="index.php"><img src="../img/logo.png" alt="logo"></a>
                <br>
                <br>
            </div>
        </section>

        <!--Panel-->
        <section>
            <div class="panel">
                <form method="POST">
                    <input type="search" id="search" placeholder="Czego szukasz?" name="information"><button id="search" name="searchInformation">Wyszukaj</button>
                </form>

                <?php
                    include "../script/search_script.php";
                ?>
                
                <div class="insidePanel" style="margin-left: 30%">
                    <a href="#"><img src="../img/basket.png" alt="basket"></a>
                    <img src="../img/user.png" alt="user">
                    <div style="display: inline-block">
                        <b><a href="login.php">Zaloguj się</a>
                    </div>
                    | |
                    <div style="display: inline-block">
                        <a href="sign_up.php">Zarejestruj się</a></b>
                    </div>
                </div>

            </div>
        </section>
    </header>