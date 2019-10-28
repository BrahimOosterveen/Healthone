-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 okt 2019 om 10:08
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
-- Tabelstructuur voor tabel `apotheker`
--

CREATE TABLE `apotheker` (
  `id` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Achternaam` varchar(255) NOT NULL,
  `Geboortedatum` date NOT NULL,
  `Medicijnen` varchar(255) NOT NULL,
  `Beschrijving` varchar(255) NOT NULL,
  `Bijwerkingen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `apotheker`
--

INSERT INTO `apotheker` (`id`, `Naam`, `Achternaam`, `Geboortedatum`, `Medicijnen`, `Beschrijving`, `Bijwerkingen`) VALUES
(10329, 'Gregory', 'Chelsea', '1969-07-28', 'Dometin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(12884, 'Scott', 'Liverston', '1967-02-28', 'Dacepton', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(19423, 'Carlos', 'Miguel', '2019-09-26', 'Ubretid ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(22193, 'Peter', 'R. De Vries', '1973-02-24', 'Anticonceptiepil', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(22303, 'Brahim', 'Oosterveen', '2019-09-14', 'Paracetamol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(29094, 'Jonathan', 'De Jong', '2007-05-18', 'Ventolin inhalatie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(39928, 'Billy', 'Eilish', '1984-06-14', 'Lamberts Valeriaan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(39930, 'Achmed', 'Benhamir', '1971-11-19', 'Renvela', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(42498, 'Steven', 'Spielberg', '1979-08-13', 'Ondexxya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(47728, 'Achmed', 'Benhamir', '2002-01-23', 'Gilenya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(54023, 'Geno', 'Welvaart', '1999-12-18', 'Detrusitol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(57239, 'Billy', 'Eilish', '1998-03-25', 'Ultralan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(60293, 'Jeffrey', 'Megin', '1982-07-22', 'Indocollyre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(66532, 'Larry', 'Cliffs', '1979-08-12', 'Balcoga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(67473, 'Freddy', 'Kruger', '1966-07-22', 'Pregnyl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(68824, 'Paul', 'Fiender', '1979-08-12', 'Otrivin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(70239, 'Scott', 'Liverston', '1997-02-03', 'Hot Coldrex', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(74293, 'Jonathan', 'De Jong', '1971-08-12', 'Xeristar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(75823, 'Matthew', 'Magonahey', '1979-08-22', 'Bevacizumab', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(76490, 'Annass', 'Araf', '2001-12-22', 'Quinapril/Hydrochloorthiazide', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(78882, 'Annass', 'Araf', '1999-05-23', 'Glypressin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(79940, 'Jeremy', 'Perpentual', '1955-09-11', 'Pharmalgen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(84229, 'Benjamin', 'De Licht', '1993-06-25', 'Vagrecor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(85823, 'Jeffrey', 'Megin', '1979-08-12', 'Dexa-POS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(86494, 'Freddy', 'Kruger', '2011-02-28', 'Sevikar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(87634, 'Jeremy', 'Perpentual', '1947-09-11', 'Seroxat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(89030, 'Fien', 'Van Oosterhen', '2001-09-11', 'Ebola Anti-disinfectant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(95395, 'Gregory', 'Chelsea', '1952-08-11', 'Lamisil Once', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(99442, 'Anthony', 'Hemstro', '1979-08-12', 'Omecat ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', ''),
(99999, 'Benjamin', 'De Licht', '1986-06-18', 'Uptravi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medicijn`
--

CREATE TABLE `medicijn` (
  `id` int(255) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
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

INSERT INTO `medicijn` (`id`, `mid`, `naam`, `Fabrikant`, `HoeToedienen`, `NietMedicijn`, `Bijwerkingen`, `reccept`, `Vergoed`) VALUES
(1, '1000', 'antibiotica', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(2, '1001', 'Diclofenac', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(3, '1002', 'Amoxicilline', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(4, '1003', 'Omeprazol', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja'),
(5, '1004', 'Hydrocortison', 'Teva', 'Door injectie', 'antistollingsmiddelen', 'botpijn, hoofdpijn, pijn in gewrichten en spieren, maagdarmklachten, vermoeidheid, zwakte, hoest en haaruitval.', 'Ja', 'Ja');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patientnummer` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `geboortedatum` date NOT NULL,
  `telefoonnummer` varchar(255) NOT NULL,
  `medicijnen` varchar(255) NOT NULL,
  `recept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `patient`
--

INSERT INTO `patient` (`id`, `patientnummer`, `naam`, `achternaam`, `geboortedatum`, `telefoonnummer`, `medicijnen`, `recept`) VALUES
(1, '0001', 'Brahim', 'Oosterveen', '2001-12-22', '06-49700573', '', ''),
(2, '0002', 'Carlos', 'Miguel', '2002-01-10', '06-23600583', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recept`
--

CREATE TABLE `recept` (
  `id` int(11) NOT NULL,
  `patientnummer` varchar(255) NOT NULL,
  `mid` int(11) NOT NULL,
  `lengte` varchar(255) NOT NULL,
  `herhaling` tinyint(1) NOT NULL,
  `dosering` varchar(255) NOT NULL,
  `bericht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `recept`
--

INSERT INTO `recept` (`id`, `patientnummer`, `mid`, `lengte`, `herhaling`, `dosering`, `bericht`) VALUES
(74, '0001', 1000, '1 week', 0, '10ml', 'Moet 4x per dag klein eetlepel inemen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `apotheker`
--
ALTER TABLE `apotheker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `medicijn`
--
ALTER TABLE `medicijn`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `recept`
--
ALTER TABLE `recept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `patientnummer` (`patientnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `apotheker`
--
ALTER TABLE `apotheker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;

--
-- AUTO_INCREMENT voor een tabel `medicijn`
--
ALTER TABLE `medicijn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `recept`
--
ALTER TABLE `recept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
