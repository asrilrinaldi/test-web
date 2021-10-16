-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 04:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_student`
--

CREATE TABLE `mst_student` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_student`
--

INSERT INTO `mst_student` (`id`, `nama`, `password`, `level`) VALUES
('Id1', 'Dani', 'asdfgh', 2),
('Id2', 'Suresh', 'asdfgh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_teacher`
--

CREATE TABLE `mst_teacher` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_teacher`
--

INSERT INTO `mst_teacher` (`id`, `nama`, `password`, `level`) VALUES
('Id1', 'Dimas', 'abcdef', 1),
('Id2', 'Eza', 'abcdef', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_student`
--
ALTER TABLE `mst_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_teacher`
--
ALTER TABLE `mst_teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
