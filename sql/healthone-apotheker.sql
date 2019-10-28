-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 okt 2019 om 10:09
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
  `Bijwerkingen` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `apotheker`
--

INSERT INTO `apotheker` (`id`, `Naam`, `Achternaam`, `Geboortedatum`, `Medicijnen`, `Beschrijving`, `Bijwerkingen`, `status`) VALUES
(10329, 'Gregory', 'Chelsea', '1969-07-28', 'Dometin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 1),
(12884, 'Scott', 'Liverston', '1967-02-28', 'Dacepton', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 1),
(19423, 'Carlos', 'Miguel', '2019-09-26', 'Ubretid ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 1),
(22193, 'Peter', 'R. De Vries', '1973-02-24', 'Anticonceptiepil', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 1),
(22303, 'Brahim', 'Oosterveen', '2019-09-14', 'Paracetamol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(29094, 'Jonathan', 'De Jong', '2007-05-18', 'Ventolin inhalatie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(39928, 'Billy', 'Eilish', '1984-06-14', 'Lamberts Valeriaan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(39930, 'Achmed', 'Benhamir', '1971-11-19', 'Renvela', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(42498, 'Steven', 'Spielberg', '1979-08-13', 'Ondexxya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(54023, 'Geno', 'Welvaart', '1999-12-18', 'Detrusitol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(60293, 'Jeffrey', 'Megin', '1982-07-22', 'Indocollyre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(66532, 'Larry', 'Cliffs', '1979-08-12', 'Balcoga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(67473, 'Freddy', 'Kruger', '1966-07-22', 'Pregnyl', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(68824, 'Paul', 'Fiender', '1979-08-12', 'Otrivin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(75823, 'Matthew', 'Magonahey', '1979-08-22', 'Bevacizumab', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(76490, 'Annass', 'Araf', '2001-12-22', 'Quinapril/Hydrochloorthiazide', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(79940, 'Jeremy', 'Perpentual', '1955-09-11', 'Pharmalgen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(84229, 'Benjamin', 'De Licht', '1993-06-25', 'Vagrecor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(89030, 'Fien', 'Van Oosterhen', '2001-09-11', 'Ebola Anti-disinfectant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0),
(99442, 'Anthony', 'Hemstro', '1979-08-12', 'Omecat ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et enim vel lacus cursus luctus sed eget odio. Donec sed. ', '', 0);

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'Carlos', '$2y$10$AlF.AR4SlJ2uIMaGjYcYquFqveihx11T7a2PyUMNlkzFtjNnefEC6', '2019-10-14 11:55:47'),
(3, 'Nitroreet', '$2y$10$4bVgWRZXU3hKVWjQd0ZwEOo9evvHXW9LSmFEAWgb/gojj6rVlA6b2', '2019-10-14 12:02:56'),
(4, 'Weikizhou', '$2y$10$bnE3gJQ99BWBHr/oPEmTseibM6e3dF2FPLTFypT4kijSC3e11khYq', '2019-10-14 12:13:51'),
(5, 'Brahim', '$2y$10$uHIUT45vMllY09N1iReCyeVWy6G5gM38C0NnKrCyiW9DGapc0ATiu', '2019-10-14 12:24:10'),
(6, 'Godwin', '$2y$10$dHVGEukZO2nvfXtMYv15iulOVzTPdBk3jSxlS/GS75fAjDEpB3ldu', '2019-10-14 12:43:19'),
(8, 'Godwinopak', 'G×ÝÇ²bñ†Ø÷n«*Ü', '2019-10-14 12:47:12'),
(9, 'Bitchniggas', '$2y$10$7gZN9Y4D.W5Rovr2IM42Z.LyzJuuJJzHS/h35RTyFRJ027crij.OS', '2019-10-14 12:50:48');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `apotheker`
--
ALTER TABLE `apotheker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `medicijn`
--
ALTER TABLE `medicijn`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `apotheker`
--
ALTER TABLE `apotheker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;

--
-- AUTO_INCREMENT voor een tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `medicijn`
--
ALTER TABLE `medicijn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
