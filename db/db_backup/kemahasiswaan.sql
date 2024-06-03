-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 10:15 AM
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
-- Database: `kemahasiswaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `persyaratan` text NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `link_pendaftaran` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `beasiswa_slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama`, `persyaratan`, `deskripsi`, `link_pendaftaran`, `gambar`, `tanggal`, `beasiswa_slug`) VALUES
(1, 'Nama Beasiswa 1', '<p>Persyaratan Beasiswa 1</p>\r\n', 'Deskripsi Beasiswa 1', 'Link Pendaftaran Beasiswa 1', 'beasiswa-11.png', '2022-01-10 09:22:50', 'nama-beasiswa-1.html'),
(2, 'Nama Beasiswa 2', '<p>Persyaratan Beasiswa 2</p>\r\n', 'Deskripsi Beasiswa 2', 'Link Pendaftaran Beasiswa 2', 'beasiswa-21.png', '2022-01-10 09:22:50', 'nama-beasiswa-2.html'),
(3, 'Nama Beasiswa 3', '<p>Persyaratan Beasiswa 3</p>\r\n', 'Deskripsi Beasiswa 3', 'Link Pendaftaran Beasiswa 3', 'beasiswa-31.png', '2022-01-10 09:22:50', 'nama-beasiswa-3.html');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `redaksi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `berita_id_user` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `berita_slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `redaksi`, `tanggal`, `gambar`, `kategori`, `berita_id_user`, `author`, `berita_slug`) VALUES
(1, 'MATERI DAN REKAMAN KEGIATAN BIMBINGAN TEKNIS PROGRAM KREATIVITAS MAHASISWA BAGI DOSEN PEMBIMBING PADA PERGURUAN TINGGI SWASTA DI LINGKUNGAN LLDIKTI4 TAHUN 2021', '<p>Materi Sesi 1 Palti</p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/10/Bimtek-PKM-untuk-Dosen.pdf\" target=\"_blank\">Bimtek-PKM-untuk-Dosen</a></p>\r\n\r\n<p>Materi Sesi 2 Fikri</p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/10/Materi-PKM_LLDIKTI4_Fikri_Oktober-2021.pdf\" target=\"_blank\">Materi-PKM_LLDIKTI4_Fikri_Oktober-2021</a></p>\r\n\r\n<p>Materi Pak Ahmad (Progress)</p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/10/PKM-LLDikti-IV-B.pdf\" target=\"_blank\">PKM-LLDikti-IV-B</a></p>\r\n\r\n<p><strong>Link Rekaman Zoom</strong></p>\r\n\r\n<p>Hari Ke-1:&nbsp;</p>\r\n\r\n<p><a href=\"https://us02web.zoom.us/rec/share/XYjWKsL5zY3IcxZKIcMhjOh3iF7EtHEhmfR0kPbGL8HaXmfPA5Ka-_vy_8WvWBY4.xGM0oAOO-JZvII3v\" target=\"_blank\">Link Rekaman Zoom Hari Ke-1</a></p>\r\n\r\n<p>Hari Ke-2:&nbsp;</p>\r\n\r\n<p><a href=\"https://us02web.zoom.us/rec/share/T-tmW7CW2s3iIUALl8E5xi7qIYluzwFhlAv50-lMC9iD4GXa2eqyGDiAmaJScujQ.eoXmrqWJhf7CSkZV\" target=\"_blank\">Link Rekaman Zoom Hari Ke-2</a></p>\r\n', '2021-10-13', 'MATERI_DAN_REKAMAN_KEGIATAN_BIMBINGAN_TEKNIS_PROGRAM_KREATIVITAS_MAHASISWA_(PKM)_BAGI_DOSEN_PEMBIMBING_PADA_PERGURUAN_TINGGI_SWASTA_DI_LINGKUNGAN_LLDIKTI4_TAHUN_2021.jpg', 'eksternal', 10, 'Departemen Kemahasiswaan HUMAS & HUBIN', 'materi-dan-rekaman-kegiatan-bimbingan-teknis-program-kreativitas-mahasiswa-bagi-dosen-pembimbing-pada-perguruan-tinggi-swasta-di-lingkungan-lldikti4-tahun-2021.html'),
(2, 'MONITORING DAN UJI PETIK PROGRAM MAHASISWA KIP KULIAH TAHUN 2021', '<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/Surat-Pemberitahuan-dan-Surat-Tugas-Monitoring-KIP-Kuliah-UKT-SPP-tahun-2020-dan-2021.pdf\" target=\"_blank\">Surat-Pemberitahuan-dan-Surat-Tugas-Monitoring-KIP-Kuliah-UKT-SPP-tahun-2020-dan-2021</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/Surat-Biaya-Kedatangan-Mhs-KIP-2021.pdf\" target=\"_blank\">Surat-Biaya-Kedatangan-Mhs-KIP-2021</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/KUESIONER-MONITORING-LLDIKTI-4-ISIAN-SAMPLE-MAHASISWA-KIP-KULIAH.docx\" target=\"_blank\">KUESIONER-MONITORING-LLDIKTI-4-ISIAN-SAMPLE-MAHASISWA-KIP-KULIAH</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/KUESIONIER-MONITORING-LLDIKTI-4-ISIAN-PENGELOLA-KIP-PT-1.docx\" target=\"_blank\">KUESIONIER-MONITORING-LLDIKTI-4-ISIAN-PENGELOLA-KIP-PT-1</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2020-LLDIKTI-PTS.docx\" target=\"_blank\">PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2020-LLDIKTI-PTS</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2021-LLDIKTI-dengan-PTS.docx\" target=\"_blank\">PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2021-LLDIKTI-dengan-PTS</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/jadwal-monev-dan-uji-petik-KIP-KULIAH-LLDIKTI-4-.pdf\" target=\"_blank\">jadwal-monev-dan-uji-petik-KIP-KULIAH-LLDIKTI-4-</a></p>\r\n', '2021-12-01', 'MONITORING_DAN_UJI_PETIK_PROGRAM_MAHASISWA_KIP_KULIAH_TAHUN_2021.jpg', 'eksternal', 10, 'Departemen Kemahasiswaan HUMAS & HUBIN', 'monitoring-dan-uji-petik-program-mahasiswa-kip-kuliah-tahun-2021.html');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`, `status`, `tanggal`) VALUES
(1, 'Apakah ada beasiswa ditahun akademik 2021/2022', 'Iya ada, informasi akan disampaikan melalui website kemahasiswaan', 'khusus', '2022-01-10 04:36:31'),
(2, 'Bagaimana untuk mendapatkan informasi kegiatan mahasiswa', 'Silahkan kunjungi situs resmi dari bagian kemahasiswaan STT. Wastukancana Purwakarta', 'umum', '2022-01-10 04:36:31'),
(3, 'Bagaimana untuk bisa mendapatkan informasi kalender akademik', 'Kunjungi situs resmi STT. Wastukancana Purwakarta', 'umum', '2022-01-10 04:36:31'),
(4, 'Terimakasih', 'Kembali Kasih', 'khusus', '2022-01-10 04:36:31'),
(5, 'Hallo', 'Hi', 'umum', '2022-01-10 04:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `history`
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
-- Dumping data for table `history`
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
(68, 23, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-10-07 11:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `peserta` varchar(100) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan_id_user` int(11) NOT NULL,
  `ormawa` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kegiatan_slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama`, `kategori`, `peserta`, `jumlah_peserta`, `tanggal`, `kegiatan_id_user`, `ormawa`, `deskripsi`, `status`, `gambar`, `kegiatan_slug`) VALUES
(1, 'Serah Terima Bantuan UKT/SPP KEMENDIKBUDRISTEK', 'pendpenga', 'Mahasiswa STT Wastukancana', 100, '2021-11-11', 10, 'Departemen Kemahasiswaan HUMAS & HUBIN', '<p>@lpmwaska_id</p>\r\n\r\n<p>Serah Terima Bantuan UKT/SPP KEMENDIKBUDRISTEK<br />\r\n<br />\r\nPenyerahan bantuan UKT/SPP dari KEMENDIKBUDRISTEK kamis, 11/11/2021, dilaksanakan di auditorium lantai 5 STT Wastukancana Purwakarta. Kegiatan dilaksanakan oleh ketua STT Wastukancana dan WK3 beserta jajarannya dan juga mahasiswa yang mendapatkan bantuan tersebut.<br />\r\n<br />\r\nSelengkapanya di lpm-stt-wastukancana.com<br />\r\n<br />\r\nReporter :&nbsp;@aden_fadhiel<br />\r\nRedaktur : @r_wirantika</p>\r\n', 'terpublikasi', 'Kemahasiswaan_Serah_Terima_Bantuan_UKTSPP_KEMENDIKBUDRISTEK.jpg', 'serah-terima-bantuan-ukt/spp-kemendikbudristek.html'),
(2, 'Serah Terima Jabatan Presiden BEM Periode 2021-2022', 'pkm', 'Mahasiswa STT Wastukancana', 100, '2022-01-06', 11, 'Badan Eksekutif Mahasiswa (BEM)', '<p>@bem_waska</p>\r\n\r\n<p>Selamat atas terpilihnya saudari Fredelida Gamboa. M sebagai presiden BEM Periode 2021-2022 Semoga amanah dalam menjalankan tugas sesuai dengan konstitusi BEM STT WASTUKANCANA PURWAKARTA</p>\r\n', 'terpublikasi', 'BEM_Serah_Terima_Jabatan_Presiden_BEM_Periode_2021-20223.jpg', 'serah-terima-jabatan-presiden-bem-periode-2021-2022.html'),
(3, 'Pengabdian Masyarakat Periode 2021-2022', 'pkm', 'Mahasiswa HMTI STT Wastukancana ', 100, '2022-01-09', 12, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '<p>@hmti_sttwastukancana</p>\r\n\r\n<p>[Pengabdian Masyarakat]<br />\r\n<br />\r\nHallo sahabat engineers!<br />\r\n<br />\r\nKalian udah gak asing kan dengan yang namanya Pengabdian Masyarakat?, secara kegiatan ini adalah kegiatan yang perlu dilakukan oleh tiap Mahasiswa karena merupakan salah satu dari Tridharma Perguruan Tinggi yaitu Pendidikan dan Pengajaran,Penelitian dan Pengembangan serta yang terkahir yaitu Pengabdian Kepada Masyarakat<br />\r\n<br />\r\nPada kegiatan inilah mahasiswa mengimplementasikan Tridharma Perguruan Tinggi poin ke-3, pada Pengabdian Masyarakat kali ini HMTI STT Wastukancana memiliki tema &quot;Meningkatkan Kesadaran Dan Pengetahuan Masyarakat Perihal Pentingnya Pengelolaan Sampah&quot;<br />\r\n<br />\r\nBisa dilihat di Slide ke-2,Pada kali ini kita terfokus pada lingkungan sekitar yang dimana kita membangun Tempat Pembuangan Sementara/TPS dan mengedukasi masyarakat tentang pemanfaatan sampah dan teknologi<br />\r\n<br />\r\nSemoga acara ini dapat berjalan lancar sampai akhir dan tentunya menjadi manfaat bagi masyarakat, Salam Unity.????<br />\r\n<br />\r\n#hmtievent<br />\r\n#hmtiwaska<br />\r\n#salamunity<br />\r\n#pengabdianmasyarakat</p>\r\n', 'terpublikasi', 'HMTI_Pengabdian__Masyarakat_Periode_2021-20222.jpg', 'pengabdian-masyarakat-periode-2021-2022.html'),
(4, 'Masa Bimbingan 2021', 'pendpenga', 'Mahasiswa Mesin STT Wastukancana', 100, '2022-01-08', 13, 'Himpunan Mahasiswa Mesin (HMM)', '<p>@hmm_sttwastukancana (Late post)<br />\r\n<br />\r\nAssalamualaikum wr, wb.<br />\r\n<br />\r\nKami Himpunan Mahasiswa Mesin STT Wastukancana Purwakarta telah melaksanakan kegiatan pengkaderan yaitu masa bimbingan (mabim), pada tanggal 8-9 Januari 2022.<br />\r\nAllhamdulillah pada kegiatan tersebut berjalan dengan lancar.<br />\r\n<br />\r\nTerimakasih kepada seluruh elemen yang telah membantu untuk kelancaran kegiatan tersebut.<br />\r\n<br />\r\nSalam Solidarity Forever ✊<br />\r\nMESIN.</p>\r\n', 'terpublikasi', 'HMM_Masa_Bimbingan_20212.jpg', 'masa-bimbingan-2021.html'),
(5, 'Technical Meeting MABIM 2021', 'pendpenga', 'Seluruh Peserta MABIM 2021', 100, '2021-10-23', 14, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '<p>@humanika_sttwastukancana</p>\r\n\r\n<p><br />\r\nAssalamu&#39;alaikum wr.wb.<br />\r\n<br />\r\nDiberitahukan kepada seluruh Peserta MABIM 2021 bahwasannya akan diadakannya Technical meeting pada :<br />\r\nHari/Tanggal : Sabtu , 23 Oktober 2021<br />\r\nWaktu : 15.00 WIB s/d Selesai &amp; 19.00 s/d selesai<br />\r\nTempat : STT Wastukancana Purwakarta<br />\r\nPerihal : Pemaparan kebutuhan Masa Bimbingan (MABIM) HUMANIKA 2021<br />\r\n<br />\r\nMaka dari itu diharapkan untuk seluruh Peserta MABIM 2021 diharapkan untuk hadir dalam acara Technical Meeting.<br />\r\nAdapun 2 sesi yang panitia selenggarakan kami harap dari kelas pagi ikut sesi 1 ( 15.00 WIB S/d Selesai ) lalu untuk kelas malam bisa mengikuti sesi 2 ( 19.00 WIB s/d Selesai )<br />\r\nDemikian pemberitahuan ini kami sampaikan terimakasih atas segala kerjasamanya, kurang lebihnya mohon maaf .<br />\r\nBilahitaufik walhidayah<br />\r\nWasalamu&#39;alaikum wr.wb<br />\r\n<br />\r\n<br />\r\n#HUMANIKA<br />\r\n#LOW PROFILE AND NO TALK ONLY</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'terpublikasi', 'HUMANIKA_Technical_Meeting_MABIM_20211.jpg', 'technical-meeting-mabim-2021.html'),
(6, 'MUMAS HM2I Ke-XIX', 'pendpenga', 'Mahasiswa Himpunan Mahasiswa Manajemen Industri', 100, '2021-09-05', 15, 'Himpunan Mahasiswa Manajemen Industri (HM2I)', '<p>@hm2i_stt</p>\r\n\r\n<p><br />\r\nAlhamdulillah MUMAS HM2I Ke-XIX telah terlaksana dan berjalan dengan lancar.<br />\r\nDan selamat kepada kang Sandhy sebagai Ketua umum Himpunan Mahasiswa Manajemen Industri (HM2I) STT Wastukancana Periode 2021-2022.<br />\r\nSemoga amanah dan selalu semangat menjalankan tanggung jawab nya.<br />\r\n#hm2i #hm2ibisa</p>\r\n', 'terpublikasi', 'HM2I_MUMAS_HM2I_Ke-XIX2.jpg', 'mumas-hm2i-ke-xix.html'),
(7, 'Kuliah Tamu Sustainable Textile', 'pendpenga', 'Mahasiswa Teknik Tekstil STT Wastukancana', 100, '2022-01-08', 16, 'Himpunan Mahasiswa Teknik Tekstil (HIMATEK)', '<p>@himateks_sttwastukancana</p>\r\n\r\n<p>[KULIAH TAMU]<br />\r\n<br />\r\nHimpunan Mahasiswa Teknik Tekstil STT Wastukancana Purwakarta Proudly Presents<br />\r\n<br />\r\nMengangkat tema &quot;Sustainable Textile&quot;<br />\r\n<br />\r\nBersama dengan Randy Azmi Chairul R,S.ST,M.M. dari PT. Indo Bharat Rayon sebagai pembicara dan Naufal Arafah, M.Tr.T sebagai moderator.<br />\r\n<br />\r\nSave the date!<br />\r\nHari/tanggal : Senin, 10 Januari 2022<br />\r\nWaktu : 18.30 WIB - Selesai<br />\r\n<br />\r\nVia Zoom Live<br />\r\n<br />\r\nUntuk registrasi dapat dilakukan pada link https://bit.ly/KuliahTamuSTTWastukancana<br />\r\n<br />\r\nLink Zoom : https://us02web.zoom.us/j/84563548965?pwd=anBlMGd5Qy96VnZpK2ptQ0RZQnFWQT09<br />\r\n<br />\r\nContact Person (Whatsapp):<br />\r\nUMAY : 0896-7149-7075<br />\r\n<br />\r\n#sttwastukancana<br />\r\n#himateks<br />\r\n#forlifeforever</p>\r\n', 'terpublikasi', 'HIMATEK_Kuliah_Tamu_Sustainable_Textile1.jpg', 'kuliah-tamu-sustainable-textile.html'),
(8, 'DIRGAHAYU MAPALAWASKA KE 20 TAHUN', 'pkm', 'Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)', 100, '2021-09-09', 17, 'Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)', '<p>@mapalawaska</p>\r\n\r\n<p>[ DIRGAHAYU MAPALAWASKA KE 20 TAHUN ]<br />\r\n<br />\r\nSelamat Bertambah usia organisasi Ku, semoga makin kompak , makin jaya dan semakin dikenal oleh masyarakat luas, yang terpenting semakin mengabdi dan bermanfaat bagi semua masyarakat. Aamiin ya Allah yarobball alamin ????<br />\r\n<br />\r\nSALAM RIMBA<br />\r\nWAWEWOW<br />\r\nLEBIH BAIK 1 NAGA DARIPADA 1000 CACING.<br />\r\n<br />\r\n#DIRGAHAYUMAPALAWASKA2021<br />\r\n#mapalapurwakarta<br />\r\n#wawewow</p>\r\n', 'terpublikasi', 'MAPALAWASKA_DIRGAHAYU_MAPALAWASKA_KE_20_TAHUN1.jpg', 'dirgahayu-mapalawaska-ke-20-tahun.html'),
(9, 'LPM WASKA Mahasiswa STT Wastukancana Gelar Galang Dana Bantuan Korban Bencana Alam', 'pkm', 'Mahasiswa STT Wastukancana', 100, '2021-02-02', 18, 'Lembaga Pers Mahasiswa Wastukancana (LPM Waska)', '<p>@lpmwaska_id</p>\r\n\r\n<p>Dengan tetap melaksanakan protokol kesehatan,gabungan dari ORMAWA (Organisasi Mahasiswa) STT.Wastukancana, melaksanakan aksi penggalangan dana untuk korban longsor di daerah Sumedang,yang dilaksanakan dilampu merah Sadang pada Sabtu (30/01/21) dan Minggu (31/01/21),pukul 15.00-18.00 sore hari.<br />\r\n<br />\r\n&quot;Jumlah dana yang terkumpul dari Hari Sabtu dan Minggu yaitu sebesar Rp. 3.844.000.00. Rencananya hasil dari donasi tersebut akan diserahkan melalui BNPB Sumedang namun diserahkannya berupa dana ataupun barang masih dalam tahap perencanaan.&quot; Pungkasnya.<br />\r\n<br />\r\nBerita Selengkapnya simak di Website LPM WASKA</p>\r\n', 'terpublikasi', 'LPM_WASKA_Mahasiswa_STT_Wastukancana_Gelar_Galang_Dana_Bantuan_Korban_Bencana_Alam.jpg', 'lpm-waska-mahasiswa-stt-wastukancana-gelar-galang-dana-bantuan-korban-bencana-alam.html'),
(10, 'Pendaftaran Masa Taaruf Penerimaan Anggota Baru DIPERPANJANG hingga 22 Januari 2021', 'pendpenga', 'Mahasiswa STT Wastukancana', 100, '2022-01-19', 19, 'Lembaga Dakwah Kampus Wastukancana (LDK Waska)', '<p>@ldkwaska</p>\r\n\r\n<p>Assalamualaikum warahmatulahi wabarakatuh<br />\r\nPendaftaran Masa Ta&#39;aruf Penerimaan Anggota Baru<br />\r\nDIPERPANJANG<br />\r\nhingga 22 Januari 2021<br />\r\n<br />\r\nKepada teman - teman mahasiswa aktif STT Wastukancana Purwakarta. Mari bergabung dengan kami di LDK WASKA untuk sama - sama belajar menjadi khoiru ummah ( sebaik-baik umat ).<br />\r\n<br />\r\nCara pendaftaran :<br />\r\n1. Mengambil formulir pendaftaran ke Sekretariat LDK WASKA. ATAU<br />\r\n2. Mengisi formulir pendaftaran di google form<br />\r\nhttps://bit.ly/3pvxWHH<br />\r\n<br />\r\nYuk bergabung dengan LDK WASKA!<br />\r\nKita tunggu, yaaa!<br />\r\n<br />\r\nWassalamualaikum warahmatullahi wabarakatuh</p>\r\n', 'terpublikasi', 'LDKWASKA_Pendaftaran_Masa_Taaruf_Penerimaan_Anggota_Baru_DIPERPANJANG_Hingga_22_Januari_20212.png', 'pendaftaran-masa-taaruf-penerimaan-anggota-baru-diperpanjang-hingga-22-januari-2021.html'),
(11, 'mapala', 'penlpenge', 'anggota', 100, '2022-01-26', 17, 'Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)', '<p>berjalan lancar</p>\r\n', 'terpublikasi', 'BEM_Serah_Terima_Jabatan_Presiden_BEM_Periode_2021-2022.jpg', 'mapala.html');

-- --------------------------------------------------------

--
-- Table structure for table `lpj`
--

CREATE TABLE `lpj` (
  `id_lpj` int(11) NOT NULL,
  `judul_lpj` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `divisi` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `lpj` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `status_approve` int(11) NOT NULL,
  `status_baca` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `penolak` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpj`
--

INSERT INTO `lpj` (`id_lpj`, `judul_lpj`, `divisi`, `lpj`, `status_approve`, `status_baca`, `note`, `penolak`) VALUES
(1, 'Porka', 'Olahraga', 'SERTIFIKAT AMBARA KRIANAJAYA.pdf', 4, '1', '', ''),
(5, 'Lensha 2020', 'Kemahasiswaan', 'Kuis Pemrograman Web Lanjut.pdf', 3, '1', '', ''),
(6, 'Humday 2020', 'Kesenian', 'Pertemuan 15 - Sistem Login_Logout Pada Codeigniter.pdf', 6, '1', 'perbaiki', 'kabag'),
(7, 'Lensha 2020', 'Kemahasiswaan', 'Kuis Pemrograman Web Lanjut.pdf', 6, '1', ' revisi', 'asisten');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `pengumuman` varchar(128) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `pengumuman`, `status`, `tanggal`) VALUES
(1, 'Pengumuman Kemahasiswaan', 'terpublikasi', '2022-01-10 03:55:58'),
(2, 'Pengumuman Ormawa', 'terpublikasi', '2022-01-10 03:55:58'),
(3, 'Pengumuman Kegiatan Kemahasiswaan ', 'terpublikasi', '2022-01-10 03:55:58'),
(4, 'Pengumuman Departemen Kemahasiswaan HUMAS  & HUBIN', 'terpublikasi', '2022-01-14 04:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
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
  `penolak` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul_proposal`, `divisi`, `tgl`, `waktu`, `tempat`, `lampiran`, `status_approve`, `status_baca`, `note`, `penolak`) VALUES
(2, 'Porka', 'Olahraga', '2021-10-11', '09:00:00', 'Galaxy Sadang', 'Pertemuan 2 - Pengenalan Codeigniter dan Struktur Direktori CI.pdf', 4, '1', '', ''),
(3, 'Mabim 2020', 'Kemahasiswaan', '2021-10-16', '05:00:00', 'Sahejo', 'Kuis Pemrograman Web Lanjut.pdf', 6, '1', ' ', 'asisten');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id_quotes` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `quotes` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id_quotes`, `nama`, `status`, `quotes`) VALUES
(1, 'Mr. H', 'mahasiswa', 'Keep Studying | Humility'),
(2, 'Ambara', 'mahasiswa', 'Be Kind to Yourself'),
(3, 'Nama Pemilik Quotes Dosen', 'dosen', 'Deskripsi Quotes Dosen'),
(4, 'Nama Pemilik Quotes Karyawan', 'karyawan', 'Deskripsi Quotes Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `deskripsi`, `gambar`, `tanggal`) VALUES
(1, 'Slider-1', 'slider-1.jpg', '2022-01-09 17:32:59'),
(2, 'Slider-2', 'slider-2.jpg', '2022-01-09 17:33:23'),
(3, 'Slider-3', 'slider-3.jpg', '2022-01-09 17:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
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
-- Dumping data for table `surat`
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
-- Table structure for table `unduhan`
--

CREATE TABLE `unduhan` (
  `id_unduhan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unduhan`
--

INSERT INTO `unduhan` (`id_unduhan`, `nama`, `tanggal`, `lampiran`) VALUES
(1, 'File Unduhan 1', '2021-11-14', 'CodeIgniter-3_1_10-master.zip'),
(2, 'File Unduhan 2', '2021-11-15', 'A_Brosur_PMB_2021.pdf'),
(3, 'File Unduhan 3 berisi file yang dapat diunduh oleh siapa saja dan kapan saja', '2021-11-22', 'A_Format_Penulisan_KP_dan_SKRIPSI.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `organisasi` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `departemen`, `organisasi`, `keterangan`, `username`, `password`, `email`) VALUES
(8, 'Administrator', 'Purwakarta', 'Kemahasiswaan', 'Departemen Kemahasiswaan HUMAS & HUBIN', 'Administrator', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'mail@mail.com'),
(9, 'Dede Ardi Rajab, S.T., M.T.', 'Purwakarta', 'Kemahasiswaan', 'Departemen Kemahasiswaan HUMAS & HUBIN', 'Kepala', 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 'mail@mail.com'),
(10, 'Mutiara Andayani Komara, S.T., M.Kom.', 'Purwakarta', 'Kemahasiswaan', 'Departemen Kemahasiswaan HUMAS & HUBIN', 'Staf', 'staf', '7b8a17c3f48d4453fde0fd74b4fa9212', 'mail@mail.com'),
(11, 'BEM', 'Purwakarta', 'BEM', 'Badan Eksekutif Mahasiswa (BEM)', 'Presiden BEM', 'bem', 'd3c654d99bdfaf101e012bfe2810679e', 'mail@mail.com'),
(12, 'HMTI', 'Purwakarta', 'HMJ', 'Himpunan Mahasiswa Teknik Industri (HMTI)', 'KAHIM HMTI', 'hmti', 'ea6cb0070cf462c3900eada4836256be', 'mail@mail.com'),
(13, 'HMM', 'Purwakarta', 'HMJ', 'Himpunan Mahasiswa Mesin (HMM)', 'KAHIM HMM', 'hmm', 'a5175faf6dc24adc7eda4f9cfc721b47', 'mail@mail.com'),
(14, 'HUMANIKA', 'Purwakarta', 'HMJ', 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', 'KAHIM HUMANIKA', 'humanika', 'ecdfa85d6459d49ecdaf1cdbb4b56ad0', 'mail@mail.com'),
(15, 'HM2I', 'Purwakarta', 'HMJ', 'Himpunan Mahasiswa Manajemen Industri (HM2I)', 'KAHIM HM2I', 'hm2i', 'b4ff521c771b65adb783f9a7615968ed', 'mail@mail.com'),
(16, 'HIMATEK', 'Purwakarta', 'HMJ', 'Himpunan Mahasiswa Teknik Tekstil (HIMATEK)', 'KAHIM HIMATEK', 'himatek', '1d1401c713748ac67a0dd36ee11bc56d', 'mail@mail.com'),
(17, 'MAPALAWASKA', 'Purwakarta', 'UKM', 'Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)', 'Ketua MAPALAWASKA', 'mapalawaska', 'c0afb2e44ca4b335c02286938471dbe1', 'mail@mail.com'),
(18, 'LPM Waska', 'Purwakarta', 'UKM', 'Lembaga Pers Mahasiswa Wastukancana (LPM Waska)', 'Ketua LPM Waska', 'lpmwaska', 'b20bc40bcfe5189c01325f456badbafa', 'mail@mail.com'),
(19, 'LDK Waska', 'Purwakarta', 'UKM', 'Lembaga Dakwah Kampus Wastukancana (LDK Waska)', 'Ketua LDK Waska', 'ldkwaska', 'd636e94d11a54172c91cff3ac45d1fd4', 'mail@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `berita_id_user` (`berita_id_user`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_history` (`id_lpj`),
  ADD KEY `id_proposal` (`id_proposal`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `kegiatan_id_user` (`kegiatan_id_user`);

--
-- Indexes for table `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id_lpj`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id_quotes`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `unduhan`
--
ALTER TABLE `unduhan`
  ADD PRIMARY KEY (`id_unduhan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id_quotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id_unduhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`berita_id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`kegiatan_id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
