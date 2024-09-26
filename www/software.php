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
                <div class="software">
                    <header><h2><i class="icon-file-code"></i>Oprogramowanie - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Oprogramowanie</strong> w Comp-Ware Shop!</p>

                    <p>W tej kategorii znajdziesz szeroki wybór oprogramowania, które sprosta wszelkim potrzebom - zarówno użytkowników domowych, jak i profesjonalistów. Nasza oferta obejmuje różnorodne programy, które pomogą Ci w codziennych zadaniach, pracy zawodowej, nauce, a także rozrywce.</p>

                    <h3>Rodzaje oprogramowania dostępne w naszej ofercie:</h3>

                    <ol>
                        <li>Systemy operacyjne:
                            <ul>
                                <li>Oferujemy najnowsze wersje systemów operacyjnych, takich jak Microsoft Windows, macOS oraz różne dystrybucje Linuxa. Znajdziesz u nas zarówno wersje dla użytkowników domowych, jak i profesjonalne wersje dla firm.</li>
                            </ul>
                        </li>

                        <li>Pakiety biurowe:
                            <ul>
                                <li>W naszej ofercie znajdziesz popularne pakiety biurowe, takie jak Microsoft Office, LibreOffice oraz inne narzędzia do tworzenia dokumentów, arkuszy kalkulacyjnych i prezentacji. Idealne rozwiązanie do pracy biurowej i nauki.</li>
                            </ul>
                        </li>

                        <li>Programy graficzne i multimedialne:
                            <ul>
                                <li>Oferujemy szeroki wybór oprogramowania do edycji grafiki, zdjęć, wideo oraz dźwięku. Znajdziesz u nas programy takie jak Adobe Photoshop, Adobe Premiere Pro, CorelDRAW, oraz wiele innych narzędzi dla profesjonalnych twórców.</li>
                            </ul>
                        </li>

                        <li>Oprogramowanie antywirusowe i bezpieczeństwa:
                            <ul>
                                <li>Zabezpiecz swoje urządzenia przed zagrożeniami online dzięki naszym programom antywirusowym, firewallom oraz innym rozwiązaniom bezpieczeństwa. Oferujemy produkty takich firm jak Norton, Kaspersky, McAfee, Bitdefender i wiele innych.</li>
                            </ul>
                        </li>

                        <li>Oprogramowanie do zarządzania projektami i produktywności:
                            <ul>
                                <li>Znajdziesz u nas narzędzia do zarządzania projektami, takie jak Microsoft Project, Asana, Trello, a także programy zwiększające produktywność, takie jak Evernote, Notion i wiele innych.</li>
                            </ul>
                        </li>

                        <li>Gry komputerowe:
                            <ul>
                                <li>Dla miłośników rozrywki mamy szeroki wybór gier komputerowych - od najnowszych hitów, przez klasyki, aż po niszowe tytuły. Znajdziesz tu gry na różne platformy, w tym PC, macOS i Linux.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i kontaktu z naszym zespołem w razie pytań!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o produktach z bazy danych-->
                <?php
                    include '../script/softwareFromDB.php';
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