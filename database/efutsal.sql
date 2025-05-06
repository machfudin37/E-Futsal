-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2022 pada 05.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efutsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `foto_admin` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `foto_admin`, `id_user`) VALUES
(2, 'Administrator', 'user.jpg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `id_lap` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `durasi` int(2) NOT NULL,
  `tgl_main` date NOT NULL,
  `id_sewa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_lap`, `jam_mulai`, `jam_selesai`, `durasi`, `tgl_main`, `id_sewa`) VALUES
('JD', 1, '07:00:00', '08:00:00', 1, '2022-04-05', 'BO'),
('JD1', 5, '09:00:00', '12:00:00', 3, '2022-04-05', 'BO1'),
('JD2', 1, '22:00:00', '23:00:00', 1, '2022-04-16', 'BO2'),
('JD3', 1, '07:00:00', '11:00:00', 4, '2022-04-18', 'BO3'),
('JD4', 7, '07:00:00', '11:00:00', 4, '2022-04-19', 'BO4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Rumput Sintetis'),
(2, 'Taraflex'),
(4, 'Karpet Plastik'),
(6, 'Vinyl'),
(9, 'Semen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lap` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_lap` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tarif` double NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lap`, `id_kategori`, `nama_lap`, `lokasi`, `tarif`, `gambar`) VALUES
(1, 1, 'Rinjani 1', 'Jl. Pangkalan Jati No. 17', 85000, '1.jpg'),
(4, 2, 'Exco', 'Jl. Jatiwaringin No. 27', 85000, '2.jpg'),
(5, 4, 'Alibaba', 'Jl. Raya Pekayon', 115000, '3.jpg'),
(6, 1, 'Sentro', 'Jl. Raya Hayam Wuruk 89', 115000, '41.jpg'),
(7, 2, 'H. Turoh', 'J. Swadaya No.20', 65000, '51.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(25) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan','') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `foto_member` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `gender`, `alamat`, `no_hp`, `email`, `foto_member`, `id_user`) VALUES
(20, 'user', 'Laki-Laki', 'bumi', '123', 'user@user.com', '', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` varchar(11) NOT NULL,
  `id_sewa` varchar(10) NOT NULL,
  `totalbayar` double NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status_bayar` enum('Menunggu Pembayaran','Menunggu Konfirmasi','Terkonfirmasi') NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `jam_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_sewa`, `totalbayar`, `tgl_bayar`, `status_bayar`, `bukti`, `jam_pesan`) VALUES
('IV', 'BO', 85000, '2022-04-05', 'Terkonfirmasi', 'gambar15582022553.jpg', '2022-04-07 02:40:17'),
('IV1', 'BO1', 345000, '2022-04-05', 'Terkonfirmasi', 'gambar15582022554.jpg', '2022-04-07 02:40:27'),
('IV2', 'BO2', 85000, '2022-04-16', 'Terkonfirmasi', 'gambar15582022555.jpg', '2022-04-16 13:23:47'),
('IV3', 'BO3', 340000, '0000-00-00', 'Menunggu Pembayaran', '', '2022-04-17 05:34:47'),
('IV4', 'BO4', 260000, '2022-04-18', 'Menunggu Konfirmasi', 'gambar15582022557.jpg', '2022-04-18 03:47:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id_sewa` varchar(10) NOT NULL,
  `id_lap` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `status_sewa` enum('Booking','Batal','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id_sewa`, `id_lap`, `id_member`, `tgl_pesan`, `tgl_sewa`, `jam_mulai`, `status_sewa`) VALUES
('BO', 1, 15, '2022-04-05', '2022-04-05', '07:00:00', 'Booking'),
('BO1', 5, 15, '2022-04-05', '2022-04-05', '09:00:00', 'Booking'),
('BO2', 1, 15, '2022-04-16', '2022-04-16', '22:00:00', 'Booking'),
('BO3', 1, 16, '2022-04-17', '2022-04-18', '07:00:00', 'Booking'),
('BO4', 7, 19, '2022-04-18', '2022-04-19', '07:00:00', 'Booking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `status` enum('1','2','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(4, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', '1'),
(18, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_lap` (`id_lap`),
  ADD KEY `id_sewa` (`id_sewa`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lap`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_sewa` (`id_sewa`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_member` (`id_member`,`id_lap`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
