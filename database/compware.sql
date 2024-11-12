-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 12, 2024 at 08:34 PM
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
  `predkosc_zapisu` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dyski_twarde`
--

INSERT INTO `dyski_twarde` (`id`, `nazwa`, `pojemnosc`, `interfejs`, `predkosc_obr`, `predkosc_odczytu`, `predkosc_zapisu`, `image`, `cena`) VALUES
(1, 'SILICON POWER', '1 TB', 'PCIe NVMe 4.0 x4', NULL, '3600 MB/s', '2800 MB/s', 'SILICON_Power.png', 309.00),
(2, 'SEAGATE BARRACUDA', '8 TB', 'SATA III', '5400 obr./min', NULL, NULL, 'SEAGATE_Barracuda.png', 699.00),
(3, 'SYNOLOGY HAT3300', ' 4 TB', 'SATA III', '5400 obr./min', NULL, NULL, 'SYNOLOGY_Hat3300.png', 529.00),
(4, 'CORSAIR 500GB', '500 GB', 'PCIe NVMe 4.0 x4', NULL, '6600 MB/s', '3600 MB/s', 'CORSAIR_500gb.png', 339.00),
(5, 'ADATA 1TB', '1 TB', 'PCIe NVMe 4.0 x4', NULL, '5000 MB/s', '4500 MB/s', 'ADATA_1tb.png', 359.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `inne`
--

CREATE TABLE `inne` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inne`
--

INSERT INTO `inne` (`id`, `nazwa`, `opis`, `image`, `cena`) VALUES
(1, 'KABEL USB 2m', 'Typ: USB Typu-C - USB Typu-C,Standard: USB 3.2 Gen. 1', 'KABEL_Usb2m.png', 29.90),
(2, 'SLUCHAWKI LOGITECH', 'Łączność:Przewodowe\r\nBudowa słuchawek:Nauszne, Zamknięte\r\nMikrofon:Posiada', 'SLUCHAWKI_Logitech.png', 229.00),
(3, 'KLAWIATURA LOGITECH', 'Przełączniki:Membranowe\r\nŁączność:Bezprzewodowa', 'KLAWIATURA_Logitech.png', 219.00),
(4, 'LISTWA HSK', 'Długość przewodu:3 m \r\n Typ:Antyprzepięciowa\r\n Liczba gniazd:5', 'LISTWA_Hsk.png', 89.99),
(5, 'MYSZKA RAZER', 'Rozdzielczość:30000 dpi\r\n Typ myszy:Dla graczy\r\n Sensor:Optyczny', 'MYSZKA_Razer.png', 269.00);

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
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komputery`
--

INSERT INTO `komputery` (`id`, `nazwa`, `procesor`, `pamiec`, `grafika`, `image`, `cena`) VALUES
(1, 'HP Pro', 'Intel Core i7-13700', '32 GB', 'Intel UHD Graphics 770', 'HP_Pro.png', 3399.00),
(2, 'ACER_Nitro', 'Intel Core i5-13400F', '32 GB', 'NVIDIA GeForce RTX 4060', 'ACER_Nitro.png', 6790.00),
(3, 'DELL_Vostro', 'Intel Core i5-12400', '16 GB', 'Intel UHD Graphics 730', 'DELL_Vostro.png', 4299.00),
(4, 'LENOVO_Legion', 'Intel Core i7-14700KF', '32 GB', 'NVIDIA GeForce RTX 4060 Ti', 'LENOVO_Legion.png', 5679.00),
(5, 'SILVER_Monkey', 'Intel Core i5-12400F', '16 GB', 'NVIDIA GeForce RTX 3050', 'SILVER_Monkey.png', 4699.00);

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
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laptopy`
--

INSERT INTO `laptopy` (`id`, `nazwa`, `procesor`, `pamiec`, `grafika`, `image`, `cena`) VALUES
(1, 'ACER Nitro', 'AMD Ryzen™ 5 7535HS', '16 GB', 'NVIDIA GeForce RTX 2050 + AMD Radeon™ Graphics', 'ACER_Nitro.png', 5699.00),
(2, 'APPLE MacBook', 'Apple M1', '8 GB', 'M1 7 rdzeni', 'APPLE_MacBook.png', 7899.00),
(3, 'DELL Inspiron', 'AMD Ryzen™ 5 5500U', '16 GB', 'AMD Radeon™ Graphics', 'DELL_Inspiron.png', 4199.00),
(4, 'LENOVO Legion', 'AMD Ryzen™ 7 7840HS', '32 GB', 'NVIDIA GeForce RTX 4060', 'LENOVO_Legion.png', 6499.00),
(5, 'MSI Bravo', 'AMD Ryzen™ 7 7735HS', '16 GB', 'NVIDIA GeForce RTX 4060', 'MSI_Bravo.png', 5899.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `monitory`
--

CREATE TABLE `monitory` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `przekatna` varchar(255) DEFAULT NULL,
  `matryca` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitory`
--

INSERT INTO `monitory` (`id`, `nazwa`, `przekatna`, `matryca`, `image`, `cena`) VALUES
(1, 'ACER KA242YEBI', '23,8`', 'LED, IPS', 'ACER_Ka242yebi.png', 499.00),
(2, 'MSI Pro', '24,5`', 'LED, IPS', 'MSI_Pro.png', 699.00),
(3, 'DELL P2422H', 'LED, IPS', '23,8`', 'DELL_P2422h.png', 529.00),
(4, 'GIGABYTE GS27Q', '27`', 'LED, IPS', 'GIGABYTE_Gs27q.png', 899.00),
(5, 'DELL S2722QC', '27`', 'LED, IPS', 'DELL_S2722qc.png', 1029.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `napedy`
--

CREATE TABLE `napedy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `rodzaj` varchar(255) DEFAULT NULL,
  `interfejs` varchar(255) DEFAULT NULL,
  `zapis` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `napedy`
--

INSERT INTO `napedy` (`id`, `nazwa`, `rodzaj`, `interfejs`, `zapis`, `image`, `cena`) VALUES
(1, 'GEMBIRD', 'Zewnętrzny', 'USB 3.2 Gen.1, USB-C', 'DVD±R - 8x, DVD-RW - 4x, CD-R - 24x', 'GEMBIRD.png', 149.00),
(2, 'HITACHI LG', 'Zewnętrzny', 'USB 2.0', '8x, DVD±R DL - 6x, DVD-RAM - 5x, DVD+RW - 8x, DVD-RW - 8x, CD-R - 24x, CD-RW - 24x', 'HITACHI_Lg.png', 129.00),
(3, 'ASUS 08V1M', 'Zewnętrzny', 'USB-C', 'DVD±R - 8x, DVD+RW - 8x, DVD-RW - 6x, CD-R - 24x, CD-RW - 24x, M-DISC - 4x', 'ASUS_08v1m.png', 229.00),
(4, 'ASUS SBW', 'Zewnętrzny', 'USB 2.0', 'BD-R - 6x, BD-R DL - 6x, BD-R, BD-RE - 2x, BD-RE DL - 2x, BD-RE, DVD±R - 8x, DVD±R DL - 6x, DVD-RAM - 5x, DVD+RW - 8x, DVD-RW - 6x, CD-R - 24x, CD-RW - 16x', 'ASUS_Sbw.png', 189.00),
(5, 'VERBATIM SLIMLINE', 'Zewnętrzny', 'USB-C', 'BD-R - 6x, BD-R DL - 6x', 'VERBATIM_Slimline.png', 169.00);

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
  `okres_licencji` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oprogramowanie`
--

INSERT INTO `oprogramowanie` (`id`, `nazwa`, `platforma`, `wersja_produktu`, `okres_licencji`, `image`, `cena`) VALUES
(1, 'MICROSOFT WINDOWS 11', 'Windows', 'Home', 'Box', 'MICROSOFT_Windows11.png', 649.00),
(2, 'ESET NOD32', 'Windows', 'Fizyczna', '36 miesięcy', 'ESET_Nod32.png', 429.00),
(3, 'MICROSOFT 365', 'macOS, iOS, Android, Windows', 'Fizyczna', '12 miesięcy', 'MICROSOFT_365.png', 649.00),
(4, 'NORTON', 'Windows, macOS, iOS, Android', 'Cyfrowa', '12 miesięcy', 'NORTON.png', 369.00),
(5, 'BITDEFENDER', 'Windows', 'Cyfrowa', '24 miesiące', 'BITDEFENDER.png', 499.00);

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
  `predkosc_zapisu` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pamiec_przenosna`
--

INSERT INTO `pamiec_przenosna` (`id`, `nazwa`, `pojemnosc`, `interfejs`, `predkosc_odczytu`, `predkosc_zapisu`, `image`, `cena`) VALUES
(1, 'SEAGATE EXPANSION', '1 TB', 'USB 3.2 Gen. 1', NULL, NULL, 'SEAGATE_Expansion.png', 239.00),
(2, 'SANDISK EXTREME', '1 TB', 'USB 3.2 Gen. 2', '1050 MB/s', '1000 MB/s', 'SANDISK_Extreme.png', 339.00),
(3, 'SAMSUNG PORTABLE', '2 TB', 'USB 3.2 Gen. 2', '1050 MB/s', '1000 MB/s', 'SAMSUNG_Portable.png', 399.00),
(4, 'ADATA SE770G', '2 TB', 'USB 3.2 Gen. 1', NULL, NULL, 'ADATA_Se770g.png', 329.00),
(5, 'LEXAR SL660', '512 GB', 'USB 3.2 Gen. 2x2', '2000 MB/s', '1900 MB/s', 'LEXAR_Sl660.png', 169.00);

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
  `opoznienie` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pamiec_ram`
--

INSERT INTO `pamiec_ram` (`id`, `nazwa`, `pojemnosc_calkowita`, `rodzaj_pamieci`, `taktowanie`, `opoznienie`, `image`, `cena`) VALUES
(1, 'LEXAR 32GB', '32 GB', 'DDR5', '6000 MHz', 'CL 30', 'LEXAR_32gb.png', 519.00),
(2, 'KINGSTON FURY', '32 GB', 'DDR4 SODIMM', '3200MHz', 'CL 20', 'KINGSTON_Fury.png', 509.00),
(3, 'GSKILL 16GB', '16 GB', 'DDR4', '3200MHz', 'CL 16', 'GSKILL_16gb.png', 279.00),
(4, 'ADATA 32GB', '32 GB', 'DDR5', '6000MHz', 'CL 30', 'ADATA_32gb.png', 399.00),
(5, 'PATRIOT 32GB', '32 GB', 'DDR5', '6400MHz', 'CL 32', 'PATRIOT_32gb.png', 529.00);

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

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `nazwa_uzytkownika`, `haslo`, `email`, `miasto`, `ulica`, `nr_domu`) VALUES
(1, 'administrator', '$2y$10$GGVSiGB3rQLnXbouY9JUlu2I35wesHYELh6iNlEEaRyCVIdD6lLk2', 'mateusz956@gmail.com', 'Mikołów', 'Pszczynska', '80E'),
(2, 'Krzysio', '$2y$10$26UyY4cHAEEe7e9nSw70X.TwsuGv6xf/9ewFb3SP1CP/t7nUtNIKC', 'krzysio@gmail.com', 'Katowice', 'Pułaskiego 25', '41'),
(3, 'patrycjaher', '$2y$10$cSQ7/idwdI/7L4x58YrLm.xdCpncQ03sv.0DwIXjuN6d0ua0aMUwy', 'patrycjaherdzina@gmail.com', 'Mikołów', 'Pszczyńska', '80E'),
(8, 'Admin', '$2y$10$Yypjy0QtfBhaklayihKAiODea9dqwoMTNQtDAcb6J8xyuhB/g.YRS', 'admin@teb.edu.pl', 'Katowice', 'Pszczyńska', '456'),
(12, 'admin3', '$2y$10$en9c/qPNZYFdGMYHhJX7qukCfnqXtvP1v4.bIVi7ZSFTdtekKPHmG', 'admin3@teb.edu.pl', 'Mikołów', 'Pszczyńska', '80E');

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
  `certyfikat` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cena` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zasilacze`
--

INSERT INTO `zasilacze` (`id`, `nazwa`, `moc`, `standard`, `sprawnosc`, `certyfikat`, `image`, `cena`) VALUES
(1, 'MSI A850 GL', '850 W', 'ATX 3.0', '90%', '80 PLUS Gold', 'MSI_A850gl.png', 529.00),
(2, 'FSP Fortron', '500 W', 'ATX', '88%', '80 PLUS Bronze', 'FSP_Fortron.png', 229.00),
(3, 'MSI Mag', '650 W', 'ATX', '85%', '80 PLUS Bronze', 'MSI_Mag.png', 349.00),
(4, 'ENDORFY VERO', '700 W', 'ATX', '88%', '80 PLUS Bronze', 'ENDORFY_Vero.png', 289.00),
(5, 'ENDORFY SUPREMO', '750 W', 'ATX', '90%', '80 PLUS Gold', 'ENDORFY_Supremo.png', 499.00);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inne`
--
ALTER TABLE `inne`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komputery`
--
ALTER TABLE `komputery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laptopy`
--
ALTER TABLE `laptopy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `monitory`
--
ALTER TABLE `monitory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `napedy`
--
ALTER TABLE `napedy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oprogramowanie`
--
ALTER TABLE `oprogramowanie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pamiec_przenosna`
--
ALTER TABLE `pamiec_przenosna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pamiec_ram`
--
ALTER TABLE `pamiec_ram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zasilacze`
--
ALTER TABLE `zasilacze`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
