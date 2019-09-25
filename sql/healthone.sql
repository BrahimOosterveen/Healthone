-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 sep 2019 om 15:27
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `apotheker`
--

CREATE TABLE `apotheker` (
  `id` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Achternaam` varchar(255) NOT NULL,
  `Geboortedatum` date NOT NULL,
  `Medicijnen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `apotheker`
--

INSERT INTO `apotheker` (`id`, `Naam`, `Achternaam`, `Geboortedatum`, `Medicijnen`) VALUES
(1, 'Carlos', 'Miguel', '2019-09-26', 'Geen'),
(2, 'Brahim', 'Oosterveen', '2019-09-14', 'Paracetamol'),
(3, 'Fien', 'Van Oosterhen', '2001-09-11', 'Ebola Anti-disinfectant'),
(4, 'Peter', 'R. De Vries', '1973-02-24', 'Anticonceptiepil'),
(5, 'Geno', 'Welvaart', '1999-12-18', 'Detrusitol'),
(9, 'Anthony', 'Hemstro', '1979-08-12', ''),
(10, 'Paul', 'Fiender', '1979-08-12', ''),
(11, 'Steven', 'Spielberg', '1979-08-13', 'Nigger'),
(12, 'Matthew', 'Magonahey', '1979-08-22', ''),
(13, 'Larry', 'Cliffs', '1979-08-12', ''),
(14, 'Jeffrey', 'Megin', '1979-08-12', ''),
(15, 'Scott', 'Liverston', '1967-02-28', ''),
(16, 'Gregory', 'Chelsea', '1969-07-28', ''),
(17, 'Jonathan', 'De Jong', '1971-08-12', ''),
(18, 'Benjamin', 'De Licht', '1986-06-18', ''),
(19, 'Billy', 'Eilish', '1998-03-25', ''),
(20, 'Jeremy', 'Perpentual', '1947-09-11', ''),
(21, 'Freddy', 'Kruger', '2011-02-28', ''),
(22, 'Achmed', 'Benhamir', '2002-01-23', ''),
(23, 'Annass', 'Araf', '1999-05-23', ''),
(29, 'Jeffrey', 'Megin', '1982-07-22', ''),
(30, 'Scott', 'Liverston', '1997-02-03', ''),
(31, 'Gregory', 'Chelsea', '1952-08-11', ''),
(32, 'Jonathan', 'De Jong', '2007-05-18', ''),
(33, 'Benjamin', 'De Licht', '1993-06-25', ''),
(34, 'Billy', 'Eilish', '1984-06-14', ''),
(35, 'Jeremy', 'Perpentual', '1955-09-11', ''),
(36, 'Freddy', 'Kruger', '1966-07-22', ''),
(37, 'Achmed', 'Benhamir', '1971-11-19', ''),
(38, 'Annass', 'Araf', '2001-12-22', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fietsen`
--

CREATE TABLE `fietsen` (
  `id` int(1) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prijs` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fietsen`
--

INSERT INTO `fietsen` (`id`, `merk`, `type`, `prijs`) VALUES
(1, 'Batavus', 'Blockbuster', 699),
(2, 'Batavus', 'Flying D', 749);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `apotheker`
--
ALTER TABLE `apotheker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `apotheker`
--
ALTER TABLE `apotheker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT voor een tabel `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
