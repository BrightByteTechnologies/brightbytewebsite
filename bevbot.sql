-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Mrz 2023 um 00:03
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bevbot`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `description`
--

CREATE TABLE `description` (
  `desId` int(3) NOT NULL,
  `desTitle` varchar(50) NOT NULL,
  `desContent` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `description`
--

INSERT INTO `description` (`desId`, `desTitle`, `desContent`) VALUES
(1, 'Was ist BevBot?', 'BevBot ist ein fortschrittlicher Roboter f&#252;r die automatisierte Getr&#228;nkelieferung. <br>\r\nKunden k&#246;nnen ihre Bestellung &#252;ber eine Smartphone-App aufgeben und BevBot erledigt den Rest, um jedes Getr&#228;nk p&#252;nktlich und in einwandfreiem Zustand zu liefern.'),
(2, 'Warum brauchen Sie BevBot?', 'BevBot bietet eine bequeme und zeitsparende L&#246;sung f&#252;r Menschen, die einen gesch&#228;ftigen Lebensstil haben oder eine einfache und stressfreie M&#246;glichkeit suchen, Getr&#228;nke zu bestellen und zu erhalten. In einem Restaurantbetrieb kann BevBot eingesetzt werden, um den Service zu beschleunigen, Wartezeiten zu verk&#252;rzen und den Arbeitsaufwand f&#252;r das Personal zu reduzieren. BevBot ist mit modernster Sicherheitstechnologie ausgestattet, um sowohl sich selbst als auch die Getr&#228;nke w&#228;hrend der Lieferung sicher zu halten.'),
(3, 'Was sind die Vorteile?', 'Ein automatisierter Servierroboter wie BevBot bietet verschiedene Vorteile, darunter:<br><br>\r\n\r\n1:  Effizienz: Ein Servierroboter kann die Effizienz und Geschwindigkeit des Serviceprozesses verbessern, indem er Bestellungen schnell und genau entgegennimmt und die Getr&auml;nke ohne Verz&ouml;gerungen oder Fehler liefert. <br><br>\r\n\r\n2:  Reduzierung von Wartezeiten: Kunden m&uuml;ssen nicht mehr lange auf ihre Bestellungen warten, da der Roboter in der Lage ist, mehrere Bestellungen gleichzeitig zu bearbeiten und zu liefern. <br><br>\r\n\r\n3:  Konsistenz: Ein Servierroboter liefert Getr&auml;nke auf eine konsistente Art und Weise, wodurch eine hohe Qualit&auml;t des Service gew&auml;hrleistet wird.<br><br>\r\n\r\n4:  Kosteneffizienz: Da der Roboter die Arbeit von menschlichen Servicekr&auml;ften &uuml;bernimmt, k&ouml;nnen die Kosten f&uuml;r die Einstellung von Personal reduziert werden.<br><br>\r\n\r\n6:  Kontaktlosigkeit: In der heutigen Zeit, in der die Gesundheit und Sicherheit der Kunden von gro&szlig;er Bedeutung ist, kann ein Servierroboter eine kontaktlose Option bieten, bei der Kunden ihre Bestellungen &uuml;ber eine Smartphone-App aufgeben k&ouml;nnen und keine Interaktion mit dem Personal erforderlich ist.<br><br>\r\n\r\n7:  Attraktivit&auml;t: Ein Servierroboter kann ein attraktives und innovatives Element in einem Restaurant oder einem anderen Gesch&auml;ft sein und kann dazu beitragen, Kunden anzuziehen und sie zu beeindrucken.\r\n\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `img`
--

CREATE TABLE `img` (
  `imgId` int(3) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `img`
--

INSERT INTO `img` (`imgId`, `picture`) VALUES
(1, './pictures/bb-logo-removebg.png'),
(2, './pictures/start-logo-bbs.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `itemcategories`
--

CREATE TABLE `itemcategories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `itemcategories`
--

INSERT INTO `itemcategories` (`id`, `categoryName`) VALUES
(1, 'Beverage'),
(2, 'Food');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemCategoryId` int(11) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDesc` varchar(255) NOT NULL,
  `itemPrice` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `items`
--

INSERT INTO `items` (`id`, `itemCategoryId`, `itemName`, `itemDesc`, `itemPrice`) VALUES
(1, 1, 'Sprite', 'Sprite Placeholer', 1.50),
(2, 1, 'Cola', 'Cola Placeholder', 2.20),
(3, 1, 'Fanta', 'Fanta Placeholder', 1.80);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teams`
--

CREATE TABLE `teams` (
  `teamId` int(11) NOT NULL,
  `teamName` varchar(50) NOT NULL,
  `teamDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `teams`
--

INSERT INTO `teams` (`teamId`, `teamName`, `teamDesc`) VALUES
(1, 'Management', 'Platzhalter'),
(2, 'Software', 'Platzhalter'),
(3, 'Hardware', 'Platzhalter');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `timeline`
--

CREATE TABLE `timeline` (
  `timeId` int(3) NOT NULL,
  `tlTitle` varchar(50) NOT NULL,
  `tlContent` varchar(600) NOT NULL,
  `tlPic` int(3) NOT NULL,
  `tlBG` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `timeline`
--

INSERT INTO `timeline` (`timeId`, `tlTitle`, `tlContent`, `tlPic`, `tlBG`) VALUES
(1, '20.02.2023 - 24.02.2023', 'test0\r\nhahaha', 2, 1),
(2, '27.02.2023 - 03.03.2023', 'test1', 2, 2),
(3, '06.03.2023 - 10.03.2023', 'test2', 2, 1),
(4, '13.03.2023 - 17.03.2023', 'test3', 2, 1),
(5, '20.03.2023 - 24.03.2023', 'test4', 2, 1),
(6, '27.02.2023 - 03.03.2023', 'test5', 2, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`desId`);

--
-- Indizes für die Tabelle `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`imgId`);

--
-- Indizes für die Tabelle `itemcategories`
--
ALTER TABLE `itemcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`itemCategoryId`);

--
-- Indizes für die Tabelle `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`);

--
-- Indizes für die Tabelle `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`timeId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `description`
--
ALTER TABLE `description`
  MODIFY `desId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `img`
--
ALTER TABLE `img`
  MODIFY `imgId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `itemcategories`
--
ALTER TABLE `itemcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `teams`
--
ALTER TABLE `teams`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
