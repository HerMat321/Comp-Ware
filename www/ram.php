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
                <div class="ram">
                    <header><h2><i class="icon-cog-alt"></i>Pamięć RAM - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Pamięć RAM</strong> w Comp-Ware Shop!</p>

                    <p>Pamięć RAM (Random Access Memory) to kluczowy komponent każdego komputera, który wpływa na jego wydajność i szybkość działania. W naszej kategorii Pamięć RAM znajdziesz szeroką gamę modułów pamięci przeznaczonych zarówno do komputerów stacjonarnych, jak i laptopów. Nasze produkty spełniają najwyższe standardy jakości, aby zapewnić Ci niezawodność i wydajność, której oczekujesz.</p>

                    <h3>Rodzaje pamięci RAM dostępne w naszej ofercie:</h3>

                    <ol>
                        <li>DDR3 RAM:
                            <ul>
                                <li>Starsza generacja pamięci RAM, nadal popularna w starszych systemach komputerowych. Oferuje solidną wydajność w przystępnej cenie.</li>
                            </ul>
                        </li>

                        <li>DDR4 RAM:
                            <ul>
                                <li>Najczęściej używana pamięć RAM w nowoczesnych komputerach. Zapewnia wyższą prędkość transferu danych i większą energooszczędność w porównaniu do DDR3.</li>
                            </ul>
                        </li>

                        <li>DDR5 RAM:
                            <ul>
                                <li>Najnowsza generacja pamięci RAM, która oferuje jeszcze wyższe prędkości transferu danych i lepszą efektywność energetyczną. Idealna dla entuzjastów technologii i profesjonalistów</li>
                            </ul>
                        </li>

                        <li>Pamięć RAM dla laptopów:
                            <ul>
                                <li>Specjalne moduły pamięci SODIMM, zaprojektowane z myślą o laptopach. Oferują kompaktowe wymiary i doskonałą wydajność.</li>
                            </ul>
                        </li>

                        <li>Pamięć RAM dla graczy:
                            <ul>
                                <li>Moduły pamięci z wysoką częstotliwością taktowania i zaawansowanymi funkcjami, takimi jak RGB LED, zaprojektowane specjalnie dla entuzjastów gier komputerowych.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i kontaktu z naszym zespołem w razie pytań!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o produktach z bazy danych-->
                <?php
                    include '../script/ramFromDB.php';
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