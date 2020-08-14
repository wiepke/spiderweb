SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `spinnennetz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spinnennetz`;

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
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `mesoebene` (`id`, `Kurs`, `Uni`, `Fachbereich`, `AnzahlStudenten`, `Semesterzahl`, `Einbindung`, `Verortung`, `CreditPoints`, `Prufungsrahmen`, `Zeitrahmen`, `Ressourcenrahmen`, `published`, `agreement`, `beneficial`, `poorly`, `contact`, `Inhaltsrahmen`) VALUES
(100, 'gemeinsam Forschen', 'Universität Potsdam', 'Informatik', 8, 6, 1, 1, 0, 1, 1, 1, 1, 1, 'Es wurden Konzepte diskutiert und eine grundlegende Version des angestrebten Tools entwickelt.', 'Die eingeschränkten Grundkenntnisse im Bereich des Programmierens hemmten die Entwicklung des Tools.\r\nDer Erkenntnisgewinn im Rahmen der Forschung war eher gering.', '', 2),
(101, 'Interdisziplinäre Studieneingangsprojekte (KIVA)', 'Technische Universität Darmstadt', 'interdisziplinär - 12 Fachbereiche involviert', 2300, 1, 2, 0, 0, 1, 1, 2, 0, 1, '', '', 'https://www.kiva.tu-darmstadt.de', 2),
(102, 'Lehrforschung', 'Universität', 'FB', 25, 1, 2, 1, 0, 3, 1, 1, 0, 1, '', '', '', 2),
(103, 'Forschendes Lernen - Komplexe Behinderung', 'TU Dortmund', 'Rehabilitationswissenschaften', 35, 4, 1, 1, 0, 1, 1, 1, 0, 1, '', '', '', 1),
(104, 'Empirische Forschungsmethoden', 'FernUniversität in Hagen', 'KSW', 20, 1, 1, 1, 0, 1, 1, 1, 1, 0, '', '', '', 1),
(105, 'Assistive Technologien - Schlüssel zur selbstbestimmten Teilhabe', 'TU Dortmund', 'Rehabilitationspädagogik', 50, 4, 1, 1, 0, 2, 3, 1, 1, 0, '', '', '', 1),
(106, 'Forschungsprojekt "Knowledge Management Success"', 'FernUniversität in Hagen', 'Wirtschaftswissenschaft; Betriebliche Anwendungssysteme', 50, 8, 1, 2, 0, 1, 1, 1, 0, 1, '', '', '', 2),
(107, 'GTP Forschendes Lernen', 'Universität Hamburg', 'interdisziplinär', 8, 1, 1, 1, 0, 2, 3, 3, 0, 1, '', '', '', 1),
(108, 'GTP Forschendes Lernen - Idealtypus I', 'Universität Hamburg', 'interdisziplinär', 8, 4, 1, 1, 0, 1, 3, 3, 0, 1, '', '', '', 1),
(109, 'GTP Idealtyp', 'Universität Hamburg', 'interdisziplinär', 100, 1, 0, 1, 0, 2, 3, 3, 0, 1, '', '', '', 1),
(110, 'Biochemie', 'FH Aachen', 'Chemie und Biotechnologie', 60, 3, 2, 1, 2, 1, 1, 3, 1, 1, 'Flipped Classroom -> Vorbereitung durch LMS und Videos. Selbstständiges arbeiten und planen.', 'Noch zu wenig Zeit (nur 2 zusmmenhängende Wochen)', 'horst@fh-aachen.de', 0),
(111, 'Wissenschaftspropädeutisches Seminar in der Philosophie ', 'JGU Mainz', 'FB05 Philosophie Philologie ', 30, 1, 1, 1, 2, 1, 1, 2, 0, 1, 'Fristen einhalten, Orga', 'geringes semantisches Verständnis der Studierenden, Probleme mit dem wissenschaftlichen Arbeitsprozess', '', 0),
(112, 'Qualitative Sozialforschung', 'TU Braunschweig', 'Sozialwissenschaften', 30, 1, 1, 1, 2, 1, 1, 1, 1, 1, 'Interviewdurchführung', 'Estellen einer wissenschaftlichen Hausarbeit im Modulzusammenhang', 'j.scholl@tu-bs.de', 0),
(113, 'Agrarbetriebsmanagement', 'DHBW Mosbach', 'Wirtschaft', 15, 6, 1, 2, 1, 2, 1, 2, 1, 1, 'Stärken und Expertise des Einzelnen für ein gemeinsames Gruppenergebnis nutzen. Die Verteilung der inhaltlich sehr heterogenen Aufgaben erfolgt dabei durch die Studierenden selbst. ', 'Hohe Komplexität bei offener Struktur des Seminars kann zu Überforderung und Planlosigkeit führen. Wichtig ist es daher, die Stimmungslage in der Gruppe stets im Auge zu behalten und ggf. in den Forschungsprozess einzufreifen. ', '', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `mikroebene` (`id`, `Kurs`, `Uni`, `Fachbereich`, `AnzahlStudenten`, `Semesterzahl`, `feedback`, `Forschungsthema`, `Forschungsfrage`, `Planung`, `Durchfuhrung`, `Reflexion`, `Ergebnisdarstellung`, `published`, `agreement`, `beneficial`, `poorly`, `contact`, `Assessment`) VALUES
(111, 'gemeinsam Forschen', 'Universität Potsdam', 'Informatik', 8, 6, 1, 2, 2, 3, 1, 3, 1, 1, 1, 'Es wurden Konzepte diskutiert und eine grundlegende Version des angestrebten Tools entwickelt.', 'Die eingeschränkten Grundkenntnisse im Bereich des Programmierens hemmten die Entwicklung des Tools.\r\nDer Erkenntnisgewinn im Rahmen der Forschung war eher gering.', '', 0),
(112, 'Interdisziplinäre Studieneingangsprojekte (KIVA)', 'Technische Universität Darmstadt', 'interdisziplinär - 12 Fachbereiche involviert', 2300, 1, 1, 1, 1, 1, 2, 2, 1, 0, 1, '', '', 'https://www.kiva.tu-darmstadt.de', 0),
(113, 'Lehrforschung', 'Universität', 'FB', 25, 1, 2, 2, 3, 1, 2, 1, 3, 0, 1, '', '', '', 0),
(114, 'Forschendes Lernen - Komplexe Behinderung', 'TU Dortmund', 'Rehabilitationswissenschaften', 35, 4, 1, 2, 2, 2, 2, 1, 1, 0, 1, '', '', '', 0),
(115, 'Empirische Forschungsmethoden', 'FernUniversität in Hagen', 'KSW', 20, 1, 1, 2, 2, 2, 3, 1, 1, 1, 0, '', '', '', 0),
(116, 'Assistive Technologien - Schlüssel zur selbstbestimmten Teilhabe', 'TU Dortmund', 'Rehabilitationspädagogik', 50, 4, 1, 2, 2, 3, 3, 2, 1, 1, 0, '', '', '', 0),
(117, 'Forschungsprojekt "Knowledge Management Success"', 'FernUniversität in Hagen', 'Wirtschaftswissenschaft; Betriebliche Anwendungssysteme', 50, 8, 1, 1, 1, 1, 2, 2, 1, 0, 1, '', '', '', 0),
(118, 'GTP Forschendes Lernen', 'Universität Hamburg', 'interdisziplinär', 8, 1, 1, 1, 1, 1, 1, 1, 3, 0, 1, '', '', '', 0),
(119, 'GTP Forschendes Lernen - Idealtypus I', 'Universität Hamburg', 'interdisziplinär', 8, 4, 1, 1, 1, 1, 1, 1, 3, 0, 1, '', '', '', 0),
(120, 'GTP Modell', 'Universität Hamburg', 'interdisziplinär', 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0),
(121, 'GTP Idealtyp', 'Universität Hamburg', 'interdisziplinär', 100, 1, 1, 1, 1, 1, 1, 1, 3, 0, 1, '', '', '', 0),
(122, 'Biochemie', 'FH Aachen', 'Chemie und Biotechnologie', 60, 3, 2, 2, 3, 2, 2, 2, 2, 1, 1, 'Flipped Classroom -> Vorbereitung durch LMS und Videos. Selbstständiges arbeiten und planen.', 'Noch zu wenig Zeit (nur 2 zusmmenhängende Wochen)', 'horst@fh-aachen.de', 0),
(123, 'Wissenschaftspropädeutisches Seminar in der Philosophie ', 'JGU Mainz', 'FB05 Philosophie Philologie ', 30, 1, 1, 1, 2, 1, 2, 2, 1, 0, 1, 'Fristen einhalten, Orga', 'geringes semantisches Verständnis der Studierenden, Probleme mit dem wissenschaftlichen Arbeitsprozess', '', 0),
(124, 'Qualitative Sozialforschung', 'TU Braunschweig', 'Sozialwissenschaften', 30, 1, 2, 2, 2, 1, 2, 2, 1, 1, 1, 'Interviewdurchführung', 'Estellen einer wissenschaftlichen Hausarbeit im Modulzusammenhang', 'j.scholl@tu-bs.de', 0),
(125, 'Agrarbetriebsmanagement', 'DHBW Mosbach', 'Wirtschaft', 15, 6, 2, 2, 2, 1, 2, 2, 1, 1, 1, 'Stärken und Expertise des Einzelnen für ein gemeinsames Gruppenergebnis nutzen. Die Verteilung der inhaltlich sehr heterogenen Aufgaben erfolgt dabei durch die Studierenden selbst. ', 'Hohe Komplexität bei offener Struktur des Seminars kann zu Überforderung und Planlosigkeit führen. Wichtig ist es daher, die Stimmungslage in der Gruppe stets im Auge zu behalten und ggf. in den Forschungsprozess einzufreifen. ', '', 0);


ALTER TABLE `mesoebene`
  ADD KEY `id` (`id`);

ALTER TABLE `mikroebene`
  ADD KEY `id` (`id`);


ALTER TABLE `mesoebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
ALTER TABLE `mikroebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
  
