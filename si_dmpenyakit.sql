-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Bulan Mei 2020 pada 10.33
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_dmpenyakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_format_laporan`
--

CREATE TABLE `tb_format_laporan` (
  `id_upload` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_upload` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_format_laporan`
--

INSERT INTO `tb_format_laporan` (`id_upload`, `nama_file`, `keterangan`, `tgl_upload`) VALUES
(4, 'Format_Laporan_Terbaru.xlsx', 'Formayt Laporan Penyakit Terbaru', 'Tuesday, 21-May-19 20:12:');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_penyakit`
--

CREATE TABLE `tb_jenis_penyakit` (
  `id_jenis_penyakit` int(11) NOT NULL,
  `jenis_penyakit` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_penyakit`
--

INSERT INTO `tb_jenis_penyakit` (`id_jenis_penyakit`, `jenis_penyakit`) VALUES
(1, 'PTM (Penyakit Tidak Menular)'),
(2, 'PM (Penyakit Menular)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_penyakit`
--

CREATE TABLE `tb_kategori_penyakit` (
  `id_kategori_penyakit` int(11) NOT NULL,
  `id_jenis_penyakit` int(11) DEFAULT NULL,
  `kategori_penyakit` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_penyakit`
--

INSERT INTO `tb_kategori_penyakit` (`id_kategori_penyakit`, `id_jenis_penyakit`, `kategori_penyakit`) VALUES
(1, 2, 'Penyakit Menular Langsung'),
(2, 2, 'Penyakit Menular Bersumber Binatang'),
(3, 2, 'Penyakit Yang Dapat Dicegah Dengan Imunisasi dan Penyakit Menular Berpotensi Wabah (Kedaruratan Kesehatan Masyarakat)'),
(4, 1, 'Penyakit Tidak Menular');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nama_penyakit`
--

CREATE TABLE `tb_nama_penyakit` (
  `id_penyakit` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `umur` int(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_penyakit` varchar(50) DEFAULT NULL,
  `jenis_penyakit` enum('PTM','PM') DEFAULT NULL,
  `kategori_penyakit` text,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nama_penyakit`
--

INSERT INTO `tb_nama_penyakit` (`id_penyakit`, `nama_lengkap`, `jenis_kelamin`, `umur`, `tempat_lahir`, `tanggal_lahir`, `nama_penyakit`, `jenis_penyakit`, `kategori_penyakit`, `tanggal`) VALUES
('PNYKT001', 'Tes', 'L', 21, 'Makassar', '1998-01-01', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT002', 'Tes', 'P', 21, 'Makassar', '1998-01-01', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT003', 'Tes', 'L', 21, 'Makassar', '1998-01-01', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT004', 'Tes', 'P', 21, 'Makassar', '1998-01-01', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT005', 'Tes', 'L', 21, 'Makassar', '1998-01-01', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT006', 'Tes', 'L', 21, 'Makassar', '1998-01-01', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT007', 'Tes', 'P', 21, 'Makassar', '1998-01-01', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT008', 'Tes', 'L', 21, 'Makassar', '1998-01-01', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT009', 'Tes', 'P', 21, 'Makassar', '1998-01-01', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT010', 'Tes', 'L', 21, 'Makassar', '1998-01-01', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-01-01'),
('PNYKT011', 'Tes', 'L', 21, 'Makassar', '1998-02-02', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT012', 'Tes', 'P', 21, 'Makassar', '1998-02-02', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT013', 'Tes', 'L', 21, 'Makassar', '1998-02-02', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT014', 'Tes', 'P', 21, 'Makassar', '1998-02-02', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT015', 'Tes', 'L', 21, 'Makassar', '1998-02-02', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT016', 'Tes', 'L', 21, 'Makassar', '1998-02-02', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT017', 'Tes', 'P', 21, 'Makassar', '1998-02-02', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT018', 'Tes', 'L', 21, 'Makassar', '1998-02-02', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT019', 'Tes', 'P', 21, 'Makassar', '1998-02-02', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT020', 'Tes', 'L', 21, 'Makassar', '1998-02-02', 'Reumatoid', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-02-02'),
('PNYKT021', 'Tes', 'L', 21, 'Makassar', '1998-03-03', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT022', 'Tes', 'P', 21, 'Makassar', '1998-03-03', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT023', 'Tes', 'L', 21, 'Makassar', '1998-03-03', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT024', 'Tes', 'P', 21, 'Makassar', '1998-03-03', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT025', 'Tes', 'L', 21, 'Makassar', '1998-03-03', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT026', 'Tes', 'L', 21, 'Makassar', '1998-03-03', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT027', 'Tes', 'P', 21, 'Makassar', '1998-03-03', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT028', 'Tes', 'L', 21, 'Makassar', '1998-03-03', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT029', 'Tes', 'P', 21, 'Makassar', '1998-03-03', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT030', 'Tes', 'L', 21, 'Makassar', '1998-03-03', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-03-03'),
('PNYKT031', 'Tes', 'L', 21, 'Makassar', '1998-04-04', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT032', 'Tes', 'P', 21, 'Makassar', '1998-04-04', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT033', 'Tes', 'L', 21, 'Makassar', '1998-04-04', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT034', 'Tes', 'P', 21, 'Makassar', '1998-04-04', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT035', 'Tes', 'L', 21, 'Makassar', '1998-04-04', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT036', 'Tes', 'L', 21, 'Makassar', '1998-04-04', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT037', 'Tes', 'P', 21, 'Makassar', '1998-04-04', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT038', 'Tes', 'L', 21, 'Makassar', '1998-04-04', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT039', 'Tes', 'P', 21, 'Makassar', '1998-04-04', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT040', 'Tes', 'L', 21, 'Makassar', '1998-04-04', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-04-04'),
('PNYKT041', 'Tes', 'L', 21, 'Makassar', '1998-05-05', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT042', 'Tes', 'P', 21, 'Makassar', '1998-05-05', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT043', 'Tes', 'L', 21, 'Makassar', '1998-05-05', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT044', 'Tes', 'P', 21, 'Makassar', '1998-05-05', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT045', 'Tes', 'L', 21, 'Makassar', '1998-05-05', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT046', 'Tes', 'L', 21, 'Makassar', '1998-05-05', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT047', 'Tes', 'P', 21, 'Makassar', '1998-05-05', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT048', 'Tes', 'L', 21, 'Makassar', '1998-05-05', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT049', 'Tes', 'P', 21, 'Makassar', '1998-05-05', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT050', 'Tes', 'L', 21, 'Makassar', '1998-05-05', 'Vl_vulnus_laseratum', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-05-05'),
('PNYKT051', 'Tes', 'L', 20, 'Makassar', '1998-06-06', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT052', 'Tes', 'P', 20, 'Makassar', '1998-06-06', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT053', 'Tes', 'L', 20, 'Makassar', '1998-06-06', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT054', 'Tes', 'P', 20, 'Makassar', '1998-06-06', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT055', 'Tes', 'L', 20, 'Makassar', '1998-06-06', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT056', 'Tes', 'L', 20, 'Makassar', '1998-06-06', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT057', 'Tes', 'P', 20, 'Makassar', '1998-06-06', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT058', 'Tes', 'L', 20, 'Makassar', '1998-06-06', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT059', 'Tes', 'P', 20, 'Makassar', '1998-06-06', 'Asma', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT060', 'Tes', 'L', 20, 'Makassar', '1998-06-06', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-06-06'),
('PNYKT061', 'Tes', 'L', 20, 'Makassar', '1998-07-07', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT062', 'Tes', 'P', 20, 'Makassar', '1998-07-07', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT063', 'Tes', 'L', 20, 'Makassar', '1998-07-07', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT064', 'Tes', 'P', 20, 'Makassar', '1998-07-07', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT065', 'Tes', 'L', 20, 'Makassar', '1998-07-07', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT066', 'Tes', 'L', 20, 'Makassar', '1998-07-07', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT067', 'Tes', 'P', 20, 'Makassar', '1998-07-07', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT068', 'Tes', 'L', 20, 'Makassar', '1998-07-07', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT069', 'Tes', 'P', 20, 'Makassar', '1998-07-07', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT070', 'Tes', 'L', 20, 'Makassar', '1998-07-07', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-07-07'),
('PNYKT071', 'Tes', 'L', 20, 'Makassar', '1998-08-08', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT072', 'Tes', 'P', 20, 'Makassar', '1998-08-08', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT073', 'Tes', 'L', 20, 'Makassar', '1998-08-08', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT074', 'Tes', 'P', 20, 'Makassar', '1998-08-08', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT075', 'Tes', 'L', 20, 'Makassar', '1998-08-08', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT076', 'Tes', 'L', 20, 'Makassar', '1998-08-08', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT077', 'Tes', 'P', 20, 'Makassar', '1998-08-08', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT078', 'Tes', 'L', 20, 'Makassar', '1998-08-08', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT079', 'Tes', 'P', 20, 'Makassar', '1998-08-08', 'Bisul', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT080', 'Tes', 'L', 20, 'Makassar', '1998-08-08', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-08-08'),
('PNYKT081', 'Tes', 'L', 20, 'Makassar', '1998-09-09', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT082', 'Tes', 'P', 20, 'Makassar', '1998-09-09', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT083', 'Tes', 'L', 20, 'Makassar', '1998-09-09', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT084', 'Tes', 'P', 20, 'Makassar', '1998-09-09', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT085', 'Tes', 'L', 20, 'Makassar', '1998-09-09', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT086', 'Tes', 'L', 20, 'Makassar', '1998-09-09', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT087', 'Tes', 'P', 20, 'Makassar', '1998-09-09', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT088', 'Tes', 'L', 20, 'Makassar', '1998-09-09', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT089', 'Tes', 'P', 20, 'Makassar', '1998-09-09', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT090', 'Tes', 'L', 20, 'Makassar', '1998-09-09', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-09-09'),
('PNYKT091', 'Tes', 'L', 20, 'Makassar', '1998-10-10', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT092', 'Tes', 'P', 20, 'Makassar', '1998-10-10', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT093', 'Tes', 'L', 20, 'Makassar', '1998-10-10', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT094', 'Tes', 'P', 20, 'Makassar', '1998-10-10', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT095', 'Tes', 'L', 20, 'Makassar', '1998-10-10', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT096', 'Tes', 'L', 20, 'Makassar', '1998-10-10', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT097', 'Tes', 'P', 20, 'Makassar', '1998-10-10', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT098', 'Tes', 'L', 20, 'Makassar', '1998-10-10', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT099', 'Tes', 'P', 20, 'Makassar', '1998-10-10', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT100', 'Tes', 'L', 20, 'Makassar', '1998-10-10', 'Sakit_mata', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-10-10'),
('PNYKT101', 'Tes', 'L', 20, 'Makassar', '1998-11-11', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT102', 'Tes', 'P', 20, 'Makassar', '1998-11-11', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT103', 'Tes', 'L', 20, 'Makassar', '1998-11-11', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT104', 'Tes', 'P', 20, 'Makassar', '1998-11-11', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT105', 'Tes', 'L', 20, 'Makassar', '1998-11-11', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT106', 'Tes', 'L', 20, 'Makassar', '1998-11-11', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT107', 'Tes', 'P', 20, 'Makassar', '1998-11-11', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT108', 'Tes', 'L', 20, 'Makassar', '1998-11-11', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT109', 'Tes', 'P', 20, 'Makassar', '1998-11-11', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT110', 'Tes', 'L', 20, 'Makassar', '1998-11-11', 'Sakit_mata', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-11-11'),
('PNYKT111', 'Tes', 'L', 20, 'Makassar', '1998-12-12', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT112', 'Tes', 'P', 20, 'Makassar', '1998-12-12', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT113', 'Tes', 'L', 20, 'Makassar', '1998-12-12', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT114', 'Tes', 'P', 20, 'Makassar', '1998-12-12', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT115', 'Tes', 'L', 20, 'Makassar', '1998-12-12', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT116', 'Tes', 'L', 20, 'Makassar', '1998-12-12', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT117', 'Tes', 'P', 20, 'Makassar', '1998-12-12', 'Vl_vulnus_laseratum', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT118', 'Tes', 'L', 20, 'Makassar', '1998-12-12', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT119', 'Tes', 'P', 20, 'Makassar', '1998-12-12', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT120', 'Tes', 'L', 20, 'Makassar', '1998-12-12', 'Reumatoid', 'PTM', 'Penyakit Menular Bersumber Binatang', '2018-12-12'),
('PNYKT121', 'Tes', 'L', 2, 'Makassar', '2017-01-01', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT122', 'Tes', 'P', 2, 'Makassar', '2017-01-01', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT123', 'Tes', 'L', 2, 'Makassar', '2017-01-01', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT124', 'Tes', 'P', 2, 'Makassar', '2017-01-01', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT125', 'Tes', 'L', 2, 'Makassar', '2017-01-01', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT126', 'Tes', 'L', 2, 'Makassar', '2017-01-01', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT127', 'Tes', 'P', 2, 'Makassar', '2017-01-01', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT128', 'Tes', 'L', 2, 'Makassar', '2017-01-01', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT129', 'Tes', 'P', 2, 'Makassar', '2017-01-01', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT130', 'Tes', 'L', 2, 'Makassar', '2017-01-01', 'Dispepsia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-01'),
('PNYKT131', 'Tes', 'L', 2, 'Makassar', '2017-02-02', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT132', 'Tes', 'P', 2, 'Makassar', '2017-02-02', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT133', 'Tes', 'L', 2, 'Makassar', '2017-02-02', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT134', 'Tes', 'P', 2, 'Makassar', '2017-02-02', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT135', 'Tes', 'L', 2, 'Makassar', '2017-02-02', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT136', 'Tes', 'L', 2, 'Makassar', '2017-02-02', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT137', 'Tes', 'P', 2, 'Makassar', '2017-02-02', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT138', 'Tes', 'L', 2, 'Makassar', '2017-02-02', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT139', 'Tes', 'P', 2, 'Makassar', '2017-02-02', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT140', 'Tes', 'L', 2, 'Makassar', '2017-02-02', 'Malas_makan', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-02-02'),
('PNYKT141', 'Tes', 'L', 2, 'Makassar', '2017-03-03', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT142', 'Tes', 'P', 2, 'Makassar', '2017-03-03', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT143', 'Tes', 'L', 2, 'Makassar', '2017-03-03', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT144', 'Tes', 'P', 2, 'Makassar', '2017-03-03', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT145', 'Tes', 'L', 2, 'Makassar', '2017-03-03', 'Abses', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT146', 'Tes', 'L', 2, 'Makassar', '2017-03-03', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT147', 'Tes', 'P', 2, 'Makassar', '2017-03-03', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT148', 'Tes', 'L', 2, 'Makassar', '2017-03-03', 'Dispepsia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT149', 'Tes', 'P', 2, 'Makassar', '2017-03-03', 'Asma', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT150', 'Tes', 'L', 2, 'Makassar', '2017-03-03', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-03-03'),
('PNYKT151', 'Tes', 'L', 2, 'Makassar', '2017-04-04', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT152', 'Tes', 'P', 2, 'Makassar', '2017-04-04', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT153', 'Tes', 'L', 2, 'Makassar', '2017-04-04', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT154', 'Tes', 'P', 2, 'Makassar', '2017-04-04', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT155', 'Tes', 'L', 2, 'Makassar', '2017-04-04', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT156', 'Tes', 'L', 2, 'Makassar', '2017-04-04', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT157', 'Tes', 'P', 2, 'Makassar', '2017-04-04', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT158', 'Tes', 'L', 2, 'Makassar', '2017-04-04', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT159', 'Tes', 'P', 2, 'Makassar', '2017-04-04', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT160', 'Tes', 'L', 2, 'Makassar', '2017-04-04', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-04-04'),
('PNYKT161', 'Tes', 'L', 2, 'Makassar', '2017-05-05', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT162', 'Tes', 'P', 2, 'Makassar', '2017-05-05', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT163', 'Tes', 'L', 2, 'Makassar', '2017-05-05', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT164', 'Tes', 'P', 2, 'Makassar', '2017-05-05', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT165', 'Tes', 'L', 2, 'Makassar', '2017-05-05', 'Reumatoid', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT166', 'Tes', 'L', 2, 'Makassar', '2017-05-05', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT167', 'Tes', 'P', 2, 'Makassar', '2017-05-05', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT168', 'Tes', 'L', 2, 'Makassar', '2017-05-05', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT169', 'Tes', 'P', 2, 'Makassar', '2017-05-05', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT170', 'Tes', 'L', 2, 'Makassar', '2017-05-05', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-05-05'),
('PNYKT171', 'Tes', 'L', 1, 'Makassar', '2017-06-06', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT172', 'Tes', 'P', 1, 'Makassar', '2017-06-06', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT173', 'Tes', 'L', 1, 'Makassar', '2017-06-06', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT174', 'Tes', 'P', 1, 'Makassar', '2017-06-06', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT175', 'Tes', 'L', 1, 'Makassar', '2017-06-06', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT176', 'Tes', 'L', 1, 'Makassar', '2017-06-06', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT177', 'Tes', 'P', 1, 'Makassar', '2017-06-06', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT178', 'Tes', 'L', 1, 'Makassar', '2017-06-06', 'Sakit_mata', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT179', 'Tes', 'P', 1, 'Makassar', '2017-06-06', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT180', 'Tes', 'L', 1, 'Makassar', '2017-06-06', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-06-06'),
('PNYKT181', 'Tes', 'L', 1, 'Makassar', '2017-07-07', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT182', 'Tes', 'P', 1, 'Makassar', '2017-07-07', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT183', 'Tes', 'L', 1, 'Makassar', '2017-07-07', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT184', 'Tes', 'P', 1, 'Makassar', '2017-07-07', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT185', 'Tes', 'L', 1, 'Makassar', '2017-07-07', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT186', 'Tes', 'L', 1, 'Makassar', '2017-07-07', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT187', 'Tes', 'P', 1, 'Makassar', '2017-07-07', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT188', 'Tes', 'L', 1, 'Makassar', '2017-07-07', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT189', 'Tes', 'P', 1, 'Makassar', '2017-07-07', 'Vulnus_ictum', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT190', 'Tes', 'L', 1, 'Makassar', '2017-07-07', 'Asma', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-07-07'),
('PNYKT191', 'Tes', 'L', 1, 'Makassar', '2017-08-08', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT192', 'Tes', 'P', 1, 'Makassar', '2017-08-08', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT193', 'Tes', 'L', 1, 'Makassar', '2017-08-08', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT194', 'Tes', 'P', 1, 'Makassar', '2017-08-08', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT195', 'Tes', 'L', 1, 'Makassar', '2017-08-08', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT196', 'Tes', 'L', 1, 'Makassar', '2017-08-08', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT197', 'Tes', 'P', 1, 'Makassar', '2017-08-08', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT198', 'Tes', 'L', 1, 'Makassar', '2017-08-08', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT199', 'Tes', 'P', 1, 'Makassar', '2017-08-08', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT200', 'Tes', 'L', 1, 'Makassar', '2017-08-08', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-08-08'),
('PNYKT201', 'Tes', 'L', 1, 'Makassar', '2017-09-09', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT202', 'Tes', 'P', 1, 'Makassar', '2017-09-09', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT203', 'Tes', 'L', 1, 'Makassar', '2017-09-09', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT204', 'Tes', 'P', 1, 'Makassar', '2017-09-09', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT205', 'Tes', 'L', 1, 'Makassar', '2017-09-09', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT206', 'Tes', 'L', 1, 'Makassar', '2017-09-09', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT207', 'Tes', 'P', 1, 'Makassar', '2017-09-09', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT208', 'Tes', 'L', 1, 'Makassar', '2017-09-09', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT209', 'Tes', 'P', 1, 'Makassar', '2017-09-09', 'Post_vulnus_ictum', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT210', 'Tes', 'L', 1, 'Makassar', '2017-09-09', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-09-09'),
('PNYKT211', 'Tes', 'L', 2, 'Makassar', '2017-01-10', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT212', 'Tes', 'P', 2, 'Makassar', '2017-01-10', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT213', 'Tes', 'L', 2, 'Makassar', '2017-01-10', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT214', 'Tes', 'P', 2, 'Makassar', '2017-01-10', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT215', 'Tes', 'L', 2, 'Makassar', '2017-01-10', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT216', 'Tes', 'L', 2, 'Makassar', '2017-01-10', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT217', 'Tes', 'P', 2, 'Makassar', '2017-01-10', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT218', 'Tes', 'L', 2, 'Makassar', '2017-01-10', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT219', 'Tes', 'P', 2, 'Makassar', '2017-01-10', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT220', 'Tes', 'L', 2, 'Makassar', '2017-01-10', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-10'),
('PNYKT221', 'Tes', 'L', 2, 'Makassar', '2017-01-11', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT222', 'Tes', 'P', 2, 'Makassar', '2017-01-11', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT223', 'Tes', 'L', 2, 'Makassar', '2017-01-11', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT224', 'Tes', 'P', 2, 'Makassar', '2017-01-11', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT225', 'Tes', 'L', 2, 'Makassar', '2017-01-11', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT226', 'Tes', 'L', 2, 'Makassar', '2017-01-11', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT227', 'Tes', 'P', 2, 'Makassar', '2017-01-11', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT228', 'Tes', 'L', 2, 'Makassar', '2017-01-11', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT229', 'Tes', 'P', 2, 'Makassar', '2017-01-11', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT230', 'Tes', 'L', 2, 'Makassar', '2017-01-11', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-11'),
('PNYKT231', 'Tes', 'L', 2, 'Makassar', '2017-01-12', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT232', 'Tes', 'P', 2, 'Makassar', '2017-01-12', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT233', 'Tes', 'L', 2, 'Makassar', '2017-01-12', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT234', 'Tes', 'P', 2, 'Makassar', '2017-01-12', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT235', 'Tes', 'L', 2, 'Makassar', '2017-01-12', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT236', 'Tes', 'L', 2, 'Makassar', '2017-01-12', 'Hipertermi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT237', 'Tes', 'P', 2, 'Makassar', '2017-01-12', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT238', 'Tes', 'L', 2, 'Makassar', '2017-01-12', 'Hipotensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT239', 'Tes', 'P', 2, 'Makassar', '2017-01-12', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT240', 'Tes', 'L', 2, 'Makassar', '2017-01-12', 'Asma', 'PTM', 'Penyakit Menular Bersumber Binatang', '2017-01-12'),
('PNYKT241', 'Tes', 'L', 3, 'Makassar', '2016-01-06', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT242', 'Tes', 'P', 3, 'Makassar', '2016-01-06', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT243', 'Tes', 'L', 3, 'Makassar', '2016-01-06', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT244', 'Tes', 'P', 3, 'Makassar', '2016-01-06', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT245', 'Tes', 'L', 3, 'Makassar', '2016-01-06', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT246', 'Tes', 'L', 3, 'Makassar', '2016-01-06', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT247', 'Tes', 'P', 3, 'Makassar', '2016-01-06', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT248', 'Tes', 'L', 3, 'Makassar', '2016-01-06', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT249', 'Tes', 'P', 3, 'Makassar', '2016-01-06', 'Asma', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT250', 'Tes', 'L', 3, 'Makassar', '2016-01-06', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-06'),
('PNYKT251', 'Tes', 'L', 3, 'Makassar', '2016-01-08', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT252', 'Tes', 'P', 3, 'Makassar', '2016-01-08', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT253', 'Tes', 'L', 3, 'Makassar', '2016-01-08', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT254', 'Tes', 'P', 3, 'Makassar', '2016-01-08', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT255', 'Tes', 'L', 3, 'Makassar', '2016-01-08', 'Reumatoid', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT256', 'Tes', 'L', 3, 'Makassar', '2016-01-08', 'Common_could', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT257', 'Tes', 'P', 3, 'Makassar', '2016-01-08', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT258', 'Tes', 'L', 3, 'Makassar', '2016-01-08', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT259', 'Tes', 'P', 3, 'Makassar', '2016-01-08', 'Abses', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT260', 'Tes', 'L', 3, 'Makassar', '2016-01-08', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-08'),
('PNYKT261', 'Tes', 'L', 3, 'Makassar', '2016-01-09', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT262', 'Tes', 'P', 3, 'Makassar', '2016-01-09', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT263', 'Tes', 'L', 3, 'Makassar', '2016-01-09', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT264', 'Tes', 'P', 3, 'Makassar', '2016-01-09', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT265', 'Tes', 'L', 3, 'Makassar', '2016-01-09', 'Common_could', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT266', 'Tes', 'L', 3, 'Makassar', '2016-01-09', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT267', 'Tes', 'P', 3, 'Makassar', '2016-01-09', 'Sakit_gigi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT268', 'Tes', 'L', 3, 'Makassar', '2016-01-09', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT269', 'Tes', 'P', 3, 'Makassar', '2016-01-09', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT270', 'Tes', 'L', 3, 'Makassar', '2016-01-09', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-09'),
('PNYKT271', 'Tes', 'L', 3, 'Makassar', '2016-01-10', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT272', 'Tes', 'P', 3, 'Makassar', '2016-01-10', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT273', 'Tes', 'L', 3, 'Makassar', '2016-01-10', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT274', 'Tes', 'P', 3, 'Makassar', '2016-01-10', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT275', 'Tes', 'L', 3, 'Makassar', '2016-01-10', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT276', 'Tes', 'L', 3, 'Makassar', '2016-01-10', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT277', 'Tes', 'P', 3, 'Makassar', '2016-01-10', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT278', 'Tes', 'L', 3, 'Makassar', '2016-01-10', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT279', 'Tes', 'P', 3, 'Makassar', '2016-01-10', 'Abses', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT280', 'Tes', 'L', 3, 'Makassar', '2016-01-10', 'Common_could', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-10'),
('PNYKT281', 'Tes', 'L', 3, 'Makassar', '2016-01-11', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT282', 'Tes', 'P', 3, 'Makassar', '2016-01-11', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT283', 'Tes', 'L', 3, 'Makassar', '2016-01-11', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT284', 'Tes', 'P', 3, 'Makassar', '2016-01-11', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT285', 'Tes', 'L', 3, 'Makassar', '2016-01-11', 'Hipertensi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT286', 'Tes', 'L', 3, 'Makassar', '2016-01-11', 'Rematik', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT287', 'Tes', 'P', 3, 'Makassar', '2016-01-11', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT288', 'Tes', 'L', 3, 'Makassar', '2016-01-11', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT289', 'Tes', 'P', 3, 'Makassar', '2016-01-11', 'Common_could', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT290', 'Tes', 'L', 3, 'Makassar', '2016-01-11', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-11'),
('PNYKT291', 'Tes', 'L', 3, 'Makassar', '2016-01-12', 'Gastritis', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT292', 'Tes', 'P', 3, 'Makassar', '2016-01-12', 'Batuk', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT293', 'Tes', 'L', 3, 'Makassar', '2016-01-12', 'Myalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT294', 'Tes', 'P', 3, 'Makassar', '2016-01-12', 'Demam', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT295', 'Tes', 'L', 3, 'Makassar', '2016-01-12', 'Sariawan', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT296', 'Tes', 'L', 3, 'Makassar', '2016-01-12', 'Cepalgia', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT297', 'Tes', 'P', 3, 'Makassar', '2016-01-12', 'Alergi', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT298', 'Tes', 'L', 3, 'Makassar', '2016-01-12', 'Diare', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT299', 'Tes', 'P', 3, 'Makassar', '2016-01-12', 'Influenza', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT300', 'Tes', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT302', 'Alan Saputra Lengkoan', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT303', 'Marcelino Derry Utomo', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT304', 'Deni Wibowo', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT305', 'Desi Simon', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT306', 'Karlina', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT307', 'Basry Tutar', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT310', 'Alan Saputra Lengkoan', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT311', 'Marcelino Derry Utomo', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT312', 'Deni Wibowo', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT313', 'Desi Simon', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT314', 'Karlina', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT315', 'Basry Tutar', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT317', 'Alan Saputra Lengkoan', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT318', 'Marcelino Derry Utomo', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT319', 'Deni Wibowo', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT320', 'Desi Simon', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT321', 'Karlina', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT322', 'Basry Tutar', 'L', 3, 'Makassar', '2016-01-12', 'Nyeri_dada', 'PTM', 'Penyakit Menular Bersumber Binatang', '2016-01-12'),
('PNYKT323', 'Alan Saputra Lengkoan', 'L', 21, 'Polmas', '1998-03-26', 'Asma', 'PTM', 'Penyakit Tidak Menular', '2019-05-24'),
('PNYKT324', 'Alan Saputra Lengkoan', 'L', 21, 'Mamasa', '1998-03-26', 'Batuk', 'PTM', 'Penyakit Tidak Menular', '2019-06-16'),
('PNYKT325', 'Test', 'L', 19, 'Test', '2000-02-12', 'Asma', 'PTM', 'Penyakit Tidak Menular', '2018-02-22'),
('PNYKT326', 'George', 'L', 19, 'Bulukumba', '2000-12-12', 'Gastritis', 'PM', 'Penyakit Menular Langsung', '2018-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `jenis_penyakit` enum('PTM','PM') NOT NULL,
  `kategori_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `jenis_penyakit`, `kategori_penyakit`) VALUES
(5, 'Alergi', 'PTM', 'Penyakit Tidak Menular'),
(6, 'Asma', 'PTM', 'Penyakit Tidak Menular'),
(7, 'Batuk', 'PTM', 'Penyakit Tidak Menular'),
(8, 'Bisul', 'PTM', 'Penyakit Tidak Menular'),
(9, 'Cepalgia', 'PTM', 'Penyakit Tidak Menular'),
(10, 'Demam', 'PTM', 'Penyakit Tidak Menular'),
(11, 'Diare', 'PTM', 'Penyakit Tidak Menular'),
(12, 'Gastritis', 'PM', 'Penyakit Menular Langsung'),
(13, 'Hipertensi', 'PTM', 'Penyakit Tidak Menular'),
(14, 'Hipertermi', 'PTM', 'Penyakit Tidak Menular'),
(15, 'Hipotensi', 'PTM', 'Penyakit Tidak Menular'),
(16, 'Influenza', 'PTM', 'Penyakit Tidak Menular'),
(17, 'Myalgia', 'PTM', 'Penyakit Tidak Menular'),
(18, 'Rematik', 'PTM', 'Penyakit Tidak Menular'),
(19, 'Reumatoid', 'PM', 'Penyakit Menular Langsung'),
(20, 'Sakit_mata', 'PTM', 'Penyakit Tidak Menular'),
(21, 'Vulnus_laseratum', 'PM', 'Penyakit Menular Bersumber Binatang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `no_tlp`, `username`, `passname`, `password`, `level`) VALUES
(1, 'Alan Saputra Lengkoan', 'alanlengkoan15@gmail.com', '085242907595', 'admin', 'admin', '$2y$10$en.0NMK8HL90uqYPJe6zruCSC.lnktTl9d4hw6FSGMSgQ0EfTsDMy', 'admin'),
(2, 'Putri Ningsi', 'putriningsi@gmail.com', '081212121212', 'putriningsi', 'putriningsii', '$2y$10$D4evy/svEy1BkRSTarHrFubt1Y0lFu56SzOT44dZiEHUbCUf/AAfC', 'pustu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_format_laporan`
--
ALTER TABLE `tb_format_laporan`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indeks untuk tabel `tb_jenis_penyakit`
--
ALTER TABLE `tb_jenis_penyakit`
  ADD PRIMARY KEY (`id_jenis_penyakit`);

--
-- Indeks untuk tabel `tb_kategori_penyakit`
--
ALTER TABLE `tb_kategori_penyakit`
  ADD PRIMARY KEY (`id_kategori_penyakit`);

--
-- Indeks untuk tabel `tb_nama_penyakit`
--
ALTER TABLE `tb_nama_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_format_laporan`
--
ALTER TABLE `tb_format_laporan`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_penyakit`
--
ALTER TABLE `tb_jenis_penyakit`
  MODIFY `id_jenis_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_penyakit`
--
ALTER TABLE `tb_kategori_penyakit`
  MODIFY `id_kategori_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
