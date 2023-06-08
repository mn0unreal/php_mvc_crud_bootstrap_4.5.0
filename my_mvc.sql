-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:38 PM
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
-- Database: `my_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'Apple iPhone 14 Pro Max', 999, 'Apple IPhone 14 Pro Max has Released in September 2022 with 4G, 5G Networks, 6GB RAM and 128GB ROM / 256GB ROM / 512GB ROM / 1TB ROM, 6.7 inches LTPO Super Retina XDR OLED Display, iOS 16, Quad Rear &...', 5, '2023-06-08 15:29:50', '2023-06-08 15:29:50'),
(2, 'Samsung Galaxy S23 Ultra', 104999, 'Samsung Galaxy S23 Ultra has Released in February 2023 with 4G, 5G Networks, 8GB RAM / 12GB RAM and 256GB ROM / 512GB ROM / 1TB ROM, 6.8 inches Dynamic AMOLED capacitive touchscreen Display, Android 1...', 10, '2023-06-08 15:30:48', '2023-06-08 15:30:48'),
(3, 'Huawei Mate 50 Pro', 28000, 'Huawei Mate 50 Pro has Released in September 2022 with 4G Networks, 8GB RAM and 256GB ROM / 512GB ROM, 6.74 inches OLED 120Hz Display, EMUI 13 (International); HarmonyOS 3.0 (China), Triple Rear & Dua...', 10, '2023-06-08 15:31:16', '2023-06-08 15:31:16'),
(4, 'Xiaomi 12s Ultra', 24220, 'Xiaomi 12s Ultra Released in July 2022 with 4G, 5G Networks, 8GB RAM / 12GB RAM and 256GB ROM / 512GB ROM, 6.73 inches LTPO AMOLED Display, Android 12, MIUI 13, Quad Rear & 32MP Front Camera, Qualcomm...', 10, '2023-06-08 15:31:41', '2023-06-08 15:31:41'),
(5, 'Sony Xperia 5 IV', 27160, 'Sony Xperia 5 IV has Released in 2022 September with 4G, Networks, 8GB RAM and 128GB ROM / 256GB, 6.1 inches OLED capacitive touchscreen Display, Android 12 Os, Triple Camera Rear & 12MP Front Camera,...', 10, '2023-06-08 15:32:04', '2023-06-08 15:32:04'),
(6, 'Vivo X80 Pro', 25760, 'Vivo X80 Pro Released in April 2022 with 4G, 5G Networks, 8GB RAM / 12GB RAM and 256GB ROM / 512GB ROM, 6.78 inches LTPO2 AMOLED Display, Android 12 Os, Quad Rear and 32MP Front Camera, Qualcomm SM845...', 10, '2023-06-08 15:37:54', '2023-06-08 15:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
