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
                <div class="monitors">
                    <header><h2><i class="icon-desktop"></i>Monitory - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Monitory</strong> w Comp-Ware Shop!</p>

                    <p>Nasza kategoria monitorów jest zaprojektowana, aby spełnić wszelkie oczekiwania naszych klientów, niezależnie od tego, czy potrzebujesz monitora do pracy biurowej, rozrywki, gier komputerowych, czy profesjonalnych zastosowań graficznych. Oferujemy szeroki wybór monitorów różnych marek i typów, aby zapewnić, że znajdziesz idealne rozwiązanie dla swoich potrzeb.</p>

                    <h3>Rodzaje monitorów dostępnych w naszej ofercie:</h3>

                    <ol>
                        <li>Monitory LED:
                            <ul>
                                <li>Energooszczędne i oferujące doskonałą jakość obrazu, monitory LED są idealne do codziennego użytku, zarówno w pracy, jak i w domu.</li>
                            </ul>
                        </li>

                        <li>Monitory IPS:
                            <ul>
                                <li>Zapewniają szerokie kąty widzenia i doskonałe odwzorowanie kolorów, co czyni je doskonałym wyborem dla grafików i projektantów.</li>
                            </ul>
                        </li>

                        <li>Monitory dla graczy:
                            <ul>
                                <li>Wysoka częstotliwość odświeżania, niski czas reakcji i technologie synchronizacji obrazu (G-Sync, FreeSync) sprawiają, że są idealne dla entuzjastów gier komputerowych.</li>
                            </ul>
                        </li>

                        <li>Monitory 4K:
                            <ul>
                                <li>Wyjątkowa rozdzielczość 4K oferuje niesamowitą ostrość i szczegółowość, idealną dla profesjonalistów i miłośników filmów.</li>
                            </ul>
                        </li>

                        <li>Monitory ultrapanoramiczne:
                            <ul>
                                <li>Szerokie ekrany pozwalają na zwiększenie produktywności, idealne do pracy wielozadaniowej oraz dla miłośników gier i filmów.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i skontaktowania się z nami w razie pytań!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o monitorach z bazy danych-->
                <?php
                    include '../script/monitorsFromDB.php';
                ?>
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