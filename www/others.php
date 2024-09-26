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
                <div class="others">
                    <header><h2><i class="icon-linux"></i>Inne - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Inne</strong> w Comp-Ware Shop!</p>

                    <p>W tej sekcji znajdziesz produkty, które nie pasują do innych, bardziej specyficznych kategorii, ale są niezbędne do kompletnego wyposażenia Twojego stanowiska komputerowego oraz do zwiększenia funkcjonalności i wygody pracy z urządzeniami elektronicznymi.</p>

                    <h3>Rodzaje produktów dostępne w kategorii Inne:</h3>

                    <ol>
                        <li>Akcesoria komputerowe:
                            <ul>
                                <li>W tej podkategorii znajdziesz różnorodne akcesoria, które mogą ułatwić pracę i rozrywkę z komputerem. Oferujemy podkładki pod mysz, stojaki na monitory, uchwyty na kable, wentylatory do chłodzenia laptopów, i wiele innych praktycznych dodatków.</li>
                            </ul>
                        </li>

                        <li>Urządzenia peryferyjne:
                            <ul>
                                <li>Znajdziesz tu szeroki wybór urządzeń peryferyjnych, takich jak drukarki, skanery, głośniki, mikrofony, kamery internetowe i inne. Te produkty pozwolą na rozszerzenie funkcjonalności Twojego komputera oraz ułatwią codzienne zadania.</li>
                            </ul>
                        </li>

                        <li>Kable i adaptery:
                            <ul>
                                <li>Oferujemy różne rodzaje kabli i adapterów, które są niezbędne do podłączania i łączenia urządzeń. Znajdziesz tu kable HDMI, USB, Ethernet, a także adaptery do różnych typów złączy, konwertery sygnału, oraz przedłużacze.</li>
                            </ul>
                        </li>

                        <li>Elementy sieciowe:
                            <ul>
                                <li>W tej sekcji oferujemy produkty do budowy i rozszerzania sieci komputerowej. Znajdziesz tu routery, switche, access pointy, karty sieciowe, oraz modemy. Wszystko, co potrzebne do zapewnienia szybkiego i stabilnego połączenia internetowego w domu i biurze.</li>
                            </ul>
                        </li>

                        <li>Zasilanie i UPS:
                            <ul>
                                <li>Zabezpiecz swoje urządzenia przed nagłymi przerwami w dostawie prądu oraz przepięciami. Oferujemy różnorodne zasilacze awaryjne (UPS), listwy antyprzepięciowe oraz baterie i akumulatory.</li>
                            </ul>
                        </li>

                        <li>Stacje dokujące i huby USB:
                            <ul>
                                <li>Zwiększ ilość dostępnych portów w swoim komputerze dzięki naszym stacjom dokującym i hubom USB. Idealne rozwiązanie dla użytkowników laptopów oraz osób pracujących z wieloma urządzeniami peryferyjnymi.</li>
                            </ul>
                        </li>

                        <li>Czytniki kart pamięci i pamięci przenośne:
                            <ul>
                                <li>Oferujemy szeroki wybór czytników kart pamięci oraz różnorodne typy pamięci przenośnej, takie jak pendrive'y i dyski zewnętrzne. Przechowywanie i przenoszenie danych nigdy nie było łatwiejsze.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i kontaktu z naszym zespołem w razie pytań!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o produktach z bazy danych-->
                <?php
                    include '../script/othersFromDB.php';
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