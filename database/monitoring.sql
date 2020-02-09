-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 06:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `divisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `divisi`) VALUES
('admin', '123', 'coba', 'coba'),
('maryam', '571819', 'maryam', 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelembagaan`
--

CREATE TABLE `data_kelembagaan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ID_umkm` int(10) NOT NULL,
  `legalitas_usaha` text NOT NULL,
  `struktur_organisasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelembagaan`
--

INSERT INTO `data_kelembagaan` (`id`, `tanggal`, `ID_umkm`, `legalitas_usaha`, `struktur_organisasi`) VALUES
(8, '2020-01-06', 1, 'Sedang dalam proses/formalisasi badan hukum', 'Sudah ada struktur organisasi sederhana (maksimal produksi dan keuangan)'),
(9, '0000-00-00', 2, 'Sedang dalam proses/formalisasi badan hukum', 'Belum memiliki struktur organisasi');

-- --------------------------------------------------------

--
-- Table structure for table `db_digitalpayment`
--

CREATE TABLE `db_digitalpayment` (
  `id` int(11) NOT NULL,
  `digital_payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_digitalpayment`
--

INSERT INTO `db_digitalpayment` (`id`, `digital_payment`) VALUES
(1, 'SMS Banking'),
(2, 'Mobile Banking'),
(3, 'Internet Banking'),
(4, 'Uang Elektronik/ E Money'),
(5, 'BNI YAP'),
(6, 'My QR BRI'),
(7, 'Paypal'),
(9, 'contoh aja');

-- --------------------------------------------------------

--
-- Table structure for table `db_kategori`
--

CREATE TABLE `db_kategori` (
  `id` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kategori`
--

INSERT INTO `db_kategori` (`id`, `nama_kategori`) VALUES
(2, 'binaan BI'),
(3, 'Mitra BI'),
(4, 'Non Binaan BI'),
(6, 'contoh kategori');

-- --------------------------------------------------------

--
-- Table structure for table `db_komoditas`
--

CREATE TABLE `db_komoditas` (
  `id` int(11) NOT NULL,
  `nama_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_komoditas`
--

INSERT INTO `db_komoditas` (`id`, `nama_produk`) VALUES
(1, 'Padi'),
(2, 'Bawang Merah'),
(3, 'Cabai Merah'),
(4, 'Cabai Rawit'),
(5, 'Bawang Putih'),
(6, 'Sapi'),
(7, 'Sayuran'),
(8, 'Kedelai'),
(9, 'Jagung'),
(10, 'Rumput Laut'),
(11, 'Kakao'),
(12, 'Kopi'),
(13, 'Karet'),
(14, 'Sagu'),
(15, 'Tebu'),
(16, 'Gula Aren'),
(18, 'contoh produk 2');

-- --------------------------------------------------------

--
-- Table structure for table `db_legalitasusaha`
--

CREATE TABLE `db_legalitasusaha` (
  `id` int(11) NOT NULL,
  `legalitas_usaha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_legalitasusaha`
--

INSERT INTO `db_legalitasusaha` (`id`, `legalitas_usaha`) VALUES
(1, 'Belum berbadan hukum (Perorangan/Kelompok)'),
(2, 'Sedang dalam proses/formalisasi badan hukum'),
(3, 'Berbadan Hukum (Koperasi/Cv/PT)'),
(4, 'Koperasi'),
(5, 'CV'),
(6, 'PT');

-- --------------------------------------------------------

--
-- Table structure for table `db_sektorekonomi`
--

CREATE TABLE `db_sektorekonomi` (
  `id` int(11) NOT NULL,
  `nama_sektor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_sektorekonomi`
--

INSERT INTO `db_sektorekonomi` (`id`, `nama_sektor`) VALUES
(1, 'Pertanian, Kehutanan dan Perikanan'),
(2, 'Pertambangan dan Penggalian'),
(3, 'Industri Pengolahan'),
(4, 'Pengadaan Listrik, Gas, Uap/Air Panas dan Udara Dingin'),
(5, 'Pengelolaan Air, Pengelolaan Air Limbah, Pengelolaan dan Daur Ulang Sampah, Remediasi Konstruksi'),
(6, 'Perdagangan Besar dan Eceran, Reparasi dan Perawatan Mobil dan Sepeda Motor dan Pergudangan'),
(7, 'Penyediaan Akomodasi dan Penyediaan Makan Minum'),
(8, 'Informasi dan Komunikasi'),
(9, 'Real Estat'),
(10, 'Aktivitas Profesional, Ilmiah dan Teknis'),
(11, 'Aktivitas Penyewaandan Sewa Guna Usaha Tanpa Hak Opsi, Ketenagakerjaan, Agen Perjalanan'),
(12, 'Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib'),
(13, 'Pendidikan'),
(14, 'Aktivitas Kesehatan Manusia dan Aktivitas Sosial'),
(15, 'Kesehatan, Hiburan dan Rekreasi'),
(20, 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `db_strukturorganisasi`
--

CREATE TABLE `db_strukturorganisasi` (
  `id` int(11) NOT NULL,
  `struktur_organisasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_strukturorganisasi`
--

INSERT INTO `db_strukturorganisasi` (`id`, `struktur_organisasi`) VALUES
(1, 'Belum memiliki struktur organisasi'),
(2, 'Sudah ada struktur organisasi sederhana (maksimal produksi dan keuangan)'),
(3, 'Struktur Organisasi Lengkap'),
(5, 'contoh sajaa edit');

-- --------------------------------------------------------

--
-- Table structure for table `db_uangelektronik`
--

CREATE TABLE `db_uangelektronik` (
  `id` int(11) NOT NULL,
  `uang_elektronik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_uangelektronik`
--

INSERT INTO `db_uangelektronik` (`id`, `uang_elektronik`) VALUES
(1, 'MYNT E-Money'),
(2, 'Sakuku'),
(3, 'Flazz'),
(4, 'Rekening Ponsel'),
(5, 'Jakarta One (JakOne)'),
(6, 'JakCard'),
(7, 'Mandiri e-Cash'),
(8, 'Mandiri e-Money'),
(9, 'Mega Virtual'),
(10, 'Mega Cash'),
(11, 'UnikQu'),
(12, 'TapCash'),
(13, 'Nobu e-Money'),
(14, 'BBM Monkey'),
(15, 'T bank'),
(16, 'Brizzi'),
(17, 'FinnChanel'),
(18, 'PayPro (d/h Dompetku)'),
(19, 'Dokupay'),
(21, 'contoh sajaa');

-- --------------------------------------------------------

--
-- Table structure for table `digital_payment`
--

CREATE TABLE `digital_payment` (
  `id` varchar(20) NOT NULL,
  `nama_digpay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `digital_payment`
--

INSERT INTO `digital_payment` (`id`, `nama_digpay`) VALUES
('1', 'Kerjasama dengan digital payment'),
('2', 'Jenis Digital Payment yang digunakan');

-- --------------------------------------------------------

--
-- Table structure for table `non_tunai`
--

CREATE TABLE `non_tunai` (
  `id` varchar(20) NOT NULL,
  `nama_nontunai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_tunai`
--

INSERT INTO `non_tunai` (`id`, `nama_nontunai`) VALUES
('1', 'EDC-Kartu ATM / Kartu Debet / Kartu Kredit (Transfer melalui Bank Mandiri dan BRI)'),
('2', 'Digital Payment');

-- --------------------------------------------------------

--
-- Table structure for table `pemasaran`
--

CREATE TABLE `pemasaran` (
  `omzet` text NOT NULL,
  `jangkauan_pasar` text NOT NULL,
  `internet` text NOT NULL,
  `penjualan` text NOT NULL,
  `nominal_jual_online` text NOT NULL,
  `mitra pemasaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasaran`
--

INSERT INTO `pemasaran` (`omzet`, `jangkauan_pasar`, `internet`, `penjualan`, `nominal_jual_online`, `mitra pemasaran`) VALUES
('300jt/th[150.000.000-200.000.000]', 'Pasar Lokal', 'Belum memiliki', 'Hanya offline', '', 'Belum memiliki mitra pasar dan kontrak'),
('>300jt s.d 2,5M', 'Dalam 1 provinsi', 'Memiliki akses internet', 'offline dan online melalui medsos', '', 'memiliki mitra tetapi belum menggunakan kontrak'),
('> 2.5M s.d 50M', 'Pasar nasional/global', 'Memiliki akses internet dan telah dimanfaatkan untuk usaha', 'Offline dan online', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` int(10) NOT NULL,
  `nama_produksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `nama_produksi`) VALUES
(1, 'Kemampuan Produksi'),
(2, 'Pemasok Bahan Baku'),
(3, 'Proses Ramah Lingkungan'),
(4, 'Kepemilikan Izin / Sertifikat Produk dan Dokumen Ekspor'),
(5, 'Pernah Mengikuti Kurasi Produk oleh BI dan/atau Lembaga Lain');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `kategori_umkm` varchar(50) NOT NULL,
  `tahun_mulai` varchar(4) NOT NULL,
  `bulan_mulai` varchar(20) NOT NULL,
  `tahun_fasilitas` varchar(4) NOT NULL,
  `triwulan_fasilitas` varchar(50) NOT NULL,
  `nomor_ktp` int(20) NOT NULL,
  `no_npwp` varchar(30) DEFAULT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `jumlah_sdm` varchar(6) NOT NULL,
  `sektor_ekonomi` text NOT NULL,
  `produk_utama` text NOT NULL,
  `produk_lainnya` text NOT NULL,
  `total_aset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`ID`, `email`, `password`, `nama_umkm`, `nama_pemilik`, `kategori_umkm`, `tahun_mulai`, `bulan_mulai`, `tahun_fasilitas`, `triwulan_fasilitas`, `nomor_ktp`, `no_npwp`, `no_hp`, `alamat`, `kabupaten`, `provinsi`, `jumlah_sdm`, `sektor_ekonomi`, `produk_utama`, `produk_lainnya`, `total_aset`) VALUES
(1, 'sitimaryam.razaq@gmail.com', '123', 'abc', 'abc', 'Binaan BI', '123', 'November', '2018', 'abc', 1234, '', 9090, 'abc                            \r\n                          ', 'abc', 'abc', 'abc', 'sektor_ekonomi', 'Tebu', 'Gula Aren', 'Lebih dari Rp50 juta s.d Rp500 juta'),
(2, 'admin@gmail.com', 'newpassword', 'coba', 'coba', 'Mitra BI', '1234', 'Desember', '1234', 'wqws', 1234, '8888', 666, 'coba                            \r\n                          ', 'coba', 'coba', '5', 'sektor_ekonomi', 'Tebu', 'Gula Aren', 'Sampai dengan Rp50 juta'),
(3, 'juangsabit7@gmail.com', 'baruu', 'jjj', 'xxx', 'lain', '1234', 'November', '1234', '565', 1234, '8888', 57467, 'jhhk                            \r\n                          ', 'jjj', 'jjj', '5', 'sektor_ekonomi', 'Kopi', 'Cabai Rawit', 'Lebih dari Rp500 juta s.d Rp10 miliar');

-- --------------------------------------------------------

--
-- Table structure for table `sub_digpay`
--

CREATE TABLE `sub_digpay` (
  `id` int(11) NOT NULL,
  `id_digpay` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_digpay`
--

INSERT INTO `sub_digpay` (`id`, `id_digpay`, `nama`) VALUES
(1, '1', 'Belum ada kerjasama dengan digital payment'),
(2, '1', 'Sudah ada kerjasama dengan digital payment'),
(3, '2', 'SMS Banking'),
(4, '2', 'Mobile Banking'),
(5, '2', 'Internet Banking'),
(6, '2', 'Uang elektronik / E-Money'),
(7, '2', 'BNI YAP'),
(8, '2', 'My QR BRI'),
(9, '2', 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `sub_produk`
--

CREATE TABLE `sub_produk` (
  `id_produk` int(10) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_digpay`
--

CREATE TABLE `sub_sub_digpay` (
  `id` int(10) NOT NULL,
  `id_digpay` varchar(20) NOT NULL,
  `id_subdigpay` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sub_digpay`
--

INSERT INTO `sub_sub_digpay` (`id`, `id_digpay`, `id_subdigpay`, `nama`) VALUES
(1, '2', '4', 'MYNT E-Money'),
(2, '2', '4', 'Sakuku'),
(3, '2', '4', 'Flazz'),
(4, '2', '4', 'Rekening Ponsel'),
(5, '2', '4', 'Jakarta One (JakOne)'),
(6, '2', '4', 'JakCard'),
(7, '2', '4', 'Mandiri e-Cash'),
(8, '2', '4', 'Mandiri e-Money'),
(9, '2', '4', 'Mega Virtual'),
(10, '2', '4', 'Mega Cash'),
(11, '2', '4', 'UnikQu'),
(12, '2', '4', 'TapCash'),
(13, '2', '4', 'Nobu e-Money'),
(14, '2', '4', 'BBM Monkey'),
(15, '2', '4', 'T bank'),
(16, '2', '4', 'Brizzi'),
(17, '2', '4', 'FinnChanel'),
(18, '2', '4', 'PayPro (d/h Dompetku'),
(19, '2', '4', 'Dokupay');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(20) NOT NULL,
  `nama_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_transaksi`) VALUES
('1', 'Tunai'),
('2', 'Non Tunai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kelembagaan`
--
ALTER TABLE `data_kelembagaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_digitalpayment`
--
ALTER TABLE `db_digitalpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_kategori`
--
ALTER TABLE `db_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_komoditas`
--
ALTER TABLE `db_komoditas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_legalitasusaha`
--
ALTER TABLE `db_legalitasusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_sektorekonomi`
--
ALTER TABLE `db_sektorekonomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_strukturorganisasi`
--
ALTER TABLE `db_strukturorganisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_uangelektronik`
--
ALTER TABLE `db_uangelektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub_digpay`
--
ALTER TABLE `sub_digpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_digpay`
--
ALTER TABLE `sub_sub_digpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kelembagaan`
--
ALTER TABLE `data_kelembagaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `db_digitalpayment`
--
ALTER TABLE `db_digitalpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `db_kategori`
--
ALTER TABLE `db_kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `db_komoditas`
--
ALTER TABLE `db_komoditas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `db_legalitasusaha`
--
ALTER TABLE `db_legalitasusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `db_sektorekonomi`
--
ALTER TABLE `db_sektorekonomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `db_strukturorganisasi`
--
ALTER TABLE `db_strukturorganisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_uangelektronik`
--
ALTER TABLE `db_uangelektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_digpay`
--
ALTER TABLE `sub_digpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_sub_digpay`
--
ALTER TABLE `sub_sub_digpay`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
