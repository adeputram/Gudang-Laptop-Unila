-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokolaptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama_laptop` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga_laptop` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama_laptop`, `merk`, `jenis`, `harga_laptop`) VALUES
(1, 'Vivobook 15', 'ASUS', 'Ultrabook', 1000000),
(2, 'Zephyrus G15', 'ASUS', 'Laptop Gaming', 3500000),
(3, 'Legion 15', 'Lenovo', 'Laptop Gaming', 1700000),
(4, 'Pavilion 19', 'HP', 'Laptop Gaming', 6000000),
(6, 'Predator ', 'ACER', 'Laptop Gaming', 1200000),
(7, 'Nitro 15', 'ACER', 'Laptop Gaming', 12500000),
(8, 'ROG GL552VX', 'ASUS', 'Laptop Gaming ', 8000000),
(10, 'E5-475G', 'ACER', 'Laptop Biasa', 550000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
