-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2020 at 01:54 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogga`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `title`, `description`, `link`) VALUES
(2, 'Mistakes I made when learning to code', 'An article by Andrei Neagoie about what he wishes he had known when he  began learning to code and what he would have done differently.', 'https://medium.com/zerotomastery/mistakes-i-made-when-learning-to-code-2aa25f8ab7c1'),
(3, 'Neuralinks technology is impressive is it ethical', 'An article about whether the technology developed by Neuralink is morally acceptable', 'https://onezero.medium.com/neuralinks-technology-is-impressive-is-it-ethical-812afb38b19e'),
(4, 'Can a New Zealand-based lab take virtual assistants from the realm of marketing gimmicks and endow them with real intelligence?', 'A Medium article about whether AI (specifically virtual assistants) can ever really achieve true intelligence. ', 'https://onezero.medium.com/facing-the-future-1962abacf3b1'),
(5, '\r\nFor Self-Driving Systems, Infrastructure and Industry Efficiency Are Everything', 'An article about the future of self driving cars, the technologies behind them and what needs to improve to allow them to become mainstream.', 'https://readwrite.com/2019/07/23/for-self-driving-systems-infrastructure-and-industry-efficiency-are-everything/'),
(6, 'Why Cryonics Makes Sense', 'An article by Tim Urban about why it makes sense for more people to choose to be cryogenically frozen when they die.', 'https://waitbutwhy.com/2016/03/cryonics.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
