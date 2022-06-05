-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Feb 2019 pada 07.35
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prakerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permohonan`
--

CREATE TABLE `tbl_permohonan` (
  `id_permohonan` int(11) NOT NULL,
  `nama_sekolah` varchar(250) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `waktu_pelaksanaan` varchar(250) NOT NULL,
  `status` enum('Pending','Terima','Tolak') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_permohonan`
--

INSERT INTO `tbl_permohonan` (`id_permohonan`, `nama_sekolah`, `jurusan`, `waktu_pelaksanaan`, `status`, `keterangan`) VALUES
(1, 'Smk Informatika', 'RPL', '30 maret SD 10 september', 'Terima', 'Ngga Broos'),
(21, 'Smk Informatika', 'TKJ', '8 September SD 9 November', 'Terima', 'DITERIMA'),
(23, 'Smk Informatika', 'MM', '20 September', 'Pending', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permohonan_detail`
--

CREATE TABLE `tbl_permohonan_detail` (
  `id` int(11) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `nama_siswa` varchar(250) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nis` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_permohonan_detail`
--

INSERT INTO `tbl_permohonan_detail` (`id`, `id_permohonan`, `nama_siswa`, `jenis_kelamin`, `nis`) VALUES
(1, 1, 'Ahmad', 'laki-laki', 666),
(9, 1, 'Ahmad', 'laki-laki', 222),
(10, 1, 'Bel', 'perempuan', 12334555),
(11, 23, 'Muamar', '', 129383);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('pengguna','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `nama_sekolah`, `password`, `level`) VALUES
(1, '', 'ahmad.fauziung@gmail.com', 'Ahmad Fauzi', 'Smk Informatika', '61243c7b9a4022cb3f8dc3106767ed12', 'pengguna'),
(2, 'Ahmad Fauzi', '', 'Ahmad Fauzi', '', '61243c7b9a4022cb3f8dc3106767ed12', 'admin'),
(3, '', 'pengguna@pengguna.com', 'pengguna', 'pengguna', '8b097b8a86f9d6a991357d40d3d58634', 'pengguna'),
(4, '', 'AhmadFauzi123@gmail.com', 'Ahmad_ojol', 'Ahmad Fauz', 'b1294e9c9fb69bf104b5c253aafb3cff', 'pengguna'),
(5, '', 'vendor1@ca.com', 'AHMAD Fauzi', 'Smk 1 ', '0bd9897bf12294ce35fdc0e21065c8a7', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `tbl_permohonan_detail`
--
ALTER TABLE `tbl_permohonan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_permohonan` (`id_permohonan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_permohonan`
--
ALTER TABLE `tbl_permohonan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_permohonan_detail`
--
ALTER TABLE `tbl_permohonan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_permohonan_detail`
--
ALTER TABLE `tbl_permohonan_detail`
  ADD CONSTRAINT `tbl_permohonan_detail_ibfk_1` FOREIGN KEY (`id_permohonan`) REFERENCES `tbl_permohonan` (`id_permohonan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
