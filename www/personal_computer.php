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
                <div class="personalComputerDescriptions">
                    <header><h2><i class="icon-desktop"></i>Komputery Osobiste - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Komputery Osobiste</strong> w naszym sklepie internetowym Comp-Ware Shop. Oferujemy szeroką gamę komputerów osobistych, które zaspokoją potrzeby każdego użytkownika - od codziennych zadań domowych, przez profesjonalne zastosowania biurowe, aż po zaawansowane zestawy gamingowe.</p>

                    <h3>Dlaczego warto wybrać komputer osobisty w Comp-Ware Shop?</h3>

                    <ol>
                        <li>Szeroki Wybór:
                            <ul>
                                <li>W naszej ofercie znajdziesz komputery stacjonarne od wiodących producentów, takich jak Dell, HP, Lenovo, Acer, ASUS i wielu innych. Posiadamy zarówno gotowe zestawy, jak i możliwość złożenia komputera na zamówienie według indywidualnych potrzeb.</li>
                            </ul>
                        </li>

                        <li>Różnorodność Specyfikacji:
                            <ul>
                                <li>Nasze komputery wyposażone są w najnowsze procesory Intel i AMD, różne ilości pamięci RAM oraz szeroki wybór kart graficznych, co pozwala na dobranie odpowiedniego sprzętu do konkretnych zastosowań – od prostych zadań biurowych po zaawansowane prace graficzne i granie.</li>
                            </ul>
                        </li>

                        <li>Komputery dla Każdego:
                            <ul>
                                <li>Oferujemy komputery dla różnych typów użytkowników: od komputerów biurowych, przez komputery multimedialne, aż po wysokowydajne maszyny gamingowe. Niezależnie od Twoich potrzeb, znajdziesz u nas sprzęt idealnie dopasowany do Twoich oczekiwań.</li>
                            </ul>
                        </li>

                        <li>Konkurencyjne Ceny:
                            <ul>
                                <li>Staramy się oferować najkorzystniejsze ceny na rynku. Regularnie organizujemy promocje oraz wyprzedaże, dzięki czemu możesz nabyć wysokiej jakości sprzęt w atrakcyjnej cenie.</li>
                            </ul>
                        </li>

                        <li>Profesjonalne Doradztwo:
                            <ul>
                                <li>Nasz zespół ekspertów jest zawsze gotowy, aby pomóc Ci w wyborze najlepszego komputera osobistego. Doradzimy Ci, jaki model najlepiej spełni Twoje wymagania i odpowiemy na wszystkie pytania techniczne.</li>
                            </ul>
                        </li>

                        <li>Gwarancja i Serwis:
                            <ul>
                                <li>Wszystkie nasze komputery objęte są gwarancją producenta, a także zapewniamy wsparcie posprzedażowe, abyś mógł cieszyć się bezproblemowym użytkowaniem swojego sprzętu przez długie lata.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zaufaj profesjonalistom i wybierz komputer osobisty w Comp-Ware Shop</h3>

                    <p>Zakup komputera osobistego to ważna decyzja, która powinna być dobrze przemyślana. W Comp-Ware Shop gwarantujemy najwyższą jakość obsługi oraz pełną satysfakcję z dokonanych zakupów. Przeglądaj naszą ofertę, porównuj modele i wybierz komputer, który najlepiej odpowiada Twoim potrzebom.</p>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o komputerach stacjonarnych z bazy danych-->
                <?php
                    include '../script/computersFromDB.php';
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