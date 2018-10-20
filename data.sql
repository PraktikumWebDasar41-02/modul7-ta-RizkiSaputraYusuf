-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.10
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `Nama` varchar(35) NOT NULL,
  `Nim` bigint(20) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Jk` text NOT NULL,
  `Prodi` varchar(15) NOT NULL,
  `fakul` text NOT NULL,
  `asal` text NOT NULL,
  `moto_hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`Nama`, `Nim`, `Tgl_Lahir`, `Jk`, `Prodi`, `fakul`, `asal`, `moto_hidup`) VALUES
('rizki', 6745645, '2018-10-19', 'Pria', 'Akuntansi', 'FIT', 'medan', 'sdfsdf'),
('rizki', 6701172133, '2018-10-19', 'Pria', 'MBTI', 'FIT', 'bandung', 'aasdasdasdasd'),
('rizki saputra', 6701172133, '2018-10-19', 'Pria', 'Akuntansi', 'FIK', 'jakarta', 'asddassd'),
('rizki saputra', 6701172133, '2018-10-19', 'Pria', 'Akuntansi', 'FIK', 'jakarta', 'asddassd'),
('rizki', 6701172133, '2018-10-19', 'Pria', 'MBTI', 'FIT', 'bandung', 'aasdasdasdasd'),
('pebri', 670117257, '2018-01-19', 'Pria', 'Teknik Informat', 'FIT', 'bali', 'sdaSAsaS'),
('pebri', 670117257, '2018-01-19', 'Pria', 'Teknik Informat', 'FIT', 'bali', 'sdaSAsaS'),
('ERNA', 6702123123, '2018-10-19', 'Wanita', 'Teknik Informat', 'FIK', 'aSAs', ''),
('ERNA', 6702123123, '2018-10-19', 'Wanita', 'Teknik Informat', 'FIK', 'aSAs', ''),
('pebri', 670117257, '2018-01-19', 'Pria', 'Teknik Informat', 'FIT', 'bali', 'sdaSAsaS'),
('ERNA', 6745645, '2018-06-19', 'Pria', 'Akuntansi', 'FIK', 'asdasdasd', 'ASDASDASDASDASD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
