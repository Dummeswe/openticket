-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 03 jun 2021 kl 20:06
-- Serverversion: 10.4.17-MariaDB
-- PHP-version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `openticket`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `ticket`
--

CREATE TABLE `ticket` (
  `ID` int(11) NOT NULL,
  `issue_string` varchar(200) NOT NULL,
  `urgency` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `external_or_internal` varchar(30) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `creator` varchar(25) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='for openticket';

--
-- Dumpning av Data i tabell `ticket`
--

INSERT INTO `ticket` (`ID`, `issue_string`, `urgency`, `status`, `external_or_internal`, `owner`, `creator`, `timestamp`) VALUES
(2, 'asdasd', 1, 'new', 'internal', 'notset', '', '2021-04-15 11:36:17'),
(5, 'I have no life', 1, 'new', 'internal', 'notset', '', '2021-04-15 16:51:39'),
(6, 'I cant find my toothbrush!!', 5, 'new', 'internal', 'default', 'Donald Trump', '2021-04-15 16:56:28');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
