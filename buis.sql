-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 11:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buis`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE `products_table` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productUnit` varchar(50) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productImageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`id`, `productName`, `productQuantity`, `productUnit`, `productPrice`, `productImageName`) VALUES
(0, 'red velvet cake', 10, '35614', 150.00, 'product_6618ec615b79f.jpg'),
(0, 'chocolate ganache cake', 15, '35664', 100.00, 'product_6618ed2676715.jpg'),
(0, 'chocolate chip cookie', 25, '36448', 15.00, 'product_6618ede7e8519.jpg'),
(0, 'ube cake', 10, '35691', 120.00, 'product_6618eebbb225d.jpg'),
(0, 'matcha cupcake', 35, '35669', 20.00, 'product_6618effa42d7f.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
