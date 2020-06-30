-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 11:19 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bourse`
--

CREATE TABLE `bourse` (
  `id_bourse` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bourse`
--

INSERT INTO `bourse` (`id_bourse`, `type`, `montant`) VALUES
(1, 'demi bourse', 20000),
(2, 'pension complete', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `numero` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `numero_batiment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`id`, `numero`, `type`, `numero_batiment`) VALUES
(2, '001-0077', 'individuel', '3'),
(4, '003-0023', 'individuel', '3'),
(14, '056-0070', 'individuel', '56'),
(20, '005-0007', 'individuel', '1');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `matricule` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `datenaiss` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `bourse` varchar(25) DEFAULT NULL,
  `numero_chambre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule`, `nom`, `prenom`, `email`, `telephone`, `datenaiss`, `type`, `adresse`, `bourse`, `numero_chambre`) VALUES
(3, '2020-DI-OU-0820', 'diop', 'ousseynou', 'p@gmail.com', '77687678', '2020-06-10', 'BL', NULL, 'demi', '001-0039'),
(21, '2020-DI-M-0695', 'diallo', 'M', 'p@gmail.com', '77687678', '2020-06-01', 'NB', 'ddddd', NULL, NULL),
(24, '2020-SO-OU-0886', 'Sow', 'Fatou', 'p@gmail.com', '77687678', '2020-06-16', 'BL', NULL, 'complet', '001-0077'),
(28, '2020-DI-OU-0999', 'diallo', 'Fatou', 'moucfady@gmail.com', '77687678', '2020-06-10', 'BL', NULL, 'demi', '001-0077'),
(34, '2020-SO-M-0823', 'Sow', 'M', 'moucfady@gmail.com', '77687678', '2020-06-26', 'BL', NULL, 'complet', '009-0082'),
(41, '2020-DI-M-0005', 'diallo', 'M', 'p@gmail.com', '77687678', '2020-06-09', 'BNL', 'paris', 'complet', NULL),
(44, '2020-QQ-QQ-0767', 'QQ', 'QQ', 'HHGT@KADI.com', '77687678', '2020-06-10', 'BNL', 'QQQ', 'complet', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bourse`
--
ALTER TABLE `bourse`
  ADD PRIMARY KEY (`id_bourse`);

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bourse`
--
ALTER TABLE `bourse`
  MODIFY `id_bourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
