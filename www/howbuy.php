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
                <div class="howbuy">
                    <header><h2>Jak kupować w hurtowni Comp-Ware Shop</h2></header>

                    <p><i>Witaj w Comp-Ware Shop! Aby ułatwić Ci zakupy w naszej hurtowni, przygotowaliśmy szczegółową instrukcję krok po kroku, jak dokonać zamówienia. Dzięki temu proces zakupowy będzie prosty i przyjemny!.</i></p>

                    <ol>
                        <li>Rejestracja i logowanie
                            <ul>
                                <li>Aby rozpocząć zakupy, zarejestruj się na naszej stronie internetowej. Wypełnij formularz rejestracyjny, podając niezbędne dane, takie jak nazwa użytkownika, hasło, adres e-mail.</li>

                                <li>Po zakończeniu rejestracji zaloguj się na swoje konto, używając podanego podczas rejestracji adresu e-mail i hasła.</li>
                            </ul>
                        </li>

                        <li>Wybór produktów
                            <ul>
                                <li> Przeglądaj naszą ofertę, korzystając z kategorii produktów dostępnych w menu głównym. Możesz również skorzystać z wyszukiwarki, aby szybko znaleźć interesujący Cię produkt.</li>

                                <li>Po znalezieniu produktu, kliknij na jego nazwę lub zdjęcie, aby zobaczyć szczegółowy opis, dostępne opcje oraz ceny.</li>
                            </ul>
                        </li>

                        <li>Dodawanie produktów do koszyka
                            <ul>
                                <li>Aby dodać produkt do koszyka kliknij przycisk „Dodaj do koszyka”.</li>

                                <li>Produkty dodane do koszyka możesz przeglądać, klikając ikonę koszyka w prawym górnym rogu strony.</li>
                            </ul>
                        </li>

                        <li>Składanie zamówienia
                            <ul>
                                <li>Gdy wszystkie interesujące Cię produkty znajdą się w koszyku, przejdź do jego zawartości i kliknij przycisk „Złóż zamówienie”.</li>

                                <li>Sprawdź szczegóły zamówienia, w tym ilość, ceny oraz wybrane opcje produktów. Możesz jeszcze dokonać zmian, jeśli zajdzie taka potrzeba.</li>

                                <li>Wybierz preferowaną metodę płatności oraz dostawy.</li>
                            </ul>
                        </li>

                        <li>Płatność
                            <ul>
                                <li>Dokonaj płatności, korzystając z wybranej metody (np. przelew bankowy, karta kredytowa/debetowa, płatności online).</li>

                                <li>Po dokonaniu płatności otrzymasz e-mail z potwierdzeniem złożenia zamówienia.</li>
                            </ul>
                        </li>

                        <li>Realizacja zamówienia
                            <ul>
                                <li>Po otrzymaniu płatności przystąpimy do realizacji Twojego zamówienia. O statusie zamówienia będziemy informować Cię drogą mailową.</li>

                                <li>Gdy zamówienie będzie gotowe do wysyłki, otrzymasz od nas powiadomienie oraz numer śledzenia przesyłki.</li>
                            </ul>
                        </li>

                        <li>Odbiór zamówienia
                            <ul>
                                <li>Przesyłkę możesz odebrać w wybranym punkcie odbioru lub od kuriera, w zależności od wybranej metody dostawy.</li>

                                <li>Po otrzymaniu zamówienia sprawdź, czy produkty są zgodne z zamówieniem oraz czy nie zostały uszkodzone podczas transportu. W razie jakichkolwiek problemów skontaktuj się z nami niezwłocznie.</li>
                            </ul>
                        </li>

                        <li>Pomoc i wsparcie
                            <ul>
                                <li>Jeśli masz pytania dotyczące procesu zakupowego lub potrzebujesz pomocy, skontaktuj się z naszym działem obsługi klienta. Jesteśmy dostępni poprzez e-mail, telefon oraz czat na stronie internetowej.</li>
                            </ul>
                        </li>

                        <li>Zwroty i reklamacje
                            <ul>
                                <li>Szczegółowe informacje dotyczące zwrotów i reklamacji znajdziesz w zakładce „Regulamin”. Pamiętaj, że masz prawo do odstąpienia od umowy w terminie 14 dni od otrzymania zamówienia.</li>
                            </ul>
                        </li>
                    </ol>

                    <h3>Mamy nadzieję, że zakupy w Comp-Ware Shop będą dla Ciebie miłym doświadczeniem. Dziękujemy za zaufanie i życzymy udanych zakupów!</h3>

                    <footer><img src="../img/logo.png" alt="logo"></footer>
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