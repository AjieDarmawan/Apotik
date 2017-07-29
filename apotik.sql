-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 01:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `faktursupply`
--

CREATE TABLE IF NOT EXISTS `faktursupply` (
`no` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `harga_` int(11) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faktursupply`
--

INSERT INTO `faktursupply` (`no`, `tanggal`, `id_karyawan`, `id_supplier`, `id_obat`, `jumlah_obat`, `harga_`, `total`) VALUES
(18, '2016-11-30 00:00:00', 11, 2, 2, 515, 250000, 0),
(19, '2016-11-30 00:00:00', 22, 6, 13, 30, 250000, 0),
(20, '2016-11-30 00:00:00', 11, 6, 14, 12, 150000, 0),
(21, '2016-11-30 00:00:00', 35, 8, 33, 120, 1000000, 0),
(22, '2016-11-30 00:00:00', 30, 7, 31, 100, 1000000, 0),
(23, '2016-12-01 00:00:00', 24, 2, 2, 50, 5000, 0),
(24, '2016-12-02 00:00:00', 24, 7, 23, 1, 1000000, 0),
(25, '2016-12-03 00:00:00', 21, 7, 14, 120, 1200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `no_telpon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `tgl_masuk`, `alamat`, `gender`, `kota`, `status`, `no_telpon`) VALUES
(9, 'Ajie darmawan', '2016-11-16', 'bogor', 'laki-laki', 'Jakarta', 'Manager', '0811314141414'),
(11, 'syifa', '2016-11-12', 'jakarta\r\n', 'perempuan', 'Jakarta', 'Manager', '0812321345678'),
(21, 'Ajie kurniawan', '2016-11-04', 'bandung', 'laki-laki', 'Bogor', 'Karyawan', '0810114141515'),
(22, 'Siti maesaroh', '2016-11-14', 'medan', 'perempuan', 'Surabaya', 'Karyawan', '081313131313'),
(24, 'Mimin', '2016-11-18', 'cianjur', 'perempuan', 'Jakarta', 'Manager', '08101011131'),
(26, 'Sempurna', '2016-11-08', 'jakrta', 'laki-laki', 'Bogor', 'Suverpaisor', '0813151515551'),
(30, 'Sulis', '2016-11-04', 'Sukabumi', 'laki-laki', 'Bandung', 'Karyawan', '081411411551'),
(32, 'kakang', '2016-11-04', 'jakarta', 'laki-laki', 'Bandung', 'Karyawan', '081012456712'),
(33, 'tengku', '2016-11-10', 'Bogor', 'laki-laki', 'Jakarta', 'Karyawan', '081245122411'),
(34, 'sari', '2016-11-05', 'bogor', 'laki-laki', 'Bogor', 'Manager', '0211114141414'),
(35, 'Poni', '2016-11-02', 'jakarta Selatan', 'perempuan', 'Jakarta', 'Kontrak', '081314512345');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date NOT NULL,
  `stts` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `nama_lengkap`, `password`, `last_login`, `stts`) VALUES
(1, 'admin', 'admin', 'admin', '2016-11-02', 'admin'),
(2, 'siti', 'siti nurjanah', 'siti', '2016-11-01', 'karyawan'),
(3, 'ahmad', 'ahmad saputra', 'ahmad', '2016-11-08', 'pelanggan'),
(4, 'sari', 'sari', 'sari', '0000-00-00', 'karyawan'),
(5, 'Ajie kurniawan', 'Ajie kurniawan', 'Ajie kurniawan', '0000-00-00', 'karyawan'),
(6, 'Siti maesaroh', 'Siti maesaroh', 'Siti maesaroh', '0000-00-00', 'karyawan'),
(7, 'Yudo', 'Yudo', 'Yudo', '0000-00-00', 'karyawan'),
(8, 'Ajie kurniawan', 'Ajie kurniawan', 'Ajie kurniawan', '0000-00-00', 'karyawan'),
(9, 'Sempurna', 'Sempurna', 'Sempurna', '0000-00-00', 'karyawan'),
(13, 'Sulis', 'Sulis', 'Sulis', '0000-00-00', 'karyawan'),
(14, 'Ajie kurniawan', 'Ajie kurniawan', 'Ajie kurniawan', '0000-00-00', 'karyawan'),
(15, 'kakang', 'kakang', 'kakang', '0000-00-00', 'karyawan'),
(16, 'tengku', 'tengku', 'tengku', '0000-00-00', 'karyawan'),
(17, 'sari', 'sari', 'sari', '0000-00-00', 'karyawan'),
(18, 'Poni', 'Poni', 'Poni', '0000-00-00', 'karyawan'),
(19, 'aaggaga', 'aaggaga', 'aaggaga', '0000-00-00', 'karyawan'),
(20, 'aaggaga', 'aaggaga', 'aaggaga', '0000-00-00', 'karyawan'),
(21, 'aaggaga', 'aaggaga', 'aaggaga', '0000-00-00', 'karyawan'),
(22, 'aaggaga', 'aaggaga', 'aaggaga', '0000-00-00', 'karyawan'),
(23, 'udin', 'udin', 'udin', '0000-00-00', 'pelanggan'),
(24, 'maimunah', 'maimunah', 'maimunah', '0000-00-00', 'pelanggan'),
(25, 'Maman', 'Maman', 'Maman', '0000-00-00', 'pelanggan'),
(26, 'jujub', 'jujub', 'jujub', '0000-00-00', 'pelanggan'),
(27, 'Kukuh', 'Kukuh', 'Kukuh', '0000-00-00', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
`id_obat` int(11) NOT NULL,
  `Kode_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `Kode_obat`, `nama_obat`, `harga`, `stock`, `id_supplier`) VALUES
(2, 'Gka11414', 'Dapiryin', 8000, 12, 1),
(13, 'Bn001', 'Amxaan', 12000, 1220, 1),
(14, 'jann10144', 'Paramex', 3000, 1200, 2),
(16, 'Bn11414', 'parecetamol', 10000, 12, 1),
(22, 'Mmna114', 'metformin', 3000, 500, 1),
(23, 'Bn-001-01', 'Promag', 8000, 500, 1),
(24, 'kd_obat', 'Axprionol', 21000, 10, 1),
(25, 'Mmna114', 'parecetamol', 2500, 50, 6),
(26, 'shs', 'Spiral', 5000, 20, 7),
(27, 'Bn-001-01', 'metformin', 2100, 50, 6),
(28, 'vb-003-2016', 'Entrostop', 1500, 50, 8),
(29, 'Bn001', 'parecetamol', 6000, 50, 2),
(30, 'Bn-001-02', 'Amxaan', 4000, 500, 7),
(31, 'Mmna116', 'cetirizine', 3000, 500, 6),
(32, 'Kd-op-2014', 'Paramex', 1500, 40, 8),
(33, 'bn-0101', 'Dapirin', 1200, 50, 6);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
`id_operator` int(11) NOT NULL,
  `nama_operator` varchar(70) NOT NULL,
  `TTL` date NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `TTL`, `Alamat`) VALUES
(1, 'Marjanah', '2016-11-17', 'Bogor'),
(2, 'Romlah', '2016-11-14', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `kode_pelanggan` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `kode_pelanggan`, `tgl_daftar`, `alamat`, `jenis_kelamin`, `no_hp`, `pekerjaan`) VALUES
(5, 'maimunah', 'vxEb9YaX', '2016-11-03', 'Bogor vbcvb ', 'perempuan', '0814515155', 'Ibu rumah Tangga'),
(6, 'Maman', 'wzS2nKau', '2016-11-03', 'Cileungsi fdgdfg', 'laki-laki', '0813141515', 'Karyawan'),
(7, 'jujub', 'ep4lIWD9', '2016-08-04', 'Bogor', 'laki-laki', '0814145155', 'Wirausaha'),
(8, 'Kukuh', 'PmTzRY2x', '2016-12-01', 'Bogor', 'perempuan', '0813141515', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
`id_penjualan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `jenis_pelanggan` varchar(50) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_resep` int(11) NOT NULL,
  `jumlah` varchar(22) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tanggal`, `petugas`, `jenis_pelanggan`, `id_obat`, `id_resep`, `jumlah`, `status`) VALUES
(129, '2016-11-30', 'Marjanah', 'Bukan Pelanggan', 13, 7, '2', '1'),
(130, '2016-11-30', 'Marjanah', 'Bukan Pelanggan', 16, 8, '3', '1'),
(131, '2016-11-30', 'Marjanah', 'Pelanggan', 13, 10, '2', '1'),
(132, '2016-11-30', 'Marjanah', 'Bukan Pelanggan', 26, 11, '2', '1'),
(133, '2016-11-30', 'Marjanah', 'Bukan Pelanggan', 13, 13, '1', '1'),
(134, '2016-11-30', 'Marjanah', 'Bukan Pelanggan', 28, 7, '1', '1'),
(135, '2016-11-30', 'Marjanah', 'Pelanggan', 16, 8, '1', '1'),
(136, '2016-12-01', 'Marjanah', 'Pelanggan', 13, 4, '1', '1'),
(137, '2016-12-27', 'Marjanah', 'Bukan Pelanggan', 16, 4, '1', '1'),
(138, '2016-12-27', 'Marjanah', 'Bukan Pelanggan', 2, 4, '2', '1'),
(139, '2017-02-16', 'Marjanah', 'Pelanggan', 29, 4, '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE IF NOT EXISTS `penjualan_detail` (
`id_penjualan_detail` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`id_penjualan_detail`, `tanggal`, `total_bayar`) VALUES
(9, '2016-11-30', 75600),
(10, '2016-11-30', 23500),
(11, '2016-12-01', 9000),
(12, '2016-12-01', 10800),
(13, '2016-12-27', 26000);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
`id_resep` int(11) NOT NULL,
  `no_resep` varchar(50) NOT NULL,
  `nama_resep` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `no_resep`, `nama_resep`, `id_obat`, `jenis_obat`) VALUES
(4, '01914141kaf', 'amlaf', '1', 'Organ dalam'),
(7, 'agtatata', 'tayay', '1', 'Alergi'),
(8, 'atatataya', 'ayayaa6161', '29', 'Cair'),
(9, '11141515', 'Sabutamol', '1', 'Organ Luar'),
(10, '0141414145', 'sanas', '14', 'Kapsul'),
(11, '01914141kaf', 'amla', '1', 'Organ dalam'),
(12, '01914141kaf', 'Metformin', '1', 'Organ dalam'),
(13, 'BN-01-2015', 'Yuafag', '26', 'Tablet'),
(14, 'bn-01-01415', 'maqtqt', '18', 'Cair'),
(15, 'atatataya', 'ayayaa6161', '16', 'Kapsul'),
(16, 'atatataya', 'bavaaf', '30', 'dll'),
(17, 'sjshsh', 'bavaaf', '2', 'Cair'),
(21, 'afaggag', 'agh', '20', 'Cair'),
(23, '0141561', 'agaga', '15', 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
`id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_tlpn` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `kota`, `no_tlpn`) VALUES
(2, 'PT. novel intls', 'Gunungputri', 'Bogor', '0210111414'),
(6, 'Pt kalbe tbk', 'cikarang', 'Bekasi', '081014141515'),
(7, 'Pt .dankos', 'pulogadung', 'Jakarta', '0814141555'),
(8, 'Pt.mega farm tbk', 'pulogadung', 'Jakarta', '0201451515');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faktursupply`
--
ALTER TABLE `faktursupply`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
 ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
 ADD PRIMARY KEY (`id_penjualan_detail`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
 ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
 ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faktursupply`
--
ALTER TABLE `faktursupply`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
MODIFY `id_penjualan_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
