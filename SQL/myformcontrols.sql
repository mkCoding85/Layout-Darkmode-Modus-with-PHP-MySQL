-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 21. Dez 2021 um 12:17
-- Server-Version: 8.0.21
-- PHP-Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `myformcontrols`
--

DROP TABLE IF EXISTS `myformcontrols`;
CREATE TABLE IF NOT EXISTS `myformcontrols` (
  `id` int NOT NULL,
  `checkbox1` tinyint(1) DEFAULT NULL,
  `color` char(7)  DEFAULT NULL,
  `bgcolor` char(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Daten für Tabelle `myformcontrols`
--

INSERT INTO `myformcontrols` (`id`, `checkbox1`, `color`, `bgcolor`) VALUES
(1, 0, '#fff', '#252525');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
