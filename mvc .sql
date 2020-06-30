-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 03:10 PM
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
  `id_chambre` int(11) NOT NULL,
  `numero` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `numero_batiment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `numero`, `type`, `numero_batiment`) VALUES
(2, '001-0077', 'individuel', '1'),
(3, '002-0059', 'double', '2'),
(4, '003-0023', 'individuel', '3'),
(9, '008-0027', 'double', '8'),
(10, '009-0082', 'double', '9'),
(11, '045-0142', 'individuel', '45');

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
(1, '2020-SO-OU-0901', 'Sow', 'Fatou', 'moucfady@gmail.com', '33355555', '2020-06-02', 'NB', 'paris', NULL, NULL),
(2, '2020-DI-AM-0145', 'diallo', 'mariam', 'p@gmail.com', '77687678', '2020-06-05', 'BNL', 'thies', 'demi', NULL),
(3, '2020-DI-OU-0820', 'diop', 'ousseynou', 'p@gmail.com', '77687678', '2020-06-10', 'BL', NULL, 'demi', '001-0039'),
(6, '2020-SO-OU-0973', 'Sow', 'Fatou', 'moucfady@gmail.com', '77687678', '2020-06-16', 'NB', 'ddddd', NULL, NULL),
(7, '2020-SO-OU-0191', 'Sow', 'Fatou', 'moucfady@gmail.com', '77687678', '2020-06-16', 'NB', 'ddddd', NULL, NULL),
(8, '2020-DI-AM-0431', 'diallo', 'mariam', 'p@gmail.com', '333', '2020-06-17', 'BNL', 'thies', 'demi', NULL),
(9, '2020-DI-AM-0850', 'diallo', 'mariam', 'p@gmail.com', '333', '2020-06-17', 'BNL', 'thies', 'demi', NULL);

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
  ADD PRIMARY KEY (`id_chambre`);

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
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
