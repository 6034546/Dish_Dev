-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 01 apr 2025 om 09:12
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
-- Tabelstructuur voor tabel `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) NOT NULL,
  `allergens` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `category`, `allergens`, `image`, `featured`) VALUES
(1, 'Hummus', 'Romige kikkererwten dip met olijfolie en pitabrood', 6.50, 'voorgerecht', 'gluten, sesam', 'hummus.jpg', 1),
(2, 'Falafel', 'Gefrituurde balletjes van kikkererwten met tahini saus', 7.50, 'voorgerecht', 'sesam', 'falafel.jpg', 1),
(3, 'Couscous met Lam', 'Traditionele couscous met gestoofd lamsvlees en groenten', 18.50, 'hoofdgerecht', 'gluten', 'couscous-lamb.jpg', 1),
(4, 'Baklava', 'Zoet gebak met noten en honing', 5.50, 'nagerecht', 'gluten, noten', 'baklava.jpg', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

CREATE TABLE `reservations` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `guests` int NOT NULL,
  `comments` text,
  `status` enum('pending','confirmed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `reservation_date`, `reservation_time`, `guests`, `comments`, `status`, `created_at`, `message`) VALUES
(1, 'tariq assaban', 'tarqassaban@gmail.com', '0681136165', '2025-04-02', '21:00:00', 1, NULL, 'pending', '2025-03-31 10:15:01', ''),
(2, 'tariq assaban', 'tarqassaban@gmail.com', '0681136165', '2026-07-17', '19:30:00', 5, NULL, 'pending', '2025-03-31 12:27:18', '');

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
-- Indexen voor tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
