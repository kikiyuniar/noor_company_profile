-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2021 pada 05.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `status` varchar(120) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `msg`, `status`, `waktu`) VALUES
(3, 'rama andika jorgie', 'ramaandikajorgie@gmail.com', 'kunam 123', 'Menurut Kamus Besar Bahasa Indonesia (KBBI), artikel merupakan suatu karya tulis yang ditulis secara lengkap.\r\n\r\nAdapun tujuan secara umum dari pembuatan artikel ialah untuk memengaruhi, mendidik, memberitahu, meyakinkan, serta menghibur pembacanya.\r\n\r\nArtikel tersebut biasanya dipublikasikan di suatu media, mulai buletin, majalah, koran hingga website.\r\n\r\nNah, untuk memahami lebih jelas tentang artikel, bisa membaca pengertian dari para ahli, ciri-ciri, kaidah kebahasaan hingga strukturnya.\r\n\r\nBerikut ini rangkuman tentang pengertian artikel menurut ahli, ciri-ciri, tujuan, manfaat, kaidah kebahasaan hingga strukturnya, seperti dilansir dari laman Gurupendidikan dan Serupa, Rabu (10/3/2021).', 'Terbaca', '2021-04-22'),
(4, 'ram', 'ramaandikajorgie@gmail.com', 'kunam 123', 'ra', 'Terbaca', '2021-04-22'),
(5, 'kiki', 'kiki@gmail.com', 'tees kiki', 'tes kiki @123', 'Terbaca', '2021-04-22'),
(6, 'Kiki Yuniar Kristiawan', 'kiki.nagh.arwolves@gmail.com', 'coba', '<script>alert(\"Selamat datang di tutorial Javascript\");</script>', 'Terbaca', '2021-05-09'),
(7, 'anty', 'noor@gmail.com', 'coba2', '<script>\r\n        alert(\"Selamat datang di tutorial Javascript\");\r\n    </script>', 'Terbaca', '2021-05-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_visi_misi`
--

CREATE TABLE `data_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` varchar(1000) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_visi_misi`
--

INSERT INTO `data_visi_misi` (`id`, `visi_misi`, `status`) VALUES
(2, 'Committed to provide good energy, solutions innovatively, cost effective, and  environmentally friendly', 'Visi'),
(3, 'Fully contribute to bringing and developing renewable energy throughout the country with a sustainable power', 'Misi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exp_team`
--

CREATE TABLE `exp_team` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `biografi` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `exp_team`
--

INSERT INTO `exp_team` (`id`, `nama`, `posisi`, `biografi`, `foto`, `waktu`, `updated_at`, `created_at`) VALUES
(7, 'Iskandar', 'Chief Executive Officer', 'President Director of\r\nPT. Sientratek Energi  Indonesia\r\nPresident Director of\r\nPT. GLEnergi  Teknologi Indonesia\r\nExecutive Director of \r\nPT. Daiwatech  Indonesia International', '1619934702.jpg', '2021-05-02', '2021-05-02 05:51:42', '2021-05-02 05:51:42'),
(8, 'Abdul Malik', 'Chief Marketing Officer', 'Direktur utama \r\nPT Alihdaya Megah Bersatu Indonesia\r\nGeneral Manager \r\nPT Eksekutif\r\nNational Business Development \r\nPT The Service Line ( SOS TBK group)\r\nGeneral Manager \r\nPT Tritunggal Sejahtera Margawi', '1619934770.jpg', '2021-05-02', '2021-05-02 05:52:50', '2021-05-02 05:52:50'),
(9, 'Arief Nur Hidayat', 'Chief Technology Officer', 'General Manager of Maluku & Maluku Utara Region \r\nPT. PLN (Persero)\r\nOperational Director \r\nPT. Lestari Satyagraha Kompetensi\r\nSenior Expert Electric Power Distribution \r\nPT. Energi Terbarukan Persada Surya\r\nTechnical Director \r\nPT. Sientratek Energi Indonesia', '1619934841.jpg', '2021-05-02', '2021-05-02 05:54:01', '2021-05-02 05:54:01'),
(10, 'Herry Agusman', 'Chief Project Officer', 'General Manager Engineering\r\nPT Surya Energi Indotama\r\nChief Executive Officer (CEO)\r\nPT Permata Sinergi Madani', '1620570203.jpg', '2021-05-09', '2021-05-09 14:23:23', '2021-05-09 14:23:23'),
(11, 'H. Zulmi Noor Hasani', 'President Commissioner', 'President Director  \r\nPT Eksekutif\r\nPresident Director  \r\nKoran Pantura\r\nDirector \r\nHasan Foundation\r\nChairman of the Advisory Board \r\nHIPMI Probolinggo Districts', '1620570319.jpg', '2021-05-09', '2021-05-09 14:25:19', '2021-05-09 14:25:19'),
(12, 'Johny Hartono Poernomo', 'Board Of Commissioner', 'Share Holder\r\nPT. Sientratek Energi  Indonesia\r\nShare Holder\r\nDasaplast Nusantara\r\nShare Holder & President Director\r\nPT. Tri Abadi Sakti\r\nShare Holder & President Director\r\nMaxone Hotel, PT. Gedung Berkat Damai  Sejahtera', '1620570487.jpg', '2021-05-09', '2021-05-09 14:28:07', '2021-05-09 14:28:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_28_054438_create_posts_table', 2),
(6, '2021_05_05_173245_create_blogs_table', 3),
(7, '2020_09_21_000000_create_canvas_tables', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_about`
--

CREATE TABLE `post_about` (
  `id` int(11) NOT NULL,
  `judul_about` varchar(500) NOT NULL,
  `isi` mediumtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `bahasa` text NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_about`
--

INSERT INTO `post_about` (`id`, `judul_about`, `isi`, `gambar`, `waktu`, `bahasa`, `updated_at`, `created_at`) VALUES
(1, 'PT.NOOR SURYA SEMBADA INDONESIA 1', '<p><strong>PT. NOOR ENERGI BAIK</strong> &nbsp;known as</p>\r\n\r\n<p>NOORenergi was founded in 2021 is a global&nbsp; Renewable Energy Service Company (RESCO) in &nbsp;Indonesia.</p>\r\n\r\n<p>With a strong capability, innovation, partnership, and &nbsp;technology, NOORenergi delivers solutions and &nbsp;high quality renewable energy projects for Utility, &nbsp;Government, Commercial and Purposes.</p>\r\n\r\n<p>We have the experience team and capacity to support &nbsp;renewable energy project that specializes in Solar &nbsp;Power , Wind Power, Geothermal Power and Waste To Energy in Indonesia&nbsp; through well-known partners from Europe, China &nbsp;and Singapore.</p>\r\n\r\n<p>We provide :</p>\r\n\r\n<p>&bull;Engineering</p>\r\n\r\n<p>&bull;Procurement</p>\r\n\r\n<p>&bull;Construction</p>\r\n\r\n<p>&bull;Operation and maintenance.</p>', '1619934244.jpg', '2021-05-02', 'Indonesia', '2021-04-04 18:12:46', '2021-04-04 18:12:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_album`
--

CREATE TABLE `post_album` (
  `id` int(11) NOT NULL,
  `judul_album` varchar(500) NOT NULL,
  `foto_album` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_project`
--

CREATE TABLE `post_project` (
  `id` int(11) NOT NULL,
  `judul_project` varchar(500) NOT NULL,
  `isi` mediumtext NOT NULL,
  `waktu` varchar(500) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Noor Energi Baik', 'noor@gmail.com', NULL, '$2y$10$x..nztfVJm.1Ls2vdk0OHuRB20uuL37mysf8RwNvoriVyPQG.bgYu', 'Super Admin', '1620569717.png', 'UAJIFRIJQaWocXOqEaK9n0dAAjQOPH82qXMtu7HQd8DxjzdUWA4d5WcWrd0t', '2021-04-10 20:59:42', '2021-04-10 20:59:42');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_last_blog`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_last_blog` (
`id` bigint(20) unsigned
,`judul_blog` varchar(255)
,`isi` text
,`isi_thumbnail` text
,`foto` varchar(255)
,`waktu` date
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_last_blog`
--
DROP TABLE IF EXISTS `view_last_blog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_last_blog`  AS  select `blogs`.`id` AS `id`,`blogs`.`judul_blog` AS `judul_blog`,`blogs`.`isi` AS `isi`,`blogs`.`isi_thumbnail` AS `isi_thumbnail`,`blogs`.`foto` AS `foto`,`blogs`.`waktu` AS `waktu`,`blogs`.`created_at` AS `created_at`,`blogs`.`updated_at` AS `updated_at` from `blogs` order by `blogs`.`id` desc limit 1 ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exp_team`
--
ALTER TABLE `exp_team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `post_about`
--
ALTER TABLE `post_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_album`
--
ALTER TABLE `post_album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_project`
--
ALTER TABLE `post_project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_visi_misi`
--
ALTER TABLE `data_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `exp_team`
--
ALTER TABLE `exp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `post_about`
--
ALTER TABLE `post_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `post_album`
--
ALTER TABLE `post_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `post_project`
--
ALTER TABLE `post_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
