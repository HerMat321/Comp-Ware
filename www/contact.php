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
                <div class="contact">
                    <header><h2>Kontakt - Comp-Ware Shop</h2></header>
                    <h3>Jeśli masz jakiekolwiek pytania, uwagi lub potrzebujesz pomocy, zapraszamy do kontaktu z nami. Jesteśmy do Twojej dyspozycji!</h3>

                    <h4><i class="icon-post"></i>Dane kontaktowe:</h4>
                    <ul>
                        <li><b>Adres:</b> ul. Mikołowska, 43-190 Mikołów, Polska</li>
                        <li><b>Telefon:</b> +48 123 456 789</li>
                        <li><b>E-mail:</b> <a href="mailto:kontakt@comp-ware.pl">kontakt@comp-ware.pl</a></li>
                    </ul>

                    <h4><i class="icon-clock"></i>Godziny Otwarcia:</h4>
                    <ul>
                        <li><b>Poniedziałek - Piątek:</b> 9:00 - 18:00</li>
                        <li><b>Sobota:</b> 10:00 - 16:00</li>
                        <li><b>Niedziela:</b> Zamknięte</li>
                    </ul>

                    <div class="form">
                        <h2><i class="icon-wpforms"></i>Formularz Kontaktowy:</h2>
                        <p>Aby ułatwić kontakt, udostępniamy formularz kontaktowy. Wypełnij poniższe pole, a my postaramy się odpowiedzieć jak najszybciej.</p>

                        <form method="POST">
                            <label for="contact_email">Podaj swój e-mail</label>
                            <br>
                            <input type="email" id="contact_email" placeholder="Podaj swój e-mail" required>
                            <br>
                            <label for="contact_phone">Podaj swój numer telefonu</label>
                            <br>
                            <input type="text" id="contact_phone" placeholder="Podaj swój numer telefonu" maxlength="9" required>
                            <br>
                            <br>
                            <textarea id="message" cols="70" rows="15" placeholder="W czym możemy pomóc?"></textarea>
                            <br>
                            <button type="submit">Wyślij</button>
                        </form>
                    </div>
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