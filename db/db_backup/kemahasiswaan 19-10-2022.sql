-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:37 PM
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
  `deskripsi` text NOT NULL,
  `keunggulan` text NOT NULL,
  `tanggal_penting` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `link_pendaftaran` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL,
  `beasiswa_slug` varchar(200) NOT NULL,
  `kuota_mhs` int(11) NOT NULL,
  `kuota_if` int(11) NOT NULL,
  `kuota_tm` int(11) NOT NULL,
  `kuota_ti` int(11) NOT NULL,
  `kuota_mi` int(11) NOT NULL,
  `kuota_teks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama`, `persyaratan`, `deskripsi`, `keunggulan`, `tanggal_penting`, `kategori`, `link_pendaftaran`, `gambar`, `tanggal`, `status`, `beasiswa_slug`, `kuota_mhs`, `kuota_if`, `kuota_tm`, `kuota_ti`, `kuota_mi`, `kuota_teks`) VALUES
(1, 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', '<p>Bagi Mahasiswa yang ingin mendapatkan bantuan UKT/SPP Mahasiswa Semester Gasal Tahun Akademik 2021/2022 selama 1 semester (Semester Gasal TA 2021/2022) wajib memenuhi persyaratan sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Mahasiswa/i aktif Sekolah Tinggi Teknologi Wastukancana</li>\r\n	<li>Mahasiswa harus melengkapi data NIM dan NIK mahasiswa pada surat Permohonan</li>\r\n	<li>Minimal IPK 3.00</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kriteria mahasiswa penerima bantuan diantaranya sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Mahasiswa yang ekonomi orang tuanya terdampak Pandemi Covid-19 (WAJIB melampirkan surat keterangan terdampak Pandemi-19 dari RT/RW)</li>\r\n	<li>Mempunyai integritas baik/berprestasi bidang akademik/non akademik (WAJIB melampirkan sertifikat / Piagam Prestasi)</li>\r\n	<li>Tidak sedang/pernah mendapatkan sanksi dari institusi (WAJIB Melampirkan Surat Pernyataan)</li>\r\n	<li>Tidak sedang menerima beasiswa dari pihak lain.</li>\r\n</ol>\r\n', '<p>Berdasarkan Surat dari LLDIKTI IV Nomor : 4974/LL4/KM/2021 tentang Pemberitahuan Program Bantuan UKT/SPP Tahun 2021 tanggal 10 Agustus 2021, Buku Pedoman Pelaksanaan Bantuan UKT/SPP Mahasiswa Semester Gasal Tahun Akademik 2021/2022, maka bagi Mahasiswa yang ingin mendapatkan bantuan tersebut selama 1 semester (Semester Gasal TA 2021/2022).</p>\r\n', '<p>Mahasiswa yang telah dinyatakan sebagai penerima bantuan tersebut akan memperoleh bantuan biaya UKT/SPP sebesar Rp. 2.4 jt selama 1 semester (Semester Gasal TA 2021/2022).</p>\r\n', '<p><strong>Pendaftaran terakhir</strong> paling lambat sampai tanggal <strong>18 September 2021</strong>.</p>\r\n', 'nasional', '../beasiswa_daftar', 'UKT-SPP.jpg', '2022-06-22 09:14:41', 'terpublikasi', 'program-bantuan-ukt-spp-semester-gasal-ta-2021-2022.html', 0, 0, 0, 0, 0, 0),
(2, 'KIP-Kuliah 2022', '<p>Persyaratan untuk mendaftar Program KIP Kuliah Tahun 2022 adalah sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>Penerima KIP-KULIAH adalah&nbsp;siswa SMA atau sederajat yang lulus atau akan lulus pada tahun berjalan&nbsp;atau telah&nbsp;dinyatakan lulus maksimal 2 tahun sebelumnya, serta memiliki&nbsp;NISN, NPSN dan NIK yang valid;</li>\r\n	<li>Memiliki&nbsp;potensi akademik baik&nbsp;tetapi memiliki&nbsp;keterbatasan ekonomi&nbsp;yang didukung bukti dokumen yang sah;</li>\r\n	<li>Siswa SMA/ SMK/ MA atau sederajat yang lulus&nbsp; pada tahun berjalan&nbsp; dengan&nbsp; potensi akademik baik dan&nbsp;mempunyai Kartu KIP atau&nbsp; memiliki Kartu Keluarga Sejahtera atau terdata di Data Terpadu Kesejahteraan Sosial (DTKS) Kemensos;</li>\r\n	<li>Lulus seleksi penerimaan mahasiswa baru, dan diterima di&nbsp;PTN atau PTS pada Prodi dengan Akreditasi A atau B, dan dimungkinkan&nbsp;dengan pertimbangan tertentu pada Prodi dengan Akreditasi C.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pendaftaran KIP-Kuliah menggunakan <strong>Nomor Induk Siswa Nasional (NISN)</strong>, <strong>Nomor Pokok Sekolah Nasional (NPSN)</strong>, dan <strong>Nomor Induk Kependudukan (NIK)</strong>. Pastikan NISN, NPSN, dan NIK dari calon peserta KIP Kuliah valid, sesuai data yang tercatat di Data Pokok Pendidikan (Dapodik), KemendikbudRistek.</p>\r\n\r\n<p>Pada saat pendaftaran,&nbsp;siswa&nbsp;memasukkan&nbsp;<strong>NIK</strong>, <strong>NISN</strong>, <strong>NPSN&nbsp;</strong>dan&nbsp;<strong>alamat email</strong>&nbsp;yang <strong>valid </strong>dan <strong>aktif</strong>;</p>\r\n', '<p>KIP-Kuliah diperuntukan bagi <strong>Mahasiswa Baru</strong> untuk memberikan akses kepada seluruh siswa di Indonesia dalam menggapai cita-cita melalui pendidikan tinggi. KIP-Kuliah berlaku untuk jalur seleksi masuk perguruan tinggi salah satunya seleksi mandiri PTS.</p>\r\n', '<p>Beberapa KEUNGGULAN KIP Kuliah:</p>\r\n\r\n<ol>\r\n	<li>Jumlahnya lebih banyak dari Bidikmisi yakni lebih dari 400.000 orang untuk tahun 2020. (bidikmisi 2019 130.000 beasiswa).</li>\r\n	<li>Lebih banyak memberi akses kepada Pendidikan vokasi.</li>\r\n	<li>Sistem terintegrasi dengan Kampus Merdeka dan Merdeka Belajar di Perguruan Tinggi.</li>\r\n	<li>KIP Kuliah terbagi menjadi 2 kelompok yaitu KIP Kuliah dan KIP Kuliah Afirmasi.</li>\r\n	<li>KIP Kuliah Afirmasi, antara lain meliputi Bantuan Biaya Program Afirmasi Pendidikan Tinggi (ADik) untuk ADik Papua, ADik Papua Barat dan ADik 3T.</li>\r\n	<li>Keunggulan bagi penerima KIP Kuliah: pembebasan biaya pendaftaran seleksi masuk PT, pembebasan biaya kuliah dan memperoleh bantuan biaya hidup.</li>\r\n	<li>Siswa penerima program KIP Kuliah akan memperoleh bantuan biaya hidup sebesar Rp. 700rb/bulan yang dibayarkan setiap semester, sesuai masa studi normal (S1 maksimal 8 Semester, total selama studi maksimal Rp. 33.6 jt; D3 maksimal 6 Semester, total selama studi maksimal Rp. 25.2 jt; D2 maksimal 4 Semester, total selama studi maksimal Rp. 16.8 jt; D1 maksimal 2 Semester, total selama studi maksimal Rp. 8.4 jt).</li>\r\n</ol>\r\n', '<p><strong>Jadwal Kartu Indonesia Pintar Kuliah</strong><br />\r\nTanggal penting jadwal pendaftaran dan penutupan Kartu Indonesia Pintar Kuliah Tahun 2022</p>\r\n\r\n<p>Pendaftaran Akun Siswa KIP-Kuliah<br />\r\n<strong>Dibuka :</strong> 02 Februari 2022<br />\r\n<strong>Ditutup :</strong> 31 Oktober 2022</p>\r\n\r\n<p>Seleksi Mandiri PTS<br />\r\n<strong>Dibuka</strong> : 08 Juni 2022<br />\r\n<strong>Ditutup </strong>: 31 Oktober 2022</p>\r\n', 'nasional', 'https://kip-kuliah.kemdikbud.go.id/', 'KIP-Kuliah.png', '2022-06-20 05:13:59', 'terpublikasi', 'kip-kuliah-2022.html', 0, 0, 0, 0, 0, 0),
(3, 'Beasiswa UKT Semester Gasal TA 2022-2023', '<p>Persyaratan Beasiswa</p>\r\n', '<p>Deskripsi Beasiswa</p>\r\n', '<p>Keunggulan Beasiswa</p>\r\n', '<p>Tanggal Penting Beasiswa</p>\r\n', 'nasional', '../beasiswa_daftar', 'beasiswa.png', '2022-08-22 09:40:07', 'terpublikasi', 'beasiswa-ukt-semester-gasal-ta-2022-2023.html', 1, 2, 3, 4, 5, 6);

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
(1, 'Materi dan Rekaman Kegiatan Bimbingan Teknis Program Kreativitas Mahasiswa Bagi Dosen Pembimbing Pada Perguruan Tinggi Swasta di Lingkungan LLDIKTI 4 Tahun 2021', '<p>Materi Sesi 1 Palti</p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/10/Bimtek-PKM-untuk-Dosen.pdf\" target=\"_blank\">Bimtek-PKM-untuk-Dosen</a></p>\r\n\r\n<p>Materi Sesi 2 Fikri</p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/10/Materi-PKM_LLDIKTI4_Fikri_Oktober-2021.pdf\" target=\"_blank\">Materi-PKM_LLDIKTI4_Fikri_Oktober-2021</a></p>\r\n\r\n<p>Materi Pak Ahmad (Progress)</p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/10/PKM-LLDikti-IV-B.pdf\" target=\"_blank\">PKM-LLDikti-IV-B</a></p>\r\n\r\n<p><strong>Link Rekaman Zoom</strong></p>\r\n\r\n<p>Hari Ke-1:&nbsp;</p>\r\n\r\n<p><a href=\"https://us02web.zoom.us/rec/share/XYjWKsL5zY3IcxZKIcMhjOh3iF7EtHEhmfR0kPbGL8HaXmfPA5Ka-_vy_8WvWBY4.xGM0oAOO-JZvII3v\" target=\"_blank\">Link Rekaman Zoom Hari Ke-1</a></p>\r\n\r\n<p>Hari Ke-2:&nbsp;</p>\r\n\r\n<p><a href=\"https://us02web.zoom.us/rec/share/T-tmW7CW2s3iIUALl8E5xi7qIYluzwFhlAv50-lMC9iD4GXa2eqyGDiAmaJScujQ.eoXmrqWJhf7CSkZV\" target=\"_blank\">Link Rekaman Zoom Hari Ke-2</a></p>\r\n', '2021-10-13', 'Materi_dan_Rekaman_Kegiatan_Bimbingan_Teknis_Program_Kreativitas_Mahasiswa_Bagi_Dosen_Pembimbing_Pada_Perguruan_Tinggi_Swasta_di_Lingkungan_LLDIKTI_4_Tahun_2021.jpg', 'eksternal', 10, 'Departemen Kemahasiswaan HUMAS & HUBIN', 'materi-dan-rekaman-kegiatan-bimbingan-teknis-program-kreativitas-mahasiswa-bagi-dosen-pembimbing-pada-perguruan-tinggi-swasta-di-lingkungan-lldikti-4-tahun-2021.html'),
(2, 'Monitoring dan Uji Petik Program Mahasiswa KIP Kuliah Tahun 2021', '<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/Surat-Pemberitahuan-dan-Surat-Tugas-Monitoring-KIP-Kuliah-UKT-SPP-tahun-2020-dan-2021.pdf\" target=\"_blank\">Surat-Pemberitahuan-dan-Surat-Tugas-Monitoring-KIP-Kuliah-UKT-SPP-tahun-2020-dan-2021</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/Surat-Biaya-Kedatangan-Mhs-KIP-2021.pdf\" target=\"_blank\">Surat-Biaya-Kedatangan-Mhs-KIP-2021</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/KUESIONER-MONITORING-LLDIKTI-4-ISIAN-SAMPLE-MAHASISWA-KIP-KULIAH.docx\" target=\"_blank\">KUESIONER-MONITORING-LLDIKTI-4-ISIAN-SAMPLE-MAHASISWA-KIP-KULIAH</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/KUESIONIER-MONITORING-LLDIKTI-4-ISIAN-PENGELOLA-KIP-PT-1.docx\" target=\"_blank\">KUESIONIER-MONITORING-LLDIKTI-4-ISIAN-PENGELOLA-KIP-PT-1</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2020-LLDIKTI-PTS.docx\" target=\"_blank\">PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2020-LLDIKTI-PTS</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2021-LLDIKTI-dengan-PTS.docx\" target=\"_blank\">PERJANJIAN-KONTRAK-KERJA-SAMA-KIP-TAHUN-2021-LLDIKTI-dengan-PTS</a></p>\r\n\r\n<p><a href=\"https://www.lldikti4.or.id/wp-content/uploads/2021/12/jadwal-monev-dan-uji-petik-KIP-KULIAH-LLDIKTI-4-.pdf\" target=\"_blank\">jadwal-monev-dan-uji-petik-KIP-KULIAH-LLDIKTI-4-</a></p>\r\n', '2021-12-01', 'Monitoring_dan_Uji_Petik_Program_Mahasiswa_KIP_Kuliah_Tahun_2021.jpg', 'eksternal', 10, 'Departemen Kemahasiswaan HUMAS & HUBIN', 'monitoring-dan-uji-petik-program-mahasiswa-kip-kuliah-tahun-2021.html');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `nidn`, `password`, `status`, `ket`) VALUES
(1, 'Kemahasiswaan', '0412345601', '4f20b83f664e20f657ab25e54e315c13', 'kmhs', 'dosen'),
(2, 'Teknik Informatika', '0412345602', 'c1efbd2143e2b861187a85f69e7d4b59', 'if', 'dosen'),
(3, 'Teknik Mesin', '0412345603', '4d6831d3317f2332fbaf2d55778ba877', 'tm', 'dosen'),
(4, 'Teknik Industri', '0412345604', '854aeb4e874a1f629ddb8c8f778e9cdd', 'ti', 'dosen'),
(5, 'Manajemen Industri', '0412345605', '9d60f01044e2bdb131e36f96a76f39b0', 'mi', 'dosen'),
(6, 'Teknik Tekstil', '0412345606', '6955052be15b4d35b4598207a7a9eec3', 'teks', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`, `tanggal`) VALUES
(1, 'Apakah ada beasiswa ditahun akademik 2021/2022', 'Iya ada, informasi akan disampaikan melalui website kemahasiswaan', '2022-01-10 04:36:31'),
(2, 'Bagaimana untuk mendapatkan informasi kegiatan mahasiswa', 'Silahkan kunjungi situs resmi dari bagian kemahasiswaan STT. Wastukancana Purwakarta', '2022-01-10 04:36:31'),
(3, 'Bagaimana untuk bisa mendapatkan informasi kalender akademik', 'Kunjungi situs resmi STT. Wastukancana Purwakarta', '2022-01-10 04:36:31'),
(4, 'Terimakasih', 'Kembali Kasih', '2022-01-10 04:36:31'),
(5, 'Hallo', 'Hi', '2022-01-10 04:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_lpj` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_surat`, `id_lpj`, `id_proposal`, `id_pendaftar`, `status`, `nama`, `jabatan`, `waktu`) VALUES
(9, 6, 0, 0, 0, 'approve', 'lee', 'kasubag', '2019-07-19 11:08:17'),
(10, 11, 0, 0, 0, 'approve', 'lee', 'kasubag', '2019-07-19 19:47:52'),
(11, 11, 0, 0, 0, 'reject', 'sandi', 'kabag', '2019-07-19 19:56:38'),
(13, 11, 0, 0, 0, 'approve', 'trio', 'sekda', '2019-07-19 19:58:37'),
(14, 12, 0, 0, 0, 'approve', 'sandi', 'kabag', '2019-07-24 10:39:27'),
(15, 15, 0, 0, 0, 'approve', 'sandi', 'kabag', '2019-07-24 14:19:21'),
(16, 12, 0, 0, 0, 'reject', 'joko', 'asisten', '2019-07-24 14:39:21'),
(17, 14, 0, 0, 0, 'approve', 'joko', 'asisten', '2019-07-24 15:04:46'),
(18, 15, 0, 0, 0, 'reject', 'joko', 'asisten', '2019-07-24 15:05:18'),
(19, 14, 0, 0, 0, 'approve', 'trio', 'sekda', '2019-07-24 15:16:38'),
(20, 14, 0, 0, 0, 'approve', 'trio', 'sekda', '2019-07-24 17:20:28'),
(21, 14, 0, 0, 0, 'approve', 'trio', 'sekda', '2019-07-24 17:20:32'),
(22, 17, 0, 0, 0, 'approve', 'lee', 'kabag', '2019-07-25 18:37:41'),
(23, 18, 0, 0, 0, 'approve', 'sandi', 'kabag', '2021-09-06 16:09:13'),
(24, 18, 0, 0, 0, 'approve', 'joko', 'asisten', '2021-09-06 16:09:31'),
(25, 17, 0, 0, 0, 'approve', 'joko', 'asisten', '2021-09-06 16:09:38'),
(26, 18, 0, 0, 0, 'approve', 'trio', 'sekda', '2021-09-06 16:11:08'),
(27, 17, 0, 0, 0, 'approve', 'trio', 'sekda', '2021-09-06 16:11:20'),
(28, 19, 0, 0, 0, 'approve', 'sandi', 'kabag', '2021-09-07 16:46:19'),
(29, 19, 0, 0, 0, 'approve', 'joko', 'asisten', '2021-09-07 16:47:46'),
(30, 19, 0, 0, 0, 'approve', 'trio', 'sekda', '2021-09-07 16:48:17'),
(31, 12, 0, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-09-11 13:41:15'),
(32, 15, 0, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-09-11 13:41:28'),
(33, 12, 0, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-09-11 13:42:02'),
(34, 12, 0, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-09-11 13:42:19'),
(35, 12, 0, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-09-11 13:43:04'),
(36, 15, 0, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-09-11 13:45:07'),
(37, 15, 0, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-09-11 14:44:50'),
(38, 15, 0, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-09-11 14:45:21'),
(39, 15, 0, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-09-11 14:45:44'),
(40, 16, 0, 0, 0, 'approve', 'admin', 'kasubag', '2021-09-11 14:51:31'),
(41, 20, 0, 0, 0, 'approve', 'lee', 'kabag', '2021-09-11 15:06:14'),
(42, 20, 0, 0, 0, 'reject', 'S. KEMAHASISWAAN', 'asisten', '2021-09-13 18:43:56'),
(43, 20, 0, 0, 0, 'Updated', 'ani', 'staff', '2021-09-13 18:45:09'),
(44, 20, 0, 0, 0, 'approve', 'lee', 'kabag', '2021-09-13 18:46:51'),
(45, 20, 0, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-09-13 18:48:55'),
(46, 20, 0, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-09-13 18:49:20'),
(56, 21, 0, 0, 0, 'reject', 'KAPRODI', 'kabag', '2021-10-07 09:23:30'),
(57, 21, 0, 0, 0, 'Updated', 'HUMANIKA', 'staff', '2021-10-07 09:23:57'),
(62, 21, 0, 0, 0, 'approve', 'BEM', 'kasubag', '2021-10-07 10:58:53'),
(65, 22, 0, 0, 0, 'approve', 'BEM', 'kasubag', '2021-10-07 11:36:03'),
(66, 23, 0, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-10-07 11:37:41'),
(67, 23, 0, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2021-10-07 11:38:06'),
(68, 23, 0, 0, 0, 'approve', 'KETUA STT', 'sekda', '2021-10-07 11:38:29'),
(107, 0, 6, 0, 0, 'approve', 'BEM', 'kasubag', '2021-12-22 17:05:43'),
(108, 0, 6, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-12-22 17:05:57'),
(109, 0, 11, 0, 0, 'approve', 'BEM', 'kasubag', '2021-12-30 20:44:06'),
(110, 0, 11, 0, 0, 'approve', 'KAPRODI', 'kabag', '2021-12-30 20:45:14'),
(111, 0, 6, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-01-02 20:49:34'),
(112, 0, 11, 0, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-01-02 20:49:37'),
(113, 0, 6, 0, 0, 'approve', 'KETUA STT', 'sekda', '2022-01-02 20:49:55'),
(114, 0, 11, 0, 0, 'approve', 'KETUA STT', 'sekda', '2022-01-02 20:49:59'),
(115, 0, 0, 4, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-01-03 09:55:49'),
(116, 0, 0, 4, 0, 'approve', 'KETUA STT', 'sekda', '2022-01-03 09:56:03'),
(117, 0, 0, 9, 0, 'approve', 'BEM', 'kasubag', '2022-02-01 14:07:11'),
(118, 0, 0, 11, 0, 'approve', 'BEM', 'kasubag', '2022-02-01 14:07:17'),
(119, 0, 0, 9, 0, 'approve', 'KAPRODI', 'kabag', '2022-02-01 14:08:53'),
(120, 0, 0, 9, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-02-01 14:49:18'),
(121, 0, 0, 11, 0, 'approve', 'BEM', 'kasubag', '2022-02-01 15:06:08'),
(122, 0, 0, 12, 0, 'approve', 'BEM', 'kasubag', '2022-02-01 15:17:21'),
(123, 0, 0, 11, 0, 'approve', 'KAPRODI', 'kabag', '2022-02-01 15:17:38'),
(124, 0, 0, 12, 0, 'approve', 'KAPRODI', 'kabag', '2022-02-01 15:23:45'),
(125, 0, 0, 11, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-02-01 15:23:58'),
(126, 0, 0, 13, 0, 'approve', 'BEM', 'kasubag', '2022-02-01 15:26:19'),
(127, 0, 0, 11, 0, 'approve', 'KETUA STT', 'sekda', '2022-02-01 15:38:26'),
(128, 0, 0, 13, 0, 'approve', 'KAPRODI', 'kabag', '2022-02-01 15:54:20'),
(129, 0, 0, 12, 0, 'approve', 'S. KEMAHASISWAAN', 'asisten', '2022-02-03 11:02:48'),
(172, 0, 0, 0, 7, 'approve', 'Kemahasiswaan', '', '2022-08-17 14:56:02'),
(173, 0, 0, 0, 9, 'reject', 'Kemahasiswaan', '', '2022-08-17 15:09:14'),
(174, 0, 0, 0, 10, 'approve', 'Teknik Informatika', '', '2022-08-19 13:17:42'),
(175, 0, 0, 0, 9, 'approve', 'Kemahasiswaan', '', '2022-08-21 20:29:12'),
(176, 0, 0, 0, 9, 'reject', 'Kemahasiswaan', '', '2022-08-21 20:31:46'),
(177, 0, 0, 0, 9, 'reject', 'Kemahasiswaan', '', '2022-08-21 20:42:22'),
(178, 0, 0, 0, 12, 'approve', 'Teknik Informatika', '', '2022-08-21 21:43:37'),
(179, 0, 0, 0, 12, 'reject', 'Teknik Informatika', '', '2022-08-21 21:43:57');

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
(11, 'kegiatan', 'pendpenga', 'mahasiswa', 100, '2022-03-30', 11, 'Badan Eksekutif Mahasiswa (BEM)', '<p>kegiatan</p>\r\n', 'terpublikasi', 'BEM_Serah_Terima_Jabatan_Presiden_BEM_Periode_2021-2022.jpg', 'kegiatan.html');

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
  `penolak` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `lpj_id_user` int(11) NOT NULL,
  `ormawa` varchar(200) NOT NULL,
  `revisi` varchar(200) NOT NULL,
  `tanggal_lpj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpj`
--

INSERT INTO `lpj` (`id_lpj`, `judul_lpj`, `divisi`, `lpj`, `status_approve`, `status_baca`, `note`, `penolak`, `lpj_id_user`, `ormawa`, `revisi`, `tanggal_lpj`) VALUES
(9, 'Inaugurasi 2020', 'Divisi Kemahasiswaan ', '18181-53483-1-PB.pdf', 4, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '', '0000-00-00'),
(10, 'Humday 2021', 'Kes', '234827187.pdf', 4, '1', '', '', 2, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '', '2021-12-22'),
(11, 'Humday 2020', 'Kemahasiswaan', '1397-2943-1-SM.pdf', 4, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '', '2021-12-22'),
(12, 'Porka', 'Olahraga', 'Ambara Krianajaya.pdf', 3, '0', '', '', 2, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '', '2022-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `nim`, `password`, `prodi`, `status`) VALUES
(1, 'Mahasiswa', '180050001', '5b0e746051b574de340fe270442160a8', 'mhs', 'mhs'),
(2, 'Mahasiswa IF', '181350001', '47a1a4a2d6f0edd016cd221a5464da56', 'if', 'mhs'),
(3, 'Mahasiswa TM', '181250001', 'e62e4ac2d42e25f742be723587a40d7a', 'tm', 'mhs'),
(4, 'Mahasiswa TI', '181150001', '356c9c6c1ce436f123c4e48a7d05fa3e', 'ti', 'mhs'),
(5, 'Mahasiswa MI', '181110001', '3ff0be3f8695f602d90ce1687595e61e', 'mi', 'mhs'),
(6, 'Mahasiswa Teks', '182220001', '66cac3f5ad8134d6ade40d94a43ba2d9', 'teks', 'mhs');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_baca` varchar(100) NOT NULL,
  `nama_bea` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `id_mhs`, `nama_mhs`, `nim`, `prodi`, `nomor_hp`, `status`, `status_baca`, `nama_bea`, `kategori`, `tanggal`, `lampiran`) VALUES
(1, 1, 'Mahasiswa', '180050001', 'mhs', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '27-06-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP.pdf'),
(2, 2, 'Mahasiswa IF', '181350001', 'if', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '27-06-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP1.pdf'),
(3, 3, 'Mahasiswa TM', '181250001', 'tm', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '27-06-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP2.pdf'),
(4, 4, 'Mahasiswa TI', '181150001', 'ti', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '27-06-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP3.pdf'),
(5, 5, 'Mahasiswa MI', '181110001', 'mi', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '27-06-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP4.pdf'),
(6, 6, 'Mahasiswa Teks', '182220001', 'teks', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '27-06-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP5.pdf'),
(7, 1, 'Mahasiswa', '180050001', 'mhs', '08156405568', '2', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '17-08-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP6.pdf'),
(8, 1, 'Mahasiswa', '180050001', 'mhs', '08156405568', '0', '1', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '17-08-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP7.pdf'),
(9, 1, 'Mahasiswa', '180050001', 'mhs', '08156405568', '3', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022                                ', 'nasional', '21-08-2022', 'Ubah-Berkas_Pengajuan_Beasiswa_UKT-SPP.pdf'),
(10, 2, 'Mahasiswa IF', '181350001', 'if', '08156405568', '2', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '19-08-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP9.pdf'),
(11, 2, 'Mahasiswa IF', '181350001', 'if', '08156405568', '0', '1', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022', 'nasional', '21-08-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP10.pdf'),
(12, 2, 'Mahasiswa IF', '181350001', 'if', '08156405568', '0', '0', 'Program Bantuan UKT-SPP Semester Gasal TA 2021-2022                ', 'nasional', '21-08-2022', 'Ubah-Berkas_Pengajuan_Beasiswa_UKT-SPP1.pdf'),
(13, 1, 'Mahasiswa', '180050001', 'mhs', '08156405568', '0', '1', 'Beasiswa UKT Semester Gasal TA 2022-2023', 'nasional', '22-08-2022', 'Berkas_Pengajuan_Beasiswa_UKT-SPP12.pdf');

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
  `penolak` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `proposal_id_user` int(11) NOT NULL,
  `ormawa` varchar(200) NOT NULL,
  `tanggal_proposal` date NOT NULL,
  `departemen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul_proposal`, `divisi`, `tgl`, `waktu`, `tempat`, `lampiran`, `status_approve`, `status_baca`, `note`, `penolak`, `proposal_id_user`, `ormawa`, `tanggal_proposal`, `departemen`) VALUES
(4, 'Humday 2020', 'Kesenian', '2021-12-22', '22:24:00', 'Kampus 1 STT', '194-319-1-SM.pdf', 4, '1', '', '', 2, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '0000-00-00', ''),
(5, 'INAUGURASI 2020', 'Divisi Kemahasiswaan', '2021-12-19', '05:00:00', 'Kampus 1 STT', '1397-2943-1-SM.pdf', 4, '1', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '2021-12-22', ''),
(9, 'INAUGURASI 2020', 'Kemahasiswaan', '2022-01-30', '13:28:00', 'wrwe', '1823427320902.pdf', 4, '0', '', '', 10, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '2022-01-23', ''),
(11, 'Mabim 2020', 'Kemahasiswaan', '2022-01-30', '13:40:00', 'dasdsa', '1823427320902.pdf', 4, '0', '', '', 11, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '2022-01-23', ''),
(12, 'Mabim 2020', 'Kesenian', '2022-02-01', '15:11:00', 'asdas', '1823427268248.pdf', 4, '0', '', '', 11, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '2022-02-01', ''),
(13, 'INAUGURASI 2020', 'Kemahasiswaan', '2022-02-01', '15:25:00', 'asd', '1823427320902.pdf', 4, '0', '', '', 11, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '2022-02-01', ''),
(15, 'Porti 2021', 'Divisi Olahraga ', '2022-03-27', '06:00:00', 'Galaxy', 'GDocs_Challenge_1.pdf', 4, '1', ' ', 'Struktural', 12, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '2022-03-14', ''),
(18, 'Porti 2K22', 'Divisi Olahraga ', '2022-03-27', '06:00:00', '<p>Sadang</p>\r\n', '155-Article Text-1080-1-10-20190516.pdf', 1, '1', '', '', 0, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '0000-00-00', ''),
(19, 'Porti 2K22', 'Divisi Olahraga', '2022-03-27', '06:00:00', '<p>Sadang</p>\r\n', '155-Article Text-1080-1-10-20190516.pdf', 0, '1', '', '', 0, 'Himpunan Mahasiswa Teknik Industri (HMTI)', '0000-00-00', ''),
(20, 'Test', 'Test', '2022-06-24', '09:00:00', '<p>Test</p>\r\n', 'Berkas Pengajuan Beasiswa UKT-SPP.pdf', 0, '1', '', '', 0, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '0000-00-00', ''),
(21, 'Mabim', 'Kemahasiswaan', '2022-06-26', '06:00:00', '<p>Sahejo</p>\r\n', 'Berkas Pengajuan Beasiswa UKT-SPP.pdf', 2, '0', '', '', 0, 'Himpunan Mahasiswa Teknik Informatika (HUMANIKA)', '0000-00-00', '');

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
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sambutan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id_sambutan`, `nama`, `sambutan`, `foto`, `tanggal`) VALUES
(1, 'Dede Ardi Rajab, S.T., M.T', '<p>Puji syukur kepada Allah Swt. Sholawat serta salam senantiasa tercurahkan kepada junjungan baginda Nabi Muhammad Saw., yang telah membimbing umat manusia dari kegelapan menuju jalan kebaikan.</p>\r\n', 'ka-staf.png', '2022-05-15 11:27:48');

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
-- Table structure for table `strukturorganisasi`
--

CREATE TABLE `strukturorganisasi` (
  `id_strukturorganisasi` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strukturorganisasi`
--

INSERT INTO `strukturorganisasi` (`id_strukturorganisasi`, `gambar`, `tanggal`) VALUES
(1, 'struktur-organisasi.png', '2022-03-14 18:12:05');

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
(1, 'Informasi Program Bantuan UKT/SPP Bagi Mahasiswa Terdampak Pandemi Covid-19 Semester Gasal Tahun Akademik 2021/2022', '2022-06-20', 'Informasi_Program_Bantuan_UKT-SPP_Bagi_Mahasiswa_Terdampak_Pandemi_Covid-19_Semester_Gasal_Tahun_Akademik_2021-2022.pdf'),
(2, 'Pedoman Pendaftaran KIP Kuliah 2022', '2022-06-21', 'Pedoman_Pendaftaran_KIP_Kuliah_2022.pdf');

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
(19, 'LDK Waska', 'Purwakarta', 'UKM', 'Lembaga Dakwah Kampus Wastukancana (LDK Waska)', 'Ketua LDK Waska', 'ldkwaska', 'd636e94d11a54172c91cff3ac45d1fd4', 'mail@mail.com'),
(20, 'Indra Gumelar,S.Si., MT', 'Purwakarta', 'Kaprodi', 'Ketua Program Studi Teknik Industri', 'Ketua Program Studi Teknik Industri', 'kaprodi_ti', '2d54805d4772e1d81a221fffa23b7367', 'kaprodi_ti@mail.com'),
(21, 'Apang Djafar Shiedieque,ST,MT', 'Purwakarta', 'Struktural', 'Ketua STT Wastukancana', 'Ketua STT Wastukancana', 'ketua', '00719910bb805741e4b7f28527ecb3ad', 'mail@mail.com'),
(22, 'Admin', 'Purwakartaa', 'Kemahasiswaan', 'Departemen Kemahasiswaan HUMAS & HUBIN', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'mail@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
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
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`id_user`, `nama`, `alamat`, `departemen`, `organisasi`, `keterangan`, `username`, `password`, `email`) VALUES
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
(19, 'LDK Waska', 'Purwakarta', 'UKM', 'Lembaga Dakwah Kampus Wastukancana (LDK Waska)', 'Ketua LDK Waska', 'ldkwaska', 'd636e94d11a54172c91cff3ac45d1fd4', 'mail@mail.com'),
(20, 'Kaprodi TI', 'Purwakarta', 'Kaprodi', 'Teknik Industri', 'Teknik Industri', 'kaprodi', '3c13922905d2bc454cc35e665335e2fd', 'mail@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `visi`, `misi`, `tanggal`) VALUES
(1, '<ol>\r\n	<li>Visi 1</li>\r\n	<li>Visi 2</li>\r\n	<li>Visi 3</li>\r\n	<li>Visi 4</li>\r\n	<li>Visi 5</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Misi 1</li>\r\n	<li>Misi 2</li>\r\n	<li>Misi 3</li>\r\n	<li>Misi 4</li>\r\n	<li>Misi 5</li>\r\n</ol>\r\n', '2022-05-15 11:15:20');

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
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

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
  ADD KEY `id_proposal` (`id_proposal`),
  ADD KEY `id_pendaftar` (`id_pendaftar`);

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
  ADD PRIMARY KEY (`id_lpj`),
  ADD KEY `lpj_id_user` (`lpj_id_user`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `pendaftar_id_mhs` (`id_mhs`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `proposal_id_user` (`proposal_id_user`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id_quotes`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  ADD PRIMARY KEY (`id_strukturorganisasi`);

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
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id_quotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  MODIFY `id_strukturorganisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`berita_id_user`) REFERENCES `userr` (`id_user`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`kegiatan_id_user`) REFERENCES `userr` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
