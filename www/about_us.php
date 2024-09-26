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
                <div class="aboutUs">
                    <header><h2><i>O nas - Comp-Ware Shop</h2></i></header>

                    <h3>Witaj w Comp-Ware Shop!</h3>
                    <p>Comp-Ware Shop to wiodąca hurtownia komputerowa, specjalizująca się w dostarczaniu szerokiej gamy produktów technologicznych najwyższej jakości. Nasza firma powstała z pasji do technologii oraz z chęci dostarczania najlepszych rozwiązań zarówno dla klientów indywidualnych, jak i biznesowych.</p>

                    <h3>Nasza Misja</h3>
                    <p>Naszą misją jest dostarczanie najnowszych i najbardziej zaawansowanych technologicznie produktów komputerowych, które pomagają naszym klientom osiągać swoje cele i realizować marzenia. Stawiamy na innowacyjność, jakość oraz profesjonalną obsługę, aby każdy klient mógł cieszyć się niezawodnymi produktami i usługami.</p>

                    <h3>Nasze Wartości</h3>
                    <ol>
                        <li><b>Jakość:</b> Oferujemy tylko produkty najwyższej jakości od renomowanych producentów.</li>

                        <li><b>Innowacyjność:</b> Stale poszerzamy naszą ofertę o najnowsze technologie i rozwiązania.</li>

                        <li><b>Profesjonalizm:</b> Zatrudniamy ekspertów z branży IT, którzy służą fachową poradą i wsparciem.</li>

                        <li><b>Zaufanie:</b> Budujemy trwałe relacje z naszymi klientami oparte na zaufaniu i transparentności.</li>

                        <li><b>Szybkość:</b> Zapewniamy szybkie i bezproblemowe realizacje zamówień oraz dostaw.</li>
                    </ol>

                    <h3>Nasza Oferta</h3>
                    <p>W Comp-Ware Shop znajdziesz wszystko, czego potrzebujesz, aby wyposażyć swoje biuro, dom czy firmę w najnowsze technologie. Nasza oferta obejmuje m.in.:</p>

                    <table>
                        <tr>
                            <th>Komputery i laptopy</th>
                            <th>Podzespoły komputerowe</th>
                            <th>Urządzenia peryferyjne</th>
                            <th>Oprogramowanie</th>
                            <th>Akcesoria sieciowe</th>
                        </tr>

                        <tr>
                            <td>Komputery Stacjonarne</td>
                            <td>Procesory</td>
                            <td>Monitory</td>
                            <td>Systemy operacyjne</td>
                            <td>Routery</td>
                        </tr>

                        <tr>
                            <td>Laptopy</td>
                            <td>Karty graficzne</td>
                            <td>Drukarki</td>
                            <td>Pakiety biurowe</td>
                            <td rowspan="2"><img src="../img/wifi.png" alt="wifi"></td>
                        </tr>

                        <tr>
                            <td>Akcesoria</td>
                            <td>Płyty główne</td>
                            <td>Klawiatury i myszy</td>
                            <td>Programy antywirusowe</td>
                        </tr>
                    </table>
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