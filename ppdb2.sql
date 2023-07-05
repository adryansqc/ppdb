-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jul 2023 pada 03.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_peserta_daftars`
--

CREATE TABLE `jumlah_peserta_daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_peserta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jumlah_peserta_daftars`
--

INSERT INTO `jumlah_peserta_daftars` (`id`, `jumlah_peserta`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '50', 2023, '2023-07-01 04:12:05', '2023-07-01 09:25:01');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_22_045610_create_siswas_table', 2),
(7, '2023_06_22_130248_create_siswas_table', 3),
(8, '2023_06_23_032015_create_pendaftarans_table', 4),
(10, '2023_06_24_015408_add_user_id_to_pendaftarans', 5),
(11, '2023_06_25_022626_add_status_pendaftaran_to_pendaftarans', 5),
(13, '2023_06_27_022040_create_pengumumen_table', 6),
(14, '2023_06_27_030705_create_hasils_table', 7),
(15, '2023_06_27_093359_add_tes_tertulis_tes_bacaan_to_pendaftarans', 8),
(17, '2023_07_01_101929_create_jumlah_peserta_daftars_table', 9);

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
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_pendaftaran` enum('baru','pindahan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pernah_paud` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pernah_tk` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sklt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_seri_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cita_cita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kebutuhan_khusus` enum('autis','bakat istimewa','cerdas istimewa','down syndrome','hyper aktif','indigo','kesulitan belajar','lainnya','tidak ada') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riwayat_penyakit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_jalan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_sambung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sktm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewarganegaraan` enum('wni','wna') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lahir_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ayah` enum('D1','D2','D3','S1','S2','S3','putus SD','SD sederajat','SMP sederajat','SMA sederajat','tidak sekolah') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lahir_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_ibu` enum('D1','D2','D3','S1','S2','S3','putus SD','SD sederajat','SMP sederajat','SMA sederajat','tidak sekolah') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `jml_saudara_kandung` int(11) DEFAULT NULL,
  `ukuran_baju` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran_celana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_pendaftaran` enum('Menunggu Verifikasi','Terverifikasi','Tidak Sah') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Verifikasi',
  `tes_tertulis` int(11) DEFAULT NULL,
  `tes_bacaan` int(11) DEFAULT NULL,
  `hasil` enum('Menunggu Verifikasi','Lulus','Tidak Lulus') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `user_id`, `jenis_pendaftaran`, `alamat_asal_sekolah`, `pernah_paud`, `pernah_tk`, `no_sklt`, `no_seri_ijazah`, `hobi`, `cita_cita`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kebutuhan_khusus`, `riwayat_penyakit`, `alamat_jalan`, `rt`, `rw`, `alamat_sambung`, `nama_kelurahan`, `kecamatan`, `kota_kabupaten`, `kode_pos`, `no_hp`, `no_tlp`, `email`, `sktm`, `no_kks`, `no_kps`, `no_kip`, `no_kis`, `kewarganegaraan`, `nama_ayah`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `tinggi_badan`, `berat_badan`, `jml_saudara_kandung`, `ukuran_baju`, `ukuran_celana`, `foto`, `bukti_pembayaran`, `created_at`, `updated_at`, `status_pendaftaran`, `tes_tertulis`, `tes_bacaan`, `hasil`) VALUES
(4, 25, 'baru', 'SMP Mandiangin', 'iya', 'iya', NULL, NULL, NULL, NULL, 'Adryan', 'laki-laki', '10009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'wni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/xfEnBhZrmHxgESfQJ7nXsP1Uy2Dw09fhWn3dwsCB.jpg', '2023-06-23 19:22:24', '2023-06-27 06:02:38', 'Terverifikasi', 90, 90, 'Lulus'),
(5, 28, 'baru', 'SMP sarolangun', 'iya', 'iya', NULL, NULL, NULL, NULL, 'Mia', 'laki-laki', '10005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, 'wni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'public/wX1XgY0E2CjzqV4xTF6JKVEnLszgNBZlbW0cwvxE.jpg', '2023-06-23 19:56:42', '2023-06-30 11:37:10', 'Terverifikasi', 90, 90, 'Lulus'),
(9, 35, 'baru', 'SMP Kota Jambi', 'iya', 'iya', NULL, NULL, NULL, NULL, 'Rahma', 'perempuan', '1000081', '12312321', 'Jambi', '2023-06-13', 'islam', 'tidak ada', 'tidak ada', 'klasdjas', '2341', '21', 'kobar', 'kobar', 'jambi selatan', 'jambi', '92180', '92301280398', '0912029183901', 'rahma@gmail.com', '9823918', '21421', '421421', '41212', '41241', 'wni', 'joko', '536', 'S3', NULL, '1 milyar', 'ama', '2321', 'S3', NULL, '1 milyar', 231, 321, 13, 's', 's', 'public/ILtYNvtRXfVY7vty1Ah9fI8SdCeEDgDnLLdeeZ7Q.png', 'public/2VRZWbt1VEEGwNlRRDWqDI2Or9euDVKTH2wCOrAY.png', '2023-06-30 11:30:40', '2023-06-30 21:16:38', 'Terverifikasi', NULL, NULL, 'Menunggu Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('siswa','operator','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp_verified_at` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `akses`, `nohp`, `nohp_verified_at`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'operator', 'operator', '081234567890', '2023-01-15 18:21:57', 'operator@contoh.com', NULL, '$2y$10$0gycvGj5EOyXybg7Bxy45uX3nZYN4C4WphFKicxr42/wFspAqjwdC', NULL, '2023-01-15 04:21:47', '2023-01-15 04:21:47'),
(23, 'sasa', 'operator', '08222191822', NULL, 'operatorsasa@contoh.com', NULL, '$2y$10$WWqVWUIxW2JO8JJM7Ne4sO0E/fOT4OAWuSbPnXS0W5uB7hFLxNLcO', NULL, '2023-01-30 06:30:23', '2023-01-30 06:30:23'),
(25, 'budi siswa', 'siswa', '081234567890', '2023-06-22 09:51:20', 'budi@contoh.com', '2023-06-22 02:51:20', '$2y$10$JFY4K4jgiOCRKVtw7ldwrOOpscRIg0xIaij8G5pB5pSOibsq3nrDy', NULL, '2023-06-22 02:51:20', '2023-06-22 02:51:20'),
(26, 'Sarah', 'siswa', NULL, NULL, 'Sarah@gmail.com', NULL, '$2y$10$g8B1KAY90zbMxdJ8/6.S0eIRHF/jomevLrsTFeLQ0BFtFEsxzFLH.', NULL, '2023-06-22 08:25:05', '2023-06-22 08:25:05'),
(27, 'cinta', 'siswa', NULL, NULL, 'cinta@gmail.com', NULL, '$2y$10$DY9gWca8NB8PFsZvfUSAhu9lNQojJhuCUAGoDXHffwT/js79/DM7q', NULL, '2023-06-22 08:33:02', '2023-06-22 08:33:02'),
(28, 'Mia', 'siswa', NULL, NULL, 'Mia@gmail.com', NULL, '$2y$10$S8ci3JuSzND0j3Px2potrONmPiYYFTh0fut6ZQgGF26klbPFyPVSC', NULL, '2023-06-23 19:55:47', '2023-06-23 19:55:47'),
(33, 'rina', 'siswa', NULL, NULL, 'rina@gmail.com', NULL, '$2y$10$h7Mz9wy5s9be3Li0LaFp/uaT9TfTSZNVVAM9VuVPB0W4vkZuENCf6', NULL, '2023-06-30 04:40:17', '2023-06-30 04:40:17'),
(34, 'fajar', 'siswa', NULL, NULL, 'fajar@gmail.com', NULL, '$2y$10$fY0dFrKGew.xKjbgRmM6tOCRHwp2NvwyRQgV9aqYm.6s.lKo3SNLK', NULL, '2023-06-30 04:41:28', '2023-06-30 04:41:28'),
(35, 'Rahma', 'siswa', NULL, NULL, 'rahma@gmail.com', NULL, '$2y$10$7GRHWancDvXhuCkPhyRRRuTGjtnrmRLJc9Dy5PRsc653O/68FA0zu', NULL, '2023-06-30 10:49:38', '2023-06-30 10:49:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jumlah_peserta_daftars`
--
ALTER TABLE `jumlah_peserta_daftars`
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
-- Indeks untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jumlah_peserta_daftars`
--
ALTER TABLE `jumlah_peserta_daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
