-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 06:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpbarucuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `kotor`
--

CREATE TABLE `kotor` (
  `idKotor` int(11) NOT NULL,
  `idPegawaii` int(11) DEFAULT NULL,
  `pendapat` int(11) DEFAULT NULL,
  `biayaPendapat` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kotor`
--

INSERT INTO `kotor` (`idKotor`, `idPegawaii`, `pendapat`, `biayaPendapat`, `total`) VALUES
(1, 1, 4000, 6000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `labarugi`
--

CREATE TABLE `labarugi` (
  `idRugi` int(11) NOT NULL,
  `idKotorr` int(11) DEFAULT NULL,
  `beban_gaji` int(11) DEFAULT NULL,
  `beban_kebersih` int(11) DEFAULT NULL,
  `beban_bensin` int(11) DEFAULT NULL,
  `beban_listrik` int(11) DEFAULT NULL,
  `beban_sewa` int(11) DEFAULT NULL,
  `beban_hp` int(11) DEFAULT NULL,
  `penyusutan_kulkas` int(11) DEFAULT NULL,
  `penyusutan_kulkas_kantor` int(11) DEFAULT NULL,
  `penyusutan_peralatan` int(11) DEFAULT NULL,
  `penyusutan_rak` int(11) DEFAULT NULL,
  `total_beban` int(11) DEFAULT NULL,
  `total_laba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labarugi`
--

INSERT INTO `labarugi` (`idRugi`, `idKotorr`, `beban_gaji`, `beban_kebersih`, `beban_bensin`, `beban_listrik`, `beban_sewa`, `beban_hp`, `penyusutan_kulkas`, `penyusutan_kulkas_kantor`, `penyusutan_peralatan`, `penyusutan_rak`, `total_beban`, `total_laba`) VALUES
(2, 1, 1000, 1000, 2000, 2000, 3000, 4000, 5000, 6000, 7000, 9000, 5000, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id_modal` int(11) NOT NULL,
  `id_neraca` int(11) DEFAULT NULL,
  `modal_dana` int(11) DEFAULT NULL,
  `hutang` int(11) DEFAULT NULL,
  `penambahan_modal` int(11) DEFAULT NULL,
  `rugi_tahun` int(11) DEFAULT NULL,
  `total_aktiva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id_modal`, `id_neraca`, `modal_dana`, `hutang`, `penambahan_modal`, `rugi_tahun`, `total_aktiva`) VALUES
(1, 1, 50000, 12000, 15000, 4000, 12000),
(6, 36, 556556, 56, 5656, 56, 56);

-- --------------------------------------------------------

--
-- Table structure for table `neraca`
--

CREATE TABLE `neraca` (
  `id_neceraca` int(11) NOT NULL,
  `idPegawaiiii` int(11) DEFAULT NULL,
  `kasir` int(11) DEFAULT NULL,
  `bank` int(11) DEFAULT NULL,
  `brankas` int(11) DEFAULT NULL,
  `piutang` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `sewa` int(11) DEFAULT NULL,
  `akumulasi_sewa` int(11) DEFAULT NULL,
  `komp` int(11) DEFAULT NULL,
  `akumulasi_komp` int(11) DEFAULT NULL,
  `kulkas` int(11) DEFAULT NULL,
  `akumulasi_kulkas` int(11) DEFAULT NULL,
  `kulkas_kantor` int(11) DEFAULT NULL,
  `akumulasi_kulkas_kantor` int(11) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `akumulasi_hp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neraca`
--

INSERT INTO `neraca` (`id_neceraca`, `idPegawaiiii`, `kasir`, `bank`, `brankas`, `piutang`, `stok`, `sewa`, `akumulasi_sewa`, `komp`, `akumulasi_komp`, `kulkas`, `akumulasi_kulkas`, `kulkas_kantor`, `akumulasi_kulkas_kantor`, `hp`, `akumulasi_hp`) VALUES
(1, 1, 2, 10, 2, 1000, 12, 12000, 2000, 23200, 40000, 3, 1000, 12000, 12000, 10000, 15000),
(36, 2, 65445, 654564, 6545, 46, 4, 4, 44, 4, 46, 664, 64, 564, 564, 654, 54);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(11) NOT NULL,
  `jabatan` varchar(254) DEFAULT NULL,
  `nama` varchar(254) DEFAULT NULL,
  `pass` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `jabatan`, `nama`, `pass`) VALUES
(1, 'admin', 'admin', '123'),
(2, 'kasir2', 'adam', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kotor`
--
ALTER TABLE `kotor`
  ADD PRIMARY KEY (`idKotor`),
  ADD KEY `idPegawaii` (`idPegawaii`);

--
-- Indexes for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD PRIMARY KEY (`idRugi`),
  ADD KEY `idKotorr` (`idKotorr`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id_modal`),
  ADD KEY `id_neraca` (`id_neraca`);

--
-- Indexes for table `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`id_neceraca`),
  ADD KEY `idPegawaiiii` (`idPegawaiiii`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kotor`
--
ALTER TABLE `kotor`
  MODIFY `idKotor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labarugi`
--
ALTER TABLE `labarugi`
  MODIFY `idRugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id_neceraca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kotor`
--
ALTER TABLE `kotor`
  ADD CONSTRAINT `kotor_ibfk_1` FOREIGN KEY (`idPegawaii`) REFERENCES `pegawai` (`idPegawai`);

--
-- Constraints for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD CONSTRAINT `labarugi_ibfk_1` FOREIGN KEY (`idKotorr`) REFERENCES `kotor` (`idKotor`);

--
-- Constraints for table `modal`
--
ALTER TABLE `modal`
  ADD CONSTRAINT `modal_ibfk_1` FOREIGN KEY (`id_neraca`) REFERENCES `neraca` (`id_neceraca`);

--
-- Constraints for table `neraca`
--
ALTER TABLE `neraca`
  ADD CONSTRAINT `neraca_ibfk_1` FOREIGN KEY (`idPegawaiiii`) REFERENCES `pegawai` (`idPegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
