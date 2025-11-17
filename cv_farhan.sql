-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 07:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_farhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int NOT NULL,
  `nama_keahlian` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_general_ci DEFAULT 'Umum',
  `level` enum('Dasar','Menengah','Mahir','Ahli') COLLATE utf8mb4_general_ci DEFAULT 'Menengah'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama_keahlian`, `kategori`, `level`) VALUES
(1, 'PHP', 'Backend', 'Mahir'),
(2, 'Laravel', 'Backend', 'Menengah'),
(3, 'CodeIgniter 4', 'Backend', 'Menengah'),
(4, 'MySQL', 'Database', 'Mahir'),
(5, 'JavaScript', 'Frontend', 'Menengah'),
(6, 'React.js', 'Frontend', 'Dasar'),
(7, 'Tailwind CSS', 'Frontend', 'Menengah'),
(8, 'Figma', 'Desain UI/UX', 'Dasar'),
(9, 'Komunikasi', 'Soft Skill', 'Mahir'),
(10, 'Proyek Tim', 'Soft Skill', 'Mahir'),
(11, 'Kreativitas', 'Soft Skill', 'Menengah'),
(12, 'Pemecahan Masalah', 'Soft Skill', 'Menengah');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `institusi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `institusi`, `jurusan`, `tanggal_mulai`, `tanggal_selesai`, `keterangan`) VALUES
(1, 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023-08-01', NULL, 'IPK Saat Ini: 3.85 semester 5'),
(2, 'SMA Negeri 1 Jakarta', 'IPA', '2018-07-01', '2021-05-30', 'Lulus dengan nilai baik.');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `judul`, `posisi`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi`) VALUES
(1, 'Himpunan Mahasiswa Teknik Informatika', 'Ketua Divisi Web Developer', '2022-01-01', '2023-01-01', 'Memimpin tim untuk merancang ulang dan memelihara website himpunan menggunakan CodeIgniter 4.'),
(2, 'Proyek Sistem Informasi Perpustakaan', 'Full Stack Developer (Proyek Kuliah)', '2023-03-01', '2023-06-01', 'Membangun aplikasi web perpustakaan dari nol, mengelola database buku dan peminjaman.'),
(3, 'Kepanitiaan Hackathon TechFest 2023', 'Koordinator Acara', '2023-09-01', '2023-10-01', 'Mengatur jalannya acara dan penjurian untuk 100+ peserta.');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ringkasan` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `url_linkedin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url_github` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url_foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `ringkasan`, `email`, `telepon`, `url_linkedin`, `url_github`, `url_foto`) VALUES
(1, 'Muhammad Farhan', 'Mahasiswa semester 5 Teknik Informatika yang bersemangat dalam pengembangan web. Aktif di organisasi dan mencari kesempatan magang untuk menerapkan ilmu dalam PHP, Laravel, dan React.', 'komik@email.com', '08123456789', 'https://linkedin.com/in/budisantoso', 'https://github.com/budisantoso', '/images/komik.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
