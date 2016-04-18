-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 09:04 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exxit`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(1000) NOT NULL,
  `datum` date NOT NULL,
  `kreirano` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `osoba`
--

CREATE TABLE IF NOT EXISTS `osoba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `datum` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sifra` varchar(50) NOT NULL,
  `kreirano` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `osoba`
--

INSERT INTO `osoba` (`id`, `ime`, `prezime`, `datum`, `email`, `username`, `sifra`, `kreirano`) VALUES
(1, 'Matej', 'Štajduhar', '1993-09-30', 'susena.sunka@gmail.com', 'cunkea', '134679852a', '2016-01-10 19:49:24'),
(2, 'Marina', 'Kovać', '1907-07-11', 'susena.sunka@gmail.com', 'cunkea', 'asdf', '0000-00-00 00:00:00'),
(3, 'asd', 'sdf', '1907-09-10', 'susena.sunka@gmail.com', 'mstajdu1', '132465466asdddas', '2016-01-12 15:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `pice`
--

CREATE TABLE IF NOT EXISTS `pice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `alk` tinyint(1) DEFAULT NULL,
  `cijena` float DEFAULT NULL,
  `kolicina` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `pice`
--

INSERT INTO `pice` (`id`, `naziv`, `alk`, `cijena`, `kolicina`) VALUES
(1, 'Kava', 0, 5, 'šalica'),
(2, 'Kava sa šlagom', 0, 5, 'šalica'),
(3, 'Kava sa mlijekom', 0, 5, 'šalica'),
(4, 'Bijela kava', 0, 8, 'šalica'),
(5, 'Melange instant kava', 0, 7, 'šalica'),
(6, 'Topla čokolada', 0, 10, 'šalica'),
(7, 'Čaj', 0, 9, 'šalica'),
(8, 'Gazirani sok', 0, 13, '0,25 l'),
(9, 'Gazirani sok', 0, 6.5, '0,10 l'),
(10, 'Prirodni sok', 0, 13, '0,20 l'),
(11, 'Prirodni sok', 0, 6.5, '0,10 l'),
(12, 'Ledeni čaj', 0, 13, '0,25 l'),
(13, 'Orangina', 0, 15, '0,25 l'),
(14, 'Cedevita', 0, 10, 'vrećica'),
(15, 'Energetski napitak', 0, 20, '0,25 l'),
(16, 'Mineralna voda', 0, 20, '1,00 l'),
(17, 'Mineralna voda', 0, 2, '0,10 l'),
(18, 'Mineralna voda', 0, 10, '0,25 l'),
(19, 'Prirodna voda', 0, 10, '0,33 l'),
(20, 'Prirodna voda okusi', 0, 10, '0,25 l'),
(21, 'Kava + Cedevita', 0, 10, ''),
(22, 'Kava + Voda s okusom', 0, 12, ''),
(23, 'Kava + Gazirani sok', 0, 14, ''),
(24, 'Ožujsko točeno', 1, 12, '0,50 l'),
(25, 'Ožujsko točeno', 1, 9, '0,30 l'),
(26, 'Ožujsko točeno', 1, 7, '0,20 l'),
(27, 'Ožujsko', 1, 14, '0,50 l'),
(28, 'Ožujsko Cool', 1, 14, '0,50 l'),
(29, 'Ožujsko Limun', 1, 14, '0,50 l'),
(30, 'Ožujsko Grejp', 1, 14, '0,50 l'),
(31, 'Tamno Ožujsko Višnja', 1, 14, '0,50 l'),
(32, 'Ožujsko Rezano', 1, 14, '0,50 l'),
(33, 'Tomislav', 1, 16, '0,50 l'),
(34, 'Nikšičko', 1, 14, '0,50 l'),
(35, 'Staropramen', 1, 15, '0,50 l'),
(36, 'Staropramen Selection', 1, 15, '0,50 l'),
(37, 'Beck''s', 1, 15, '0,50 l'),
(38, 'Carling', 1, 16, '0,50 l'),
(39, 'Carling Cherry Cider', 1, 15, '0,30 l'),
(40, 'Stella Artois', 1, 16, '0,33 l'),
(41, 'Leffe blond', 1, 25, '0,33 l'),
(42, 'Leffe brune', 1, 25, '0,33 l'),
(43, 'Hoegaarden', 1, 25, '0,33 l'),
(44, 'Corona', 1, 25, '0,355 l'),
(45, 'Vino bijelo', 1, 80, '1,00 l'),
(46, 'Vino bijelo', 1, 8, '0,10 l'),
(47, 'Vino crno', 1, 80, '1,00 l'),
(48, 'Vino crno', 1, 8, '0,10 l'),
(49, 'Vino bijelo butelja', 1, 130, '0,75 l'),
(50, 'Vino crno butelja', 1, 130, '0,75 l'),
(51, 'Martini', 1, 18, '0,10 l'),
(52, 'Bambus', 1, 14.5, '0,20 l'),
(53, 'Bambus', 1, 22.5, '0,30 l'),
(54, 'Deci - deci', 1, 10, '0,20 l'),
(55, 'Dva sa jedan', 1, 18, '0,30 l'),
(56, 'Domaći likeri', 1, 10, '0,03 l'),
(57, 'Strani likeri', 1, 15, '0,03 l'),
(58, 'Famos Groose', 1, 12, '0,03 l'),
(59, 'Ballantine''s', 1, 15, '0,03 l'),
(60, 'Jameson', 1, 15, '0,03 l'),
(61, 'Jack Daniel''s', 1, 18, '0,03 l'),
(62, 'Johnnie Walker', 1, 18, '0,03 l'),
(63, 'Chivas', 1, 18, '0,03 l'),
(64, 'Tequila', 1, 12, '0,03 l'),
(65, 'Martell', 1, 18, '0,03 l');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
