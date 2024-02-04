-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 08:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sism`
--

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `status_perkawinan` enum('Kawin','Belum Kawin') NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sktm`
--

INSERT INTO `sktm` (`id`, `nama`, `nik`, `tgl_lahir`, `jenis_kelamin`, `status_perkawinan`, `pekerjaan`, `agama`, `alamat`, `status`, `telp`, `tempat_lahir`, `created_at`) VALUES
(690, 'wawawa', 23223, '2024-02-21', 'Laki-Laki', 'Kawin', 'adsa', 'Islam', 'asdasdas', 'surat selesai', '232233333', 'asdsad', '2024-02-04 17:59:05'),
(691, 'asdasda', 322322, '2024-02-13', 'Laki-Laki', 'Kawin', 'asdsa', 'Islam', 'sadsad', 'surat selesai', '232', 'asdas', '2024-02-03 23:03:52'),
(692, 'yoriksaw', 321321, '2024-02-16', 'Laki-Laki', 'Kawin', 'asdas', 'Islam', 'dasdas', 'menunggu', '2322', 'adada', '2024-02-03 21:17:57'),
(693, 'asdasdasda', 23232, '2024-02-16', 'Laki-Laki', 'Kawin', 'adsad', 'Islam', 'asdasdas', 'menunggu', '23223', 'asdsad', '2024-02-03 21:17:57'),
(694, 'ppppp', 232322, '2024-02-21', 'Laki-Laki', 'Kawin', 'asdsa', 'Islam', 'sadsad', 'menunggu', '23223', 'asda', '2024-02-03 21:17:57'),
(695, 'udin', 3432423, '2024-02-05', 'Laki-Laki', 'Kawin', 'sadsa', 'Islam', 'sadsa', 'menunggu', '3223', 'sda', '2024-02-03 21:18:24'),
(696, 'Dummy 1', 123456789, '1990-01-01', 'Laki-Laki', '', 'PNS', 'Islam', 'Jl. Contoh No. 1', 'Aktif', '08123456789', 'Jakarta', '2024-02-04 17:58:00'),
(697, 'Dummy 2', 987654321, '1985-02-15', 'Perempuan', '', 'Swasta', '', 'Jl. Contoh No. 2', 'Tidak Aktif', '08234567890', 'Bandung', '2024-02-04 17:58:00'),
(698, 'Dummy 3', 456789012, '1992-05-20', 'Laki-Laki', '', 'Wiraswasta', 'Hindu', 'Jl. Contoh No. 3', 'Aktif', '08345678901', 'Surabaya', '2024-02-04 17:58:00'),
(699, 'Dummy 4', 234567890, '1988-09-10', 'Perempuan', '', 'Pegawai Negeri', 'Buddha', 'Jl. Contoh No. 4', 'Aktif', '08456789012', 'Medan', '2024-02-04 17:58:00'),
(700, 'Dummy 5', 567890123, '1995-03-25', 'Laki-Laki', '', 'Wiraswasta', 'Islam', 'Jl. Contoh No. 5', 'Tidak Aktif', '08567890123', 'Semarang', '2024-02-04 17:58:00'),
(701, 'Dummy 6', 890123456, '1983-07-12', 'Perempuan', '', 'PNS', '', 'Jl. Contoh No. 6', 'Aktif', '08678901234', 'Yogyakarta', '2024-02-04 17:58:00'),
(702, 'Dummy 7', 345678901, '1998-11-08', 'Laki-Laki', '', 'Mahasiswa', 'Islam', 'Jl. Contoh No. 7', 'Aktif', '08789012345', 'Bali', '2024-02-04 17:58:00'),
(703, 'Dummy 8', 678901234, '1980-04-17', 'Perempuan', '', 'Swasta', 'Hindu', 'Jl. Contoh No. 8', 'Tidak Aktif', '08890123456', 'Makassar', '2024-02-04 17:58:00'),
(704, 'Dummy 9', 901234567, '1993-06-30', 'Laki-Laki', '', 'Wiraswasta', 'Buddha', 'Jl. Contoh No. 9', 'Aktif', '08901234567', 'Manado', '2024-02-04 17:58:00'),
(705, 'Dummy 10', 123789456, '1986-12-05', 'Perempuan', '', 'Pegawai Negeri', 'Islam', 'Jl. Contoh No. 10', 'Aktif', '09012345678', 'Pekanbaru', '2024-02-04 17:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `sudoteti`
--

CREATE TABLE `sudoteti` (
  `id` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `status_perkawinan` enum('Kawin','Belum Kawin') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sudoteti`
--

INSERT INTO `sudoteti` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `warga_negara`, `agama`, `alamat_asal`, `status`, `jenis_kelamin`, `status_perkawinan`, `keterangan`, `telp`, `created_at`) VALUES
(6, 159785, 'testing domisili', 'jakarta', '2023-11-30', 'WNI', 'Islam', 'tidak ada asal', 'surat selesai', 'Laki-Laki', 'Belum Kawin', 'mau bikin aja', '032156498789', '2024-02-03 21:19:04'),
(9, 23232, 'sadas', 'asdas', '2024-02-14', 'WNI', 'Islam', 'sadsa', 'menunggu', 'Laki-Laki', 'Kawin', 'asd', '232', '2024-02-03 21:19:04'),
(10, 232322, 'setulus felix', 'adasdas', '2024-02-22', 'WNI', 'Islam', 'sadsa', 'menunggu', 'Laki-Laki', 'Kawin', 'sada', '23232', '2024-02-03 21:19:04'),
(11, 123456789, 'Dummy Sudoteti 1', 'Jakarta', '1990-01-01', '', 'Islam', 'Jl. Contoh No. 1', 'Aktif', 'Laki-Laki', '', 'Keterangan 1', '08123456789', '2024-02-04 18:01:45'),
(12, 987654321, 'Dummy Sudoteti 2', 'Bandung', '1985-02-15', '', '', 'Jl. Contoh No. 2', 'Tidak Aktif', 'Perempuan', '', 'Keterangan 2', '08234567890', '2024-02-04 18:01:45'),
(13, 456789012, 'Dummy Sudoteti 3', 'Surabaya', '1992-05-20', '', 'Hindu', 'Jl. Contoh No. 3', 'Aktif', 'Laki-Laki', '', 'Keterangan 3', '08345678901', '2024-02-04 18:01:45'),
(14, 234567890, 'Dummy Sudoteti 4', 'Medan', '1988-09-10', '', 'Buddha', 'Jl. Contoh No. 4', 'Aktif', 'Perempuan', '', 'Keterangan 4', '08456789012', '2024-02-04 18:01:45'),
(15, 567890123, 'Dummy Sudoteti 5', 'Semarang', '1995-03-25', '', 'Islam', 'Jl. Contoh No. 5', 'Tidak Aktif', 'Laki-Laki', '', 'Keterangan 5', '08567890123', '2024-02-04 18:01:45'),
(16, 890123456, 'Dummy Sudoteti 6', 'Yogyakarta', '1983-07-12', '', '', 'Jl. Contoh No. 6', 'Aktif', 'Perempuan', '', 'Keterangan 6', '08678901234', '2024-02-04 18:01:45'),
(17, 345678901, 'Dummy Sudoteti 7', 'Bali', '1998-11-08', '', 'Islam', 'Jl. Contoh No. 7', 'Aktif', 'Laki-Laki', '', 'Keterangan 7', '08789012345', '2024-02-04 18:01:45'),
(18, 678901234, 'Dummy Sudoteti 8', 'Makassar', '1980-04-17', '', 'Hindu', 'Jl. Contoh No. 8', 'Tidak Aktif', 'Perempuan', '', 'Keterangan 8', '08890123456', '2024-02-04 18:01:45'),
(19, 901234567, 'Dummy Sudoteti 9', 'Manado', '1993-06-30', '', 'Buddha', 'Jl. Contoh No. 9', 'Aktif', 'Laki-Laki', '', 'Keterangan 9', '08901234567', '2024-02-04 18:01:45'),
(20, 123789456, 'Dummy Sudoteti 10', 'Pekanbaru', '1986-12-05', '', 'Islam', 'Jl. Contoh No. 10', 'Aktif', 'Perempuan', '', 'Keterangan 10', '09012345678', '2024-02-04 18:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `superbeme`
--

CREATE TABLE `superbeme` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` int(16) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superbeme`
--

INSERT INTO `superbeme` (`id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `warga_negara`, `agama`, `pekerjaan`, `alamat`, `status`, `keperluan`, `telp`, `created_at`) VALUES
(4, 'siapa', 15987453, 'rumah sakit', '2023-11-30', 'Laki-Laki', 'WNI', 'Islam', 'tidak bekerja', 'asal lu tau aja', 'ditolak', 'tulis aja apa maumu', '189798465123', '2024-02-03 21:19:22'),
(5, 'kuwontol', 322322, 'asdsad', '2024-02-24', 'Laki-Laki', 'WNI', 'Islam', 'adsad', 'dasdas', 'menunggu', 'adasd', '232233333', '2024-02-03 21:19:22'),
(6, 'Dummy Superbeme 1', 2147483647, 'Jakarta', '1990-01-01', 'Laki-Laki', '', 'Islam', 'PNS', 'Jl. Contoh No. 1', 'Aktif', 'Pernyataan Belum Nikah', '08123456789', '2024-02-04 18:02:35'),
(7, 'Dummy Superbeme 2', 2147483647, 'Bandung', '1985-02-15', 'Perempuan', '', '', 'Wiraswasta', 'Jl. Contoh No. 2', 'Tidak Aktif', 'Pernyataan Belum Nikah', '08234567890', '2024-02-04 18:02:35'),
(8, 'Dummy Superbeme 3', 2147483647, 'Surabaya', '1992-05-20', 'Laki-Laki', '', 'Hindu', 'Dokter', 'Jl. Contoh No. 3', 'Aktif', 'Pernyataan Belum Nikah', '08345678901', '2024-02-04 18:02:35'),
(9, 'Dummy Superbeme 4', 2147483647, 'Medan', '1988-09-10', 'Perempuan', '', 'Buddha', 'Pengusaha', 'Jl. Contoh No. 4', 'Aktif', 'Pernyataan Belum Nikah', '08456789012', '2024-02-04 18:02:35'),
(10, 'Dummy Superbeme 5', 2147483647, 'Semarang', '1995-03-25', 'Laki-Laki', '', 'Islam', 'Guru', 'Jl. Contoh No. 5', 'Tidak Aktif', 'Pernyataan Belum Nikah', '08567890123', '2024-02-04 18:02:35'),
(11, 'Dummy Superbeme 6', 2147483647, 'Yogyakarta', '1983-07-12', 'Perempuan', '', '', 'Arsitek', 'Jl. Contoh No. 6', 'Aktif', 'Pernyataan Belum Nikah', '08678901234', '2024-02-04 18:02:35'),
(12, 'Dummy Superbeme 7', 2147483647, 'Bali', '1998-11-08', 'Laki-Laki', '', 'Islam', 'Wiraswasta', 'Jl. Contoh No. 7', 'Aktif', 'Pernyataan Belum Nikah', '08789012345', '2024-02-04 18:02:35'),
(13, 'Dummy Superbeme 8', 2147483647, 'Makassar', '1980-04-17', 'Perempuan', '', 'Hindu', 'Dosen', 'Jl. Contoh No. 8', 'Tidak Aktif', 'Pernyataan Belum Nikah', '08890123456', '2024-02-04 18:02:35'),
(14, 'Dummy Superbeme 9', 2147483647, 'Manado', '1993-06-30', 'Laki-Laki', '', 'Buddha', 'PNS', 'Jl. Contoh No. 9', 'Aktif', 'Pernyataan Belum Nikah', '08901234567', '2024-02-04 18:02:35'),
(15, 'Dummy Superbeme 10', 2147483647, 'Pekanbaru', '1986-12-05', 'Perempuan', '', 'Islam', 'Dokter', 'Jl. Contoh No. 10', 'Aktif', 'Pernyataan Belum Nikah', '09012345678', '2024-02-04 18:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `superce`
--

CREATE TABLE `superce` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir1` varchar(20) NOT NULL,
  `tgl_lahir1` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `warga_negara1` enum('WNI','WNA') NOT NULL,
  `agama1` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `pekerjaan1` varchar(50) NOT NULL,
  `alamat1` varchar(50) NOT NULL,
  `nama_2` varchar(50) NOT NULL,
  `tempat_lahir2` varchar(20) NOT NULL,
  `tgl_lahir2` date NOT NULL,
  `warga_negara2` enum('WNI','WNA') NOT NULL,
  `agama2` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `pekerjaan2` varchar(50) NOT NULL,
  `alamat2` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `status1` enum('Cerai Hidup','Cerai Mati') NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nik` int(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superce`
--

INSERT INTO `superce` (`id`, `nama`, `tempat_lahir1`, `tgl_lahir1`, `jenis_kelamin`, `warga_negara1`, `agama1`, `pekerjaan1`, `alamat1`, `nama_2`, `tempat_lahir2`, `tgl_lahir2`, `warga_negara2`, `agama2`, `pekerjaan2`, `alamat2`, `status`, `status1`, `telp`, `nik`, `created_at`) VALUES
(1, 'testing', 'apapapapa', '2023-11-16', 'Laki-Laki', 'WNI', 'Islam', 'tidak bekerja', 'sasak 2', 'belum juga nikah', 'belum tau', '2023-11-16', 'WNI', 'Islam', 'tidak bekerja', 'jangan kasih tau', 'diterima', 'Cerai Mati', '123123132', 0, '2024-02-03 21:19:40'),
(2, 'kuwontol', 'asdsadsa', '2024-02-05', 'Laki-Laki', 'WNI', 'Islam', 'awdad', 'adsd', 'dwadaa', 'asd', '2024-02-15', 'WNI', 'Islam', 'awd', 'sad', 'menunggu', 'Cerai Mati', '23223', 0, '2024-02-03 21:19:40'),
(3, 'Dummy Superce 1', 'Tempat Lahir 1', '1990-01-01', 'Laki-Laki', '', 'Islam', 'PNS', 'Jl. Contoh No. 1', 'Dummy Pasangan 1', 'Tempat Lahir Pasanga', '1995-05-15', '', '', 'Wiraswasta', 'Jl. Contoh No. 2', 'Aktif', '', '08123456789', 2147483647, '2024-02-04 18:05:30'),
(4, 'Dummy Superce 2', 'Tempat Lahir 2', '1985-02-15', 'Perempuan', '', '', 'Wiraswasta', 'Jl. Contoh No. 3', 'Dummy Pasangan 2', 'Tempat Lahir Pasanga', '1992-05-20', '', 'Hindu', 'Dokter', 'Jl. Contoh No. 4', 'Tidak Aktif', '', '08234567890', 2147483647, '2024-02-04 18:05:30'),
(5, 'Dummy Superce 3', 'Tempat Lahir 3', '1987-03-10', 'Laki-Laki', '', 'Buddha', 'Wiraswasta', 'Jl. Contoh No. 5', 'Dummy Pasangan 3', 'Tempat Lahir Pasanga', '1990-08-25', '', 'Islam', 'Pegawai Swasta', 'Jl. Contoh No. 6', 'Aktif', '', '08345678901', 2147483647, '2024-02-04 18:05:30'),
(6, 'Dummy Superce 4', 'Tempat Lahir 4', '1982-07-20', 'Perempuan', '', 'Hindu', 'PNS', 'Jl. Contoh No. 7', 'Dummy Pasangan 4', 'Tempat Lahir Pasanga', '1995-11-12', '', '', 'Wiraswasta', 'Jl. Contoh No. 8', 'Tidak Aktif', '', '08456789012', 2147483647, '2024-02-04 18:05:30'),
(7, 'Dummy Superce 5', 'Tempat Lahir 5', '1989-12-05', 'Laki-Laki', '', 'Islam', 'PNS', 'Jl. Contoh No. 9', 'Dummy Pasangan 5', 'Tempat Lahir Pasanga', '1993-04-18', '', 'Buddha', 'Pegawai Negeri', 'Jl. Contoh No. 10', 'Aktif', '', '08567890123', 2147483647, '2024-02-04 18:05:30'),
(8, 'Dummy Superce 6', 'Tempat Lahir 6', '1984-05-15', 'Perempuan', '', '', 'Wiraswasta', 'Jl. Contoh No. 11', 'Dummy Pasangan 6', 'Tempat Lahir Pasanga', '1997-09-30', '', 'Hindu', 'Dokter', 'Jl. Contoh No. 12', 'Aktif', '', '08678901234', 2147483647, '2024-02-04 18:05:30'),
(9, 'Dummy Superce 7', 'Tempat Lahir 7', '1986-09-25', 'Laki-Laki', '', 'Buddha', 'Wiraswasta', 'Jl. Contoh No. 13', 'Dummy Pasangan 7', 'Tempat Lahir Pasanga', '2000-02-05', '', 'Islam', 'Pegawai Swasta', 'Jl. Contoh No. 14', 'Tidak Aktif', '', '08789012345', 2147483647, '2024-02-04 18:05:30'),
(10, 'Dummy Superce 8', 'Tempat Lahir 8', '1991-01-30', 'Perempuan', '', 'Hindu', 'PNS', 'Jl. Contoh No. 15', 'Dummy Pasangan 8', 'Tempat Lahir Pasanga', '2003-06-20', '', '', 'Wiraswasta', 'Jl. Contoh No. 16', 'Aktif', '', '08890123456', 2147483647, '2024-02-04 18:05:30'),
(11, 'Dummy Superce 9', 'Tempat Lahir 9', '1994-04-18', 'Laki-Laki', '', 'Islam', 'PNS', 'Jl. Contoh No. 17', 'Dummy Pasangan 9', 'Tempat Lahir Pasanga', '2005-10-10', '', 'Buddha', 'Pegawai Negeri', 'Jl. Contoh No. 18', 'Tidak Aktif', '', '08901234567', 2147483647, '2024-02-04 18:05:30'),
(12, 'Dummy Superce 10', 'Tempat Lahir 10', '1997-07-05', 'Perempuan', '', '', 'Wiraswasta', 'Jl. Contoh No. 19', 'Dummy Pasangan 10', 'Tempat Lahir Pasanga', '2008-12-15', '', 'Hindu', 'Dokter', 'Jl. Contoh No. 20', 'Aktif', '', '09012345678', 2147483647, '2024-02-04 18:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `suratnikah`
--

CREATE TABLE `suratnikah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir1` varchar(20) NOT NULL,
  `tgl_lahir1` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `warga_negara` enum('WNI','WNA') NOT NULL,
  `agama1` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `pekerjaan1` varchar(50) NOT NULL,
  `status_perkawinan` enum('Belum Kawin','Cerai Mati','Cerai Hidup') DEFAULT NULL,
  `alamat1` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama_2` varchar(50) NOT NULL,
  `tempat_lahir2` varchar(20) NOT NULL,
  `tgl_lahir2` date NOT NULL,
  `agama2` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `pekerjaan2` varchar(50) NOT NULL,
  `alamat2` varchar(50) NOT NULL,
  `nama_3` varchar(50) NOT NULL,
  `tempat_lahir3` varchar(20) NOT NULL,
  `tgl_lahir3` date NOT NULL,
  `agama3` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `pekerjaan3` varchar(50) NOT NULL,
  `alamat3` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nik` int(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suratnikah`
--

INSERT INTO `suratnikah` (`id`, `nama`, `tempat_lahir1`, `tgl_lahir1`, `jenis_kelamin`, `warga_negara`, `agama1`, `pekerjaan1`, `status_perkawinan`, `alamat1`, `status`, `nama_2`, `tempat_lahir2`, `tgl_lahir2`, `agama2`, `pekerjaan2`, `alamat2`, `nama_3`, `tempat_lahir3`, `tgl_lahir3`, `agama3`, `pekerjaan3`, `alamat3`, `telp`, `nik`, `created_at`) VALUES
(3, 'imam dzikrilloh anwar', 'kebumen', '2023-11-30', 'Laki-Laki', 'WNI', 'Islam', 'tidak bekerja', 'Belum Kawin', 'sasak 2', 'diterima', 'belum juga nikah', 'belum tau', '2023-11-30', 'Islam', 'asdsad', 'fgerwwe', 'new ibu', 'asdasdaf', '2023-11-30', 'Islam', 'zasdfsa', 'sadsaf', '032156498789', 0, '2024-02-03 21:20:08'),
(4, 'kuwontol', 'asdsadsa', '2024-02-15', 'Laki-Laki', 'WNI', 'Islam', 'awdad', 'Belum Kawin', 'adsd', 'menunggu', 'dwadaa', 'asd', '2024-02-15', 'Islam', 'awd', 'sad', 'asdasdas', 'asdasda', '2024-02-15', 'Islam', 'asdasdas', 'adasdas', '23232', 0, '2024-02-03 21:20:08'),
(5, 'Dummy Suratnikah 1', 'Tempat Lahir 1', '1990-01-01', 'Laki-Laki', '', 'Islam', 'PNS', '', 'Jl. Contoh No. 1', 'Aktif', 'Dummy Pasangan 1', 'Tempat Lahir Pasanga', '1995-05-15', '', 'Wiraswasta', 'Jl. Contoh No. 2', 'Dummy Saksi 1', 'Tempat Lahir Saksi 1', '1992-06-20', 'Buddha', 'Wiraswasta', 'Jl. Contoh No. 3', '08123456789', 2147483647, '2024-02-04 18:06:48'),
(6, 'Dummy Suratnikah 2', 'Tempat Lahir 2', '1985-02-15', 'Perempuan', '', '', 'Wiraswasta', '', 'Jl. Contoh No. 4', 'Tidak Aktif', 'Dummy Pasangan 2', 'Tempat Lahir Pasanga', '1992-05-20', 'Hindu', 'Dokter', 'Jl. Contoh No. 5', 'Dummy Saksi 2', 'Tempat Lahir Saksi 2', '1990-10-25', 'Islam', 'Pegawai Swasta', 'Jl. Contoh No. 6', '08234567890', 2147483647, '2024-02-04 18:06:48'),
(7, 'Dummy Suratnikah 3', 'Tempat Lahir 3', '1987-03-10', 'Laki-Laki', '', 'Buddha', 'Wiraswasta', '', 'Jl. Contoh No. 7', 'Aktif', 'Dummy Pasangan 3', 'Tempat Lahir Pasanga', '1990-08-25', '', 'Wiraswasta', 'Jl. Contoh No. 8', 'Dummy Saksi 3', 'Tempat Lahir Saksi 3', '1993-02-15', 'Hindu', 'Dokter', 'Jl. Contoh No. 9', '08345678901', 2147483647, '2024-02-04 18:06:48'),
(8, 'Dummy Suratnikah 4', 'Tempat Lahir 4', '1982-07-20', 'Perempuan', '', 'Hindu', 'PNS', '', 'Jl. Contoh No. 10', 'Tidak Aktif', 'Dummy Pasangan 4', 'Tempat Lahir Pasanga', '1995-11-12', 'Islam', 'Pegawai Negeri', 'Jl. Contoh No. 11', 'Dummy Saksi 4', 'Tempat Lahir Saksi 4', '1994-04-18', 'Buddha', 'Wiraswasta', 'Jl. Contoh No. 12', '08456789012', 2147483647, '2024-02-04 18:06:48'),
(9, 'Dummy Suratnikah 5', 'Tempat Lahir 5', '1989-12-05', 'Laki-Laki', '', 'Islam', 'PNS', '', 'Jl. Contoh No. 13', 'Aktif', 'Dummy Pasangan 5', 'Tempat Lahir Pasanga', '1993-04-18', '', 'Wiraswasta', 'Jl. Contoh No. 14', 'Dummy Saksi 5', 'Tempat Lahir Saksi 5', '1997-09-30', 'Hindu', 'Dokter', 'Jl. Contoh No. 15', '08567890123', 2147483647, '2024-02-04 18:06:48'),
(10, 'Dummy Suratnikah 6', 'Tempat Lahir 6', '1984-05-15', 'Perempuan', '', '', 'Wiraswasta', '', 'Jl. Contoh No. 16', 'Aktif', 'Dummy Pasangan 6', 'Tempat Lahir Pasanga', '1997-09-30', 'Hindu', 'Dokter', 'Jl. Contoh No. 17', 'Dummy Saksi 6', 'Tempat Lahir Saksi 6', '1991-01-30', 'Buddha', 'Pegawai Swasta', 'Jl. Contoh No. 18', '08678901234', 2147483647, '2024-02-04 18:06:48'),
(11, 'Dummy Suratnikah 7', 'Tempat Lahir 7', '1986-09-25', 'Laki-Laki', '', 'Buddha', 'Wiraswasta', '', 'Jl. Contoh No. 19', 'Tidak Aktif', 'Dummy Pasangan 7', 'Tempat Lahir Pasanga', '2000-02-05', 'Islam', 'Pegawai Swasta', 'Jl. Contoh No. 20', 'Dummy Saksi 7', 'Tempat Lahir Saksi 7', '1995-05-15', '', 'Wiraswasta', 'Jl. Contoh No. 21', '08789012345', 2147483647, '2024-02-04 18:06:48'),
(12, 'Dummy Suratnikah 8', 'Tempat Lahir 8', '1991-01-30', 'Perempuan', '', 'Hindu', 'Dokter', '', 'Jl. Contoh No. 22', 'Aktif', 'Dummy Pasangan 8', 'Tempat Lahir Pasanga', '2002-07-20', 'Buddha', 'Pegawai Negeri', 'Jl. Contoh No. 23', 'Dummy Saksi 8', 'Tempat Lahir Saksi 8', '1994-04-18', 'Islam', 'Pegawai Swasta', 'Jl. Contoh No. 24', '08890123456', 2147483647, '2024-02-04 18:06:48'),
(13, 'Dummy Suratnikah 9', 'Tempat Lahir 9', '1993-04-18', 'Laki-Laki', '', 'Islam', 'Pegawai Negeri', '', 'Jl. Contoh No. 25', 'Tidak Aktif', 'Dummy Pasangan 9', 'Tempat Lahir Pasanga', '2005-12-05', '', 'Wiraswasta', 'Jl. Contoh No. 26', 'Dummy Saksi 9', 'Tempat Lahir Saksi 9', '2000-02-05', 'Hindu', 'Dokter', 'Jl. Contoh No. 27', '08901234567', 2147483647, '2024-02-04 18:06:48'),
(14, 'Dummy Suratnikah 10', 'Tempat Lahir 10', '1995-11-12', 'Perempuan', '', '', 'Pegawai Swasta', '', 'Jl. Contoh No. 28', 'Aktif', 'Dummy Pasangan 10', 'Tempat Lahir Pasanga', '2008-03-10', 'Hindu', 'Wiraswasta', 'Jl. Contoh No. 29', 'Dummy Saksi 10', 'Tempat Lahir Saksi 1', '2002-07-20', 'Buddha', 'Dokter', 'Jl. Contoh No. 30', '09012345678', 2147483647, '2024-02-04 18:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `suratusaha`
--

CREATE TABLE `suratusaha` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` int(16) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suratusaha`
--

INSERT INTO `suratusaha` (`id`, `nama`, `tgl_lahir`, `nik`, `pekerjaan`, `agama`, `alamat`, `telp`, `tempat_lahir`, `status`, `jenis_kelamin`, `created_at`) VALUES
(1, 'Nama1', '1990-01-01', 2147483647, 'Pekerjaan1', 'Islam', 'Alamat1', '08123456789', 'Tempat Lahir1', 'Status1', 'Laki-Laki', '2024-02-04 18:08:42'),
(2, 'Nama2', '1991-02-02', 2147483647, 'Pekerjaan2', '', 'Alamat2', '08123456788', 'Tempat Lahir2', 'Status2', 'Perempuan', '2024-02-04 18:08:42'),
(3, 'Nama3', '1992-03-03', 2147483647, 'Pekerjaan3', 'Hindu', 'Alamat3', '08123456787', 'Tempat Lahir3', 'Status3', 'Laki-Laki', '2024-02-04 18:08:42'),
(4, 'Nama4', '1993-04-04', 2147483647, 'Pekerjaan4', 'Buddha', 'Alamat4', '08123456786', 'Tempat Lahir4', 'Status4', 'Perempuan', '2024-02-04 18:08:42'),
(5, 'Nama5', '1994-05-05', 2147483647, 'Pekerjaan5', 'Konghucu', 'Alamat5', '08123456785', 'Tempat Lahir5', 'Status5', 'Laki-Laki', '2024-02-04 18:08:42'),
(6, 'Nama6', '1995-06-06', 2147483647, 'Pekerjaan6', 'Islam', 'Alamat6', '08123456784', 'Tempat Lahir6', 'Status6', 'Perempuan', '2024-02-04 18:08:42'),
(7, 'Nama7', '1996-07-07', 2147483647, 'Pekerjaan7', '', 'Alamat7', '08123456783', 'Tempat Lahir7', 'Status7', 'Laki-Laki', '2024-02-04 18:08:42'),
(8, 'Nama8', '1997-08-08', 2147483647, 'Pekerjaan8', 'Hindu', 'Alamat8', '08123456782', 'Tempat Lahir8', 'Status8', 'Perempuan', '2024-02-04 18:08:42'),
(9, 'Nama9', '1998-09-09', 2147483647, 'Pekerjaan9', 'Buddha', 'Alamat9', '08123456781', 'Tempat Lahir9', 'Status9', 'Laki-Laki', '2024-02-04 18:08:42'),
(10, 'Nama10', '1999-10-10', 2147483647, 'Pekerjaan10', 'Konghucu', 'Alamat10', '08123456780', 'Tempat Lahir10', 'Status10', 'Perempuan', '2024-02-04 18:08:42'),
(13, 'imam', '2023-12-23', 12421321, 'nganggur', 'Islam', '3tsadfsadsada', '091234781924712', 'kebumen', 'surat selesai', 'Laki-Laki', '2024-02-03 21:20:25'),
(14, 'imam', '2023-12-23', 12421321, 'nganggur', 'Islam', '3tsadfsadsada', '091234781924712', 'kebumen', 'menunggu', 'Laki-Laki', '2024-02-03 21:20:25'),
(15, 'kuwontol', '2024-02-22', 23232, 'asdas', 'Islam', 'asdasdas', '232', 'asdas', 'surat ditolak', 'Laki-Laki', '2024-02-03 21:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `email` varchar(128) NOT NULL,
  `sandi` varchar(99) NOT NULL,
  `level` varchar(18) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `sandi`, `level`, `created_at`) VALUES
(6477, 'adit@gmail.com', '321', 'warga', '2024-02-03 21:20:54'),
(6478, 'b@gmail.com', '123', 'warga', '2024-02-03 21:20:54'),
(6479, 'contoh@gmail.com', '321', 'warga', '2024-02-03 21:20:54'),
(6480, 'rt@gmail.com', '123', 'rt', '2024-02-03 21:20:54'),
(6481, 'wasu@gmail.com', '123', 'warga', '2024-02-03 21:30:59'),
(6482, 'anjengg@gmail.com', '123', 'warga', '2024-02-03 21:31:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sudoteti`
--
ALTER TABLE `sudoteti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superbeme`
--
ALTER TABLE `superbeme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superce`
--
ALTER TABLE `superce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratnikah`
--
ALTER TABLE `suratnikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratusaha`
--
ALTER TABLE `suratusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `sudoteti`
--
ALTER TABLE `sudoteti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `superbeme`
--
ALTER TABLE `superbeme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `superce`
--
ALTER TABLE `superce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suratnikah`
--
ALTER TABLE `suratnikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `suratusaha`
--
ALTER TABLE `suratusaha`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6483;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
