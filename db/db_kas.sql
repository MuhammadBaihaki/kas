-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 02:47 AM
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
-- Database: `db_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jabatan`, `alamat`, `telp`) VALUES
(1, 'Aji', 'Ketua', 'Pelaihari', '082234567433'),
(2, 'Diana', 'Anggota', 'Banjarmasin', '085234770987'),
(3, 'Ahmad', 'Anggota', 'Pelaihari', '082134778965'),
(4, 'Annie', 'Anggota', 'Banjarbaru', '085347768956'),
(5, 'Amir', 'Anggota', 'Martapura', '085230070922'),
(6, 'Indah', 'Anggota', 'Banjarmasin', '082234567487');

-- --------------------------------------------------------

--
-- Table structure for table `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id_keluar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas_keluar`
--

INSERT INTO `kas_keluar` (`id_keluar`, `nama`, `jumlah`, `tanggal`) VALUES
(1, 'Nasi kotak', 100000, '2021-01-10'),
(2, 'Air Mineral botol', 20000, '2021-01-10'),
(3, 'Fotocopy', 10000, '2021-01-16'),
(5, 'Permen', 5000, '2021-01-19'),
(6, 'Sewa Mobil', 300000, '2021-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `kas_masuk`
--

CREATE TABLE `kas_masuk` (
  `id_masuk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas_masuk`
--

INSERT INTO `kas_masuk` (`id_masuk`, `nama`, `jabatan`, `jumlah`, `tanggal`) VALUES
(1, 'Aji', 'Ketua', 100000, '2021-01-08'),
(2, 'Diana', 'Anggota', 70000, '2021-01-10'),
(4, 'Annie', 'Anggota', 200000, '2021-01-17'),
(5, 'Ahmad', 'Anggota', 100000, '2021-01-18'),
(6, 'Amir', 'Anggota', 100000, '2021-01-18'),
(7, 'Indah', 'Anggota', 200000, '2021-01-18'),
(8, 'Aji', 'Ketua', 100000, '2021-01-19'),
(9, 'Annie', 'Anggota', 50000, '2021-01-19'),
(10, 'Diana', 'Anggota', 50000, '2021-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'User', 'muhammadbaihaki227@gmail.com', '$2y$10$WYDsgIS1fqUEqYEda7.30ugkXodWLl1wCYVXiTdoL/6unG3dZ1aQe', 2, 1, 1604147124);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(6, 'mad.bayhaki227@gmail.com', 'C3csLcKAQrx7D2zb4Vov/61wxw80iI+IGEMz2y642HE=', 1604121614),
(9, 'muhammadbaihaki227@gmail.com', 'rj13+67fOT02aA5IZ0c+8Khc+Q3FngDQyY6EP/TWZF8=', 1604329907),
(10, 'muhammadbaihaki227@gmail.com', 'UYP7GpMkUdyCI+DgPB1T+sH5lXXhveSoqqngp7bBNoY=', 1607946800),
(11, 'muhammadbaihaki227@gmail.com', '+YY+tXrcySJ6Wi9P/f4fcHfG+jpZsaTyRwakc1tO/MU=', 1608202945),
(12, 'muhammadbaihaki227@gmail.com', 'h0xeI9YcgkK/Tr7HYwPS5pJDTlV6u1CYGWq4TH4KW5Q=', 1608202996),
(13, 'muhammadbaihaki227@gmail.com', '6/SAwHzVTjqPuP/ytKlAOaKErzMZQlOYAuct0zYL4Vo=', 1608203012),
(14, 'muhammadbaihaki227@gmail.com', 'g4/8q8fooLBkDoshmQ5Yz8nGaP299t/Huw62cGW44ZA=', 1608203038),
(15, 'muhammadbaihaki227@gmail.com', 'WsOOefpcYdvyZgJKCdLSxj2K2E47YfDRBjUTOOlDsr0=', 1608203108),
(16, 'muhammadbaihaki227@gmail.com', 'GUfZ0YeazIDhJTQ0tWJXc2VmTkVP2bHgwgCtGNkgM6Y=', 1608203118),
(17, 'muhammadbaihaki227@gmail.com', 'EeTIsgHoQcY2INQKpt1iAonrBH90bmeFuJ7hF3P7YUM=', 1608203283),
(18, 'muhammadbaihaki227@gmail.com', 'a2dQnAiJe9lk+i22cB4urPGQMoI/rWYtkh3Pm4UJVqc=', 1608203459),
(19, 'muhammadbaihaki227@gmail.com', 'Gb1y0xMZX+zD0Qbzpxl5RvaW0Sd5nhHFgu1Mxe4tgTA=', 1608203502),
(20, 'muhammadbaihaki227@gmail.com', 'Waa7FYUBwJEtOTB4IB3/TvZG05xhWgKySvmHKGf1mII=', 1608204239),
(21, 'muhammadbaihaki227@gmail.com', '4mskNDeI2DzxMSwd1x/G/l+R4W7SsQLRUExh/MNDLGI=', 1608204976),
(22, 'muhammadbaihaki227@gmail.com', 'YgDnhIKoegTyQ6c0M8c+lfUvaeVbht7CafU9GGJPeC4=', 1608205070),
(23, 'muhammadbaihaki227@gmail.com', 'OBQGWvKBCjVtBzPusJtF4JyrVw7RfU7x2Ixc/z080Rc=', 1608205170),
(26, 'mad.bayhaki227@gmail.com', 'LYw206P3XXIS1reTfWbB75Bijc9swGBq9VCeA8hPgAM=', 1611105063),
(27, 'muhammadbaihaki227@gmail.com', 'MMSZhJal77GG2biAxa+SpZVIYlL3qr8+PFMNWJHmMY4=', 1611105362);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `kas_masuk`
--
ALTER TABLE `kas_masuk`
  ADD PRIMARY KEY (`id_masuk`);

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
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kas_keluar`
--
ALTER TABLE `kas_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kas_masuk`
--
ALTER TABLE `kas_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
