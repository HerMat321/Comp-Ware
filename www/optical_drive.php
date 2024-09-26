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
                <div class="opticalDrive">
                    <header><h2><i class="icon-cd"></i>Napędy - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Napędy</strong> w Comp-Ware Shop!</p>

                    <p>Napędy optyczne oraz nośniki danych są nieodłącznym elementem każdego nowoczesnego systemu komputerowego. W naszej ofercie znajdziesz szeroką gamę napędów, które spełnią oczekiwania zarówno użytkowników domowych, jak i profesjonalistów.</p>

                    <h3>Rodzaje napędów dostępne w naszej ofercie:</h3>

                    <ol>
                        <li>Napędy DVD:
                            <ul>
                                <li>Uniwersalne napędy do odczytu i zapisu płyt DVD. Idealne do oglądania filmów, instalacji oprogramowania oraz archiwizacji danych na płytach DVD.</li>
                            </ul>
                        </li>

                        <li>Napędy Blu-ray:
                            <ul>
                                <li>Nowoczesne napędy do odczytu i zapisu płyt Blu-ray. Oferują większą pojemność niż DVD, co pozwala na przechowywanie większej ilości danych oraz oglądanie filmów w jakości HD.</li>
                            </ul>
                        </li>

                        <li>Nagrywarki CD/DVD/Blu-ray:
                            <ul>
                                <li>Wielofunkcyjne urządzenia, które umożliwiają zarówno odczyt, jak i zapis danych na płytach CD, DVD oraz Blu-ray. Idealne dla użytkowników, którzy często tworzą kopie zapasowe lub archiwizują swoje dane na nośnikach optycznych.</li>
                            </ul>
                        </li>

                        <li>Napędy zewnętrzne:
                            <ul>
                                <li>Przenośne napędy optyczne, które można podłączyć do komputera za pomocą interfejsu USB. Idealne rozwiązanie dla laptopów i ultrabooków, które nie posiadają wbudowanych napędów optycznych.</li>
                            </ul>
                        </li>

                        <li>Czytniki kart pamięci:
                            <ul>
                                <li>Urządzenia służące do odczytu różnych formatów kart pamięci, takich jak SD, microSD, CF, i innych. Niezbędne dla fotografów oraz osób korzystających z urządzeń przenośnych.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i kontaktu z naszym zespołem w razie pytań!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o produktach z bazy danych-->
                <?php
                    include '../script/optical_driveFromDB.php';
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