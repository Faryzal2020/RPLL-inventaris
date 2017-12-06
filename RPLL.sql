-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 07:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpll`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_unit`, `nama`, `username`, `password`, `level`) VALUES
(1, 1, 'Darwis Aji Saputro', 102515006, 'darwis123', 1),
(2, 12, 'Endah Sulisthany', 102516902, 'endah123', 1),
(3, 13, 'Nur Wilda Anggraini Sary', 102515018, 'wilda123', 2),
(4, 13, 'Muhammad Qisty Gani', 102515015, 'muh123', 1),
(5, 12, 'Tisha Astiayu Anda', 102515027, 'tisha123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jns_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jns_id`) VALUES
(1, 'Mobil', 1),
(2, 'Motor', 1),
(3, 'CPU', 2),
(4, 'Komponen CPU', 2),
(5, 'UPS', 2),
(6, 'LCD/Monitor', 2),
(7, 'Printer', 2),
(8, 'Notebook/Laptop', 2),
(9, 'Switch hub', 2),
(10, 'External Hardisk', 2),
(11, 'Scanner', 2),
(12, 'Air Conditioner (AC)', 3),
(13, 'Dispenser', 3),
(14, 'Mesin Fotocopi', 3),
(15, 'Mesin Absensi', 3),
(16, 'Proyektor', 3),
(17, 'TV', 3),
(18, 'Pesawat Telpon', 3),
(19, 'TOA', 3),
(20, 'VCR', 3),
(21, 'Handy Talky (HT)', 3),
(22, 'Radio Tape', 3),
(23, 'Kipas Angin', 3),
(24, 'Overhead (OHP)', 3),
(25, 'Layar', 3),
(26, 'CD/DVD Player', 3),
(27, 'Piano', 3),
(28, 'Software', 3),
(29, 'Exhaust Fan', 3),
(30, 'Peralatan Audio', 3),
(31, 'Kamera', 3),
(32, 'Brandkas', 3),
(33, 'Mesin Air', 3),
(34, 'Kursi', 4),
(35, 'Meja', 4),
(36, 'White/Soft Board', 4),
(37, 'Rak/Lemari arsip', 4),
(38, 'Filling Kabinet', 4),
(39, 'Sofa', 4),
(40, 'Figura/Frame', 4),
(41, 'Vertical Blind', 4),
(42, 'Jenis barang lab elektronik', 5),
(43, 'Jenis barang lab non-elektronik', 5),
(44, 'Partisi', 6),
(45, 'Pengecatan', 6),
(46, 'Perbaikan (contoh : Keramik, Plafon, dll)', 6),
(47, 'Tanaman', 7),
(48, 'Pot', 7),
(49, 'Tenda/Payung', 7),
(50, 'Bangku Taman', 7),
(51, 'Pagar', 7),
(52, 'Lapangan', 7),
(53, 'Gerbang', 7),
(54, 'APAR', 8);

-- --------------------------------------------------------

--
-- Table structure for table `barang_permintaan`
--

CREATE TABLE `barang_permintaan` (
  `id_barang_permintaan` int(11) NOT NULL,
  `id_permintaan` int(11) DEFAULT NULL,
  `jumlah_terpenuhi` int(11) DEFAULT NULL,
  `jumlah_permintaan` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_permintaan`
--

INSERT INTO `barang_permintaan` (`id_barang_permintaan`, `id_permintaan`, `jumlah_terpenuhi`, `jumlah_permintaan`, `id_barang`, `harga_satuan`) VALUES
(1, 1, 5, 5, 3, 500000),
(2, 2, 3, 5, 5, 200000),
(3, 3, 5, 10, 10, 100000),
(4, 4, 6, 6, 8, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_barang_permintaan` int(11) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `garansi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_pembelian`, `id_barang_permintaan`, `harga`, `jumlah`, `id_vendor`, `garansi`) VALUES
(1, 2, '500000', 5, 3, '3 tahun'),
(2, 4, '150000', 10, 5, '2 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `kode_inventaris` int(11) NOT NULL,
  `id_barang_permintaan` int(11) DEFAULT NULL,
  `penanggung_jawab` varchar(30) DEFAULT NULL,
  `ruang` int(11) DEFAULT NULL,
  `id_tempat` varchar(5) DEFAULT NULL,
  `status_inventaris` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`kode_inventaris`, `id_barang_permintaan`, `penanggung_jawab`, `ruang`, `id_tempat`, `status_inventaris`) VALUES
(1, 1, 'admin', 122, '02', 'tersedia'),
(2, 3, 'admin', 220, '03', 'belum tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jns_barang` int(11) NOT NULL,
  `nama_jenis_barang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jns_barang`, `nama_jenis_barang`) VALUES
(1, 'Kendaraan'),
(2, 'Komputer'),
(3, 'Peralatan Kantor'),
(4, 'Furnitur'),
(5, 'Laboratorium'),
(6, 'Renovasi Gedung'),
(7, 'Emplasment'),
(8, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tempat`
--

CREATE TABLE `jenis_tempat` (
  `id_tempat` varchar(5) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tempat`
--

INSERT INTO `jenis_tempat` (`id_tempat`, `jenis`) VALUES
('01', 'Inventaris Kantor'),
('02', 'Inventaris Kelas'),
('03', 'Inventaris Perpustakaan'),
('04', 'Inventaris Laboratorium'),
('05', 'Inventaris Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`, `username`, `password`, `level`, `id_unit`) VALUES
(1, 'Darwis Aji Saputro', '0102515006', 'darwis123', 1, 1),
(2, 'Endah Sulisthany', '0102516902', 'endah123', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `tgl_pembelian` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `no_struk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tgl_pembelian`, `total_harga`, `no_struk`) VALUES
(1, '2017-11-01', 500000, '0222'),
(2, '2017-11-08', 600000, '0123'),
(3, '2017-11-13', 250000, '0323'),
(4, '2017-11-23', 500000, '2525');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan`
--

CREATE TABLE `pengambilan` (
  `id_pengambilan` int(11) NOT NULL,
  `id_barang_permintaan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengambilan`
--

INSERT INTO `pengambilan` (`id_pengambilan`, `id_barang_permintaan`, `jumlah`, `id_stok`) VALUES
(1, 1, 5, 1),
(2, 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `kode_inventaris` int(11) DEFAULT NULL,
  `tgl_perbaikan` date DEFAULT NULL,
  `jns_perbaikan` varchar(30) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`id_perbaikan`, `kode_inventaris`, `tgl_perbaikan`, `jns_perbaikan`, `biaya`, `status`, `keterangan`) VALUES
(1, 1, '2017-11-30', 'aliran listrik macet', 500000, 'belum tersedia', 'barang belum selesai untuk di perbaiki, rusak karena listrik macet');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tgl_permintaan` date DEFAULT NULL,
  `keperluan` text,
  `status_permintaan` varchar(30) DEFAULT NULL,
  `alasan` varchar(30) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `id_anggota`, `tgl_permintaan`, `keperluan`, `status_permintaan`, `alasan`, `id_operator`) VALUES
(1, 1, '2017-11-09', 'untuk kebutuhan komputer ruang rektor', 'sudah', 'barang tersedia', 1),
(2, 2, '2017-12-01', 'untuk kebutuhan komputer', 'belum', 'barang kosong', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prasarana`
--

CREATE TABLE `prasarana` (
  `id_prasarana` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `dari` varchar(20) DEFAULT NULL,
  `id_vendor` int(11) DEFAULT NULL,
  `garansi` varchar(30) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prasarana`
--

INSERT INTO `prasarana` (`id_prasarana`, `jumlah`, `dari`, `id_vendor`, `garansi`, `id_barang`) VALUES
(1, 2, 'kantor', 2, '2 tahun', 3),
(2, 5, 'kantor', 5, '1 tahun', 6);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama`, `kode`) VALUES
(1, 'Rektor', 'R'),
(2, 'Senat Universitas', 'SU'),
(3, 'Dewan Penyantun', 'DP'),
(4, 'Wakil Rektor APS', 'R-01'),
(5, 'Wakil Rektor KSP', 'R-02'),
(6, 'Wakil Rektor KIK', 'R-03'),
(7, 'Lembaga Penelitian dan Pengabdian Masyarakat (LP2M)', 'A-01'),
(8, 'Badan Penjamin Mutu Universitas (BPMU)', 'A-02'),
(9, 'Biro Administrasi Akademik', 'B-01'),
(10, 'Biro Sumber Daya Manusia', 'B-02'),
(11, 'Biro Promosi dan Penerimaan Mahasiswa Baru', 'B-03'),
(12, 'Biro Keuangan dan Akuntansi', 'R-04'),
(13, 'Biro Sarana dan Perlengkapan', 'B-05'),
(14, 'Biro Kemahasiswaan, Alumni, dan Pengembangan Karir', 'B-06'),
(15, 'Biro Pengembangan Inovasi dan Kerjasama', 'B-07'),
(16, 'Biro Perencanaan Pelaksanaan Penjaminan Mutu', 'B-08'),
(17, 'Biro Monitoring dan Evaluasi Keterlaksanaan Mutu', 'B-09'),
(18, 'Sekretariat Universitas', 'C-01'),
(19, 'Pusat Komputer dan Sistem Informasi (PKSI)', 'C-02'),
(20, 'Unit Perpustakaan', 'C-03'),
(21, 'Unit Laboratorium', 'C-04'),
(22, 'Pusat Penelitian dan Pengabdian Masyarakat (P3M)', 'D-01'),
(23, 'Pusat Pengembangan Wirausaha (PPW)', 'D-02'),
(24, 'Pusat Kajian dan Pengembangan Nilai-nilai Islam (PKPNI)', 'D-03'),
(25, 'Pusat Mata Kuliah Universitas dan Pengawasan Etika (PMKUPE)', 'D-04'),
(26, 'Fakultas Sains dan Teknologi (FST)', 'F-01'),
(27, 'Teknik Industri', 'F-01.1'),
(28, 'Teknik Informatika', 'F-01.2'),
(29, 'Teknik Elektro', 'F-01.3'),
(30, 'Bioteknologi', 'F-01.4'),
(31, 'Fakultas Ekonomi', 'F-03'),
(32, 'Manajemen', 'F-03.1'),
(33, 'Akuntansi', 'F-03.2'),
(34, 'Fakultas Sastra', 'F-04'),
(35, 'Sastra Arab', 'F-04.1'),
(36, 'Sastra China', 'F-04.2'),
(37, 'Sastra Inggris', 'F-04.3'),
(38, 'Sastra Jepang', 'F-04.4'),
(39, 'Fakultas Psikologi dan Pendidikan', 'F-06'),
(40, 'Dakwah Healing dan Konseling', 'F-06.1'),
(41, 'Pendidikan Anak Usia Dini', 'F-06.2'),
(42, 'Psikologi', 'F-06.3'),
(43, 'Fakultas Hukum', 'F-07'),
(44, 'Fakultas Ilmu Sosial dan Ilmu Politik', 'F-08'),
(45, 'Ilmu Hubungan Internasional', 'F-08.1'),
(46, 'Ilmu Komunikasi', 'F-08.2');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama`) VALUES
(1, 'LG'),
(2, 'Panasonic'),
(3, 'HP'),
(4, 'Honeywell'),
(5, 'Piramida Office Chairs'),
(6, 'Dell'),
(7, 'Snowman'),
(8, 'Apple'),
(9, 'Honda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
