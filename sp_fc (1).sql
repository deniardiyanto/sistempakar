-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `kode_gejala` varchar(16) NOT NULL,
  `kode_diagnosa` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(6) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `jn_kelamin` enum('j','b') NOT NULL,
  `umur` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kode_diagnosa` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `jn_kelamin`, `umur`, `email`, `kode_diagnosa`, `tanggal`) VALUES
('P01', 'berbren', 'j', '3', 'bb@dogmail.com', NULL, NULL),
('P02', 'jonhnson', 'j', '4', 'jj@mail.com', NULL, NULL),
('P03', 'pp', 'b', '4', 'p@mail.com', NULL, NULL),
('P04', 'pop', 'b', '4', 'pop@dogmail.com', NULL, NULL),
('P05', 'jayen', 'j', '6', 'jy@dogmail.com', NULL, NULL),
('P06', 'boboboy', 'j', '6', 'bbb@dogmail.com', NULL, NULL),
('P07', 'qw', 'b', '4', 'qw@dogmail.com', NULL, NULL),
('P08', 'jj', 'b', '6', 'jij@mail.com', NULL, NULL),
('P09', 'berbreny', 'b', '3', 'bbrt@dogmail.com', NULL, NULL),
('P10', 'hery', 'j', '2', 'hr@dogmail.com', NULL, NULL),
('P11', 'ppq', 'b', '5', 'ppq@dogmail.com', NULL, NULL),
('P12', 'gogo', 'j', '3', 'gogo@dogmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
('A1', 'admin', 'admin'),
('A2', 'fajar', 'fajar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `kode_diagnosa` varchar(16) NOT NULL,
  `nama_diagnosa` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`kode_diagnosa`, `nama_diagnosa`) VALUES
('D01', 'Flu Kucing'),
('D02', 'Ringworm'),
('D03', 'Infeksi Chiamydia'),
('D04', 'Cacingan'),
('D05', 'Penyakit mata'),
('D06', 'FLU TD'),
('D07', 'Calicivirus'),
('D08', 'Feline Viral Rhinotracheitis (FVR)'),
('D09', 'Protozoa'),
('D10', 'Sariawan'),
('D11', 'Jamur'),
('D12', 'Ortirtis (radang telinga)'),
('D13', 'Kutuan'),
('D14', 'Grastritis (radang lambung)'),
('D15', 'Hairball'),
('D16', 'Infeksi cacing'),
('D17', 'Infeksi bakteri'),
('D18', 'Infeksi virus'),
('D19', 'Infeksi parasit'),
('D20', 'Planleukopenia'),
('D21', 'FUS (Saluran kecing)'),
('D22', 'Sakit mata'),
('D23', 'Infeksi telinga mempengaruhi mata'),
('D24', 'Ear mite (tungau telinga)'),
('D25', 'Stud Tail'),
('D26', 'Alergi makanan'),
('D27', 'Popil'),
('D28', 'Scabies'),
('D29', 'Eosinophilic Granuloma ( area hidung dan bibir)'),
('D30', 'Alergic Dermatitis (Kulit)'),
('D31', 'Ganguan hormone'),
('D32', 'Feline Parvovirus (radang usus menular)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(8) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G001', 'Nafsu makan berkurang'),
('G002', 'Kucing terlihat lesu'),
('G003', 'Demam'),
('G004', 'Diare'),
('G005', 'Bersin - bersin'),
('G006', 'Leleran'),
('G007', 'Batuk'),
('G008', 'Muntah makanan '),
('G009', 'Muntah terdapat cacing'),
('G010', 'Keluar cairan pada hidung'),
('G011', 'Kucing sulit dalam bernafas'),
('G012', 'Kucing tidak mau makan'),
('G013', 'Kucing banyak makan'),
('G014', 'Kucing terlihat lemas'),
('G015', 'Mata sayu'),
('G016', 'Mata kemerahan'),
('G017', 'Mata berair'),
('G018', 'Mata kotor coklat'),
('G019', 'Mata kotor coklat'),
('G020', 'Terdapat garis merah / putih di atas kelopak mata'),
('G021', 'Kemerahan pada kulit'),
('G022', 'Kulit menebal dan berkerak'),
('G023', 'Gatal-gatal'),
('G024', 'Telinga berair dan kotor'),
('G025', 'Bulu rontok'),
('G026', 'Kebotakan pada kulit'),
('G027', 'Kucing sering menggaruk badannya'),
('G028', 'Bulu kucing terlihat kusam'),
('G029', 'Perut kucing terlihat buncit'),
('G030', 'Urine kadang berdarah'),
('G031', 'Kucing susah buang air kecil'),
('G032', 'Susah BAB'),
('G033', 'Muntah terdapat bendah aneh'),
('G034', 'Mata terlihat juling'),
('G035', 'Fases kucing terdapat cacing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `ID` int(11) NOT NULL,
  `kode_gejala` varchar(16) NOT NULL DEFAULT '',
  `jawaban` varchar(6) NOT NULL DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`ID`, `kode_gejala`, `jawaban`) VALUES
(1, 'G001', 'Tidak'),
(2, 'G007', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengetahuan`
--

CREATE TABLE `tb_pengetahuan` (
  `ID` int(11) NOT NULL,
  `urut` int(11) NOT NULL DEFAULT 0,
  `jika` varchar(16) NOT NULL DEFAULT '',
  `ya_tanya` varchar(16) NOT NULL DEFAULT '',
  `ya_diagnosa` varchar(16) NOT NULL DEFAULT '',
  `tidak_tanya` varchar(16) NOT NULL DEFAULT '',
  `tidak_diagnosa` varchar(16) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengetahuan`
--

INSERT INTO `tb_pengetahuan` (`ID`, `urut`, `jika`, `ya_tanya`, `ya_diagnosa`, `tidak_tanya`, `tidak_diagnosa`) VALUES
(1, 0, 'G001', 'G002', '', 'G007', ''),
(23, 0, 'G002', '', 'D19', 'G005', ''),
(24, 0, 'G005', '', 'D01', 'G003', ''),
(85, 0, 'G003', 'G008', '', 'G006', ''),
(86, 0, 'G008', 'G009', '', '', 'D14'),
(87, 0, 'G009', 'G012', '', '', 'D06'),
(88, 0, 'G012', 'G013', '', '', 'D20'),
(89, 0, 'G013', 'G031', '', '', 'D04'),
(90, 0, 'G031', 'G030', '', '', 'D16'),
(91, 0, 'G030', '', 'D02', '', 'D13'),
(92, 0, 'G006', '', 'D10', 'G004', ''),
(93, 0, 'G004', 'G010', '', '', 'D18'),
(94, 0, 'G010', 'G009', '', '', 'D15'),
(95, 0, 'G033', '', 'D17', '', 'D25'),
(96, 0, 'G007', '', 'D29', 'G026', ''),
(97, 0, 'G026', '', 'D30', 'G025', ''),
(98, 0, 'G025', '', 'D28', 'G027', ''),
(99, 0, 'G027', 'G023', '', 'G021', ''),
(100, 0, 'G023', 'G022', '', '', 'D27'),
(101, 0, 'G022', 'G024', '', '', 'D26'),
(102, 0, 'G024', '', 'D12', '', 'D24'),
(103, 0, 'G021', 'G020', '', 'G018', ''),
(104, 0, 'G020', 'G019', '', '', 'D03'),
(105, 0, 'G019', '', 'D22', '', 'D23'),
(106, 0, 'G018', 'G017', '', 'G014', ''),
(107, 0, 'G017', 'G034', '', '', 'D06'),
(108, 0, 'G034', '', 'D05', '', 'D07'),
(109, 0, 'G014', '', 'D32', 'G035', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `kode_gejala` (`kode_gejala`),
  ADD KEY `kode_gejala_2` (`kode_gejala`);

--
-- Indexes for table `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD CONSTRAINT `tb_konsultasi_ibfk_1` FOREIGN KEY (`kode_gejala`) REFERENCES `tb_gejala` (`kode_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
