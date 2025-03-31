-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 31 mrt 2025 om 12:45
-- Serverversie: 8.0.30
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishdev`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `requirements` text NOT NULL,
  `hours` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `posted_date` date NOT NULL,
  `date_posted` date NOT NULL DEFAULT '2025-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `vacancies`
--

INSERT INTO `vacancies` (`id`, `position`, `description`, `requirements`, `hours`, `active`, `posted_date`, `date_posted`) VALUES
(1, 'Kok', 'Wij zoeken een enthousiaste kok met ervaring in de Arabische keuken.', 'Minimaal 2 jaar ervaring in een professionele keuken. Kennis van Arabische gerechten.', '32-40 uur per week', 1, '2023-05-15', '2025-01-01'),
(2, 'Serveerster/Ober', 'Voor onze avonddiensten zoeken wij een vriendelijke en gastvrije bediening.', 'Ervaring in de horeca is een pre. Goede communicatieve vaardigheden. Flexibel inzetbaar in de avonduren en weekenden.', '16-24 uur per week', 1, '2023-05-20', '2025-01-01');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
