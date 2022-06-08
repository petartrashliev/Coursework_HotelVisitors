-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_hotel`
--

CREATE TABLE `info_hotel` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `first_name` varchar(25) NOT NULL COMMENT 'First Name',
  `last_name` varchar(25) NOT NULL COMMENT 'Last Name',
  `adress` varchar(255) NOT NULL COMMENT 'Adress',
  `m_w` varchar(25) NOT NULL COMMENT 'Men/Women',
  `d` date NOT NULL COMMENT 'Check-in date(yyyy-mm-dd)	',
  `d2` date NOT NULL COMMENT 'Check-out date(yyyy-mm-dd)	',
  `room_type` varchar(255) NOT NULL COMMENT 'Room Type',
  `total` double NOT NULL COMMENT 'Total Sum ($)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_hotel`
--

INSERT INTO `info_hotel` (`id`, `first_name`, `last_name`, `adress`, `m_w`, `d`, `d2`, `room_type`, `total`) VALUES
(7, 'Petar', 'Georgiev', '10, Hristo Botev, Veliko Tarnovo, Bulgaria', 'men', '2022-03-21', '2022-03-22', 'Superior King Family', 235),
(8, 'Veneta', 'Spasova', '18, Bogoridi, Sofia, Bulgaria', 'women', '2022-03-21', '2022-03-02', 'Superior Double', 235),
(10, 'Ivan', 'Petrov', '12, Ivan Vazov, Burgas, Bulgaria', 'men', '2022-01-19', '2022-03-25', 'Signature Twin Plus', 740),
(20, 'Lidia', 'Kirova', '16, Markovo, Lovech, Bulgaria', 'women', '2022-05-15', '2022-05-25', 'Superior Double', 320),
(27, 'Mitko', 'Dachev', '912, Roslyn Neck, Ruse, Bulgaria', 'men', '2022-04-19', '2022-04-25', 'Superior Double', 330),
(28, 'Zora', 'Dimitrova', '1610, Blanda Brooks, Kardzhali, Bulgaria', 'women', '2022-04-20', '2022-04-23', 'Signature Twin Plus', 555),
(29, 'Boryana', 'Svetkova', '410, Lydia Inlet, Sliven, Bulgaria', 'women', '2022-10-02', '2022-10-08', 'Superior King Family', 330),
(30, 'Vitomir', 'Kirilov', '791, Kautzer River, Yambol, Bulgaria', 'men', '2022-04-13', '2022-04-15', 'Superior King Family', 370),
(31, 'Boris', 'Tsankov', ' 32, MacGyver Stream, Plovdiv, Bulgaria', 'men', '2022-05-01', '2022-05-10', 'Signature Twin Plus', 1600),
(32, 'Galina', 'Dimitrova', ' 712, Jena Parkways, Blagoevgrad, Bulgaria', 'women', '2022-08-19', '2022-08-22', 'Superior Double', 165),
(33, 'Miro', 'Hristov', '73, Zboncak Passage, Blagoevgrad, Bulgaria', 'men', '2022-03-27', '2022-03-28', 'Superior Double', 55),
(34, 'Hristo', 'Bunev', '34, Jerde Manor, Smolyan, Bulgaria', 'men', '2022-02-10', '2022-02-15', 'Signature Twin Plus', 925),
(35, 'Temenuga', 'Borisova', '71, Buster Stream, Panagiurishte, Bulgaria', 'women', '2022-02-15', '2022-02-20', 'Signature Twin Plus', 1175);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_hotel`
--
ALTER TABLE `info_hotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_hotel`
--
ALTER TABLE `info_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
