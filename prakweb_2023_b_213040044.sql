-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2023 at 01:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2023_b_213040044`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `isbn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` year NOT NULL,
  `genre` varchar(255) NOT NULL,
  `halaman` int NOT NULL,
  `harga` int NOT NULL,
  `sampul` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `isbn`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `genre`, `halaman`, `harga`, `sampul`) VALUES
(1, '978-623-245-578-4', "The Hitchhiker's Guide to the Galaxy", 'Douglas Adams', 'Gramedia Pustaka Utama', 2023, 'Fiksi', 224, 79, "The-Hitchhiker's-Guide-to-the-Galaxy.jpg"),
(2, '978-623-245-579-1', 'The Da Vinci Code', 'Dan Brown', 'Gramedia Pustaka Utama', 2022, 'Misteri', 496, 149, 'The-Da-Vinci-Code.jpg'),
(3, '978-623-245-580-8', 'The Hunger Games', 'Suzanne Collins', 'Gramedia Pustaka Utama', 2021, 'Fiksi', 384, 119, 'The-Hunger-Games.jpg'),
(4, '978-623-245-581-5', 'The Fault in Our Stars', 'John Green', 'Gramedia Pustaka Utama', 2020, 'Romansa', 320, 99, 'The-Fault-in-Our-Stars.jpg'),
(5, '978-623-245-582-2', 'The Kite Runner', 'Khaled Hosseini', 'Gramedia Pustaka Utama', 2019, 'Fiksi', 368, 129, 'The-Kite-Runnerjpg'),
(6, '978-623-245-583-9', 'The Book Thief', 'Markus Zusak', 'Gramedia Pustaka Utama', 2018, 'Fiksi', 536, 199, 'The-Book-Thief.jpg'),
(7, '978-623-245-584-6', 'The Little Prince', 'Antoine de Saint-Exupéry', 'Gramedia Pustaka Utama', 2017, 'Fiksi', 96, 79, 'The-Little-Prince.jpg'),
(8, '978-623-245-585-3', 'To Kill a Mockingbird', 'Harper Lee', 'Gramedia Pustaka Utama', 2016, 'Fiksi', 320, 99, 'To-Kill-a-Mockingbird.jpg'),
(9, '978-623-245-586-0', 'The Alchemist', 'Paulo Coelho', 'Gramedia Pustaka Utama', 2015, 'Fiksi', 208, 99, 'The-Alchemist'),
(10, '978-623-245-588-4', "Harry Potter and the Sorcerer's Stone", 'J.K. Rowling', 'Gramedia Pustaka Utama', 2013, 'Fantasi', 320, 129, "Harry-Potter-and-the-Sorcerer's-Stone.jpg");

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
