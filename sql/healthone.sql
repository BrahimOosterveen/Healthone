-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 okt 2019 om 12:52
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

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `apotheker`
--
ALTER TABLE `apotheker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `apotheker`
--
ALTER TABLE `apotheker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
