-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2021 pada 10.59
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelaporan_sampah_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun_kecamatan`
--

CREATE TABLE `tb_akun_kecamatan` (
  `id_akun_kecamatan` int(11) NOT NULL,
  `nama_akun_kecamatan` varchar(255) NOT NULL,
  `username_akun_kecamatan` varchar(255) NOT NULL,
  `password_akun_kecamatan` varchar(255) NOT NULL,
  `foto_akun_kecamatan` varchar(255) NOT NULL,
  `status_akun_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun_kecamatan`
--

INSERT INTO `tb_akun_kecamatan` (`id_akun_kecamatan`, `nama_akun_kecamatan`, `username_akun_kecamatan`, `password_akun_kecamatan`, `foto_akun_kecamatan`, `status_akun_kecamatan`) VALUES
(1, 'Admin', 'admin', '$2y$10$dw3996inoENCYr7ppG4V0eEtk9fB3WuSxPtUjEnz7gJm7F65rPa/i', 'image_1606559137.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun_kelurahan`
--

CREATE TABLE `tb_akun_kelurahan` (
  `id_akun_kelurahan` int(11) NOT NULL,
  `nama_akun_kelurahan` varchar(255) NOT NULL,
  `username_akun_kelurahan` varchar(255) NOT NULL,
  `password_akun_kelurahan` varchar(255) NOT NULL,
  `foto_akun_kelurahan` varchar(255) NOT NULL,
  `kelurahan_akun_kelurahan` varchar(255) NOT NULL,
  `status_akun_kelurahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun_kelurahan`
--

INSERT INTO `tb_akun_kelurahan` (`id_akun_kelurahan`, `nama_akun_kelurahan`, `username_akun_kelurahan`, `password_akun_kelurahan`, `foto_akun_kelurahan`, `kelurahan_akun_kelurahan`, `status_akun_kelurahan`) VALUES
(3, 'Hildayanti', 'hilda', '$2y$10$65Np6W9Exj7IyNEylDwOTujWXSUcmg4W/xWcRdKYM.VR5nCT2IZVC', 'image_1606559229.jpg', 'Mangasa', 'Aktif'),
(5, 'hide', 'hide', '$2y$10$drIPQawNlJJuZK1BIjI7W.CgwjKh5jxoJIpRmNxcXhRap5ujqWgUW', 'image_1610455733.PNG', 'Balang Baru', 'Aktif'),
(6, 'pipita', 'pipita', '$2y$10$MH3EKD5N0LSRKA0./Z7u9OazUs4xojW6XFFziawRsz.9u4Z11E8TO', 'image_1613558931.png', 'Balang Baru', 'Aktif'),
(7, 'dilla', 'dilla', '$2y$10$pJJKpCHLDHdoyi8mXBtPEOp7KAtTIYCNW9blN6vhUvLxv7zHdz.1u', 'image_1613559062.jpg', 'Barombong', 'Aktif'),
(9, 'nure', 'nure', '$2y$10$DTF6yQ7KNY1o4QOsSgHDAOfHX9QX7YXhbGmKGE2Qmr3gxcr2Mavkm', 'image_1613559197.png', 'Bongaya', 'Aktif'),
(10, 'jepon', 'jepon', '$2y$10$GhOpxFaTGZp6GN6jNxLoLulP1Sg4q76/u/f8bZeKkGn6s5ExcFXru', 'image_1613559237.png', 'Bonto Duri', 'Aktif'),
(11, 'vita', 'vita', '$2y$10$3nKxDfpJJ8L/4aCCIZtICuvfO520bM/IcVc4DQdyZblwFsWcB4.kW', 'image_1613559283.png', 'Jongaya', 'Aktif'),
(12, 'rise', 'rise', '$2y$10$PAiDuHKejWkAkSjUn7G3r.QIza.DuHvJlJzPdYDnRdjTQCSEA46u6', 'image_1613559331.png', 'Maccini Sombala', 'Aktif'),
(13, 'naya', 'naya', '$2y$10$eLDH6.8v.oRtMXn7On.jwed48HMds.89Xtevzz2lbIwaUzG3wRRIK', 'image_1613559414.png', 'Tanjung Merdeka', 'Aktif'),
(14, 'sugi', 'sugi', '$2y$10$ZDa33ApbVqsqrXdiMrtMkO1aimPYbgMlaPMIziDzche3v9ahA//qG', 'image_1613559467.png', 'Parang Tambung', 'Aktif'),
(15, 'adriyan', 'adriyan', '$2y$10$3tGWd6TSju9cTcT1coZt6eES/quu06h.wT4uv9FY4aH.L4/UtYU2u', 'image_1613559742.png', 'Mannuruki', 'Aktif'),
(16, 'farel', 'farel', '$2y$10$jcJwL9sJto1pjM5zgjL4.eYm3E7iTSropcpfNgZK5xq57Rjy4qTq.', 'image_1613560188.png', 'Barombong', 'Aktif'),
(17, 'sul', 'sul', '$2y$10$tbI2PKDLPBp9II9o/snxVOLCT3w.poGE2jIufSXXAh8lw7DJG4IjW', 'image_1613560309.png', 'Pabaeng-Baeng', 'Aktif'),
(18, 'Syamsul', 'syamsul', '$2y$10$Hn2NmwzgLEZlhkOsSezTfuyYxwjm8gSLfXbcC44Mc8wEWAAu9LpxW', 'image_1613569092.jpg', 'Mangasa', 'Aktif'),
(19, 'Didi', 'didi', '$2y$10$z1ZnL169.YK0i2cURv0ou.MC4.Y1lTIA6CNrj61dFXEUA57izoHW2', 'image_1613569148.jpg', 'Manuruki', 'Aktif'),
(20, 'Haeruddin', 'haeruddin', '$2y$10$.TXvod.wq2gON9PpTqtoYulv3q8m3OMNzVsCIiZH8V3nmO.Jg4aA6', 'image_1613569203.jpg', 'Bonto Duri', 'Aktif'),
(21, 'Iis', 'iis', '$2y$10$tkL.qu2aHRJOFdPCpN64p.6r06PXRDeUeWu3vgwoqQD6CjFpf6Mr2', 'image_1613569275.jpg', 'Pabaeng-Baeng', 'Aktif'),
(22, 'Iccang', 'iccang', '$2y$10$sC5Ie4Gp96OGWYw9qTO7hugC42w9NRUL.fLe7Zgbqku2j9HRbESzy', 'image_1613569320.jpg', 'Parang Tambung', 'Aktif'),
(23, 'Ahmad', 'ahmad', '$2y$10$.WmEg/hZwUkQQ8rRL/nee.QXGMjInJqSN6876KNOQ.C2a6Ws8O/F6', 'image_1613569375.jpg', 'Bongaya', 'Aktif'),
(24, 'Tata', 'tata', '$2y$10$5m8PvRCT2VGhF1deEBRIDej1Uq5xsn1b/UoBAHfO9vcyQbGbAuUJe', 'image_1613569421.jpg', 'Jongaya', 'Aktif'),
(25, 'Naim', 'naim', '$2y$10$6ZuP4hUMtni3fJEPkS8X4.eiPT7r0t5MLFF9wYm675Ut2oAb5/WuC', 'image_1613569456.jpg', 'Maccini Sombala', 'Aktif'),
(26, 'Rustan', 'rustan', '$2y$10$X/wtxAH0ZC1RBVqp3d4qAeVXGdvOXHct1.KFAuFAYzPAfoxWDqzC.', 'image_1613569513.jpg', 'Tanjung Merdeka', 'Aktif'),
(27, 'Ilham', 'ilham', '$2y$10$uv/8toz9eOvqXI2cMQ5HXOTEd7YCVthvceFmnMT/NWF8e/yQtJvjy', 'image_1613569661.jpg', 'Barombong', 'Aktif'),
(28, 'Usman', 'usman', '$2y$10$hp9QrnsHtRMuxklyHvcyu.JqHgxhVYU5SD4BKAhFrI8iT7vaPU0UG', 'image_1613569719.jpg', 'Balang Baru', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_area`
--

CREATE TABLE `tb_area` (
  `id_area` int(11) NOT NULL,
  `nama_area` varchar(255) NOT NULL,
  `kelurahan_area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_area`
--

INSERT INTO `tb_area` (`id_area`, `nama_area`, `kelurahan_area`) VALUES
(1, 'Poros Sultan Alauddin - Jalan Malengkeri Luar', 'Mangasa'),
(2, 'Poros Sultan Alauddin - Jalan Sultan Alauddin 2 lr 1', 'Mangasa'),
(3, 'Poros Malengkeri - Jalan Mamoa IV', 'Mangasa'),
(4, 'RW.06', 'Manuruki'),
(5, 'RW.07', 'Manuruki'),
(6, 'RW.03\r\n', 'Manuruki'),
(7, 'RW 02', 'Balang Baru'),
(8, 'RW 05', 'Balang Baru'),
(9, 'RW 09', 'Balang Baru'),
(10, 'RW 01', 'Parang Tambung'),
(12, 'RW 02', 'Parang Tambung'),
(13, 'RW 03', 'Parang Tambung'),
(14, 'Jl. Bonto Duri 7 - Jl. Bonto Duri 3 - Jl. Bonto Duri 2', 'Pabaeng-Baeng'),
(15, ' Jl. Alauddin 1 RT 01/ RW 03 -  Kanal Alauddin - Sekolah SD Jongaya', 'Pabaeng-Baeng'),
(16, 'Jl. Andi Tonro 3 - Sebelah kiri Jl. Andi Tonro 4', 'Pabaeng-Baeng'),
(17, 'Jl. Gontang Raya', 'Tanjung Merdeka'),
(18, 'Jl. Bayang', 'Tanjung Merdeka'),
(19, 'Jl. Gontang Barat', 'Tanjung Merdeka'),
(20, 'Jl. Danau Tanjung - Jl. Manunggal 31 - Jl. Deppa Sawi Dalam', 'Maccini Sombala'),
(21, 'Jl. Manunggal 22 - Jll. Flamboyan - Jl. Telaga Utama', 'Maccini Sombala'),
(22, 'Jl. Metro Tanjung Bunga - Jl. Metro ', 'Maccini Sombala'),
(23, 'Jl. INSPEKSI KANAL JONGAYA - KOMPLEKS KUMALA PERMAI Rt.001 & Rt.002/ Rw.003 \r\n', 'Jongaya'),
(24, 'POROS Jl. MAPPAODANG  - ANDI TONRO PENDEK  & ASRAMA RATA - TAMA Rw. 009\r\n', 'Jongaya'),
(25, 'KUMALA PERMAI Rt.003,Rt.004 /Rw.003 - JL. MUH. TAHIR / VILA PERMATA \r\n', 'Jongaya'),
(26, 'KOMPLEK JONGAYA INDAH RW.014 - JL. MUH TAHIR LR.V - JL. DG. NGEPPE RT.001,02 /RW.001\r\n', 'Jongaya'),
(27, 'POROS JL. KUMALA  ,-MALLOMBASSANG TOWN HOUSE  \r\n', 'Jongaya'),
(28, 'RW. 011 JL.MAPPAODANG KO. PERWIRA - RW. 012  ASRAMA KODAM JL. BAJI GAU \r\n', 'Jongaya'),
(29, 'RW. 006 LR. ANAK SEKOLAHAN - KO. MAPPAODANG TOWN HOUSE-KO. GRIYA MAPPAODANG  JL. DG. NGEPPE RW. 008\r\n', 'Jongaya'),
(30, 'KO.GRIYA PENA MAS RT.004-RW.005/KO. GRIYA KUMALA HARAPAN Rt.003/RW.004 - JL. MALLOMBASSANG\r\n', 'Jongaya'),
(31, 'Jl. ANDI TONRO 5 RW.013 - RW. 005 JL. KUMAlA LR.2B  - RW. 004  JL. KUMALA II SELATAN \r\n', 'Jongaya'),
(32, 'Jl. ANDI TONRO - Jl. MAPPAODANG - JL. KUMALA \r\n', 'Jongaya'),
(33, 'Jl. ANDI TONRO - JL. KUMALA -  JL. MUH. TAHIR  \r\n', 'Jongaya'),
(34, 'RW.08', 'Manuruki'),
(35, 'RW.04', 'Manuruki'),
(36, 'Poros Mannuruki Raya', 'Manuruki'),
(37, 'RW. 01\r\n', 'Manuruki'),
(38, 'RW. 02', 'Manuruki'),
(39, 'RW. 05', 'Manuruki'),
(40, 'Poros S. Alauddin AP. Pettarani\r\n', 'Manuruki'),
(41, 'Poros S. Alauddin - AP. Pettarani - Bonto-Bonto', 'Manuruki'),
(42, 'JL.Kampung Lette', 'Tanjung Merdeka'),
(43, 'JL. Ibrahim Sultan Dg.Tutu', 'Tanjung Merdeka'),
(44, 'Pantai Bayang - Pantai Angin Mammiri\r\n', 'Tanjung Merdeka'),
(45, 'Sekolah SD Bontang - Bayang', 'Tanjung Merdeka'),
(46, 'Rt 01- Rt 02- Rt 03- Rt 04- Rt 05- Rt 07- Rw 02', 'Bonto Duri'),
(47, 'Rt 03- Rt 04- Rt 05- Rt 06 Bontoduri VI', 'Bonto Duri'),
(48, 'Daeng Tata Raya- Rt 01- Rt 02- Rt 03/Rw 03', 'Bonto Duri'),
(49, 'Jalan Daeng tata 1\r\n', 'Bonto Duri'),
(50, 'Rw 04 Tabaria', 'Bonto Duri'),
(51, 'Rw 05 Tabaria', 'Bonto Duri'),
(52, 'Rt 06- Rt 07- Rt 01', 'Bonto Duri'),
(53, 'Rt 01- Rt 02- Rt 03- Rt 04- Rt 05- Rt 06', 'Bonto Duri'),
(54, 'Pasar Bontoduri', 'Bonto Duri'),
(55, 'RW 04', 'Balang Baru'),
(56, 'RW 07\r\n', 'Balang Baru'),
(57, 'RW 06', 'Balang Baru'),
(58, 'RW 08 - RW 10', 'Balang Baru'),
(59, 'RW 01', 'Balang Baru'),
(60, 'Poros Balang Baru', 'Balang Baru'),
(61, 'Poros Balang Baru - RS Haji', 'Balang Baru'),
(62, 'Sebelah Kanan Poros Andi Tonro 4 - Pondok Indah - Jl. Andi Tonro 5', 'Pabaeng-Baeng'),
(63, 'Kanal Pasar Pabaeng-baeng - Lorong Samping Kanal RT.03 RW.03 - Andi Tonro 4 Lr.5c', 'Pabaeng-Baeng'),
(64, 'Jl. Poros Alauddin - Jl. Poros Andi Tonro - Jl. Poros Kumala', 'Pabaeng-Baeng'),
(65, 'Jl. Andi Tonro 2 Stapak 4, 5, 6, 7, 8 - Jl. Poros Andi Tonro 2 - Perumahan Kenari Andi Tonro 2', 'Pabaeng-Baeng'),
(66, 'Jl. Andi Tonro 1 & 2 - Jl. Bonto Duri 1 & 2 -  Perumahan Griya Harapan Bonto Duri 1 - Jl. Puskesmas Jongaya', 'Pabaeng-Baeng'),
(67, 'Jl. Kumala II - Jl. Merdeka - Jl. Makmur', 'Pabaeng-Baeng'),
(68, 'Bonto Manai - Bonto Mangape - Bonto Ramba - Bonto Tangnga - Bonto Nompo - Alauddin I - Jl. Poros Alauddin', 'Pabaeng-Baeng'),
(69, 'Perumahan Griya Harapan Andi Tonro 4 - Perumahan Puri Andi Tonro 4 - Jl. Andi Tonro 4 Lr.A', 'Pabaeng-Baeng'),
(70, 'Jl. A.Mangerangi Pendel RT. 02- JL. A. Mappaoddang RW. 05. rw. 07, JL. Baji Ati 1  rw 08. Jl, Jl. A. Mangerangi -JL. Pemuda rw 10\r\n', 'Bongaya'),
(71, 'Poros Mappaoddang  RT, 02 RW. 02, Poros Mangerangi- RW 04, Jl. A. Mangerangi Lr. 08 , : Jl.  Baji Gau RT. 02- Poros Baji Gau \r\n', 'Bongaya'),
(72, 'Poros Mappaoddang, Jl. A. Amngerangi Lr. Buntu, Kompl. BPKP.- Jl. Pemuda RW. 11, Kompl. RRI Lama\r\n', 'Bongaya'),
(73, ' Poros A. Mangerangi Pendek RT. 02\"- Jl. A. Mangerangi 1 RT. 06, RT. 01 RW. 10, Jl. A, Mngerangi 2 RT. 3, 4 RW. 10,- Jl. Baji Gau 2 RT. 1 & 2\r\n', 'Bongaya'),
(74, 'Poros. A. Mangerangi - Poros A. Amngerangi 1, RW. 09 - RW 06- Poros Mangerangi 3\r\n', 'Bongaya'),
(75, 'RRI LAMA DAN Jl. Kumala- Jl. Bhayangkara- Mappaoddang - A. Mangerangi Pendek \r\n', 'Bongaya'),
(76, 'Jl. Mappaoddang- RT. 1, 2, 3< Kompl Bongaya Permai- Kompl. Aspol Bongaya- Depan Kantor Lurah \r\n', 'Bongaya'),
(77, 'Poros Kumala- Jl. Bhayangkara- Poros Mappaoddang- Poros Baji Gau- Poror Baji Ima- Poros A. Amngerangi 2- Poros A. Mangerangi  Kembali Poros Mappaoddang- Poros A. Tonro Pendek- Kembali  Kumala Stand bye(Pagi}\r\n', 'Bongaya'),
(78, 'Poros Kumala- Jl. Bhayangkara- Poros Mappaoddang- Poros Baji Gau- Poror Baji Ima- Poros A. Amngerangi 1- Poros A. Mangerangi  Kembali Poros Mappaoddang- Poros A. Tonro Pendek- Kembali  Kumala Stand bye(Pagi}\r\n', 'Bongaya'),
(79, 'RW 04', 'Parang Tambung'),
(80, 'RW 09', 'Parang Tambung'),
(81, 'RW 07', 'Parang Tambung'),
(82, 'Parantambung', 'Parang Tambung'),
(83, 'Poros Sultan Alauddin - Jalan Mamoa V', 'Mangasa'),
(84, 'Poros Sultan Alauddin - Jalan Manuruki 2 ', 'Mangasa'),
(85, 'Poros Sultan Alauddin - Jalan Pabentengan Raya', 'Mangasa'),
(86, 'Poros Sultan Alauddin - Jalan Pabentengan 1/2', 'Mangasa'),
(87, 'Poros Malengkeri - DG Tata Lama', 'Mangasa'),
(88, 'Poros Malengkeri - Jalan Sultan Alauddin 3', 'Mangasa'),
(89, 'Poros Malengkeri - Jl. Malengkeri 3', 'Mangasa'),
(90, 'Poros Sultan Alauddin - Jl. Sultan Alauddin 2', 'Mangasa'),
(91, 'Poros Malengkeri - Jalan Malengkeri 1', 'Mangasa'),
(92, 'Poros Malengkeri - Jalan Bouldozer', 'Mangasa'),
(93, 'sassasa', 'Mangasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `penulis_berita` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `foto_berita`, `penulis_berita`, `created_at`, `update_at`) VALUES
(1, 'Bangun Taman Hijau dan Fokus Kebersihan Jadi Komitmen Kecamatan Tamalate Makassar', 'Pemerintahan Kecamatan Tamalate, dengan rutin melaksanakan program penertiban dan kebersihan wilayah. Agar menjadikan kota Makassar menjadi bersih dan warga peduli akan lingkungan masing-masing.', 'image_1619796995.png', 'Santoso', '2020-12-24 17:53:59', '0000-00-00 00:00:00'),
(2, 'Kerja Bakti Kelurahan Mangasa', 'Petugas Kebersihan Kelurahan Mangasa mengadakan Kerja Bakti bersama Masyarakat Setempat. Banyak Sekitar Pukul 07.00 masyarakat Kelurahan Magasa Sudah Melakukan Persiapan untuk pelaksanaan kerja bakti. ', 'image_1615117920.png', 'Hildayanti', '2021-03-07 11:52:00', '0000-00-00 00:00:00'),
(3, 'Bayar Sampah Taâ€™', ' Kepala seksi pengelolaan kebersihan kecamatan Tamalate Muhammad Syamsul Gafur menghimbau kepada warga masyarakat yang menikmati layanan penjemputan sampah agar memiliki bukti pembayaran berupa karcis resmi dari pemerintah.', 'image_1619795398.PNG', 'azwar bahar', '2021-04-30 15:09:58', '0000-00-00 00:00:00'),
(4, 'Urgensi Kebersihan Di Kecamatan Tamalate', 'Kebersihan masih menjadi masalah utama di wilayah  Kecamatan Tamalate. Oleh sebab itu, Camat Tamalate Fahyuddin Yusuf, melaksanakan rapat Kordinasi terhadap lurah se-Kecamatan Tamalate, di kantornya', 'image_1619795934.PNG', 'H Gunadi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Plt Camat Tamalate Harapkan Koordinator Perketat Pengawasan Kebersihan', 'pelaksana tugas camat Tamalate menginstruksikan kepada seluruh pengawas untuk sigap serta memperketat pengawasan terhadap segala aktifitas kebersihan diwilayah kerja mereka masing-masing', 'image_1619798442.PNG', 'Jurnalis Warga', '2021-04-30 16:00:42', '0000-00-00 00:00:00'),
(6, 'Kelurahan Mannuruki Gotong Royong Bersihkan Pohon Tumbang di Wilayahnya', 'Sesuai Dengan Arahan Walikota Makassar Kepada dinas atau instansi di lingkup pemkot, maupaun Camat dan Lurah untuk selalu pro-aktif serta siaga setiap saat akibat cuaca buruk,â€ imbaunya.', 'image_1619798715.PNG', 'Zoelfikar', '2021-04-30 16:05:15', '0000-00-00 00:00:00'),
(7, 'Berantas Sarang Nyamuk, APT & Hotel Claro Fogging Rumah Warga ', 'Chief Development Officer Phinisi Hospotality Indonesia Andre Prasetyo Tanta (APT) bersama manajemen Hotel Claro Makassar menggelar aksi peduli lingkungan di Jl Bontosunggu, Kelurahan Mannuruki, Kecamatan Tamalate.', 'image_1619799046.PNG', 'Muhammad Abdiwan', '2021-04-30 16:10:46', '0000-00-00 00:00:00'),
(8, 'Antisipasi Banjir, Warga Jl Manunggal 22 Makassar Gotong Royong Bersihkan Saluran Air  ', ' Mengantisipasi adanya genangan hingga banjir, warga Jl Manunggal 22 RT.11 Kelurahan Maccini Sombala, Kecamatan Tamalate, Makassar, kompak melakukan aksi Gotong Royong atau kerja bakti.', 'image_1619799405.PNG', 'Muslimin Emba', '2021-04-30 16:16:45', '0000-00-00 00:00:00'),
(9, 'Suporter Red Gank Makassar Kerja Bakti Bersama Warga Maccini Sombala', 'Dalam Rangka Hari Jadi ke-13 Tahun Suporter kreatif Red Gank Makassar, sekitar 200 orang Suporter Red Gank sektor Maccini Sombala melakukan kerja bakti massal bersama warga di ORW. 05 Kelurahan Maccini Sombala Kecamatan Tamalate Kota Makassar', 'image_1619799608.PNG', 'Sulastri', '2021-04-30 16:20:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_edukasi`
--

CREATE TABLE `tb_edukasi` (
  `id_edukasi` int(11) NOT NULL,
  `judul_edukasi` varchar(255) NOT NULL,
  `foto_edukasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_edukasi`
--

INSERT INTO `tb_edukasi` (`id_edukasi`, `judul_edukasi`, `foto_edukasi`) VALUES
(1, 'Cuci Tangan', 'image_1608774903.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `kode_kendaraan` varchar(255) NOT NULL,
  `nama_kendaraan` varchar(255) NOT NULL,
  `type_kendaraan` varchar(255) NOT NULL,
  `nomor_kendaraan` varchar(255) NOT NULL,
  `kondisi_kendaraan` varchar(255) NOT NULL,
  `kelurahan_kendaraan` varchar(255) NOT NULL,
  `status_kendaraan` varchar(255) NOT NULL,
  `foto_kendaraan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id_kendaraan`, `kode_kendaraan`, `nama_kendaraan`, `type_kendaraan`, `nomor_kendaraan`, `kondisi_kendaraan`, `kelurahan_kendaraan`, `status_kendaraan`, `foto_kendaraan`) VALUES
(1, 'KD-K001', 'Yamaha', 'Roda 3', 'DD 2020 XY', 'Baik', 'Mangasa', 'Aktif', 'image_1613571962.jpg'),
(3, 'KD-K002', 'Honda', 'Roda 4+', 'DD 4343 XD', 'Baik', 'Mangasa', 'Aktif', 'image_1613572028.jpg'),
(4, 'KD-K004', 'Astrea', 'Roda 2', 'DD 4040 XY', 'Baik', 'Mangasa', 'Aktif', 'image_1613572048.jpg'),
(5, 'KD-K005', 'Viar', 'Roda 3', 'DD 2953 MB', 'Baik', 'Balang Baru', 'Aktif', 'image_1619712530.jpeg'),
(6, 'KD-K006', 'Viar', 'Roda 3', 'DD 6948 MW', 'Baik', 'Manuruki', 'Aktif', 'image_1618332581.jpeg'),
(7, 'KD-K007', 'Viar', 'Roda 3', 'DD 2041 XX', 'Baik', 'Manuruki', 'Aktif', 'image_1618332651.jpeg'),
(11, 'KD-K008', 'Tongkang', 'Roda 4+', 'DD 9643 AB', 'Baik', 'Manuruki', 'Aktif', 'image_1618332767.jpeg'),
(12, 'KD-K0012', 'Viar', 'Roda 3', 'DD 4243 UW', 'Baik', 'Balang Baru', 'Aktif', 'image_1619711670.jpeg'),
(13, 'KD-K0013', 'Viar', 'Roda 3', 'DD 6869 MY', 'Baik', 'Balang Baru', 'Aktif', 'image_1619712057.jpeg'),
(14, 'KD-K0014', 'Viar', 'Roda 3', 'DD 6937 MJ', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619936205.jpeg'),
(15, 'KD-K0015', 'Viar', 'Roda 4+', 'DD 6994 MW', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619936265.jpeg'),
(16, 'KD-K0016', 'Viar', 'Roda 3', 'DD 6854 IP', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619936313.jpeg'),
(17, 'KD-K0017', 'Tongkang', 'Roda 4+', 'DD 0098 SC', 'Baik', 'Pabaeng-Baeng', 'Aktif', 'image_1619751553.jpeg'),
(18, 'KD-K0018', 'Tongkang', 'Roda 4+', 'DD 5676 DI', 'Baik', 'Pabaeng-Baeng', 'Aktif', 'image_1613740302.jpg'),
(19, 'KD-K0019', 'Viar', 'Roda 2', 'DD 3546 SC', 'Baik', 'Pabaeng-Baeng', 'Aktif', 'image_1613740362.jpg'),
(20, 'KD-K0020', 'Tongkang', 'Roda 4+', 'DD 8232 AJ', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685642.jpeg'),
(21, 'KD-K0021', 'Viar', 'Roda 3', 'DD 6047 MA', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685690.jpeg'),
(22, 'KD-K0022', 'Viar', 'Roda 3', 'DD 5167 XY', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685736.jpeg'),
(23, 'KD-K0023', 'Hino', 'Roda 4+', 'DD 7876 FG', 'Baik', 'Maccini Sombala', 'Aktif', 'image_1613745947.jpg'),
(24, 'KD-K0024', 'Yamaha', 'Roda 3', 'DD 6754  DL', 'Baik', 'Maccini Sombala', 'Aktif', 'image_1613745975.jpg'),
(25, 'KD-K0025', 'Suzuki', 'Roda 3', 'DD 8908  DL', 'Baik', 'Maccini Sombala', 'Aktif', 'image_1613746001.jpg'),
(26, 'KD-K0026', 'Viar', 'Roda 3', 'DD 6979 IW', 'Baik', 'Manuruki', 'Aktif', 'image_1618332834.jpeg'),
(27, 'KD-K0027', 'Compaktor', 'Roda 4+', 'DD 8834 SG', 'Baik', 'Manuruki', 'Aktif', 'image_1618332920.jpeg'),
(28, 'KD-K0028', 'Viar', 'Roda 3', 'DD 5831 XY', 'Baik', 'Manuruki', 'Aktif', 'image_1618333020.jpeg'),
(29, 'KD-K0029', 'Viar', 'Roda 3', 'DD 6976 IW', 'Baik', 'Jongaya', 'Aktif', 'image_1618853457.jpeg'),
(30, 'KD-K0030', 'Viar', 'Roda 3', 'DD 6851 IP', 'Baik', 'Jongaya', 'Aktif', 'image_1618853580.jpg'),
(31, 'KD-K0031', 'Viar', 'Roda 3', 'DD 6904 MY', 'Baik', 'Jongaya', 'Aktif', 'image_1618853613.jpeg'),
(32, 'KD-K0032', 'Viar', 'Roda 3', 'DD 6854 MY', 'Baik', 'Jongaya', 'Aktif', 'image_1618853650.jpeg'),
(33, 'KD-K0033', 'Viar', 'Roda 3', 'DD 5665 XY', 'Baik', 'Jongaya', 'Aktif', 'image_1618853686.jpeg'),
(34, 'KD-K0034', 'Viar', 'Roda 3', 'DD 3437 RC', 'Baik', 'Jongaya', 'Aktif', 'image_1618853716.jpeg'),
(35, 'KD-K0035', 'Viar', 'Roda 3', 'DD 5610 XY', 'Baik', 'Jongaya', 'Aktif', 'image_1618853838.jpg'),
(36, 'KD-K0036', 'Viar', 'Roda 3', 'DD 6843 XT', 'Baik', 'Jongaya', 'Aktif', 'image_1618853886.jpeg'),
(37, 'KD-K0037', 'Viar', 'Roda 3', 'DD 3387MC', 'Baik', 'Jongaya', 'Aktif', 'image_1618853924.jpeg'),
(38, 'KD-K0038', 'Viar', 'Roda 3', 'DD 2699 XY', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685777.jpeg'),
(39, 'KD-K0039', 'Viar', 'Roda 3', 'DD 5377 XY', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685808.jpeg'),
(40, 'KD-K0040', 'Viar', 'Roda 3', 'DD 2698 XY', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685847.jpeg'),
(41, 'KD-K0041', 'Viar', 'Roda 3', 'DD 6257 XY', 'Baik', 'Tanjung Merdeka', 'Aktif', 'image_1619685887.jpeg'),
(42, 'KD-K0042', 'Viar', 'Roda 3', 'DD 6982 IW', 'Baik', 'Balang Baru', 'Aktif', 'image_1619713124.jpeg'),
(43, 'KD-K0043', 'Viar', 'Roda 3', 'DD 6818 OA', 'Baik', 'Balang Baru', 'Aktif', 'image_1619713511.jpeg'),
(44, 'KD-K0044', 'Viar', 'Roda 3', 'DD 6067 MA', 'Baik', 'Balang Baru', 'Aktif', 'image_1619713916.jpeg'),
(45, 'KD-K0045', 'Viar', 'Roda 3', 'DD 6860 MY', 'Baik', 'Balang Baru', 'Aktif', 'image_1619714388.jpeg'),
(46, 'KD-K0046', 'Viar', 'Roda 3', 'DD 6837 XT', 'Baik', 'Balang Baru', 'Aktif', 'image_1619714990.jpeg'),
(47, 'KD-K0047', 'Tangkasaki', 'Roda 4+', 'DD 4545 XT', 'Baik', 'Balang Baru', 'Aktif', 'image_1619715840.jpeg'),
(48, 'KD-K0048', 'Tangkasaki', 'Roda 4+', 'DD 2022 XY', 'Baik', 'Balang Baru', 'Aktif', 'image_1619715820.jpeg'),
(49, 'KD-K0049', 'Viar', 'Roda 3', 'DD 6855 MY', 'Baik', 'Bongaya', 'Aktif', 'image_1619800854.jpeg'),
(50, 'KD-K0050', 'Tangkasaki', 'Roda 4+', 'DD 8491RR', 'Baik', 'Bongaya', 'Aktif', 'image_1619801362.jpeg'),
(51, 'KD-K0051', 'Tangkasaki', 'Roda 4+', 'DD 8311 AC', 'Baik', 'Bongaya', 'Aktif', 'image_1619802452.jpeg'),
(52, 'KD-K0052', 'Viar', 'Roda 3', 'DD 2034 XX', 'Baik', 'Bongaya', 'Aktif', 'image_1619802521.jpeg'),
(53, 'KD-K0053', 'Viar', 'Roda 3', 'DD 6958 IW', 'Baik', 'Bongaya', 'Aktif', 'image_1619802550.jpeg'),
(54, 'KD-K0054', 'Viar', 'Roda 3', 'DD 3108 RC', 'Baik', 'Bongaya', 'Aktif', 'image_1619802577.jpeg'),
(55, 'KD-K0055', 'Viar', 'Roda 3', 'DD 5835 XY', 'Baik', 'Bongaya', 'Aktif', 'image_1619802609.PNG'),
(56, 'KD-K0056', 'Viar', 'Roda 3', 'DD 6819 QA', 'Baik', 'Bongaya', 'Aktif', 'image_1619802635.PNG'),
(57, 'KD-K0057', 'Viar', 'Roda 3', 'DD 8309 AJ', 'Baik', 'Bongaya', 'Aktif', 'image_1619802669.PNG'),
(58, 'KD-K0058', 'Viar', 'Roda 3', 'DD 6953 IW', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619936416.jpeg'),
(59, 'KD-K0059', 'Viar', 'Roda 3', 'DD 6817 MY', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619936449.jpeg'),
(60, 'KD-K0060', 'Viar', 'Roda 3', 'DD 6998 MW', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619936481.jpeg'),
(61, 'KD-K0061', 'Tangkasaki', 'Roda 4+', 'DD 8396 KY', 'Baik', 'Parang Tambung', 'Aktif', 'image_1619965881.jpeg'),
(62, 'KD-K0062', 'Viar', 'Roda 3', 'DD 2627 XY', 'Baik', 'Mangasa', 'Aktif', 'image_1622432306.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(11) NOT NULL,
  `keterangan_laporan` varchar(255) NOT NULL,
  `foto_laporan` varchar(255) NOT NULL,
  `latitude_laporan` varchar(255) NOT NULL,
  `longitude_laporan` varchar(255) NOT NULL,
  `alamat_laporan` varchar(255) NOT NULL,
  `nik_laporan` varchar(255) NOT NULL,
  `kelurahan_laporan` varchar(255) NOT NULL,
  `area_laporan` varchar(255) NOT NULL,
  `petugas_id` varchar(255) NOT NULL,
  `masyarakat_id` varchar(255) NOT NULL,
  `staus_laporan` varchar(255) NOT NULL,
  `foto_tindakan_laporan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `keterangan_laporan`, `foto_laporan`, `latitude_laporan`, `longitude_laporan`, `alamat_laporan`, `nik_laporan`, `kelurahan_laporan`, `area_laporan`, `petugas_id`, `masyarakat_id`, `staus_laporan`, `foto_tindakan_laporan`, `created_at`, `update_at`) VALUES
(3, 'Coba', 'image_1615238144.png', '-5.179274116978435', '119.43230163305999', 'alamatnya', 'niknya', 'Mangasa', '2', '-', '1', 'New', '', '2021-03-08 21:15:44', '2021-03-08 21:15:44'),
(4, 'Coba galeri', 'image_1615238171.png', '-5.179274116978435', '119.43230163305999', 'alamatnya', 'niknya', 'Mangasa', '2', '-', '1', 'New', '', '2021-03-08 21:16:11', '2021-03-08 21:16:11'),
(5, 'sampah saya tidak diambil', 'image_1615718268.png', '-5.179274116978435', '119.43230163305999', 'Lrg. 3C No.62B, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '098765456789', 'Mangasa', '2', '2', '2', 'Done', 'img_default.png', '2021-03-14 10:37:48', '2021-03-14 10:37:48'),
(21, 'Sampah belum di ambil', 'image_1616926326.png', '-5.181212445500349', '119.43197406828405', 'Jl. Mamoa Baru No.8, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '456789876', 'Mangasa', '1', '-', '22', 'Cancel', '', '2021-03-28 10:12:06', '2021-03-28 10:12:06'),
(27, 'Laporrr', 'image_1619626770.png', '-5.181570726762134', '119.43182487040758', 'Jl. Mamoa Baru No.3, RT.002/RW.10, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '1234567890', 'Mangasa', '1', '1', '1', 'Done', 'img_default.png', '2021-04-28 16:19:30', '2021-05-17 23:53:53'),
(28, 'Sudah 3 hari belum di ambil \n', 'image_1622274054.png', '-5.172565551153855', '119.41438011825086', 'Jl. Baji Gau Asrama Staf Kodam No.24, RT.001/RW.27, Jongaya, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90223, Indonesia', '7371100808700006', 'Bongaya', '77', '41', '28', 'Done', 'img_default.png', '2021-05-29 07:40:54', '2021-05-29 08:13:02'),
(29, 'Sudah 3 hati belum di ambil', 'image_1622435263.png', '-5.179241727975899', '119.43245753645897', 'Lrg. 3C No.62B, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '7371100906700005', 'Mangasa', '3', '-', '32', 'New', '', '2021-05-31 04:27:43', '2021-05-31 04:27:43'),
(30, 'Jemput sampah disini! ', 'image_1622636278.png', '-5.188526952581031', '119.4153158739209', 'Jl. Dg. Ngadde 2, Parang Tambung, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '00137686701', 'Balang Baru', '8', '-', '9', 'New', 'img_default.png', '2021-06-02 12:17:58', '2021-06-02 13:13:07'),
(31, 'Fgjg', 'image_1624204291.png', '-5.179274116978435', '119.43230163305999', 'Lrg. 3C No.62B, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '098765456789', 'Mangasa', '3', '-', '2', 'New', '', '2021-06-20 15:51:31', '2021-06-20 15:51:31'),
(32, 'Ajja', 'image_1625042154.png', '-5.179241727975899', '119.43245753645897', 'Lrg. 3C No.62B, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '7371100906700005', 'Mangasa', '3', '-', '32', 'New', '', '2021-06-30 08:35:54', '2021-06-30 08:35:54'),
(33, 'Ambil sampah', 'image_1625043182.png', '-5.175306284865029', '119.42979611456394', 'Jl. Mannuruki Raya No.20, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '7371100708791001', 'Manuruki', '36', '-', '25', 'New', '', '2021-06-30 08:53:02', '2021-06-30 08:53:02'),
(34, 'Ass', 'image_1625043807.png', '-5.176760792231258', '119.42904140800238', 'Jl. Mannuruki Raya No.31 A, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '7371100108700002', 'Manuruki', '37', '3', '26', 'Done', 'img_default.png', '2021-06-30 09:03:27', '2021-06-30 09:50:16'),
(35, 'Sdf', 'image_1625052914.png', '-5.176760792231258', '119.42904140800238', 'Jl. Mannuruki Raya No.31 A, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '7371100108700002', 'Manuruki', '37', '3', '26', 'Done', 'img_default.png', '2021-06-30 11:35:14', '2021-06-30 11:40:39'),
(36, 'Aaa', 'image_1625226959.png', '-5.173553926277901', '119.41576581448317', 'Jl. Andi Mappaodang No.61D, Jongaya, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90223, Indonesia', '7371100808700006', 'Bongaya', '77', '-', '28', 'New', '', '2021-07-02 11:55:59', '2021-07-02 11:55:59'),
(37, 'Tolongbsampah saya di jemput yaa ', 'image_1629889679.png', '-5.168584988283993', '119.41715016961098', 'Jl. Andi Mangerangi No.24, Bongaya, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90133, Indonesia', '7371100806500003', 'Bongaya', '70', '-', '33', 'New', '', '2021-08-25 11:07:59', '2021-08-25 11:07:59'),
(38, 'Aaaa', 'image_1629890738.png', '-5.173553926277901', '119.41576581448317', 'Jl. Andi Mappaodang No.61D, Jongaya, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90223, Indonesia', '7371100808700006', 'Bongaya', '77', '-', '28', 'New', '', '2021-08-25 11:25:38', '2021-08-25 11:25:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan_petugas`
--

CREATE TABLE `tb_laporan_petugas` (
  `id_laporan_petugas` int(11) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `id_koordinator` varchar(255) NOT NULL,
  `id_petugas` varchar(255) NOT NULL,
  `berat_sampah` varchar(255) NOT NULL,
  `foto_bukti` varchar(255) NOT NULL,
  `latitude_sampah` varchar(255) NOT NULL,
  `longitude_sampah` varchar(255) NOT NULL,
  `alamat_sampah` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `crated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_laporan_petugas`
--

INSERT INTO `tb_laporan_petugas` (`id_laporan_petugas`, `kelurahan`, `id_koordinator`, `id_petugas`, `berat_sampah`, `foto_bukti`, `latitude_sampah`, `longitude_sampah`, `alamat_sampah`, `keterangan`, `tanggal`, `crated_at`, `update_at`) VALUES
(2, 'Mangasa', '21', '5', '1000', 'image_1620686310.png', '-5.20885485', '119.4556209', 'Jl. Malino No.11, Tompobalang, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92111, Indonesia', '', '2021-05-15', '2021-05-10 22:38:30', '2021-05-10 22:38:30'),
(3, 'Mangasa', '21', '1', '1111', 'image_1620686649.png', '-5.20891731', '119.4555834', 'Jl. Malino No.11, Tompobalang, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92111, Indonesia', 'Test ket', '2021-05-11', '2021-05-10 22:44:09', '2021-05-10 22:44:09'),
(4, 'Mangasa', '21', '1', '1111', 'image_1620686904.png', '-5.20891731', '119.4555834', 'Jl. Malino No.11, Tompobalang, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92111, Indonesia', 'Test ket', '2021-05-11', '2021-05-10 22:48:24', '2021-05-10 22:48:24'),
(5, 'Mangasa', '21', '1', '1111', 'image_1620686905.png', '-5.20891731', '119.4555834', 'Jl. Malino No.11, Tompobalang, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92111, Indonesia', 'Test ket', '2021-05-11', '2021-05-10 22:48:25', '2021-05-10 22:48:25'),
(6, 'Mangasa', '21', '5', '800', 'image_1621872397.png', '-5.18575064', '119.41427534', 'Jl. Abd. Kadir No.I.Q/15, RT.001/RW.07, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '', '2021-05-25', '2021-05-24 16:06:37', '2021-05-24 16:06:37'),
(7, 'Mangasa', '21', '5', '200', 'image_1621872470.png', '-5.18574119', '119.41426877', 'Jl. Abd. Kadir No.I.Q/15, RT.001/RW.07, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '', '2021-05-25', '2021-05-24 16:07:50', '2021-05-24 16:07:50'),
(8, 'Balang Baru', '29', '30', '1000', 'image_1622640128.png', '-5.1857891', '119.41428415', 'Jl. Abd. Kadir No.I.Q/15, RT.001/RW.07, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '', '2021-06-02', '2021-06-02 13:22:08', '2021-06-02 13:22:08'),
(9, 'Balang Baru', '29', '30', '1000', 'image_1622640135.png', '-5.1857891', '119.41428415', 'Jl. Abd. Kadir No.I.Q/15, RT.001/RW.07, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '', '2021-06-02', '2021-06-02 13:22:15', '2021-06-02 13:22:15'),
(10, 'Balang Baru', '29', '30', '1000', 'image_1622640141.png', '-5.1857891', '119.41428415', 'Jl. Abd. Kadir No.I.Q/15, RT.001/RW.07, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '', '2021-06-02', '2021-06-02 13:22:21', '2021-06-02 13:22:21'),
(11, 'Manuruki', '22', '2', '1000', 'image_1625047100.png', '-5.18314379', '119.44784977', 'Jl. Talasalapang No.70, Karunrung, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '', '2021-06-30', '2021-06-30 09:58:20', '2021-06-30 09:58:20'),
(12, 'Manuruki', '22', '2', '1000', 'image_1625054442.png', '-5.1726979', '119.44054992', 'Jl. Makkio Baji No.20, RT.001/RW.03, Tidung, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90222, Indonesia', '', '2021-06-30', '2021-06-30 12:00:42', '2021-06-30 12:00:42'),
(13, 'Bongaya', '39', '40', '1500', 'image_1625225478.png', '-5.18580284', '119.41428746', 'Blk. 1.S No.4, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '\n', '2021-07-02', '2021-07-02 11:31:18', '2021-07-02 11:31:18'),
(14, 'Bongaya', '39', '41', '10000', 'image_1625225788.png', '-5.18580562', '119.41428743', 'Blk. 1.S No.4, Balang Baru, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '', '2021-07-02', '2021-07-02 11:36:28', '2021-07-02 11:36:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nik_masyarakat` varchar(255) NOT NULL,
  `nama_masyarakat` varchar(255) NOT NULL,
  `alamat_masyarakat` varchar(255) NOT NULL,
  `area_masyarakat` varchar(255) NOT NULL,
  `telpon_masyarakat` varchar(255) NOT NULL,
  `usia_masyarakat` varchar(255) NOT NULL,
  `kelurahan_masyarakat` varchar(255) NOT NULL,
  `latitude_masyarakat` varchar(255) NOT NULL,
  `longitude_masyarakat` varchar(255) NOT NULL,
  `password_masyarakat` varchar(255) NOT NULL,
  `foto_masyarakat` varchar(255) NOT NULL,
  `status_masyarakat` varchar(255) NOT NULL,
  `pembayaran_masyarakat` varchar(255) NOT NULL,
  `status_marker` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id_masyarakat`, `nik_masyarakat`, `nama_masyarakat`, `alamat_masyarakat`, `area_masyarakat`, `telpon_masyarakat`, `usia_masyarakat`, `kelurahan_masyarakat`, `latitude_masyarakat`, `longitude_masyarakat`, `password_masyarakat`, `foto_masyarakat`, `status_masyarakat`, `pembayaran_masyarakat`, `status_marker`) VALUES
(1, '1234567890', 'Muhammad Azwar Bahar', 'Jl. Mamoa Baru No.3, RT.002/RW.10, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '1', '082394865570', '24', 'Mangasa', '-5.181570726762134', '119.43182487040758', '$2y$10$r1O/Oeinimw93HApcgZCT.XeapWdMfsKZaDcs3KOH4kDBeRga7TEa', 'image_1621295996.png', 'Aktif', 'Sudah', 'Belum'),
(2, '098765456789', 'Hilda', 'Lrg. 3C No.62B, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '3', '082394865570', '22', 'Mangasa', '-5.179274116978435', '119.43230163305999', '$2y$10$BCDDhMi7GpD6KpoWrTwiFeJ2PIi/4IR46p/2q/wB5.Ad3tKJi3pHO', 'image_1615679543.png', 'Aktif', 'Belum', 'Belum'),
(4, '7371100906780009', 'A.ERMA SURYANI MAPPARESSA', 'Jl. Bonto Sunggu', '4', '096548765444', '40', 'Manuruki', '-', '-', '$2y$10$NHEkyJ/oHsIYtIAZyQJISuIYwUbDtG3tLXk8X9TWUMZIefMFXDerG', 'image_1619793621.png', 'Aktif', 'Sudah', 'Belum'),
(6, '7371106706080070', 'MUKTAMAR SANRANG', 'BTN. TABARIA B1/1', '35', '085338908890', '38', 'Manuruki', '-', '-', '$2y$10$u.WBmDg5kga4bkqnQe.N1uxPqt/bJCeP6E9j3hEzIhPDoADOpfKvG', 'image_1619793770.png', 'Aktif', 'Belum', 'Belum'),
(7, '00976902709', 'Muhammad Fahrel', 'Abdul Kadir', '7', '08759088760', '25', 'Balang Baru', '-', '-', '$2y$10$8xwnkzaOgBM2uwiDaxff9ehMqrwyPWK8ZdGqnsuenMH/PMbpKFaKu', 'image_1613733747.jpg', 'Aktif', 'Sudah', 'Belum'),
(8, '00652890760', 'Mutiah Nur Asri', 'Jl. Baji Rupa 1', '9', '085768990887', '35', 'Balang Baru', '-', '-', '$2y$10$2i7gw/P92wkXB.n.u6Mm5Oz1q0hoE0DKfDKLLGagz1TuGWCNpHhHO', 'image_1613735439.jpg', 'Aktif', 'Sudah', 'Belum'),
(9, '00137686701', 'Nurfadillah', 'Jl. Dg. Ngadde 2, Parang Tambung, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90224, Indonesia', '8', '085268909900', '37', 'Balang Baru', '-5.188526952581031', '119.4153158739209', '$2y$10$/xd0Zo2nocVgDXZSulno8.c1M0xrQPrYX/ytCUQsn0H0ZmP0Xo35W', 'image_1613736055.jpg', 'Aktif', 'Sudah', 'Belum'),
(10, '00689500432', 'Fahul', 'Jl. Bontotangnga, Paccinongang, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 90233, Indonesia', '10', '081567799004', '30', 'Parang Tambung', '-5.186482131325513', '119.47293408215047', '$2y$10$eTkSTynZiS6CMRNB/FkW.OHzMXTS2WVHYnGCID9ANYWP1rM5/vRK.', 'image_1613738469.jpg', 'Aktif', 'Sudah', 'Belum'),
(11, '00743860711', 'Wandi', 'Jl. DaengTata', '12', '085342221887', '50', 'Parang Tambung', '-', '-', '$2y$10$n1wf7GNE3xALNBrl3Kv3yu0Lqmyt6QF2jXn5kOByuNEhrPx4fTrxC', 'image_1613738605.jpg', 'Aktif', 'Sudah', 'Belum'),
(12, '00987654001', 'Nuraini', 'Jl. Daeng Muda', '13', '085670008234', '45', 'Parang Tambung', '-', '-', '$2y$10$xAtG6.7wdbMmxd89/.p5Q.gGVH66Zu92OytocjLAQYMeYSC77TQtq', 'image_1613738749.jpg', 'Aktif', 'Sudah', 'Belum'),
(13, '7371600108800006', 'CODDANG', 'Jl.  Andi Tondro 2', '14', '085467889987', '40', 'Pabaeng-Baeng', '-', '-', '$2y$10$OSeQAVwDFnEsqvANGqxCSuqN6uJ5ZI.90X5p1jqWQLXbK9XWqhLEC', 'image_1619966229.png', 'Aktif', 'Sudah', 'Belum'),
(14, '7371200907580002', 'TOMPO', 'JL. ANDI TONRO II', '65', '082336816360', '50', 'Pabaeng-Baeng', '-', '-', '$2y$10$aOuerMTp26jpMHcjCUt9geaFrVOEeMDtmxkduJNMwaJ84o1GjniIy', 'image_1619966375.png', 'Aktif', 'Sudah', 'Belum'),
(15, '7371200706791003', 'NASRUL IHSAN', 'GRIYA HARAPAN A.T A.4', '66', '085476889324', '48', 'Pabaeng-Baeng', '-', '-', '$2y$10$KYyNJ861ssjU23tR6.sUhOfrG28iWmOwae4x.w.d4lSkO3lTUnX8W', 'image_1619966496.png', 'Aktif', 'Sudah', 'Belum'),
(16, '7316024008590078', 'HJ. RAHMATIA DG. JINTU', 'Kampung lette', '42', '0989765345567', '40', 'Tanjung Merdeka', '-', '-', '$2y$10$SF84CoZ9jrno5uK5AoopfurJ0nVEzaTsqKxA.p/z6EgE5hc/o5//e', 'image_1613744314.jpg', 'Aktif', 'Sudah', 'Belum'),
(17, '71.H.10.05.01.183', 'DG. KEBO', 'Jl. Bayang', '18', '081234980776', '42', 'Tanjung Merdeka', '-', '-', '$2y$10$QqBqya8pqVacZPotq3T5COlFqr.jDls4jKnNYNQlqLi77igPnbGdO', 'image_1613744379.jpg', 'Aktif', 'Sudah', 'Belum'),
(18, '71.H.10.01.01.287', 'SARIANTI', 'GOTANG RAYA', '17', '085345887564', '34', 'Tanjung Merdeka', '-', '-', '$2y$10$S63rMa2/vUlPQETntCJM4OKIfs2jNVB.fQ3eiV0wOwM/YF.tqxlxi', 'image_1613744430.jpg', 'Aktif', 'Sudah', 'Belum'),
(19, '00897643267', 'Rahmat', 'Jl. Deppa Sawi Dalam', '20', '085435889776', '45', 'Maccini Sombala', '-', '-', '$2y$10$GDo0SvMs05PfDcIOhp/LgOidiVlQISNm3GH32kmj.AVq9PNGsbQdW', 'image_1613745544.jpg', 'Aktif', 'Sudah', 'Belum'),
(20, '08954637583', 'Askur', 'Jl. Telaga Utama', '21', '085478776554', '45', 'Maccini Sombala', '-', '-', '$2y$10$z6Gkzl13iYwR/dyn7z7AeOOyjp3IZVfjruug0GcgPe3FzO9rVrpSO', 'image_1613745618.jpg', 'Aktif', 'Sudah', 'Belum'),
(21, '00865523415', 'Israwati', 'Jl. Tanjung Bunga', '22', '085435776880', '45', 'Maccini Sombala', '-', '-', '$2y$10$6HnJqpOlECYr/BOPwn.GieGKNNZJ1rjo2kbSFZUZFYxgc4I/FXFqi', 'image_1613745735.jpg', 'Aktif', 'Sudah', 'Belum'),
(22, '456789876', 'Acca', 'Jl. Mamoa Baru No.8, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '1', '09876567890', '32', 'Mangasa', '-5.181212445500349', '119.43197406828405', '$2y$10$R0NvYHwVAarR0c5A/G3tReIW9OsEnx1ITL3euzR8KJyMugS1k3y0K', 'image_1616919543.PNG', 'Aktif', 'Sudah', 'Belum'),
(23, '7371100906780008', 'HJ. Bau', 'Jl. Mannuruki Raya No.64, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '36', '085343776890', '40', 'Manuruki', '-5.177175840436966', '119.42862801253794', '$2y$10$yFR8mnxNmmlvK26xPdCiW.7zPjjtefpsvS9MXBd8ZzI4WTtg3tyfW', 'image_1619793793.png', 'Aktif', 'Belum', 'Belum'),
(24, '71.H.10.06.02.262', 'MUH. YUSUF ', 'P.A.MAMMIRI', '44', '085343226879', '50', 'Tanjung Merdeka', '-', '-', '$2y$10$GkInwaj7HxhiqoTmkwpxl.2KthSSQqu2TDXE2FSrwgIWnWTAVs0eG', 'image_1619689662.jpg', 'Aktif', 'Sudah', 'Belum'),
(25, '7371100708791001', 'ILHAM', 'Jl. Mannuruki Raya No.20, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '36', '085343980001', '48', 'Manuruki', '-5.175306284865029', '119.42979611456394', '$2y$10$RVShH9BX0DdAh/9ndmatt.DrgnZqFeyHSw0KnQS/35s20dErfmhAW', 'image_1619793962.png', 'Aktif', 'Belum', 'Belum'),
(26, '7371100108700002', 'HJ. SUZANNAH ', 'Jl. Mannuruki Raya No.31 A, Mannuruki, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '37', '081243612321', '55', 'Manuruki', '-5.176760792231258', '119.42904140800238', '$2y$10$YZlRpXXtFLm6K/qu.HaTOepILW1qXFDNdlmum2B3bfIN3W/dsoPbW', 'image_1619794114.png', 'Aktif', 'Belum', 'Belum'),
(27, '7371110606151006', 'DG. BELLA', 'Pertambangan', '34', '081243557709', '48', 'Manuruki', '-', '-', '$2y$10$LGiUVIZ3WD2tCuKByxRSIeNimzny7w8R02bA7l3qsm1hzhIU78Mgu', 'image_1619794239.png', 'Aktif', 'Belum', 'Belum'),
(28, '7371100808700006', 'LUKIMAN', 'Jl. Andi Mappaodang No.61D, Jongaya, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90223, Indonesia', '77', '081247001211', '42', 'Bongaya', '-5.173553926277901', '119.41576581448317', '$2y$10$tRyYKzKbiR65uWJqimC23u954W6KSkl4FgQEC0w9iYK7v2n.cepKy', 'image_1619804544.png', 'Aktif', 'Belum', 'Sudah'),
(29, '7371100907780005', 'HJ YUNIATI', 'JL.A. MANGERANGI R. BAU SOKO NO.3', '74', '082336109001', '39', 'Bongaya', '-', '-', '$2y$10$.Q6PUfY9J3tPHRdWCqp8xuUxyVX1U0kSjiERg6BpiuDyrHT287nQW', 'image_1619804658.png', 'Aktif', 'Sudah', 'Belum'),
(30, '737110080791005', 'H. ILYAS DJAMIMAKA', 'KOMP BUNGAYA PERMAI 35', '76', '081220621345', '42', 'Bongaya', '-', '-', '$2y$10$BlWYWYMQh4rpoXUwA7VKVe3V1fFO3n7.2XcEidPvWynwWjHW17VY2', 'image_1619804758.png', 'Aktif', 'Sudah', 'Belum'),
(31, '7371900807700009', 'H. MULIADI', 'JL. SULTAN ALAUDDIN', '64', '081243556812', '49', 'Pabaeng-Baeng', '-', '-', '$2y$10$tDakoq.a1i6sdc0pUnnjE.HyH74j8cvPfv3oZFLrkii.1C1A6uFX.', 'image_1619966692.png', 'Aktif', 'Sudah', 'Belum'),
(32, '7371100906700005', 'Dg Puji', 'Lrg. 3C No.62B, Mangasa, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90221, Indonesia', '3', '085343008900', '47', 'Mangasa', '-5.179241727975899', '119.43245753645897', '$2y$10$pnGXCIcJ6kfpqOpDqKRWfuKS47Bui6Ia0cVOrJwfyYZxmwwdgCoG2', 'image_1622431843.png', 'Aktif', 'Sudah', 'Belum'),
(33, '7371100806500003', 'Joko Susilo', 'Jl. Andi Mangerangi No.24, Bongaya, Kec. Tamalate, Kota Makassar, Sulawesi Selatan 90133, Indonesia', '70', '085343557908', '50', 'Bongaya', '-5.168584988283993', '119.41715016961098', '$2y$10$zoy5pdguoPd2jDso4PGkQ.5hBsCLLslbKBp.svCeSpBqHPiwkqrzm', 'image_1629885905.png', 'Aktif', 'Sudah', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerja`
--

CREATE TABLE `tb_pekerja` (
  `id_pekerja` int(11) NOT NULL,
  `nik_pekerja` varchar(255) NOT NULL,
  `nama_pekerja` varchar(255) NOT NULL,
  `jenis_kelamin_pekerja` varchar(255) NOT NULL,
  `usia_pekerja` varchar(255) NOT NULL,
  `alamat_pekerja` varchar(255) NOT NULL,
  `latitude_pekerja` varchar(255) NOT NULL,
  `longitude_pekerja` varchar(255) NOT NULL,
  `telpon_pekerja` varchar(255) NOT NULL,
  `kelurahan_pekerja` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `area_pekerja` varchar(255) NOT NULL,
  `kendaraan_pekerja` varchar(255) NOT NULL,
  `foto_pekerja` varchar(255) NOT NULL,
  `status_pekerja` varchar(255) NOT NULL,
  `status_kerja_pekerja` varchar(255) NOT NULL,
  `role_pekerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pekerja`
--

INSERT INTO `tb_pekerja` (`id_pekerja`, `nik_pekerja`, `nama_pekerja`, `jenis_kelamin_pekerja`, `usia_pekerja`, `alamat_pekerja`, `latitude_pekerja`, `longitude_pekerja`, `telpon_pekerja`, `kelurahan_pekerja`, `password`, `area_pekerja`, `kendaraan_pekerja`, `foto_pekerja`, `status_pekerja`, `status_kerja_pekerja`, `role_pekerja`) VALUES
(1, '1234', 'Testing Aplikasi', 'Laki - laki', '21', 'Jalan Testing Aplikasi No 1', '-5.2089162', '119.4556248', '08567898745', 'Mangasa', '$2y$10$9kwBZoV2hsDfmDufK5yn9.KRX4qbPFYG3uM2Orw1IO2LxIoMjtX82', '1', '3', 'image_1621670490.jpg', 'Aktif', 'Off', 'Petugas'),
(2, '7371120912820006', 'Heruddin', 'Laki - laki', '39', 'jalan manuruki raya', '-', '-', '08578654324', 'Manuruki', '$2y$10$bpAhDTn6rofPgozFutw4lewR/JNWkEq.RV4576aBAWvCT9SqBEJ.S', '41', '27', 'image_1618812432.jpeg', 'Aktif', 'Off', 'Petugas'),
(3, '7371101005960013', 'Ardi DG Ngaping', 'Laki - laki', '24', 'jl. Bontoduri 3', '-5.1727075', '119.4405504', '08567908889', 'Manuruki', '$2y$10$p3lDWWCHILJbeuheE/Yipe1djibyIEomdpCpN6Zd/H3fsEWBoQI1q', '37', '', 'image_1618812152.jpeg', 'Aktif', 'Off', 'Petugas'),
(4, '73711002038330014', 'Soeharsono', 'Laki - laki', '38', 'Jl. Bontoduri VII', '-', '-', '087987654478', 'Manuruki', '$2y$10$.tZhbn3SPuOnpiKO6DlI7.5GBJ5.V4JWqY/Kuhzcsi8pKaAwdtZkW', '35', '26', 'image_1618813072.jpeg', 'Aktif', 'Off', 'Petugas'),
(5, '09876689099', 'Awal', 'Laki - laki', '30', 'Jl. traktor IV', '-5.1832311', '119.4478575', '085789098009', 'Mangasa', '$2y$10$c5OuimPoqw/XYIk2BCN2kuRRRBtDeXOehybePVl0A9kZAOAZjBrgW', '3', '1', 'image_1613572180.jpg', 'Aktif', 'Off', 'Petugas'),
(6, '7301101807880007', 'Suardi Dg Bangung', 'Laki - laki', '33', 'Jl. Andi Mangerangi No.2', '-', '-', '081243356776', 'Balang Baru', '$2y$10$2zIAZebgsP07VS8o2S5fHuovDAZ6QhMypL4Hk4SCnurRnvmkvICYy', '9', '5', 'image_1619712730.jpeg', 'Aktif', 'Off', 'Petugas'),
(7, '7371100604810013', 'Mansyur', 'Laki - laki', '40', 'Jl. Balang baru III', '-5.1903802', '119.4781798', '085321114880', 'Balang Baru', '$2y$10$5D9cvq6Acb3Y4Ufstoh/kO/s6kUWaw6WPxvrckERQjuQ.gD4fChr6', '7', '13', 'image_1619711890.jpeg', 'Aktif', 'Off', 'Petugas'),
(8, '7371102903580003', 'Burhanuddin R', 'Laki - laki', '63', 'Jl. Letjen Mappaoddang III', '-', '-', '081243589007', 'Balang Baru', '$2y$10$h8nMS943xKwlq4cJr8wYuegLqDbOCPf2P0nhxW3EpbdKHFJlJlwBO', '8', '12', 'image_1619712980.jpeg', 'Aktif', 'Off', 'Petugas'),
(9, '7371102308900006', 'Muhardi', 'Laki - laki', '26', 'Jl. Daeng Ngadde', '-', '-', '081243776221', 'Parang Tambung', '$2y$10$kwVkFTQ.WWUiAwlFcFD/OevSd1gwfrtTdA4aWAS7s7lTtdY6H7fjS', '79', '16', 'image_1619936920.jpeg', 'Aktif', 'Off', 'Petugas'),
(10, '7171103012660010', 'Daeg Lau', 'Laki - laki', '50', 'Tabaria', '-', '-', '085476998770', 'Parang Tambung', '$2y$10$4/.HLGrpeFXFr1azUooaW.Xp7UKciVnW5BDV/FLZd5bvyzEkW4glq', '12', '15', 'image_1619936819.jpeg', 'Aktif', 'Off', 'Petugas'),
(11, '7371102008680008', 'Amirullah', 'Laki - laki', '48', 'Jl. Daeng Tata 3', '-', '-', '081343670098', 'Parang Tambung', '$2y$10$MluZ3m4WfoBS/wkqDhNYZeVrDHB6qkCdDyK8ofO2H8csWvu5aMk8m', '10', '14', 'image_1619936664.PNG', 'Aktif', 'Off', 'Petugas'),
(15, '7371122101810011', 'Abbas', 'Laki - laki', '41', 'Jl. Borong Raya 26', '-', '-', '098533484655', 'Tanjung Merdeka', '$2y$10$pU7gdx/l6tOxlUdENOnYmObwDGi/4OIqWJThxniAJlxP3F14l78Sy', '45', '20', 'image_1619686286.jpeg', 'Aktif', 'Off', 'Petugas'),
(16, '730616017840052', 'jalil', 'Laki - laki', '37', 'Bonto Sunggu', '-', '-', '085234990900', 'Tanjung Merdeka', '$2y$10$a0/aa3JNKLiS9Y4Ni19OtOMP83XROrOUjzNcO.qJuBMR1j.mfGX6C', '44', '22', 'image_1619687929.jpeg', 'Aktif', 'Off', 'Petugas'),
(17, '7306122102010003', 'Muh. Aswar', 'Laki - laki', '20', 'Lekoboddong', '-', '-', '085342221334', 'Tanjung Merdeka', '$2y$10$jxQsH9PIoxfqsQHTQ9ggru6b8EP8l.7SSrVtKsqnu8wfXj3qX6qvy', '19', '38', 'image_1619688234.jpeg', 'Aktif', 'Off', 'Petugas'),
(18, '0087654567854', 'Andi', 'Laki - laki', '30', 'Jl. Tanjung Bunga', '-', '-', '085437765990', 'Maccini Sombala', '$2y$10$sQg8uTfbuDt0bvutDFI6ruxniDkO.f26LQiSe34bi9a/xZ90WyBGG', '22', '23', 'image_1613746079.jpg', 'Aktif', 'Off', 'Petugas'),
(19, '00654699993', 'Takdir', 'Laki - laki', '35', 'Jl. Telaga Utama', '-', '-', '085467889776', 'Maccini Sombala', '$2y$10$t0VVo1GLqw1uWV9mWwoPpe72mAb4E0sy.cXSILSKcPl5UuhiIfjj6', '21', '24', 'image_1613746139.jpg', 'Aktif', 'Off', 'Petugas'),
(20, '00876545674', 'Rida', 'Laki - laki', '29', 'Jl. Metro', '-', '-', '088656444444', 'Maccini Sombala', '$2y$10$RaQORWKZpmuujvY4pwCNyOMRoesUYGhS8SbtlEJqQzAV63bIwMvXG', '22', '24', 'image_1613746202.jpg', 'Aktif', 'Off', 'Petugas'),
(21, '09876567890', 'Daeng Ngewa', 'Laki - laki', '54', 'Jalan Mamoa 5', '-5.1857848', '119.4143032', '0987654567', 'Mangasa', '$2y$10$jw7r1wdU0R41W.J6A8mIRezmpWw4eTOOvF8FdCU1yfKDxSQf77N4e', '-', '-', 'image_1615835633.jpg', 'Aktif', 'Off', 'Koordinator'),
(22, '7371100806780007', 'Ahmad', 'Laki - laki', '', 'jl. Daeng Ngeppe LR. 2 No.3', '-5.1857839', '119.4142817', '085397889009', 'Manuruki', '$2y$10$vkcElfudrf.cp977YK7nJOQ8UHHmm0nyvISoCCQxzzyMbdLbpQdjW', '-', '-', 'image_1618811667.jpeg', 'Aktif', 'Off', 'Koordinator'),
(23, '737110231075004', 'Mustafa', 'Laki - laki', '46', 'jl. M Tahir Kumala Permai C/1', '-', '-', '085678432223', 'Jongaya', '$2y$10$zRUmW7nRKJ4t.49pE0eFI.iqVmqfc5deiYNixbRr53pKy263Ync6u', '27', '-', 'image_1618854197.', 'Aktif', 'Off', 'Petugas'),
(24, '7305050910940001', 'Rustan', 'Laki - laki', '26', 'Kampung Parang', '-', '-', '085343226554', 'Tanjung Merdeka', '$2y$10$8rFkGexzoBfr1qfsxiLaF.tEA/R741dZnIU2nYQE0k4phZbYSRlqC', '-', '-', 'image_1619687775.jpeg', 'Aktif', 'Off', 'Koordinator'),
(25, '7371103112690105', 'Bakri Dg Lipung', 'Laki - laki', '52', 'Gontang Raya No. 9', '-5.1831532', '119.4479019', '085355814908', 'Tanjung Merdeka', '$2y$10$szrrEbnDfOO1Iwa2pdJqTe/.33NKL/PosqwcBReBlTzCF0YNGhdV.', '17', '21', 'image_1619688561.jpeg', 'Aktif', 'Off', 'Petugas'),
(26, '7305090107800071', 'Sempo', 'Laki - laki', '41', 'Kmapung Parang', '-', '-', '081242332117', 'Tanjung Merdeka', '$2y$10$D90hmTIjboiq3rAQpZND1Ot.LrkeJp.6xPHqxweWsPl1rBO4/iCFC', '43', '39', 'image_1619688780.jpeg', 'Aktif', 'Off', 'Petugas'),
(27, '7371100406700005', 'Jamaluddin', 'Laki - laki', '51', 'Kampung lette', '-', '-', '085243889007', 'Tanjung Merdeka', '$2y$10$AAvAHDGCBvAjjjtjShfw8uVlfayucRO5su6RT3J0xJNdxTsm0ASCi', '42', '40', 'image_1619688967.jpeg', 'Aktif', 'Off', 'Petugas'),
(28, '7306163112740031', 'Masuddin Dg Nompo', 'Laki - laki', '47', 'Sorobaya', '-', '-', '081242336098', 'Tanjung Merdeka', '$2y$10$cwsB4GSJoUSgbd58Su8zCu.Ww.9gYqZ.xCpi/oG3WwoyJaCxef7ES', '18', '41', 'image_1619689229.jpeg', 'Aktif', 'Off', 'Petugas'),
(29, '7371301006520001', 'Usmar', 'Laki - laki', '35', 'Jl. Barang baru', '-5.1857969', '119.4143146', '085332190001', 'Balang Baru', '$2y$10$ensVO6Vsn5f95RGjaBYJo.TlMsRXWTdlW/ZjMJhpmvOKHW4PzCYlu', '-', '-', 'image_1619711284.PNG', 'Aktif', 'Off', 'Koordinator'),
(30, '7306070811830003', 'Arief', 'Laki - laki', '25', 'Tanggul Panompo dalam', '-5.1857878', '119.4142819', '085345780098', 'Balang Baru', '$2y$10$t5iYAjZE.lhuHrFMK0ErJeD0WkoM5JmEM6JK35OUsoYXRrerW5wYu', '8', '42', 'image_1619713407.jpeg', 'Aktif', 'Off', 'Petugas'),
(31, '7371103112820094', 'Arief Dg Jarung', 'Laki - laki', '39', 'Jl. Malengkeri III', '-', '-', '081267990008', 'Balang Baru', '$2y$10$Qy2scqzQnLMT9HKnUR4NLefeNy13/a0tQv3WtaYfRwbhAr147dfnO', '56', '43', 'image_1619713802.jpeg', 'Aktif', 'Off', 'Petugas'),
(32, '7371102005560001', 'Nuhung', 'Laki - laki', '65', 'Jl. Daeng Tata 3', '-', '-', '085446345112', 'Balang Baru', '$2y$10$8paYFWieQjgJGCim5M/pzuSWBconsCfnyfivoSBpxj688VBifOsR6', '57', '44', 'image_1619714133.jpeg', 'Aktif', 'Off', 'Petugas'),
(33, '7371100510850017', 'Nasaruddin', 'Laki - laki', '36', 'Hartaco Indah Gang Anggrek', '-', '-', '081234889708', 'Balang Baru', '$2y$10$oKpHo3.qkfJzUM7rBnt/4uv3yUT2cdaTFDbZv8I8wpnw22oluHvdy', '58', '45', 'image_1619714655.jpeg', 'Aktif', 'Off', 'Petugas'),
(35, '  730621504800001', 'juda dg sore', 'Laki - laki', '41', 'Lakeboddong', '-', '-', '089456332110', 'Balang Baru', '$2y$10$yCqqui7yhlzf8IDG4ArSpOBhrnwWSP2BWyOLA.vl6UT0fvbFEQsgS', '55', '46', 'image_1619715213.jpeg', 'Aktif', 'Off', 'Petugas'),
(36, '7302070506920003', 'Ansyar', 'Laki - laki', '29', 'Jl. Batua Raya 9', '-', '-', '085334120900', 'Balang Baru', '$2y$10$SpjVvB.g2RsevKSvP9ONtOW9e8CVv1Yyv73hk8NF9ZCOyEvmQrn1G', '61', '47', 'image_1619715755.jpeg', 'Aktif', 'Off', 'Petugas'),
(37, '7371120604810003', 'Baharuddin Dg Sitaba', 'Laki - laki', '40', 'Jl. Borong Raya 1', '-', '-', '085435223190', 'Balang Baru', '$2y$10$lohQ6wM6kfcHFcdrY3wC0eqq2USKNR3us8cC59uYBAKuyMr2bgNA2', '60', '48', 'image_1619716194.jpeg', 'Aktif', 'Off', 'Petugas'),
(38, '73711221506680001', 'Muh. Said', 'Laki - laki', '53', 'Jalan Tamarunang Indah', '-', '-', '085343660090', 'Manuruki', '$2y$10$tColmKl0OAHidiuq7FH0nu4umjYOd6Ao0d9Ut7Tjny9UjNe2qhryy', '40', '11', 'image_1619752161.jpeg', 'Aktif', 'Off', 'Petugas'),
(39, '7371102602760006', 'Ahmad Fausi', 'Laki - laki', '44', 'Jl. Andi Mangerang no. 27', '-5.1857982', '119.4142958', '081242090008', 'Bongaya', '$2y$10$MJsENxuaz9vsADGjUwUmnu.OIMV6GmcDwi4zcWn46vdTHPvmKwsFa', '-', '-', 'image_1619800624.jpeg', 'Aktif', 'Off', 'Koordinator'),
(40, '7371101606700005', 'Nurhadi', 'Laki - laki', '42', 'Jl. Teluk Tomini', '-5.1857904', '119.4143001', '085342875009', 'Bongaya', '$2y$10$olFUF9c4Jxn357I5oCl3cuiyQjmB75MzIeyOvF4FjU.dPlYj7UhAC', '70', '49', 'image_1619803752.PNG', 'Aktif', 'Off', 'Petugas'),
(41, '7306101001970003', 'Irfandi', 'Laki - laki', '23', 'jl. Melati 1', '-5.1832808', '119.4478898', '081243005709', 'Bongaya', '$2y$10$B3NVMqmu2uL7cH/Hkv2N3OPYzqB.N2FSz0OLKNCSlHx9VajSSnqrC', '77', '50', 'image_1619804050.PNG', 'Aktif', 'Off', 'Petugas'),
(42, '737110231270007', 'Mustari', 'Laki - laki', '42', 'Jl. Daeng Tata Raya', '-', '-', '081242006423', 'Parang Tambung', '$2y$10$fVolP0gMNV5WeoJDSVhhPuxU1Zo3MOedKIN6Q//L9Gu9uiMdT7PkC', '79', '58', 'image_1619937046.jpeg', 'Aktif', 'Off', 'Petugas'),
(43, '7371101708810020', 'Tallik', 'Laki - laki', '50', 'Daeng tata 1', '-', '-', '085343990660', 'Parang Tambung', '$2y$10$.jzTOe4ZVaDDXnkGncxUYuzks9DqJSTCYaOB61jg15oowmrmJofqO', '80', '59', 'image_1619937128.jpeg', 'Aktif', 'Off', 'Petugas'),
(44, '7371100607990009', 'Rahmat', 'Laki - laki', '52', 'Mamoa IV', '-', '-', '081209669932', 'Parang Tambung', '$2y$10$01gZHIp6wmU07CLIeVQEIumrjvRxvRNiHpWRiQALl0ov28X.2SFde', '81', '60', 'image_1619937213.jpeg', 'Aktif', 'Off', 'Petugas'),
(45, '7371120101770016', 'Dahlan', 'Laki - laki', '45', 'Jl. Malengkeri Raya', '-', '-', '085243098126', 'Parang Tambung', '$2y$10$46bcgyzt54ppVPWvPmjp7ukwAQuA5A.fnyyGYFbYQpx/LhE5N9S7G', '82', '61', 'image_1619966044.jpeg', 'Aktif', 'Off', 'Petugas'),
(46, '7371102810990004', 'Muh.Galip', 'Laki - laki', '22', 'Malengkeri dalam', '-5.2075733', '119.4569245', '085343557721', 'Mangasa', '$2y$10$FM5Dc7n088YHfHYL8wuJ7OfaWZM8nUUA5WDKESP0kW1YNPEWa0DOK', '3', '62', 'image_1622432503.PNG', 'Aktif', 'Off', 'Petugas'),
(47, '7371102870980006', 'Salama', 'Laki - laki', '51', 'JL. MANGERANGI', '-', '-', '082334509765', 'Bongaya', '$2y$10$7iJRfLVmQsSlxdZOJJ9WWerRP.43qHRw6Q8hvfj15GTd8sIZ8ZIvO', '74', '52', 'image_1629886820.PNG', 'Aktif', 'Off', 'Petugas'),
(48, '7316007002300870', 'MARJUNAEDI', 'Laki - laki', '48', 'JL. GUSUNG JIHAD', '-', '-', '081243009645', 'Bongaya', '$2y$10$U2icGMJpxjuUpiAh/5vxJe4tj8HEkEsJyA8NF7Vx4WOV7jqT9OUZa', '76', '56', 'image_1629892828.PNG', 'Aktif', 'Off', 'Petugas'),
(49, '73020728312000002', 'NUR FANDI M', 'Laki - laki', '36', 'jl Kumala', '-', '-', '082180658002', 'Pabaeng-Baeng', '$2y$10$7N/jkMZWV.GV0w8qXuKhBe3KPE9ekat74CaqmorzHt1CgBMhmgAX6', '64', '19', 'image_1629893930.png', 'Aktif', 'Off', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sampah`
--

CREATE TABLE `tb_sampah` (
  `id_sampah` int(11) NOT NULL,
  `jumlah_sampah` varchar(255) NOT NULL,
  `satuan_sampah` varchar(255) NOT NULL,
  `kelurahan_sampah` varchar(255) NOT NULL,
  `petugas_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_manual` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sampah`
--

INSERT INTO `tb_sampah` (`id_sampah`, `jumlah_sampah`, `satuan_sampah`, `kelurahan_sampah`, `petugas_id`, `created_at`, `tanggal_manual`) VALUES
(2, '3', 'Pikul', 'Mangasa', '21', '2021-04-27 21:57:36', '2021-04-28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun_kecamatan`
--
ALTER TABLE `tb_akun_kecamatan`
  ADD PRIMARY KEY (`id_akun_kecamatan`);

--
-- Indeks untuk tabel `tb_akun_kelurahan`
--
ALTER TABLE `tb_akun_kelurahan`
  ADD PRIMARY KEY (`id_akun_kelurahan`);

--
-- Indeks untuk tabel `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_edukasi`
--
ALTER TABLE `tb_edukasi`
  ADD PRIMARY KEY (`id_edukasi`);

--
-- Indeks untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `tb_laporan_petugas`
--
ALTER TABLE `tb_laporan_petugas`
  ADD PRIMARY KEY (`id_laporan_petugas`);

--
-- Indeks untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indeks untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  ADD PRIMARY KEY (`id_pekerja`);

--
-- Indeks untuk tabel `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun_kecamatan`
--
ALTER TABLE `tb_akun_kecamatan`
  MODIFY `id_akun_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_akun_kelurahan`
--
ALTER TABLE `tb_akun_kelurahan`
  MODIFY `id_akun_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_edukasi`
--
ALTER TABLE `tb_edukasi`
  MODIFY `id_edukasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan_petugas`
--
ALTER TABLE `tb_laporan_petugas`
  MODIFY `id_laporan_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  MODIFY `id_pekerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `tb_sampah`
--
ALTER TABLE `tb_sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
