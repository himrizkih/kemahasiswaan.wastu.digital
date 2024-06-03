-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 10.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eapproval`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_lpj` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_history`, `id_surat`, `id_lpj`, `id_proposal`, `status`, `nama`, `jabatan`, `waktu`) VALUES
(9, 6, 0, 0, 'approve', 'lee', 'kasubag', '2019-07-19 11:08:17'),
(10, 11, 0, 0, 'approve', 'lee', 'kasubag', '2019-07-19 19:47:52'),
(11, 11, 0, 0, 'reject', 'sandi', 'kabag', '2019-07-19 19:56:38'),
(13, 11, 0, 0, 'approve', 'trio', 'sekda', '2019-07-19 19:58:37'),
(14, 12, 0, 0, 'approve', 'sandi', 'kabag', '2019-07-24 10:39:27'),
(15, 15, 0, 0, 'approve', 'sandi', 'kabag', '2019-07-24 14:19:21'),
(16, 12, 0, 0, 'reject', 'joko', 'asisten', '2019-07-24 14:39:21'),
(17, 14, 0, 0, 'approve', 'joko', 'asisten', '2019-07-24 15:04:46'),
(18, 15, 0, 0, 'reject', 'joko', 'asisten', '2019-07-24 15:05:18'),
(19, 14, 0, 0, 'approve', 'trio', 'sekda', '2019-07-24 15:16:38'),
(20, 14, 0, 0, 'approve', 'trio', 'sekda', '2019-07-24 17:20:28'),
(21, 14, 0, 0, 'approve', 'trio', 'sekda', '2019-07-24 17:20:32'),
(22, 17, 0, 0, 'approve', 'lee', 'kabag', '2019-07-25 18:37:41'),
(23, 18, 0, 0, 'approve', 'sandi', 'kabag', '2021-09-06 16:09:13'),
(24, 18, 0, 0, 'approve', 'joko', 'asisten', '2021-09-06 16:09:31'),
(25, 17, 0, 0, 'approve', 'joko', 'asisten', '2021-09-06 16:09:38'),
(26, 18, 0, 0, 'approve', 'trio', 'sekda', '2021-09-06 16:11:08'),
(27, 17, 0, 0, 'approve', 'trio', 'sekda', '2021-09-06 16:11:20'),
(28, 19, 0, 0, 'approve', 'sandi', 'kabag', '2021-09-07 16:46:19'),
(29, 19, 0, 0, 'approve', 'joko', 'asisten', '2021-09-07 16:47:46'),
(30, 19, 0, 0, 'approve', 'trio', 'sekda', '2021-09-07 16:48:17'),
(31, 12, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-09-11 13:41:15'),
(32, 15, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-09-11 13:41:28'),
(33, 12, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-09-11 13:42:02'),
(34, 12, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-09-11 13:42:19'),
(35, 12, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-09-11 13:43:04'),
(36, 15, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-09-11 13:45:07'),
(37, 15, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-09-11 14:44:50'),
(38, 15, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-09-11 14:45:21'),
(39, 15, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-09-11 14:45:44'),
(40, 16, 0, 0, 'approve', 'admin', 'kasubag', '2021-09-11 14:51:31'),
(41, 20, 0, 0, 'approve', 'lee', 'kabag', '2021-09-11 15:06:14'),
(42, 20, 0, 0, 'reject', 'S. KEMAHASISWAAN', 'asisten', '2021-09-13 18:43:56'),
(43, 20, 0, 0, 'Updated', 'ani', 'staff', '2021-09-13 18:45:09'),
(44, 20, 0, 0, 'approve', 'lee', 'kabag', '2021-09-13 18:46:51'),
(45, 20, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-09-13 18:48:55'),
(46, 20, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-09-13 18:49:20'),
(56, 21, 0, 0, 'reject', 'KAPRODI', 'kabag', '2021-10-07 09:23:30'),
(57, 21, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-10-07 09:23:57'),
(62, 21, 0, 0, 'approve', 'BEM', 'kasubag', '2021-10-07 10:58:53'),
(65, 22, 0, 0, 'approve', 'BEM', 'kasubag', '2021-10-07 11:36:03'),
(66, 23, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-10-07 11:37:41'),
(67, 23, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-10-07 11:38:06'),
(68, 23, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-10-07 11:38:29'),
(107, 0, 6, 0, 'approve', 'BEM', 'kasubag', '2021-12-22 17:05:43'),
(108, 0, 6, 0, 'approve', 'KAPRODI', 'kabag', '2021-12-22 17:05:57'),
(109, 0, 11, 0, 'approve', 'BEM', 'kasubag', '2021-12-30 20:44:06'),
(110, 0, 11, 0, 'approve', 'KAPRODI', 'kabag', '2021-12-30 20:45:14'),
(111, 0, 6, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-01-02 20:49:34'),
(112, 0, 11, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-01-02 20:49:37'),
(113, 0, 6, 0, 'approve', 'KETUA STT', 'sekda', '2022-01-02 20:49:55'),
(114, 0, 11, 0, 'approve', 'KETUA STT', 'sekda', '2022-01-02 20:49:59'),
(115, 0, 0, 4, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-01-03 09:55:49'),
(116, 0, 0, 4, 'approve', 'KETUA STT', 'sekda', '2022-01-03 09:56:03'),
(117, 0, 0, 9, 'approve', 'BEM', 'kasubag', '2022-02-01 14:07:11'),
(118, 0, 0, 11, 'approve', 'BEM', 'kasubag', '2022-02-01 14:07:17'),
(119, 0, 0, 9, 'approve', 'KAPRODI', 'kabag', '2022-02-01 14:08:53'),
(120, 0, 0, 9, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-02-01 14:49:18'),
(121, 0, 0, 11, 'approve', 'BEM', 'kasubag', '2022-02-01 15:06:08'),
(122, 0, 0, 12, 'approve', 'BEM', 'kasubag', '2022-02-01 15:17:21'),
(123, 0, 0, 11, 'approve', 'KAPRODI', 'kabag', '2022-02-01 15:17:38'),
(124, 0, 0, 12, 'approve', 'KAPRODI', 'kabag', '2022-02-01 15:23:45'),
(125, 0, 0, 11, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-02-01 15:23:58'),
(126, 0, 0, 13, 'approve', 'BEM', 'kasubag', '2022-02-01 15:26:19'),
(127, 0, 0, 11, 'approve', 'KETUA STT', 'sekda', '2022-02-01 15:38:26'),
(128, 0, 0, 13, 'approve', 'KAPRODI', 'kabag', '2022-02-01 15:54:20'),
(129, 0, 0, 12, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-02-03 11:02:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lpj`
--

CREATE TABLE `lpj` (
  `id_lpj` int(11) NOT NULL,
  `judul_lpj` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `divisi` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `lpj` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `status_approve` int(11) NOT NULL,
  `status_baca` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `penolak` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `lpj_id_user` int(11) NOT NULL,
  `ormawa` varchar(200) NOT NULL,
  `revisi` varchar(200) NOT NULL,
  `tanggal_lpj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lpj`
--

INSERT INTO `lpj` (`id_lpj`, `judul_lpj`, `divisi`, `lpj`, `status_approve`, `status_baca`, `note`, `penolak`, `lpj_id_user`, `ormawa`, `revisi`, `tanggal_lpj`) VALUES
(9, 'Inaugurasi 2020', 'Divisi Kemahasiswaan ', '18181-53483-1-PB.pdf', 4, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '', '0000-00-00'),
(10, 'Humday 2021', 'Kes', '234827187.pdf', 4, '1', '', '', 2, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '', '2021-12-22'),
(11, 'Humday 2020', 'Kemahasiswaan', '1397-2943-1-SM.pdf', 4, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '', '2021-12-22'),
(12, 'Porka', 'Olahraga', 'Ambara Krianajaya.pdf', 0, '1', '', '', 2, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '', '2022-01-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(255) NOT NULL,
  `judul_proposal` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `divisi` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `lampiran` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status_approve` int(11) NOT NULL,
  `status_baca` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `penolak` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `proposal_id_user` int(11) NOT NULL,
  `ormawa` varchar(200) NOT NULL,
  `tanggal_proposal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul_proposal`, `divisi`, `tgl`, `waktu`, `tempat`, `lampiran`, `status_approve`, `status_baca`, `note`, `penolak`, `proposal_id_user`, `ormawa`, `tanggal_proposal`) VALUES
(4, 'Humday 2020', 'Kesenian', '2021-12-22', '22:24:00', 'Kampus 1 STT', '194-319-1-SM.pdf', 4, '1', '', '', 2, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '0000-00-00'),
(5, 'INAUGURASI 2020', 'Divisi Kemahasiswaan', '2021-12-19', '05:00:00', 'Kampus 1 STT', '1397-2943-1-SM.pdf', 4, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '2021-12-22'),
(9, 'INAUGURASI 2020', 'Kemahasiswaan', '2022-01-30', '13:28:00', 'wrwe', '1823427320902.pdf', 3, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '2022-01-23'),
(11, 'Mabim 2020', 'Kemahasiswaan', '2022-01-30', '13:40:00', 'dasdsa', '1823427320902.pdf', 4, '0', '', '', 11, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '2022-01-23'),
(12, 'Mabim 2020', 'Kesenian', '2022-02-01', '15:11:00', 'asdas', '1823427268248.pdf', 3, '0', '', '', 11, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '2022-02-01'),
(13, 'INAUGURASI 2020', 'Kemahasiswaan', '2022-02-01', '15:25:00', 'asd', '1823427320902.pdf', 2, '1', '', '', 11, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '2022-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `lampiran` int(11) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `pembuka` varchar(1000) NOT NULL,
  `tanggal_undangan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `acara` varchar(30) NOT NULL,
  `penutup` varchar(1000) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `status_approve` int(11) NOT NULL DEFAULT 0,
  `tgl_update` datetime NOT NULL,
  `penolak` varchar(30) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status_baca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `sifat`, `lampiran`, `perihal`, `tanggal_surat`, `kepada`, `pembuka`, `tanggal_undangan`, `waktu`, `tempat`, `acara`, `penutup`, `departemen`, `status_approve`, `tgl_update`, `penolak`, `note`, `status_baca`) VALUES
(6, 0, 'biasa', 1, 'undangan rapat', '2019-07-26', 'semua pegawai', ' Sehubungan dengan surat Saudara tanggal 22 Juli 2003, No. 225/U.IV/2003 tentang permintaan tenaga pengajar bahasa Indonesia untuk orang asing. Kami ingin menanggapi sebagai berikut.', '2019-07-19', '09:00:00', 'Gedung serbaguna', 'rapat', 'demikian surat ini kami buat agar dapat dipahami, atas perhatiannya kami ucapkan terimakasih', '', 4, '2019-07-19 11:08:17', '', '', '1'),
(11, 0, 'penting', 234, 'Eum rerum nemo porro quidem ni', '2019-07-19', 'Officia incidunt quas sapiente', 'Et tempora sit deserunt sit quo qui excepturi assumenda iusto.', '2019-09-18', '01:07:00', 'Illo harum dolores eum corpori', 'Provident excepturi est velit ', 'Molestias et ut atque voluptas.', '', 4, '2019-07-19 19:58:37', 'kabag', ' tanggalnya ganti wey', '1'),
(12, 0, 'biasa', 1, 'asda ', '2019-07-24', 'semua manusia baper ', 'adadacscsa', '2019-07-22', '13:00:00', 'sadas ', 'adadxz ', 'xasdxeaf3crdfewdfcwefcweaswa', 'organisasi', 4, '2021-09-11 13:43:04', 'asisten', ' ', '1'),
(14, 0, 'biasa', 339, 'Laudantium officia cum.', '2019-07-24', 'Hic aut autem omnis.', 'Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf os', '2019-10-01', '02:00:00', 'Et eveniet suscipit eveniet. S', 'Mollitia est rerum ut. Sit sae', 'Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Perspiciatis laudantium fugiat reiciendis libero et inventore aut quae quos.nijfdksnjdsf  odsknf odjs fodsknfosdf osdkfnowiekndf owjcsd xfocwenidofkcnwokdlf cowknfdcoiwrkldnfcowekdlfn coekfnc Voluptas numquam similique alias repellendus et voluptates nemo officiis.', 'umum', 4, '2019-07-24 17:20:32', '', '', '1'),
(15, 0, 'biasa', 182, 'Unde rerum nesciunt omnis sed ', '2019-07-24', 'Harum dolores aliquid deserunt', 'Vero nulla facere officiis quo in eligendi hic molestias.', '2019-07-23', '02:04:00', 'Similique occaecati sint modi ', 'Deserunt autem officiis nisi q', 'Nisi dolor ut enim.', 'organisasi', 4, '2021-09-11 14:45:44', 'asisten', ' ini beda user staff', '1'),
(16, 0, 'biasa', 37, 'Laborum sed provident.', '2019-07-25', 'Suscipit est magnam dolor aut ', 'Accusantium sunt ipsam qui aut.', '2018-12-15', '16:59:00', 'Dolore eum quia voluptates dig', 'Exercitationem deserunt est au', 'Qui et aut.', 'umum', 1, '2021-09-11 14:51:31', '', '', '1'),
(17, 0, 'penting', 322, 'Vel nam earum sunt quia quis o', '2019-07-25', 'Distinctio quaerat eveniet sit', 'Assumenda aut illum iste.', '2019-11-09', '08:05:00', 'Perferendis non mollitia imped', 'Modi et in dolore. Possimus ut', 'Sed quia aut ullam.', 'umum', 4, '2021-09-06 16:11:20', '', '', '1'),
(18, 0, 'penting', 1, 'Pengajuan Dana', '2021-09-06', 'Sekda', 'Halo', '0000-00-00', '00:00:19', 'Kecamatan', 'Makan ', 'Bye', 'organisasi', 4, '2021-09-06 16:11:08', '', '', '1'),
(19, 0, 'biasa', 1, 'halo', '2021-09-07', 'Yth', 'sahasdhlsadklashd', '2021-09-07', '16:45:00', 'Jabar', 'asd', 'asd', 'organisasi', 4, '2021-09-07 16:48:16', '', '', '1'),
(20, 0, 'penting', 1, 'sads` ', '2021-09-11', 'ssfjasj ', 'sjjkaaskd', '2021-01-01', '23:59:00', 'asdg ', 'aksjd ', 'askjd', 'umum', 4, '2021-09-13 18:49:20', 'asisten', ' teliti', '1'),
(21, 0, 'biasa', 1, 'a ', '2021-10-06', 'a ', 'a', '2021-10-06', '08:49:00', 'a ', 'f ', 'f', 'organisasi', 1, '2021-10-07 10:58:53', 'kabag', ' ', '1'),
(22, 0, '', 1, 'halo', '2021-10-07', 'Olahraga', 'asd', '2021-10-07', '11:30:00', 'asd', 'asd', 'asd', 'organisasi', 1, '2021-10-07 11:36:03', '', '', '1'),
(23, 0, 'biasa', 1, 'halo', '2021-10-07', 'Olahraga', 'asd', '2021-10-07', '11:37:00', 'asd', 'as', 'asd', 'organisasi', 4, '2021-10-07 11:38:29', '', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `organisasi` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `departemen`, `organisasi`, `keterangan`, `jabatan`, `username`, `password`, `email`, `foto`) VALUES
(1, 'lee', 'tangerang', 'umum', '', '', 'kabag', 'kabagumum', '0a97543a52f5154db472f3ec4b3ed8b2', '', ''),
(3, 'KAPRODI', '', 'organisasi', 'Ketua Program Studi Teknik Informatika', 'Ketua Program Studi Teknik Informatika', 'kabag', 'kaprodi', '3c13922905d2bc454cc35e665335e2fd', 'kaprodi-humanika@gmal.com', ''),
(4, 'S. KEMAHASISWAAN', '', '', 'Departemen Kemahasiswaan HUMAS & HUBIN', 'Departemen  Kemahasiswaan HUMAS & HUBIN', 'asisten', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kemahasiswaan@gmail.com', ''),
(5, 'KETUA STT', '', '', 'Ketua STT Wastukancana Purwakarta', 'Ketua STT Wastukancana Purwakarta', 'sekda', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'stt@gmail.com', ''),
(6, 'ani', 'jakarta', 'umum', '', '', 'staff', 'staffumum', 'f9885d6dc89802b608a1db6169e1f32f', 'nuramaliashinta@gmail.com', ''),
(7, 'BEM', '', 'umum', 'Badan Eksekutif Mahasiswa (BEM)', 'Presiden BEM STT Wastukancana', 'kasubag', 'bem', 'd3c654d99bdfaf101e012bfe2810679e', 'bem@gmail.com', ''),
(10, 'HMTI', '', 'HMJ', 'Himpunan Mahasiswa Teknik Industri (HMTI)', 'Kahim HMTI', 'staff', 'hmti', 'ea6cb0070cf462c3900eada4836256be', 'hmti@gmail.com', ''),
(11, 'HUMANIKA', '', 'HMJ', 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', 'Kahim HUMANIKA', 'staff', 'humanika', 'ecdfa85d6459d49ecdaf1cdbb4b56ad0', 'humanika@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_history` (`id_lpj`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indeks untuk tabel `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id_lpj`),
  ADD KEY `lpj_id_user` (`lpj_id_user`);

--
-- Indeks untuk tabel `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `proposal_id_user` (`proposal_id_user`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
