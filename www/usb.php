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
                <div class="usb">
                    <header><h2><i class="icon-usb"></i>Pamięć przenośna - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Pamięć przenośna</strong> w Comp-Ware Shop!</p>

                    <p>W tej kategorii znajdziesz różnorodne rozwiązania do przechowywania danych, które są niezbędne zarówno dla użytkowników domowych, jak i profesjonalistów. Oferujemy szeroki wybór produktów, które umożliwiają łatwe i bezpieczne przenoszenie oraz przechowywanie ważnych plików.</p>

                    <h3>Rodzaje pamięci przenośnej dostępne w naszej ofercie:</h3>

                    <ol>
                        <li>Pendrive'y (USB Flash Drives):
                            <ul>
                                <li>Praktyczne i kompaktowe urządzenia do szybkiego przenoszenia danych. Oferujemy pendrive'y o różnej pojemności, od kilku GB do nawet 1 TB, które są idealne do przechowywania dokumentów, zdjęć, filmów i muzyki.</li>
                            </ul>
                        </li>

                        <li>Karty pamięci:
                            <ul>
                                <li>W naszej ofercie znajdziesz karty SD, microSD, CF i inne formaty kart pamięci, które są niezbędne do użytku w aparatach fotograficznych, kamerach, smartfonach oraz innych urządzeniach przenośnych. Oferujemy karty o wysokiej pojemności i prędkości zapisu, które sprostają wymaganiom najbardziej wymagających użytkowników.</li>
                            </ul>
                        </li>

                        <li>Zewnętrzne dyski SSD:
                            <ul>
                                <li>Przenośne dyski SSD to idealne rozwiązanie dla osób, które potrzebują dużej pojemności i szybkiego dostępu do danych. Oferujemy dyski SSD o pojemności od 120 GB do 4 TB, które charakteryzują się wysoką prędkością odczytu i zapisu oraz trwałością.</li>
                            </ul>
                        </li>

                        <li>Zewnętrzne dyski HDD:
                            <ul>
                                <li>Tradycyjne przenośne dyski twarde, które oferują dużą pojemność w przystępnej cenie. Doskonałe do tworzenia kopii zapasowych, archiwizacji danych oraz przenoszenia dużych ilości plików.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i kontaktu z naszym zespołem w razie pytań!</h3>
                    
                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o produktach z bazy danych-->
                <?php
                    include '../script/usbFromDB.php';
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