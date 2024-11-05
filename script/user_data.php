<?php
    echo "<h3>Witaj {$_SESSION['username']}!</h3>
    <p>Oto twój panel użytkownika. Z tego miejsca możesz zarządzać swoim kontem!</p>
    <p>Twój adres email: {$_SESSION['email']}</p>
    <p>ID UŻYTKOWNIKA: {$_SESSION['id']}</p>";
?>