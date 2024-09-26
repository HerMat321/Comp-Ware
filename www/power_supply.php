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
                <div class="powerSupply">
                    <header><h2><i class="icon-flash"></i>Zasilacze - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Zasilacze</strong> w naszym sklepie internetowym Comp-Ware Shop. Zasilacze są kluczowym elementem każdego komputera, zapewniającym stabilne i niezawodne zasilanie dla wszystkich podzespołów. W naszej ofercie znajdziesz szeroką gamę zasilaczy dostosowanych do różnych potrzeb i wymagań.</p>

                    <h3>Dlaczego warto wybrać zasilacz w Comp-Ware Shop?</h3>

                    <ol>
                        <li>Szeroki Wybór:
                            <ul>
                                <li>Oferujemy zasilacze od wiodących producentów, takich jak Corsair, Seasonic, EVGA, Thermaltake, Cooler Master i wielu innych. Posiadamy modele o różnej mocy, od podstawowych 400W po zaawansowane 1200W i więcej, co pozwala na dopasowanie odpowiedniego zasilacza do każdego rodzaju systemu.</li>
                            </ul>
                        </li>

                        <li>Wysoka Jakość:
                            <ul>
                                <li>Wszystkie nasze zasilacze cechują się wysoką jakością wykonania i niezawodnością. Posiadają certyfikaty sprawności 80 PLUS, co gwarantuje efektywne wykorzystanie energii i mniejsze straty ciepła. Znajdziesz u nas zasilacze o różnych poziomach sprawności: Bronze, Silver, Gold, Platinum oraz Titanium.</li>
                            </ul>
                        </li>

                        <li>Bezpieczeństwo:
                            <ul>
                                <li>Zasilacze dostępne w naszym sklepie są wyposażone w zaawansowane zabezpieczenia przeciwprzepięciowe, przeciwzwarciowe, przeciwprzeciążeniowe i termiczne. Zapewniają one maksymalną ochronę Twojego sprzętu przed uszkodzeniami spowodowanymi przez niestabilne napięcia czy inne problemy z zasilaniem.</li>
                            </ul>
                        </li>

                        <li>Modułowość:
                            <ul>
                                <li>W naszej ofercie znajdziesz zarówno zasilacze standardowe, jak i w pełni modularne oraz półmodularne. Dzięki temu możesz łatwo zarządzać okablowaniem w swoim komputerze, co nie tylko poprawia estetykę, ale także przepływ powietrza i chłodzenie.</li>
                            </ul>
                        </li>

                        <li>Kompatybilność:
                            <ul>
                                <li>Nasze zasilacze są kompatybilne z różnymi standardami płyt głównych i obudów, co pozwala na bezproblemową integrację z Twoim systemem. Posiadamy modele ATX, SFX, TFX i inne, aby sprostać wszystkim wymaganiom konstrukcyjnym.</li>
                            </ul>
                        </li>

                        <li>Doradztwo i Wsparcie:
                            <ul>
                                <li>Nasz zespół ekspertów jest zawsze gotowy, aby pomóc Ci w wyborze najlepszego zasilacza do Twojego komputera. Doradzimy Ci, jaki model będzie najbardziej odpowiedni do Twoich potrzeb i odpowiemy na wszelkie pytania techniczne.</li>
                            </ul>
                        </li>

                        <h3>Wybierz zasilacz odpowiedni do Twojego komputera</h3>

                        <p>Zakup odpowiedniego zasilacza jest kluczowy dla stabilnej i długotrwałej pracy Twojego komputera. W Comp-Ware Shop znajdziesz zasilacze, które zapewnią Twojemu systemowi niezawodne i bezpieczne zasilanie. Przeglądaj naszą ofertę, porównuj modele i wybierz zasilacz, który najlepiej odpowiada Twoim potrzebom.</p>
                    </ol>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o zasilaczach z bazy danych-->
                <?php
                    include '../script/power_supplyFromDB.php';
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