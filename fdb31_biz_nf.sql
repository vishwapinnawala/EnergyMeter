-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb31.biz.nf
-- Generation Time: Aug 30, 2023 at 11:26 AM
-- Server version: 5.7.40-log
-- PHP Version: 8.1.22

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3898493_energymeter`
--
CREATE DATABASE IF NOT EXISTS `3898493_energymeter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `3898493_energymeter`;

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`3898493_energymeter`@`%` FUNCTION `checkusage` (`years` INT, `monnths` INT) RETURNS FLOAT  BEGIN

declare firstrec float;
declare lastrec float;
declare newrec float;

set firstrec=(SELECT t1.Energy
FROM updatedconsumption t1
INNER JOIN
(
  SELECT MONTH(Timestamp) AS Months, MIN(Timestamp) AS min_time
    FROM updatedconsumption
    GROUP BY MONTH(Timestamp)
) t2
 ON t2.Months = MONTH(t1.Timestamp) AND
       t2.min_time = t1.Timestamp
and month(Timestamp)=monnths and year(Timestamp)=years);

set lastrec=(SELECT t1.Energy
FROM updatedconsumption t1
INNER JOIN
(
  SELECT MONTH(Timestamp) AS Months, MAX(Timestamp) AS max_time
    FROM updatedconsumption
    GROUP BY MONTH(Timestamp)
) t2
 ON t2.Months = MONTH(t1.Timestamp) AND
       t2.max_time = t1.Timestamp
and month(Timestamp)=monnths and year(Timestamp)=years);

set newrec=lastrec-firstrec;
Return newrec;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `consumption`
--

CREATE TABLE `consumption` (
  `Timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Voltage` float NOT NULL,
  `Current` float NOT NULL,
  `Power` float NOT NULL,
  `Energy` float NOT NULL,
  `Frequency` float NOT NULL,
  `PF` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `updatedconsumption`
-- (See below for the actual view)
--
CREATE TABLE `updatedconsumption` (
`Timestamp` datetime
,`Voltage` float
,`Current` float
,`Power` float
,`Energy` float
,`Frequency` float
,`PF` float
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `updatedconsumption` exported as a table
--
DROP TABLE IF EXISTS `updatedconsumption`;
CREATE TABLE`updatedconsumption`(
    `Timestamp` datetime DEFAULT NULL,
    `Voltage` float NOT NULL,
    `Current` float NOT NULL,
    `Power` float NOT NULL,
    `Energy` float NOT NULL,
    `Frequency` float NOT NULL,
    `PF` float NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumption`
--
ALTER TABLE `consumption`
  ADD PRIMARY KEY (`Timestamp`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
