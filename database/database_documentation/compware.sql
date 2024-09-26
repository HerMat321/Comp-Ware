-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 07:56 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compware`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dyski_twarde`
--

CREATE TABLE `dyski_twarde` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `pojemnosc` varchar(255) DEFAULT NULL,
  `interfejs` varchar(255) DEFAULT NULL,
  `predkosc_obr` varchar(255) DEFAULT NULL,
  `predkosc_odczytu` varchar(255) DEFAULT NULL,
  `predkosc_zapisu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inne`
--

CREATE TABLE `inne` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komputery`
--

CREATE TABLE `komputery` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `procesor` varchar(255) DEFAULT NULL,
  `pamiec` varchar(255) DEFAULT NULL,
  `grafika` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `laptopy`
--

CREATE TABLE `laptopy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `procesor` varchar(255) DEFAULT NULL,
  `pamiec` varchar(255) DEFAULT NULL,
  `grafika` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `monitory`
--

CREATE TABLE `monitory` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `przekatna` varchar(255) DEFAULT NULL,
  `matryca` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `napedy`
--

CREATE TABLE `napedy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `rodzaj` varchar(255) DEFAULT NULL,
  `interfejs` varchar(255) DEFAULT NULL,
  `zapis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `Uzytkownicy_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oprogramowanie`
--

CREATE TABLE `oprogramowanie` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `platforma` varchar(255) DEFAULT NULL,
  `wersja_produktu` varchar(255) DEFAULT NULL,
  `okres_licencji` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pamiec_przenosna`
--

CREATE TABLE `pamiec_przenosna` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `pojemnosc` varchar(255) DEFAULT NULL,
  `interfejs` varchar(255) DEFAULT NULL,
  `predkosc_odczytu` varchar(255) DEFAULT NULL,
  `predkosc_zapisu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pamiec_ram`
--

CREATE TABLE `pamiec_ram` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `pojemnosc_calkowita` varchar(255) DEFAULT NULL,
  `rodzaj_pamieci` varchar(255) DEFAULT NULL,
  `taktowanie` varchar(255) DEFAULT NULL,
  `opoznienie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa_uzytkownika` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `miasto` varchar(255) NOT NULL,
  `ulica` varchar(255) NOT NULL,
  `nr_domu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_zamowienia` date NOT NULL,
  `czy_wyslano` tinyint(1) DEFAULT NULL,
  `Uzytkownicy_id` int(10) UNSIGNED DEFAULT NULL,
  `Laptopy_id` int(10) UNSIGNED DEFAULT NULL,
  `Komputery_id` int(10) UNSIGNED DEFAULT NULL,
  `Zasilacze_id` int(10) UNSIGNED DEFAULT NULL,
  `Monitory_id` int(10) UNSIGNED DEFAULT NULL,
  `Pamiec_Ram_id` int(10) UNSIGNED DEFAULT NULL,
  `Dyski_Twarde_id` int(10) UNSIGNED DEFAULT NULL,
  `Napedy_id` int(10) UNSIGNED DEFAULT NULL,
  `Pamiec_Przenosna_id` int(10) UNSIGNED DEFAULT NULL,
  `Oprogramowanie_id` int(10) UNSIGNED DEFAULT NULL,
  `Inne_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zasilacze`
--

CREATE TABLE `zasilacze` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `moc` varchar(255) DEFAULT NULL,
  `standard` varchar(255) DEFAULT NULL,
  `sprawnosc` varchar(255) DEFAULT NULL,
  `certyfikat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dyski_twarde`
--
ALTER TABLE `dyski_twarde`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `inne`
--
ALTER TABLE `inne`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `komputery`
--
ALTER TABLE `komputery`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `laptopy`
--
ALTER TABLE `laptopy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `monitory`
--
ALTER TABLE `monitory`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `napedy`
--
ALTER TABLE `napedy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Uzytkownicy_id` (`Uzytkownicy_id`);

--
-- Indeksy dla tabeli `oprogramowanie`
--
ALTER TABLE `oprogramowanie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pamiec_przenosna`
--
ALTER TABLE `pamiec_przenosna`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pamiec_ram`
--
ALTER TABLE `pamiec_ram`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Uzytkownicy_id` (`Uzytkownicy_id`),
  ADD KEY `Laptopy_id` (`Laptopy_id`),
  ADD KEY `Komputery_id` (`Komputery_id`),
  ADD KEY `Zasilacze_id` (`Zasilacze_id`),
  ADD KEY `Monitory_id` (`Monitory_id`),
  ADD KEY `Pamiec_Ram_id` (`Pamiec_Ram_id`),
  ADD KEY `Dyski_Twarde_id` (`Dyski_Twarde_id`),
  ADD KEY `Napedy_id` (`Napedy_id`),
  ADD KEY `Pamiec_Przenosna_id` (`Pamiec_Przenosna_id`),
  ADD KEY `Oprogramowanie_id` (`Oprogramowanie_id`),
  ADD KEY `Inne_id` (`Inne_id`);

--
-- Indeksy dla tabeli `zasilacze`
--
ALTER TABLE `zasilacze`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dyski_twarde`
--
ALTER TABLE `dyski_twarde`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inne`
--
ALTER TABLE `inne`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komputery`
--
ALTER TABLE `komputery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptopy`
--
ALTER TABLE `laptopy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitory`
--
ALTER TABLE `monitory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `napedy`
--
ALTER TABLE `napedy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oprogramowanie`
--
ALTER TABLE `oprogramowanie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pamiec_przenosna`
--
ALTER TABLE `pamiec_przenosna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pamiec_ram`
--
ALTER TABLE `pamiec_ram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zasilacze`
--
ALTER TABLE `zasilacze`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD CONSTRAINT `newsletter_ibfk_1` FOREIGN KEY (`Uzytkownicy_id`) REFERENCES `uzytkownicy` (`id`);

--
-- Constraints for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`Uzytkownicy_id`) REFERENCES `uzytkownicy` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_10` FOREIGN KEY (`Oprogramowanie_id`) REFERENCES `oprogramowanie` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_11` FOREIGN KEY (`Inne_id`) REFERENCES `inne` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_2` FOREIGN KEY (`Laptopy_id`) REFERENCES `laptopy` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_3` FOREIGN KEY (`Komputery_id`) REFERENCES `komputery` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_4` FOREIGN KEY (`Zasilacze_id`) REFERENCES `zasilacze` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_5` FOREIGN KEY (`Monitory_id`) REFERENCES `monitory` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_6` FOREIGN KEY (`Pamiec_Ram_id`) REFERENCES `pamiec_ram` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_7` FOREIGN KEY (`Dyski_Twarde_id`) REFERENCES `dyski_twarde` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_8` FOREIGN KEY (`Napedy_id`) REFERENCES `napedy` (`id`),
  ADD CONSTRAINT `zamowienia_ibfk_9` FOREIGN KEY (`Pamiec_Przenosna_id`) REFERENCES `pamiec_przenosna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
