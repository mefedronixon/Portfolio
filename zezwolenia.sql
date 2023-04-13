-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Kwi 2023, 12:29
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zezwolenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lowiska`
--

CREATE TABLE `lowiska` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) NOT NULL,
  `cena` float NOT NULL,
  `cena_lodzi` float NOT NULL,
  `brak_czlonkostwa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lowiska`
--

INSERT INTO `lowiska` (`id`, `nazwa`, `cena`, `cena_lodzi`, `brak_czlonkostwa`) VALUES
(1, 'Glinianki', 100, 50, 50),
(2, 'Warta', 120, 30, 50),
(3, 'Dymaczewo', 80, 30, 50);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wedkarze`
--

CREATE TABLE `wedkarze` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `adres` varchar(40) NOT NULL,
  `kod_pocztowy` varchar(6) NOT NULL,
  `miejscowosc` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `zezwolenie` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wedkarze`
--

INSERT INTO `wedkarze` (`id`, `imie`, `nazwisko`, `adres`, `kod_pocztowy`, `miejscowosc`, `email`, `zezwolenie`) VALUES
(1, 'Jacek', 'Andrzejewski', 'Strzelecka 92', '62-050', 'Mosina', 'jacol.placol.ira@gmail.com', ''),
(2, 'krzysztof', 'fyryfą', 'strzelecka', '44-444', 'Mosina', '6dsds@gmail.com', ''),
(3, 'tomek', 'tomkowiak', 'piatkowo 3', '65-666', 'Mosina', 'wedkarz@gmail.com', ''),
(4, 'piotr', 'krzakowski', 'kolejowa', '65-666', 'Kozieglowy', 'drugiwedkarz@gmail.com', ''),
(5, 'kamil', 'senek', 'Wystrzalowa 4', '65-667', 'Lubon', '2@gmail.com', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lowiska`
--
ALTER TABLE `lowiska`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wedkarze`
--
ALTER TABLE `wedkarze`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `lowiska`
--
ALTER TABLE `lowiska`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `wedkarze`
--
ALTER TABLE `wedkarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
