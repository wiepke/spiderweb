-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 02. Okt 2018 um 10:22
-- Server-Version: 5.5.56-MariaDB
-- PHP-Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `spinnennetz`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mesoebene`
--

CREATE TABLE IF NOT EXISTS `mesoebene` (
  `id` int(11) NOT NULL,
  `Kurs` text NOT NULL,
  `Uni` text NOT NULL,
  `Fachbereich` text NOT NULL,
  `AnzahlStudenten` int(11) NOT NULL,
  `Semesterzahl` int(11) NOT NULL,
  `Einbindung` int(11) NOT NULL DEFAULT '0',
  `Verortung` int(11) NOT NULL DEFAULT '0',
  `CreditPoints` int(11) NOT NULL DEFAULT '0',
  `Prufungsrahmen` int(11) NOT NULL DEFAULT '0',
  `Zeitrahmen` int(11) NOT NULL DEFAULT '0',
  `Ressourcenrahmen` int(11) NOT NULL DEFAULT '0',
  `published` int(11) DEFAULT '1',
  `agreement` int(11) DEFAULT '0',
  `beneficial` text,
  `poorly` text,
  `contact` varchar(32) DEFAULT NULL,
  `Inhaltsrahmen` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `mesoebene`
--

INSERT INTO `mesoebene` (`id`, `Kurs`, `Uni`, `Fachbereich`, `AnzahlStudenten`, `Semesterzahl`, `Einbindung`, `Verortung`, `CreditPoints`, `Prufungsrahmen`, `Zeitrahmen`, `Ressourcenrahmen`, `published`, `agreement`, `beneficial`, `poorly`, `contact`, `Inhaltsrahmen`) VALUES
(100, 'gemeinsam Forschen', 'Universität Potsdam', 'Informatik', 8, 6, 1, 1, 0, 1, 1, 1, 1, 1, 'Es wurden Konzepte diskutiert und eine grundlegende Version des angestrebten Tools entwickelt.', 'Die eingeschränkten Grundkenntnisse im Bereich des Programmierens hemmten die Entwicklung des Tools.\r\nDer Erkenntnisgewinn im Rahmen der Forschung war eher gering.', '', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mikroebene`
--

CREATE TABLE IF NOT EXISTS `mikroebene` (
  `id` int(11) NOT NULL,
  `Kurs` text NOT NULL,
  `Uni` text NOT NULL,
  `Fachbereich` text NOT NULL,
  `AnzahlStudenten` int(11) NOT NULL,
  `Semesterzahl` int(11) NOT NULL,
  `feedback` int(11) NOT NULL DEFAULT '0',
  `Forschungsthema` int(11) NOT NULL DEFAULT '0',
  `Forschungsfrage` int(11) NOT NULL DEFAULT '0',
  `Planung` int(11) NOT NULL DEFAULT '0',
  `Durchfuhrung` int(11) NOT NULL DEFAULT '0',
  `Reflexion` int(11) NOT NULL DEFAULT '0',
  `Ergebnisdarstellung` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '1',
  `agreement` int(11) DEFAULT '0',
  `beneficial` text,
  `poorly` text,
  `contact` varchar(32) DEFAULT NULL,
  `Assessment` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `mikroebene`
--

INSERT INTO `mikroebene` (`id`, `Kurs`, `Uni`, `Fachbereich`, `AnzahlStudenten`, `Semesterzahl`, `feedback`, `Forschungsthema`, `Forschungsfrage`, `Planung`, `Durchfuhrung`, `Reflexion`, `Ergebnisdarstellung`, `published`, `agreement`, `beneficial`, `poorly`, `contact`, `Assessment`) VALUES
(111, 'gemeinsam Forschen', 'Universität Potsdam', 'Informatik', 8, 6, 1, 2, 2, 3, 1, 3, 1, 1, 1, 'Es wurden Konzepte diskutiert und eine grundlegende Version des angestrebten Tools entwickelt.', 'Die eingeschränkten Grundkenntnisse im Bereich des Programmierens hemmten die Entwicklung des Tools.\r\nDer Erkenntnisgewinn im Rahmen der Forschung war eher gering.', '', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mesoebene`
--
ALTER TABLE `mesoebene`
  ADD KEY `id` (`id`);

--
-- Indizes für die Tabelle `mikroebene`
--
ALTER TABLE `mikroebene`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mesoebene`
--
ALTER TABLE `mesoebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT für Tabelle `mikroebene`
--
ALTER TABLE `mikroebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
