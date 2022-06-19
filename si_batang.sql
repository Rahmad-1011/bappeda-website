-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2022 pada 16.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_batang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anjab`
--

CREATE TABLE `anjab` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anjab`
--

INSERT INTO `anjab` (`id`, `user_id`, `nama`, `file`, `created_at`, `updated_at`) VALUES
(2, 1, 'ANJAB UKP', 'app/file/berita/-1647847104-LyBBp.pdf', '2022-03-21 00:18:24', '2022-03-21 21:33:38'),
(4, 1, 'Anjab 2', 'app/file/anjab/-1649910744-vKsx5.docx', '2022-04-13 21:32:25', '2022-04-13 21:32:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `id_kategori` int(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `user_id`, `id_kategori`, `tanggal`, `judul`, `konten`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-02-21', 'Tiana sedang sakit uyoh, apakah ini bencana?', '<p><span style=\"text-align: justify;\">Dalam beberapa hari ini, tiana mengalami sakit yang sangat parah. Dia di diagnosa menderita penyakit langka yaitu penyakit biru. Semua tubuhnya akan berwarna biru jika dia marah-marah kepada temannya. Penyakit ini sangat berbahaya jika terjadi dalam waktu yang lama. Bisa menyebabkan kemiskinan di berbagai negara maju.</span><br></p>', 'app/foto/berita/-1645406243-xZWLz.jpg', '2022-02-20 18:17:24', '2022-02-20 19:01:46'),
(2, 1, 2, '2022-02-21', 'Lorem Ipsum', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac tellus convallis, consequat odio porttitor, fermentum diam. Donec bibendum vulputate dolor, non pulvinar tortor dignissim sed. Nulla rhoncus, magna venenatis pharetra sagittis, risus dui auctor odio, non cursus velit mi nec massa. Quisque vitae rutrum orci. Suspendisse potenti. Vestibulum faucibus feugiat rutrum. Maecenas imperdiet est quis arcu euismod placerat. Etiam quis placerat felis, sed egestas nibh. Duis ut eros eu erat viverra bibendum vel sed urna. Nam egestas arcu non leo molestie convallis. Aliquam erat volutpat. Phasellus aliquam, nisl vitae molestie rutrum, metus orci fringilla lectus, vitae egestas justo mi non ex. Nunc pulvinar, nisl at malesuada ornare, neque ex ultrices ipsum, id sodales est tortor quis quam. Etiam arcu augue, mollis nec scelerisque in, rutrum in massa.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Nunc id tortor dapibus, efficitur ex id, fermentum ipsum. Donec facilisis dolor pharetra tincidunt ultricies. Praesent congue magna at dolor porta euismod. Donec neque odio, dapibus quis semper ut, efficitur vel turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent laoreet bibendum lectus. Aliquam vel dolor tellus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Sed a purus purus. Maecenas gravida consectetur lacinia. Cras placerat tincidunt condimentum. Fusce ullamcorper elementum dignissim. Phasellus vel ex quis odio tempor feugiat. Cras libero metus, pharetra a nulla sed, consequat viverra quam. Maecenas tincidunt dui venenatis ipsum luctus lacinia. Phasellus ultrices dignissim imperdiet. In bibendum nunc id faucibus porttitor. Suspendisse congue mi turpis, vitae fermentum augue consectetur vitae. Etiam a rhoncus diam. Vestibulum congue nisi sed augue porta sagittis.</p>', 'app/foto/berita/-1645430121-YD1vb.jpg', '2022-02-21 00:55:21', '2022-02-21 00:55:21'),
(3, 1, 3, '2022-02-10', 'Perjalanan Dinas', '<p>blabalalbalsbflakbsfl<br>alkfsnaksfklahsfh a,sfnalsfasf. asflknaslfkhaslghnciansfnalsa.asnflashflknasfn lansflansfihas alskfnalshf naosfnoaiszncan asifhaksnas.</p>', 'app/foto/berita/-1648395856-b743Y.jpg', '2022-03-27 08:44:16', '2022-03-27 08:44:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(11, 'Kegiatan di ruang ukp oleh kaban', '2022-04-06 08:00:00', '2022-04-06 09:00:00', '2022-04-05 08:08:29', '2022-04-05 08:08:29'),
(12, 'LIBUR', '2022-04-15 00:00:00', '2022-04-16 00:00:00', '2022-04-13 22:51:53', '2022-04-13 22:51:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `user_id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(2, 1, 'test2', 'app/galeri/-1648519345-5qV0j.jpg', '2022-03-28 19:02:25', '2022-03-28 19:02:25'),
(3, 1, 'Foto Rapat', 'app/galeri/-1649172317-iuM8l.jpg', '2022-04-05 08:25:17', '2022-04-05 08:25:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sosial', '2022-02-20 18:05:36', '2022-02-20 18:05:36'),
(2, 'Perjalanan Dinas', '2022-02-20 18:08:11', '2022-02-20 18:08:11'),
(3, 'Kesehatan', '2022-02-20 18:08:27', '2022-02-20 18:08:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tmpt_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tmt_jabatan` varchar(255) DEFAULT NULL,
  `jenis_jabatan` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `thn_lulus` year(4) DEFAULT NULL,
  `tk_ijazah` varchar(255) DEFAULT NULL,
  `jurusan_pendidikan` varchar(255) DEFAULT NULL,
  `gol_pangkat` varchar(255) DEFAULT NULL,
  `tmt_pangkat` varchar(255) DEFAULT NULL,
  `eselon` varchar(255) DEFAULT NULL,
  `m_kerja_thn` varchar(255) DEFAULT NULL,
  `m_kerja_bln` varchar(255) DEFAULT NULL,
  `lthn_jabatan` varchar(255) DEFAULT NULL,
  `lthn_jabatan_thn` year(4) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jenis_kelamin`, `nip`, `foto`, `tmpt_lahir`, `tgl_lahir`, `jabatan`, `tmt_jabatan`, `jenis_jabatan`, `pendidikan`, `thn_lulus`, `tk_ijazah`, `jurusan_pendidikan`, `gol_pangkat`, `tmt_pangkat`, `eselon`, `m_kerja_thn`, `m_kerja_bln`, `lthn_jabatan`, `lthn_jabatan_thn`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Rahmad Ardianto Amd.Kom', 'Laki-laki', '304 2019 021', 'app/foto/pegawai/-1648826653-cRcX2.jpg', 'Ketapang', '2001-11-10', 'Hokage', NULL, 'Hokage Pertama', 'Politeknik Negeri Ketapang', 2022, '2022', 'Teknik Informatika', 'Golongan Garis Keras', NULL, NULL, NULL, NULL, NULL, NULL, 'jl. gusti hamzah, kelurahan kauman, kecamatan benua kayong', '2022-04-01 08:24:13', '2022-04-01 09:11:24'),
(2, 'Tiana Adela Pratiwi', 'Perempuan', '3042019014', 'app/foto/pegawai/2-1649825063-dZMXm.png', 'Kediri', '2001-08-02', 'Mahasiswa', NULL, 'Hokage Kedua', 'Politeknik Negeri Ketapang', 2022, '2022', 'Teknik Informatika', 'Golongan Garis Keras', '2022', '2', '2022', '2', 'Diklat Persib', 2022, 'Jl. K.S Tubun', '2022-04-12 21:29:24', '2022-04-12 21:56:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `konten`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'Badan Perencanaan Pembangunan Daerah yang disingkat BAPPEDA adalah lembaga teknik daerah dibidang penelitian dan perencanaan pembangunan daerah yang dipimpin oleh seorang kepala badan yang berada dibawah dan bertanggung jawab kepada Gubernur/Bupati/Walikota dalam penyelenggaraan Pemerintahan Daerah dibidang penelitian dan perencanaan pembangunan daerah.\r\nBAPPEDA dibentuk sebagai Badan Staf yang langsung berada dan bertanggung jawab kepada Gubernur Kepala Daerah yang dengan demikian sekaligus melaksanakan fungsi membantu Gubernur Kepala Daerah dalam menentukan kebijaksanaan di bidang Perencanaan Pembangunan Daerah serta menilai pelaksanaannya.\r\nBadan Perencanaan Pembangunan Daerah di bentuk berdasarkan pertimbangan:\r\na)	Bahwa dalam rangka usaha peningkatan keserasian pembangunan di daerah diperlukan adanya peningkatan keselarasan antara pembangunan sektoral dan pembangunan daerah.\r\nb)	Bahwa dalam rangka usaha menjamin laju perkembangan, keseimbangan dan kesinambungan pembangunan di daerah, diperlukan perencanan yang lebih menyeluruh terarah dan terpadu.\r\nKronologis berdiri dan berkembangnya BAPPEDA dicatat sebagai berikut:\r\n1.	Keputusan Presiden Nomor 19 Tahun 1964 tentang Pembentukan Badan Koordinasi Pembangunan Daerah disingkat BAKOPDA.\r\n2.	Berdasarkan Keputusan Menteri Dalam Negeri Nomor 51 Tahun 1969 dan Keputusan Presiden Nomor 4 Tahun 1969, maka keluarlah Surat Keputusan Gubernur Kepala Daerah Provinsi Kalimantan Barat Nomor SK 132/I-A/1 tanggal 28 Agustus 1969 tentang Pembentukan Biro Khusus.\r\n3.	Dengan Surat Keputusan Gubernur Kepala Daerah Provinsi Kalimantan Barat Nomor SK 044/I-A/1 tanggal 18 April 1970 yang disempurnakan untuk  \r\npertama kali tanggal 28 Mei 1970, maka sebutan Biro khusus diubah menjadi Badan Pengendalian Operasionil Pembangunan Daerah Provinsi Kalimantan Barat.\r\n4.	Surat Keputusan Gubernur Kepala Daerah Provinsi Kalimantan Barat Nomor SK 018 Tahun 1973 tanggal 17 Januari 1973 membentuk Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Barat disingkat BAPPEDA.\r\n5.	Surat Keputusan Gubernur Kepala Daerah Provinsi Kalimantan Barat tanggal 17 Agustus 1974 Nomor 137 tahun 1974 dibentuk Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Barat disingkat BAPPEDA, berdasar keputusan Presiden tanggal 18 Maret 1974 No. 15 tahun 1974 jo. Keputusan Menteri Dalam Negeri tanggal 17 Juli 1974 no. 142 tahun 1974 dan Surat Menteri Dalam Negeri tanggal 13 Juli 1974 Nomor EKBANG 7/39/48.\r\nAdapun fungsi BAPPEDA sebagai berikut:\r\na.	Perumusan kebijakan teknis perencanaan; \r\nb.	Pengkoordinasian penyusunan perencanaan pembangunan penanaman modal; \r\nc.	Pembinaan dan pelaksanaan tugas di bidang perencanaan pembangunan daerah dan penanaman modal; \r\nd.	Pengelolaan kesektariatan BAPPEDA; \r\ne.	Penginventarisasian masalah dan pelaporan pelaksanaan tugas BAPPEDA; \r\nf.	Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas pokok dan fungsi BAPPEDA.', 'app/foto/bappeda/-1650030163-LlXRw.jpg', '2022-04-15 06:42:43', '2022-04-15 06:42:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sop`
--

CREATE TABLE `sop` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sop`
--

INSERT INTO `sop` (`id`, `user_id`, `nama`, `nomor`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bidang Umum dan Kepegawaian', 'Bappeda/A/2022', 'app/file/sop/-1647926005-t3i40.pdf', '2022-03-21 22:13:25', '2022-03-21 22:13:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Baru', 'Bocil Panky', 'app/images/user/1-1649170217-t5LtR.jpg', '$2y$10$mna9aeWhgjWhJqBcc93e6OHhyDGUyg//3X5S3TWNHuVrK3rsigwIO', NULL, '2022-02-17 23:34:50', '2022-04-05 07:50:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `nama`, `konten`, `created_at`, `updated_at`) VALUES
(2, 'Visi', 'Kabupaten Ketapang yang Maju Menuju Masyarakat Sejahtera', '2022-04-12 19:00:02', '2022-04-12 19:15:49'),
(5, 'Misi', '1.	Melaksanakan Kepemerintahan yang baik;\r\n2.	Meningkatkan Infrastruktur Daerah;\r\n3.	Meningkatkan Perekonomian Masyarakat;\r\n4.	Meningkatkan Kualitas Sumber Daya Manusia;\r\n5.	Pemberdayaan Masyarakat dan Pemerintahan Desa;\r\n6.	Meningkatkan Pengelolaan dan Pemanfaatan Sumber Daya Alam di Kabupaten Ketapang dengan tetap menjaga kelestarian lingkungan.', '2022-04-12 19:12:57', '2022-04-12 19:12:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anjab`
--
ALTER TABLE `anjab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anjab`
--
ALTER TABLE `anjab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sop`
--
ALTER TABLE `sop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
