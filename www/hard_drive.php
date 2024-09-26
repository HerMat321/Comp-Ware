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
                <div class="hardDrive">
                    <header><h2><i class="icon-hdd"></i>Dyski Twarde - Comp-Ware Shop</h2></header>

                    <p>Witamy w kategorii <strong>Dyski Twarde</strong> w Comp-Ware Shop!</p>

                    <p>Dyski twarde (HDD i SSD) są nieodzownym elementem każdego komputera, odpowiadając za przechowywanie danych, systemu operacyjnego oraz aplikacji. W naszej ofercie znajdziesz szeroką gamę dysków twardych, które spełnią oczekiwania zarówno użytkowników domowych, jak i profesjonalistów.</p>

                    <h3>Rodzaje dysków twardych dostępne w naszej ofercie:</h3>

                    <ol>
                        <li>Dyski HDD (Hard Disk Drive):
                            <ul>
                                <li>Tradycyjne dyski twarde z wirującymi talerzami magnetycznymi. Charakteryzują się dużą pojemnością w przystępnej cenie, idealne do przechowywania dużych ilości danych, takich jak filmy, zdjęcia czy dokumenty.</li>
                            </ul>
                        </li>

                        <li>Dyski SSD (Solid State Drive):
                            <ul>
                                <li>Nowoczesne dyski twarde, które nie posiadają ruchomych części. Oferują znacznie wyższą prędkość odczytu i zapisu danych w porównaniu do HDD, co przekłada się na szybszy start systemu i aplikacji oraz ogólną responsywność komputera.</li>
                            </ul>
                        </li>

                        <li>Dyski SSHD (Solid State Hybrid Drive):
                            <ul>
                                <li>Hybrydowe dyski twarde, które łączą cechy HDD i SSD. Posiadają zarówno talerze magnetyczne, jak i pamięć flash, co pozwala na osiągnięcie kompromisu między dużą pojemnością a wyższą wydajnością.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Zapraszamy do przeglądania naszej oferty i kontaktu z naszym zespołem w razie pytań!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
                </div>
                <!--Skrypt na bazie divow z informacjami o produktach z bazy danych-->
                <?php
                    include '../script/hard_driveFromDB.php';
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