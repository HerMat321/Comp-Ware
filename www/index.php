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
                <div class="index">
                    <header><h1>Strona Główna</h1></header>
                    <h2>Witamy w Comp-Ware Shop!</h2>

                    <p>Jesteśmy wiodącą hurtownią komputerową, oferującą szeroki wybór sprzętu i akcesoriów komputerowych. Nasza oferta obejmuje laptopy, komputery osobiste, zasilacze, monitory, pamięć RAM, dyski twarde, napędy, pamięć przenośną, oprogramowanie i wiele innych produktów.</p>

                    <p>Naszym celem jest dostarczanie klientom wysokiej jakości produktów w konkurencyjnych cenach. Współpracujemy z renomowanymi producentami, aby zapewnić niezawodność i satysfakcję z zakupów.</p>

                    <h2>Dlaczego warto wybrać Comp-Ware Shop?</h2>

                    <ul>
                        <li>Ogromny wybór produktów</li>
                        <li>Konkurencyjne ceny</li>
                        <li>Szybka i bezpieczna dostawa</li>
                        <li>Profesjonalna obsługa klienta</li>
                        <li>Atrakcyjne promocje i rabaty</li>
                    </ul>

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