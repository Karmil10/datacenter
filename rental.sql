-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 03:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`, `tgl`) VALUES
(6, 'Kevin karm', 'kevin', 'Depok', 'Laki-laki', '654987', '654987', '21232f297a57a5a743894a0e4a801fc3', 2, '2019-10-30'),
(7, 'ade', 'admin', 'Depok', 'Laki-laki', '9632147', '9632147', '21232f297a57a5a743894a0e4a801fc3', 1, '2019-10-31'),
(8, 'savan', 'savana', 'Depok', 'perempuan', '321654', '654123', 'dc56d2e96c929d570169f9d325880139', 1, '0000-00-00'),
(9, 'ade', 'ade', 'depok', 'Laki-laki', '321654', '369852', 'a562cfa07c2b1213b3a5c99b756fc206', 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `path_galeri` varchar(100) NOT NULL,
  `caption_galeri` text NOT NULL,
  `tautan_galeri` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '35623897658777', 1, 'Jl. Salemba, Senen, Jakarta Pusat', 'Salemba', 'Senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '12', '02', '62351', 1, '2018-10-26 13:27:33', '2018-10-26 13:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `mp3_player` int(11) NOT NULL,
  `central_lock` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `ac`, `supir`, `mp3_player`, `central_lock`, `gambar`) VALUES
(6, 'SDN', 'Toyota Corola', 'B 6528 KAR', 'Putih', '2015', '0', 5000, 1000, 1, 0, 0, 0, 'toyota-corolla-altis.jpg'),
(7, 'SDN', 'Toyota Avanza', 'B 3214 KAR', 'Biru', '2015', '1', 6000, 1000, 1, 0, 0, 0, 'avanza.jpg'),
(8, 'SDN', 'Toyota Fortuner', 'B 3214 KAR', 'Putih', '2019', '1', 7000, 1000, 2, 0, 0, 0, 'Fortuner.jpg'),
(9, 'MPV', 'Toyota Fortuner', 'B 3214 KAR', 'Putih', '2019', '1', 8000, 1000, 2, 0, 0, 0, 'Fortuner.jpg'),
(10, 'MPV', 'CRV', 'B 6532 EEE', 'Cokelat', '2018', '1', 500000, 100000, 1, 0, 1, 1, 'crv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') NOT NULL,
  `alamat_ktp_mutasi` text NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbcounter`
--

CREATE TABLE `tbcounter` (
  `ip` varchar(2050) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcounter`
--

INSERT INTO `tbcounter` (`ip`, `date`, `hits`) VALUES
('10.88.25.1', '2016-01-16', 11),
('10.88.25.2', '2016-01-16', 3),
('10.88.25.3', '2016-01-17', 4),
('10.88.25.4', '2016-01-16', 11),
('10.88.25.5', '2016-02-16', 3),
('10.88.25.6', '2016-02-17', 4),
('10.88.25.10', '2016-02-23', 2),
('10.88.25.15', '2016-02-23', 1),
('10.88.25.13', '2016-03-16', 11),
('10.88.25.1', '2016-03-16', 3),
('10.88.25.5', '2016-03-17', 4),
('10.88.25.8', '2016-03-16', 11),
('10.88.25.10', '2016-03-16', 3),
('10.88.25.19', '2016-03-17', 4),
('10.88.25.27', '2016-04-23', 2),
('10.88.25.50', '2016-04-23', 1),
('10.88.25.6', '2016-04-16', 3),
('10.88.25.9', '2016-05-17', 4),
('10.88.25.11', '2016-05-23', 2),
('10.88.25.12', '2016-05-23', 1),
('10.88.25.16', '2016-05-16', 11),
('10.88.25.20', '2016-05-16', 3),
('10.88.25.32', '2016-06-17', 4),
('10.88.25.1', '2016-06-16', 11),
('10.88.25.35', '2016-06-16', 3),
('10.88.25.36', '2016-07-17', 4),
('10.88.25.26', '2016-07-23', 2),
('10.88.25.6', '2016-07-16', 3),
('10.88.25.9', '2016-08-17', 4),
('10.88.25.11', '2016-08-23', 2),
('10.88.25.12', '2016-08-23', 1),
('10.88.25.16', '2016-08-16', 11),
('10.88.25.20', '2016-08-06', 3),
('10.88.25.32', '2016-09-17', 4),
('10.88.25.1', '2016-09-16', 11),
('10.88.25.35', '2016-09-16', 3),
('10.88.25.36', '2016-09-17', 4),
('10.88.25.26', '2016-09-23', 2),
('10.88.25.16', '2016-10-16', 11),
('10.88.25.20', '2016-10-16', 3),
('10.88.25.32', '2016-10-17', 4),
('10.88.25.1', '2016-10-16', 11),
('10.88.25.35', '2016-11-16', 3),
('10.88.25.36', '2016-11-17', 4),
('10.88.25.26', '2016-11-23', 2),
('10.88.25.15', '2016-11-23', 1),
('10.88.25.13', '2016-12-16', 11),
('10.88.25.1', '2016-12-16', 3),
('10.88.25.5', '2016-12-17', 4),
('10.88.25.8', '2016-12-16', 11),
('10.88.25.10', '2016-12-16', 3),
('10.88.25.19', '2016-12-17', 4),
('10.88.25.27', '2016-12-23', 2),
('10.88.25.50', '2016-12-23', 1),
('10.88.25.6', '2016-12-16', 3),
('10.88.25.9', '2016-12-17', 4),
('10.88.25.11', '2016-12-23', 2),
('10.88.25.12', '2016-12-23', 1),
('10.88.25.20', '2016-12-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) UNSIGNED NOT NULL,
  `data` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `data`, `tanggal`) VALUES
(1, 'satu', '2013-07-07'),
(2, 'dua', '2013-12-08'),
(3, 'tiga', '2013-12-21'),
(4, 'empat', '2014-01-01'),
(5, 'lima', '2014-01-07'),
(6, 'enam', '2014-01-07'),
(7, 'tujuh', '2014-01-15'),
(8, 'delapan', '2014-02-02'),
(9, 'sembilan', '2014-02-03'),
(10, 'sepuluh', '2014-03-01'),
(11, 'sebelas', '2014-03-14'),
(12, 'duabelas', '2014-04-05'),
(13, 'tigabelas', '2014-05-06'),
(14, 'empatbelas', '2014-06-06'),
(15, 'limabelas', '2014-06-30'),
(16, 'enambelas', '2014-07-07'),
(17, 'tujuhbelas', '2014-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ijin`
--

CREATE TABLE `tbl_ijin` (
  `id_ijin` int(11) NOT NULL,
  `lokasi` varchar(25) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `in` time NOT NULL,
  `out` time NOT NULL,
  `belongings` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ijin`
--

INSERT INTO `tbl_ijin` (`id_ijin`, `lokasi`, `nama_tamu`, `purpose`, `tanggal`, `in`, `out`, `belongings`, `remark`) VALUES
(1, 'jakarta', '1. Andre, iwan', 'Maintenance', '2020-05-12', '00:00:00', '00:00:00', 'Toolkit', 'Maintenance'),
(2, 'surabaya', '1. Andre, iwan', 'Longok', '2020-05-16', '00:30:00', '15:55:00', 'Kamera', 'Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SDN', 'Sedang'),
(2, 'MPV', 'Minivan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','RT','RW') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'codingwebgratis', 'admin', '0192023a7bbd73250516f069df18b500', 'admin di aplikasi pendataan warga', 'Admin', 'Senen', 'Salemba', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '001', '002', '2018-10-26 13:01:49', '2018-10-26 13:01:49'),
(9, 'Alimudin', 'adminrt', '80a5aababc3324446fbfac54178a8c10', 'rt desa', 'RT', 'salemba', 'senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '007', '009', '2020-04-20 08:13:00', '2018-10-26 13:09:19'),
(10, 'Waljo', 'adminrw', '631575f257e72033d36c3861f22c29e9', 'rw desa', 'RW', 'Senen', 'Salemba', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '007', '009', '2020-04-20 08:13:06', '2018-10-26 13:09:06'),
(11, 'Bambang', 'adminrt2', '022d9d38a8866c546cf92d1ddc0959ab', 'adminrt 02', 'RT', 'salemba', 'senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '007', '009', '2020-04-20 08:13:10', '0000-00-00 00:00:00'),
(12, 'root', 'root', 'ff9830c42660c1dd1942844f8069b74a', 'root', 'Admin', '', '', '', '', '', '', '', '2020-04-15 22:45:25', '0000-00-00 00:00:00'),
(13, 'root', 'root', 'ff9830c42660c1dd1942844f8069b74a', 'root', 'Admin', '', '', '', '', '', '', '', '2020-04-15 22:45:36', '0000-00-00 00:00:00'),
(14, 'udin', 'udin', 'ff9830c42660c1dd1942844f8069b74a', 'Rt', 'RT', 'Tanah Baru', 'Beji', 'Depok', 'Jawa Barat', 'Indonesia', '007', '009', '2020-04-20 08:08:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_warga` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `id_user`, `created_at`) VALUES
(1, '35623897658813', 'MURNI CHANIAGO S', 'Salemba', '1985-02-26', 'L', 'Jl. Salemba, Senen, Jakarta Pusat', 'Jl. Salemba, Senen, Jakarta Pusat', 'Salemba', 'Senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '001', '002', 'Islam', 'Tidak Sekolah', 'karyawan swasta', 'Kawin', 'Tetap', 1, '2020-05-04 23:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ijin`
--
ALTER TABLE `tbl_ijin`
  ADD PRIMARY KEY (`id_ijin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_ijin`
--
ALTER TABLE `tbl_ijin`
  MODIFY `id_ijin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
