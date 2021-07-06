-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:18 AM
-- Server version: 10.4.11-MariaDB
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
-- Database: `db_sipa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gejala`
--

CREATE TABLE `data_gejala` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(100) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_gejala`
--

INSERT INTO `data_gejala` (`id`, `kode_id`, `nama`, `tipe`, `updated_at`) VALUES
(2, 'G001', 'Kulit gatal-gatal', 'Gejala', 'Senin, 17 Mei 2021 '),
(3, 'G002', 'Bengkak (pada bibir, wajah, lidah dan leher)', 'Gejala', 'Senin, 17 Mei 2021 '),
(4, 'G003', 'Bersin', 'Gejala', 'Senin, 17 Mei 2021 '),
(5, 'G004', 'Hidung tersumbat', 'Gejala', 'Senin, 17 Mei 2021 '),
(6, 'G005', 'Kesulitan bernapas', 'Gejala', 'Senin, 17 Mei 2021 '),
(7, 'G006', 'Kesemutan dimulut', 'Gejala', 'Senin, 17 Mei 2021 '),
(8, 'G007', 'Hidung berair', 'Gejala', 'Senin, 17 Mei 2021 '),
(9, 'G008', 'Gatal pada mata', 'Gejala', 'Senin, 17 Mei 2021 '),
(10, 'G009', 'Batuk', 'Gejala', 'Senin, 17 Mei 2021 '),
(11, 'G010', 'Mata merah', 'Gejala', 'Senin, 17 Mei 2021 '),
(12, 'G011', 'Berwarna biru di kulit bawah mata', 'Gejala', 'Senin, 17 Mei 2021 '),
(13, 'G012', 'Sakit perut', 'Gejala', 'Senin, 17 Mei 2021 '),
(14, 'G013', 'Perut kembung', 'Gejala', 'Senin, 17 Mei 2021 '),
(15, 'G014', 'Mual', 'Gejala', 'Senin, 17 Mei 2021 '),
(16, 'G015', 'Muntah', 'Gejala', 'Senin, 17 Mei 2021 '),
(17, 'G016', 'Diare', 'Gejala', 'Senin, 17 Mei 2021 '),
(18, 'G017', 'Pilek', 'Gejala', 'Senin, 17 Mei 2021 '),
(19, 'G018', 'Hidung gatal', 'Gejala', 'Senin, 17 Mei 2021 '),
(20, 'G019', 'Mata bengkak', 'Gejala', 'Senin, 17 Mei 2021 '),
(21, 'G020', 'Mata berair', 'Gejala', 'Senin, 17 Mei 2021 '),
(22, 'G021', 'Biang keringat', 'Gejala', 'Senin, 17 Mei 2021 '),
(23, 'G022', 'Bentol merah', 'Gejala', 'Senin, 17 Mei 2021 '),
(24, 'G023', 'Bercak merah', 'Gejala', 'Senin, 17 Mei 2021 '),
(25, 'G024', 'Kulit pecah-pecah', 'Gejala', 'Senin, 17 Mei 2021 '),
(26, 'G025', 'Kulit kering', 'Gejala', 'Senin, 17 Mei 2021 '),
(27, 'G026', 'Benjolan', 'Gejala', 'Senin, 17 Mei 2021 '),
(28, 'G027', 'Kulit bersisik', 'Gejala', 'Senin, 17 Mei 2021 '),
(29, 'G028', 'Gatal pada bagian tertentu', 'Gejala', 'Senin, 17 Mei 2021 '),
(30, 'G029', 'Gigitan serangga', 'Gejala', 'Senin, 17 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `data_kode`
--

CREATE TABLE `data_kode` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(100) NOT NULL,
  `kode_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kode`
--

INSERT INTO `data_kode` (`id`, `kode_penyakit`, `kode_gejala`) VALUES
(1, 'P001', 'G001'),
(2, 'P001', 'G002'),
(3, 'P001', 'G003'),
(4, 'P001', 'G004'),
(5, 'P001', 'G005'),
(6, 'P001', 'G006'),
(7, 'P002', 'G003'),
(8, 'P002', 'G004'),
(9, 'P002', 'G007'),
(10, 'P002', 'G008'),
(11, 'P002', 'G009'),
(12, 'P002', 'G010'),
(13, 'P002', 'G011'),
(14, 'P003', 'G001'),
(15, 'P003', 'G012'),
(16, 'P003', 'G013'),
(17, 'P003', 'G014'),
(18, 'P003', 'G015');

-- --------------------------------------------------------

--
-- Table structure for table `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(100) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `solusi` text NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penyakit`
--

INSERT INTO `data_penyakit` (`id`, `kode_id`, `nama`, `tipe`, `solusi`, `updated_at`) VALUES
(1, 'P001', 'Alergi makanan laut', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(2, 'P002', 'Alergi debu', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(3, 'P003', 'Alergi susu sapi', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(4, 'P004', 'Alergi hewan peliharaan', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(5, 'P005', 'Eksim', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(6, 'P006', 'Biduran', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(7, 'P007', 'Dermatitis kontak', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(8, 'P008', 'Urtikaria papula', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(9, 'P009', 'Alergi musiman', 'Penyakit', '', 'Senin, 17 Mei 2021 '),
(10, 'P010', 'Alergi dalam  ruangan', 'Penyakit', '', 'Senin, 17 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `kode_gejala`
--

CREATE TABLE `kode_gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(100) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_gejala`
--

INSERT INTO `kode_gejala` (`id`, `kode_gejala`, `updated_at`) VALUES
(1, 'G001', 'Minggu, 16 Mei 2021 '),
(2, 'G002', 'Minggu, 16 Mei 2021 '),
(3, 'G003', 'Minggu, 16 Mei 2021 '),
(4, 'G004', 'Minggu, 16 Mei 2021 '),
(5, 'G005', 'Minggu, 16 Mei 2021 '),
(6, 'G006', 'Minggu, 16 Mei 2021 '),
(7, 'G007', 'Minggu, 16 Mei 2021 '),
(8, 'G008', 'Minggu, 16 Mei 2021 '),
(9, 'G009', 'Minggu, 16 Mei 2021 '),
(10, 'G010', 'Minggu, 16 Mei 2021 '),
(11, 'G011', 'Minggu, 16 Mei 2021 '),
(12, 'G012', 'Minggu, 16 Mei 2021 '),
(13, 'G013', 'Minggu, 16 Mei 2021 '),
(14, 'G014', 'Minggu, 16 Mei 2021 '),
(15, 'G015', 'Minggu, 16 Mei 2021 '),
(16, 'G016', 'Minggu, 16 Mei 2021 '),
(17, 'G017', 'Minggu, 16 Mei 2021 '),
(18, 'G018', 'Minggu, 16 Mei 2021 '),
(19, 'G019', 'Minggu, 16 Mei 2021 '),
(20, 'G020', 'Minggu, 16 Mei 2021 '),
(21, 'G021', 'Minggu, 16 Mei 2021 '),
(22, 'G022', 'Minggu, 16 Mei 2021 '),
(23, 'G023', 'Minggu, 16 Mei 2021 '),
(24, 'G024', 'Minggu, 16 Mei 2021 '),
(25, 'G025', 'Minggu, 16 Mei 2021 '),
(26, 'G026', 'Minggu, 16 Mei 2021 '),
(27, 'G027', 'Minggu, 16 Mei 2021 '),
(28, 'G028', 'Minggu, 16 Mei 2021 '),
(29, 'G029', 'Minggu, 16 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `kode_penyakit`
--

CREATE TABLE `kode_penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(100) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_penyakit`
--

INSERT INTO `kode_penyakit` (`id`, `kode_penyakit`, `updated_at`) VALUES
(1, 'P001', 'Minggu, 16 Mei 2021 '),
(2, 'P002', 'Minggu, 16 Mei 2021 '),
(3, 'P003', 'Minggu, 16 Mei 2021 '),
(4, 'P004', 'Minggu, 16 Mei 2021 '),
(5, 'P005', 'Minggu, 16 Mei 2021 '),
(6, 'P006', 'Minggu, 16 Mei 2021 '),
(7, 'P007', 'Minggu, 16 Mei 2021 '),
(8, 'P008', 'Minggu, 16 Mei 2021 '),
(9, 'P009', 'Minggu, 16 Mei 2021 '),
(10, 'P010', 'Minggu, 16 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id` int(11) NOT NULL,
  `tipe` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `tipe`) VALUES
(1, 'Penyakit'),
(2, 'Gejala');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `usename` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_active` int(1) NOT NULL,
  `user_update` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `usename`, `email`, `password`, `user_id`, `user_active`, `user_update`) VALUES
(2, 'MAYSYAFIRA PRATIWI NIRWAN', 'admin', 'maysyafira@gmail.com', '$2y$10$k6tOfWidVN3yN3fEZ4EqC.jJm99uxZdPaVGRqH/A0c6JN7uflK49O', 1, 1, 'Kamis, 20 Mei 2021 '),
(4, 'Pratiwi', 'pratiwi', 'pratiwi@gmail.com', '$2y$10$HRcWRpnVYq2n1g.8wwHiduvYrzT5s6c2jINN5kX.CTHRThUOVUGJi', 2, 1, 'Kamis, 20 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `tipe_user` varchar(123) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `tipe_user`, `updated_at`) VALUES
(1, 'Admin', 'Rabu, 12 Mei 2021 '),
(2, 'User', 'Rabu, 12 Mei 2021 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_gejala`
--
ALTER TABLE `data_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kode`
--
ALTER TABLE `data_kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_gejala`
--
ALTER TABLE `kode_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_penyakit`
--
ALTER TABLE `kode_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_gejala`
--
ALTER TABLE `data_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `data_kode`
--
ALTER TABLE `data_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kode_gejala`
--
ALTER TABLE `kode_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kode_penyakit`
--
ALTER TABLE `kode_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
