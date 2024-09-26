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
                <div class="laptopsDescriptions">
                    <header><h2><i class="icon-laptop"></i> Laptopy - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Laptopy</strong> w naszym sklepie internetowym Comp-Ware Shop. Jesteśmy dumni, że możemy zaoferować szeroki wybór laptopów, które spełniają różnorodne potrzeby naszych klientów - od podstawowych modeli do codziennego użytku, przez laptopy biznesowe, aż po zaawansowane laptopy dla graczy i profesjonalistów.</p>

                    <h3>Dlaczego warto wybrać laptop w Comp-Ware Shop?</h3>
                    <ol>
                        <li>Szeroki Wybór:
                            <ul>
                                <li>Nasza oferta obejmuje laptopy od renomowanych producentów, takich jak Dell, HP, Lenovo, Apple, Asus, i wielu innych. Znajdziesz u nas zarówno lekkie ultrabooki, jak i wydajne stacje robocze.</li>
                            </ul>
                        </li>

                        <li>Różnorodność Specyfikacji:
                            <ul>
                                <li>Oferujemy laptopy o różnych parametrach technicznych, w tym procesorach Intel i AMD, różnej ilości pamięci RAM, pojemności dysków twardych SSD i HDD, oraz różnorodnych rozdzielczościach ekranów.</li>
                            </ul>
                        </li>

                        <li>Laptopy do Różnych Zastosowań:
                            <ul>
                                <li>Niezależnie od tego, czy potrzebujesz laptopa do pracy, nauki, rozrywki, czy gier, znajdziesz u nas model idealnie dopasowany do Twoich potrzeb. Nasze laptopy cechują się zarówno wysoką wydajnością, jak i mobilnością.</li>
                            </ul>
                        </li>

                        <li>Konkurencyjne Ceny:
                            <ul>
                                <li>Zapewniamy konkurencyjne ceny na wszystkie nasze laptopy. Regularnie organizujemy promocje i oferujemy atrakcyjne rabaty, dzięki czemu możesz zakupić wymarzony sprzęt w korzystnej cenie.</li>
                            </ul>
                        </li>

                        <li>Profesjonalne Doradztwo:
                            <ul>
                                <li>Nasz zespół specjalistów jest do Twojej dyspozycji. Chętnie doradzimy w wyborze odpowiedniego modelu, odpowiemy na pytania dotyczące specyfikacji technicznych oraz pomożemy w każdej kwestii związanej z zakupem laptopa.</li>
                            </ul>
                        </li>

                        <li>Gwarancja i Serwis:
                            <ul>
                                <li>Wszystkie nasze laptopy objęte są gwarancją producenta. Dodatkowo oferujemy serwis posprzedażowy, abyś mógł cieszyć się swoim sprzętem bez obaw o ewentualne problemy techniczne.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zaufaj ekspertom i wybierz laptop w Comp-Ware Shop</h3>
                    <p>Zakup laptopa to inwestycja, która powinna być przemyślana i dostosowana do indywidualnych potrzeb. W Comp-Ware Shop gwarantujemy najwyższą jakość obsługi oraz satysfakcję z zakupów. Przeglądaj naszą ofertę, porównuj modele i znajdź laptop idealny dla siebie!</p>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
            </div>
                    <!--Skrypt na bazie divow z informacjami o laptopach z bazy danych-->
                    
                    <?php
                    
                           include '../script/laptopsFromDB.php';
                    
                    ?>
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