-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2019 at 09:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `kat_warna` int(4) NOT NULL,
  `kat_jenis` int(3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `tampstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dekorasi`
--

CREATE TABLE `dekorasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `kat_warna` int(4) NOT NULL,
  `kat_jenis` int(3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `tampstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `kat_warna` int(4) NOT NULL,
  `kat_jenis` int(3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `tampstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_jenis`
--

CREATE TABLE `kategori_jenis` (
  `id` int(3) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_jenis`
--

INSERT INTO `kategori_jenis` (`id`, `jenis`) VALUES
(1, 'bebas'),
(2, 'modern'),
(3, 'tradisional');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_warna`
--

CREATE TABLE `kategori_warna` (
  `id` int(4) NOT NULL,
  `warna` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_warna`
--

INSERT INTO `kategori_warna` (`id`, `warna`) VALUES
(1, 'merah'),
(2, 'kuning'),
(3, 'hijau'),
(4, 'biru');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `namaWo` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `kat_warna` int(4) NOT NULL,
  `kat_jenis` int(3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `tampstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `souvenir`
--

CREATE TABLE `souvenir` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `kat_warna` int(4) NOT NULL,
  `kat_jenis` int(3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `tampstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(25) NOT NULL,
  `kat_warna` int(4) NOT NULL,
  `kat_jenis` int(3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `tampstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kat_jenis` (`kat_jenis`),
  ADD KEY `kat_jenis_2` (`kat_jenis`),
  ADD KEY `kat_warna` (`kat_warna`);

--
-- Indexes for table `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kat_jenis` (`kat_jenis`),
  ADD KEY `kat_warna` (`kat_warna`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kat_jenis` (`kat_jenis`),
  ADD KEY `kat_warna` (`kat_warna`);

--
-- Indexes for table `kategori_jenis`
--
ALTER TABLE `kategori_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_warna`
--
ALTER TABLE `kategori_warna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kat_jenis` (`kat_jenis`),
  ADD KEY `kat_warna` (`kat_warna`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kat_jenis` (`kat_jenis`),
  ADD KEY `kat_warna` (`kat_warna`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kat_jenis` (`kat_jenis`),
  ADD KEY `kat_warna` (`kat_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dekorasi`
--
ALTER TABLE `dekorasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_jenis`
--
ALTER TABLE `kategori_jenis`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_warna`
--
ALTER TABLE `kategori_warna`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catering`
--
ALTER TABLE `catering`
  ADD CONSTRAINT `catering_ibfk_1` FOREIGN KEY (`kat_jenis`) REFERENCES `kategori_jenis` (`id`),
  ADD CONSTRAINT `catering_ibfk_2` FOREIGN KEY (`kat_warna`) REFERENCES `kategori_warna` (`id`);

--
-- Constraints for table `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD CONSTRAINT `dekorasi_ibfk_1` FOREIGN KEY (`kat_jenis`) REFERENCES `kategori_jenis` (`id`),
  ADD CONSTRAINT `dekorasi_ibfk_2` FOREIGN KEY (`kat_warna`) REFERENCES `kategori_warna` (`id`);

--
-- Constraints for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `dokumentasi_ibfk_1` FOREIGN KEY (`kat_jenis`) REFERENCES `kategori_jenis` (`id`),
  ADD CONSTRAINT `dokumentasi_ibfk_2` FOREIGN KEY (`kat_warna`) REFERENCES `kategori_warna` (`id`);

--
-- Constraints for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD CONSTRAINT `pakaian_ibfk_1` FOREIGN KEY (`kat_jenis`) REFERENCES `kategori_jenis` (`id`),
  ADD CONSTRAINT `pakaian_ibfk_2` FOREIGN KEY (`kat_warna`) REFERENCES `kategori_warna` (`id`);

--
-- Constraints for table `souvenir`
--
ALTER TABLE `souvenir`
  ADD CONSTRAINT `souvenir_ibfk_1` FOREIGN KEY (`kat_jenis`) REFERENCES `kategori_jenis` (`id`),
  ADD CONSTRAINT `souvenir_ibfk_2` FOREIGN KEY (`kat_warna`) REFERENCES `kategori_warna` (`id`);

--
-- Constraints for table `undangan`
--
ALTER TABLE `undangan`
  ADD CONSTRAINT `undangan_ibfk_1` FOREIGN KEY (`kat_jenis`) REFERENCES `kategori_jenis` (`id`),
  ADD CONSTRAINT `undangan_ibfk_2` FOREIGN KEY (`kat_warna`) REFERENCES `kategori_warna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
