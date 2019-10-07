-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 okt 2019 om 12:54
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
CREATE DATABASE IF NOT EXISTS `healthone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `healthone`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `patientnummer` varchar(255) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Achternaam` varchar(255) NOT NULL,
  `Geboortedatum` date NOT NULL,
  `telefoonnummer` varchar(12) NOT NULL,
  `medicijnen` int(11) NOT NULL,
  `medicijnenvullen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dokter`
--

INSERT INTO `dokter` (`id`, `patientnummer`, `Naam`, `Achternaam`, `Geboortedatum`, `telefoonnummer`, `medicijnen`, `medicijnenvullen`) VALUES
(1, '302837783', 'Peter', 'R. de vries', '2001-12-22', '0649700573', 0, 'Hooikoorts pillen'),
(2, '302839955', 'Mark', 'Rutten', '2004-06-22', '0612345678', 0, 'Paracetemol');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medicijn`
--

CREATE TABLE `medicijn` (
  `id` int(255) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Fabrikant` varchar(255) NOT NULL,
  `HoeToedienen` varchar(255) NOT NULL,
  `NietMedicijn` varchar(255) NOT NULL,
  `Bijwerkingen` varchar(255) NOT NULL,
  `reccept` varchar(255) NOT NULL,
  `Vergoed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `medicijn`
--

INSERT INTO `medicijn` (`id`, `Naam`, `Fabrikant`, `HoeToedienen`, `NietMedicijn`, `Bijwerkingen`, `reccept`, `Vergoed`) VALUES
(1, 'Accofil', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(2, 'baccofille', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(3, 'Accofil', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(4, 'Accofil', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(5, 'Accofil', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(6, 'Accofil', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `medicijn`
--
ALTER TABLE `medicijn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `medicijn`
--
ALTER TABLE `medicijn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
