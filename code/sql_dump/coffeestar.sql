-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 07. Juni 2013 um 14:34
-- Server Version: 5.1.44
-- PHP-Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `coffeestar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bewertung`
--

CREATE TABLE IF NOT EXISTS `bewertung` (
  `bewertung_id` int(11) NOT NULL AUTO_INCREMENT,
  `geschmack` int(11) NOT NULL,
  `drinking` int(11) NOT NULL,
  `ambiente` int(11) NOT NULL,
  `beschreibung` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `usersystem_id` int(11) NOT NULL,
  `kaffee_db_id` int(11) NOT NULL,
  PRIMARY KEY (`bewertung_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `bewertung`
--

INSERT INTO `bewertung` (`bewertung_id`, `geschmack`, `drinking`, `ambiente`, `beschreibung`, `usersystem_id`, `kaffee_db_id`) VALUES
(1, 4, 5, 4, 'aerhaethaet', 1, 25),
(2, 4, 5, 2, 'geht ab hier!', 1, 26),
(3, 1, 5, 1, 'hier ist es gar nicht so geil', 1, 25),
(4, 5, 5, 4, 'adradrhaerh', 1, 25),
(5, 5, 4, 4, 'Hier ist es schon recht schnieke', 1, 25),
(6, 4, 2, 5, 'Ich hab mich hier stets wohl gefühlt, allerdings war der Kuchen nicht der beste...', 1, 23);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kaffee_db`
--

CREATE TABLE IF NOT EXISTS `kaffee_db` (
  `adresse` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kaffee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `inhaber` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `selectchoice1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `innen` tinyint(1) DEFAULT NULL,
  `aussen` tinyint(1) DEFAULT NULL,
  `essen` tinyint(1) DEFAULT NULL,
  `getraenke` tinyint(1) DEFAULT NULL,
  `cocktails` tinyint(1) DEFAULT NULL,
  `hipster` tinyint(1) DEFAULT NULL,
  `greise` tinyint(1) DEFAULT NULL,
  `business` tinyint(1) DEFAULT NULL,
  `normalo` tinyint(1) DEFAULT NULL,
  `joungster` tinyint(1) DEFAULT NULL,
  `usersystem_id` int(11) NOT NULL,
  PRIMARY KEY (`kaffee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Daten für Tabelle `kaffee_db`
--

INSERT INTO `kaffee_db` (`adresse`, `kaffee_id`, `name`, `lat`, `lng`, `inhaber`, `selectchoice1`, `innen`, `aussen`, `essen`, `getraenke`, `cocktails`, `hipster`, `greise`, `business`, `normalo`, `joungster`, `usersystem_id`) VALUES
('Fleurystraße 14, 92224 Amberg, Deutschland', 23, 'Café Heimelich ', 49.4459, 11.8452, 'Klaus H.', '', 1, NULL, 1, 1, 1, NULL, 1, NULL, 1, NULL, 1),
('Grammerstraße 14, 92224 Amberg, Deutschland', 24, 'Rossi', 49.4469, 11.8462, 'Frieda Renate P.', '', 1, 1, 1, 1, NULL, NULL, NULL, 1, 1, 1, 1),
('Infanteriestraße 14, 92224 Amberg, Deutschland', 25, 'Café Baroco', 49.4429, 11.8422, 'Tim und Struppi', '', 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 1, 1),
('Infanteriestraße 14, 92224 Amberg, Deutschland', 26, 'HomeBase', 49.4446, 11.8449, 'Thomas R.', '', 1, 1, 1, NULL, 1, 1, NULL, NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersystem`
--

CREATE TABLE IF NOT EXISTS `usersystem` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr` varchar(120) CHARACTER SET latin1 NOT NULL,
  `pswd` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `usersystem`
--

INSERT INTO `usersystem` (`user_id`, `usr`, `pswd`) VALUES
(1, 'admin', 'admin'),
(2, 'test', 'test');
