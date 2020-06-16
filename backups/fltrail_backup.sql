SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
(110, '', '', '', 0, 0, 2, 3, 0, 2, 3, 3, 0, 1, '', '', '', 3),
(111, 'PROLEGO', 'HS Offenburg', 'interdisziplinär', 0, 0, 1, 2, 1, 1, 1, 2, 1, 0, NULL, NULL, NULL, 0),
(112, 'Forschungskompetenzen für die Schulpraxis', 'Pädagogische Hochschule Luzern', 'Lehramt', 45, 4, 2, 2, 3, 2, 1, 1, 0, 1, 'Themenwahl, relativ hohe Motivation der Studierenden', 'Ressourcen sind mit 2CP (zu) knapp bemessen.', '', 0),
(113, 'Y', 'Uni x', 'Be', 20, 1, 1, 1, 3, 1, 1, 2, 0, 1, '', '', '', 0),
(114, 'Praxisorientierte Methodik und Didaktik im Chemieunterricht', 'Universität Koblenz', 'Fachdidaktik Chemie', 25, 0, 1, 2, 2, 3, 2, 1, 1, 0, NULL, NULL, NULL, 0),
(115, 'Inno-Lab', 'Uni Hamburg', 'Informatik', 36, 8, 1, 1, 1, 1, 2, 3, 0, 1, '', '', '', 0),
(116, 'Recht und Krise', 'Universität Basel', 'Rechtswissenschaft', 12, 3, 2, 1, 2, 1, 1, 1, 0, 1, '', '', '', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
(122, 'PROLEGO', 'HS Offenburg', 'interdisziplinär', 0, 0, 2, 1, 1, 1, 2, 1, 1, 1, 0, NULL, NULL, NULL, 0),
(123, 'Forschungskompetenzen für die Schulpraxis', 'Pädagogische Hochschule Luzern', 'Lehramt', 45, 4, 2, 2, 2, 3, 2, 3, 2, 0, 1, 'Themenwahl, relativ hohe Motivation der Studierenden', 'Ressourcen sind mit 2CP (zu) knapp bemessen.', '', 0),
(124, 'Y', 'Uni x', 'Be', 20, 1, 1, 1, 1, 1, 2, 1, 1, 0, 1, '', '', '', 0),
(125, 'Praxisorientierte Methodik und Didaktik im Chemieunterricht', 'Universität Koblenz', 'Fachdidaktik Chemie', 25, 0, 2, 2, 2, 2, 2, 2, 1, 1, 0, NULL, NULL, NULL, 0),
(126, 'Inno-Lab', 'Uni Hamburg', 'Informatik', 36, 8, 2, 1, 3, 1, 2, 2, 2, 0, 1, '', '', '', 0),
(127, 'Recht und Krise', 'Universität Basel', 'Rechtswissenschaft', 12, 3, 2, 2, 2, 2, 3, 2, 2, 0, 1, '', '', '', 0);


ALTER TABLE `mesoebene`
  ADD KEY `id` (`id`);

ALTER TABLE `mikroebene`
  ADD KEY `id` (`id`);


ALTER TABLE `mesoebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
ALTER TABLE `mikroebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;CREATE DATABASE IF NOT EXISTS `spinnennetztest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spinnennetztest`;

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
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `mesoebene` (`id`, `Kurs`, `Uni`, `Fachbereich`, `AnzahlStudenten`, `Semesterzahl`, `Einbindung`, `Verortung`, `CreditPoints`, `Prufungsrahmen`, `Zeitrahmen`, `Ressourcenrahmen`, `published`, `agreement`, `beneficial`, `poorly`, `contact`, `Inhaltsrahmen`) VALUES
(100, 'gemeinsam Forschen', 'Universität Potsdam', 'Informatik', 8, 6, 1, 1, 0, 1, 1, 1, 1, 1, 'Es wurden Konzepte diskutiert und eine grundlegende Version des angestrebten Tools entwickelt.', 'Die eingeschränkten Grundkenntnisse im Bereich des Programmierens hemmten die Entwicklung des Tools.\r\nDer Erkenntnisgewinn im Rahmen der Forschung war eher gering.', '', 2),
(101, '', '', '', 0, 0, 3, 0, 0, 0, 0, 3, 1, 1, 'war alles fine', '', '', 0),
(102, 'tztnb', '44', 'rdf', 3, 24, 2, 0, 0, 0, 3, 0, 1, 1, 'g4r', '', '', 3),
(103, 'qerznsgdf', 'adfkguzkjrruz', 'sdfdfggjdh', 234, 1, 2, 3, 0, 1, 2, 3, 0, 1, '', '', '', 2),
(104, 'TestLehre', 'TestSchule', 'Testfach', 3, 1, 1, 2, 3, 1, 3, 2, 1, 1, 'Alles', 'nichts', '', 0),
(105, 'Buchstabieren lernen', 'Uni Hamburg', 'Hochschuldidaktik', 7, 2, 2, 1, 1, 2, 2, 1, 0, 1, 'nur wenig', 'die Studierenden', '', 0),
(106, 'Avengers rocken', 'Meine Hochschule', 'Marvel', 12, 42, 2, 3, 0, 0, 1, 1, 0, 1, 'alles ... und son bissl was mehr', 'mehr.... is nich', 'test@uni.de', 0),
(107, 'test', 'Technische Hochschule', 'test', 20, 1, 2, 1, 1, 2, 0, 1, 0, 1, '+++', '----', '', 0),
(108, 'gemeinsam Forschen', 'Uni Potsdam', 'forschendes Lernen', 4, 5, 1, 3, 2, 2, 1, 3, 0, 1, 'alles', 'nichts', 'ich@uni.de', 0),
(109, 'Unklar', 'Unklar', 'Mathematik', 0, 0, 1, 1, 2, 3, 0, 0, 1, 0, NULL, NULL, NULL, 0),
(110, 'Unklar', 'Unklar', 'Mathematik', 0, 0, 1, 1, 2, 3, 0, 0, 0, 1, '', '', '', 0),
(111, 'Forschendes Lernen - Komplexe Behinderung', 'TU Dortmund', 'Rehabilitationswissenschaften', 35, 4, 1, 1, 1, 1, 1, 1, 0, 1, '', '', '', 0),
(112, 'bshjgwe', 'abd', 'cwdkjh', 20, 1, 1, 2, 3, 1, 3, 2, 0, 1, 'wdhjgwdlwd', 'wejkhewdjkdw', '', 0),
(113, 'fbgfgb', 'ewrwewr', 'qerferqefwe', 3, 3, 2, 3, 2, 3, 3, 3, 0, 1, '', '', '', 0),
(114, '', '', '', 0, 0, 2, 2, 1, 3, 2, 1, 1, 1, 'Ich war vollkommen zufrieden mit allem.', 'Der Rest hat mich gestört.', '', 0),
(115, 'GTP forschendes Lernen', 'Universität Hamburg -', 'Hamburger Zentrum für Lehre und Lernen', 8, 1, 1, 1, 1, 2, 3, 3, 0, 1, 'dies ist ein Idealtyp', 'dies ist ein Idealttyp, es werden niemals alle bedingungen erfüllt sein ', '', 0),
(116, 'GTP Idealtypus II', 'Universität Hamburg', 'Hamburger Zentrum ', 8, 3, 3, 3, 3, 3, 3, 3, 0, 1, 'Idealtyp eines komplett freien Projektstudium', 'alles freiwillig, trotzdem werden Ressourcen gebunden', '', 0),
(117, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'Zentrum für Lehren und Lernen', 75, 1, 3, 3, 3, 3, 2, 2, 0, 1, 'Bedarfsorientiertes Feedback, die Studierenden holen sich Informationen, wenn sie sie brauchen. Über Arbeitsaufträge kann das Komplexitätsniveau gesteuert werden. Hochmotiverte Personen durch freiwilliges Angebot', 'MIschung aus Studierenden, die freiwillig dabei sind mit Studierenden, die es als Pflichtangebot haben. ', '', 0),
(118, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 3, 3, 3, 2, 2, 0, 1, 'Feedback einholen durch die Studierende klappt gut. Mittels Auftrag kann man die Aufgabe in der Komplexität nach Gruppenfähigkeit anpassen', 'Reflexionsanlässe fallen häufig eher knapp aus, man muss flexibel sein. Kombination aus verpflichteten Studierenden und freiwilligen ist nicht gut für die Gruppendynamik', '', 0),
(119, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(120, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(121, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 70, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(122, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 78, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(123, 'Reflexion', 'Reflexionstest', 'Test', 1, 2, 2, 1, 3, 2, 1, 2, 1, 1, 'alles', 'rest', '', 0),
(124, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(125, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(126, 'Sportmedizin über die Lebensspanne', 'Universität Hamburg', 'Bewegungswissenschaft', 28, 7, 2, 2, 2, 3, 1, 1, 1, 1, 'Interesse, Erfahrungsgewinn und Kompetenzentwicklung der Studierenden', 'Überleitung zur Reflexion/Diskussion', '', 0),
(127, 'Forschendes Lernen', 'Uni HH', 'EW', 30, 3, 2, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(128, 'One Foot in the Past - One in the Future: Young Investigators and the Tradition of MIddle Eastern Studies in Hamburg', 'Universität Hamburg', 'Geschichte, Sprachen und Kulturen des Vorderen Orients ', 0, 5, 2, 2, 2, 1, 2, 2, 0, 1, '(Lehrforschung noch nicht abgeschlossen)', '(Lehrforschung noch nicht abgeschlossen)', 'laura.rowitz@uni-hamburg.de', 0),
(129, 'Empirische Nachhaltigkeitsforschung', 'HfWU Nürtingen-Geislingen', 'Betriebswirtschaft', 10, 6, 1, 2, 3, 1, 1, 1, 0, 1, '', '', '', 0),
(130, 'hsagfas', 'hjk', 'asghfsaD', 8, 1, 2, 0, 0, 0, 0, 0, 0, 1, '', '', '', 0),
(131, 'afvd', 'efvda', 'fvda', 6, 2, 3, 0, 0, 0, 0, 0, 1, 1, '', '', '', 0),
(132, 'WEF', 'abd', 'DFS', 4, 1, 2, 0, 0, 0, 0, 0, 0, 1, '', '', '', 0),
(133, 'Test', 'TUHH', 'ZLL', 50, 5, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, 0),
(134, 'Praxisbezogene Projektstudien', 'Fachhochschule Bielefeld', 'Wirtschaft und Gesundheit (Bereich Pflege und Gesundheit)', 50, 5, 1, 1, 2, 1, 1, 1, 0, 1, '', '', '', 0),
(135, 'Forschendes Lernen von Anfang an', 'Test', 'übergreifend', 300, 1, 1, 1, 1, 1, 1, 3, 0, 1, '', '', '', 0),
(136, 'Freiwilliges Projekt', 'TU', 'Ingenieure', 100, 1, 3, 3, 3, 3, 2, 2, 0, 1, '', '', '', 0),
(137, 'Internationale Beziehungen', 'TUBS', 'Politikwissenschaft', 25, 6, 3, 1, 3, 1, 1, 1, 0, 1, '', '', '', 0),
(138, 'Master-Projekt Softwaretechnik', 'Universität Hamburg', 'Informatik', 10, 1, 1, 2, 1, 1, 2, 1, 0, 1, '', '', '', 0),
(139, 'Test', 'Test Uni', 'Recht', 20, 6, 1, 2, 2, 2, 1, 1, 0, 1, '', '', '', 0),
(140, 'T', 'T', 'F', 4, 4, 2, 2, 3, 1, 1, 1, 0, 1, '', '', '', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `mikroebene` (`id`, `Kurs`, `Uni`, `Fachbereich`, `AnzahlStudenten`, `Semesterzahl`, `feedback`, `Forschungsthema`, `Forschungsfrage`, `Planung`, `Durchfuhrung`, `Reflexion`, `Ergebnisdarstellung`, `published`, `agreement`, `beneficial`, `poorly`, `contact`, `Assessment`) VALUES
(111, 'gemeinsam Forschen', 'Universität Potsdam', 'Informatik', 8, 6, 1, 2, 2, 3, 1, 3, 1, 1, 1, 'Es wurden Konzepte diskutiert und eine grundlegende Version des angestrebten Tools entwickelt.', 'Die eingeschränkten Grundkenntnisse im Bereich des Programmierens hemmten die Entwicklung des Tools.\r\nDer Erkenntnisgewinn im Rahmen der Forschung war eher gering.', '', 0),
(112, 'Testveranstaltung', 'TestHochschule', 'TestBereich', 4, 3, 0, 1, 3, 0, 0, 0, 0, 1, 1, 'war alles fine', '', '', 0),
(113, 'tztnb', '44', 'rdf', 3, 24, 0, 3, 1, 3, 2, 0, 3, 1, 1, 'g4r', '', '', 0),
(114, 'qerznsgdf', 'adfkguzkjrruz', 'sdfdfggjdh', 234, 1, 1, 1, 2, 3, 1, 2, 3, 0, 1, '', '', '', 0),
(115, 'TestLehre', 'TestSchule', 'Testfach', 3, 1, 2, 2, 1, 3, 2, 1, 3, 1, 1, 'Alles', 'nichts', '', 0),
(116, 'Buchstabieren lernen', 'Uni Hamburg', 'Hochschuldidaktik', 7, 2, 1, 3, 3, 3, 3, 2, 1, 0, 1, 'nur wenig', 'die Studierenden', '', 0),
(117, 'Avengers rocken', 'Meine Hochschule', 'Marvel', 12, 42, 2, 1, 3, 2, 1, 2, 3, 0, 1, 'alles ... und son bissl was mehr', 'mehr.... is nich', 'test@uni.de', 0),
(118, 'test', 'Technische Hochschule', 'test', 20, 1, 2, 3, 2, 3, 2, 1, 3, 0, 1, '+++', '----', '', 0),
(119, 'gemeinsam Forschen', 'Uni Potsdam', 'forschendes Lernen', 4, 5, 3, 2, 0, 3, 1, 3, 2, 0, 1, 'alles', 'nichts', 'ich@uni.de', 0),
(120, 'Unklar', 'Unklar', 'Mathematik', 0, 0, 1, 1, 2, 2, 2, 1, 1, 0, 1, '', '', '', 0),
(121, 'Forschendes Lernen - Komplexe Behinderung', 'TU Dortmund', 'Rehabilitationswissenschaften', 35, 4, 1, 2, 2, 2, 2, 1, 1, 0, 1, '', '', '', 0),
(122, 'bshjgwe', 'abd', 'cwdkjh', 20, 1, 2, 1, 2, 3, 2, 1, 3, 0, 1, 'wdhjgwdlwd', 'wejkhewdjkdw', '', 0),
(123, 'fbgfgb', 'ewrwewr', 'qerferqefwe', 3, 3, 0, 2, 0, 0, 0, 0, 0, 0, 1, '', '', '', 0),
(124, 'Doppelradmodell', 'Universität Potsdam', 'forschendes Lernen', 5, 2, 3, 1, 2, 3, 2, 1, 2, 1, 1, 'Ich war vollkommen zufrieden mit allem.', 'Der Rest hat mich gestört.', '', 0),
(125, 'GTP forschendes Lernen', 'Universität Hamburg -', 'Hamburger Zentrum für Lehre und Lernen', 8, 1, 1, 1, 1, 1, 1, 1, 3, 0, 1, 'dies ist ein Idealtyp', 'dies ist ein Idealttyp, es werden niemals alle bedingungen erfüllt sein ', '', 0),
(126, 'GTP Idealtypus II', 'Universität Hamburg', 'Hamburger Zentrum ', 8, 3, 3, 3, 3, 3, 3, 3, 3, 0, 1, 'Idealtyp eines komplett freien Projektstudium', 'alles freiwillig, trotzdem werden Ressourcen gebunden', '', 0),
(127, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'Zentrum für Lehren und Lernen', 75, 1, 3, 1, 1, 3, 3, 3, 3, 0, 1, 'Bedarfsorientiertes Feedback, die Studierenden holen sich Informationen, wenn sie sie brauchen. Über Arbeitsaufträge kann das Komplexitätsniveau gesteuert werden. Hochmotiverte Personen durch freiwilliges Angebot', 'MIschung aus Studierenden, die freiwillig dabei sind mit Studierenden, die es als Pflichtangebot haben. ', '', 0),
(128, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 1, 1, 3, 3, 3, 3, 1, 0, NULL, NULL, NULL, 0),
(129, 'GTP', 'Uni', 'HUL', 100, 75, 0, 1, 1, 3, 3, 3, 3, 1, 0, NULL, NULL, NULL, 0),
(130, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 1, 1, 1, 3, 3, 3, 3, 1, 0, NULL, NULL, NULL, 0),
(131, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, 'Feedback einholen durch die Studierende klappt gut. Mittels Auftrag kann man die Aufgabe in der Komplexität nach Gruppenfähigkeit anpassen', 'Reflexionsanlässe fallen häufig eher knapp aus, man muss flexibel sein. Kombination aus verpflichteten Studierenden und freiwilligen ist nicht gut für die Gruppendynamik', '', 0),
(132, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, '', '', '', 0),
(133, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, '', '', '', 0),
(134, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 70, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, '', '', '', 0),
(135, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 78, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, '', '', '', 0),
(136, 'Reflexion', 'Reflexionstest', 'Test', 1, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 'alles', 'rest', '', 0),
(137, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, '', '', '', 0),
(138, 'Interdisziplinäres Bachelorprojekt', 'TU Hamburg-Harburg', 'interdisziplinär', 100, 1, 3, 1, 1, 3, 3, 2, 3, 0, 1, '', '', '', 0),
(139, 'Forschendes Lernen', 'Uni HH', 'EW', 30, 3, 2, 1, 3, 2, 3, 2, 2, 0, 1, '', '', '', 0),
(140, 'Sportmedizin über die Lebensspanne', 'Universität Hamburg', 'Bewegungswissenschaft', 28, 7, 3, 2, 3, 1, 2, 2, 1, 1, 1, 'Interesse, Erfahrungsgewinn und Kompetenzentwicklung der Studierenden', 'Überleitung zur Reflexion/Diskussion', '', 0),
(141, 'One Foot in the Past - One in the Future: Young Investigators and the Tradition of MIddle Eastern Studies in Hamburg', 'Universität Hamburg', 'Geschichte, Sprachen und Kulturen des Vorderen Orients ', 0, 5, 2, 1, 2, 1, 2, 2, 2, 0, 1, '(Lehrforschung noch nicht abgeschlossen)', '(Lehrforschung noch nicht abgeschlossen)', 'laura.rowitz@uni-hamburg.de', 0),
(142, 'Empirische Nachhaltigkeitsforschung', 'HfWU Nürtingen-Geislingen', 'Betriebswirtschaft', 10, 6, 1, 2, 3, 1, 1, 2, 1, 0, 1, '', '', '', 0),
(143, 'hsagfas', 'hjk', 'asghfsaD', 8, 1, 0, 2, 0, 0, 0, 0, 0, 0, 1, '', '', '', 0),
(144, 'afvd', 'efvda', 'fvda', 6, 2, 0, 2, 0, 0, 0, 0, 0, 1, 1, '', '', '', 0),
(145, 'WEF', 'abd', 'DFS', 4, 1, 0, 3, 0, 0, 0, 0, 0, 0, 1, '', '', '', 0),
(146, 'Test', 'TUHH', 'ZLL', 50, 5, 0, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, 0),
(147, 'Praxisbezogene Projektstudien', 'Fachhochschule Bielefeld', 'Wirtschaft und Gesundheit (Bereich Pflege und Gesundheit)', 50, 5, 1, 2, 3, 2, 2, 1, 2, 0, 1, '', '', '', 0),
(148, 'Forschendes Lernen von Anfang an', 'Test', 'übergreifend', 300, 1, 3, 2, 3, 3, 3, 2, 3, 0, 1, '', '', '', 0),
(149, 'Freiwilliges Projekt', 'TU', 'Ingenieure', 100, 1, 2, 1, 1, 3, 3, 3, 3, 0, 1, '', '', '', 0),
(150, 'Internationale Beziehungen', 'TUBS', 'Politikwissenschaft', 25, 6, 1, 2, 3, 2, 3, 3, 3, 0, 1, '', '', '', 0),
(151, 'Master-Projekt Softwaretechnik', 'Universität Hamburg', 'Informatik', 10, 1, 2, 2, 2, 3, 3, 2, 3, 0, 1, '', '', '', 0),
(152, 'Test', 'Test Uni', 'Recht', 20, 6, 2, 2, 2, 3, 2, 2, 2, 0, 1, '', '', '', 0),
(153, 'T', 'T', 'F', 4, 4, 1, 1, 2, 2, 2, 2, 3, 0, 1, '', '', '', 0);


ALTER TABLE `mesoebene`
  ADD KEY `id` (`id`);

ALTER TABLE `mikroebene`
  ADD KEY `id` (`id`);


ALTER TABLE `mesoebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
ALTER TABLE `mikroebene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
