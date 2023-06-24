-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2023 pada 14.39
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_addictiveclothing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id_barang`, `gambar`, `merek`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Kitsune_Myth_S.png', 'T-shirt streetwear // Kitsune Myth - S', '135.000', 'Vol #1PRE ORDER - KITSUNE MYTH • Black Colour • Local Size • Catton Combad 30s • DTF / DTG • Cash / Atm BCA • Bebas kirim daerah Kediri ( Luar Kediri bisa kirim via JNE/JNT )', NULL, '2023-06-10 07:11:39'),
(2, 'Addict Clothing_S.png', 'T-Shirt HYPE ASTRO // Addict Clothing - S', '95.000', 'PRE ORDER - HYPE ASTRO• Black Colour• Local Size• Catton Combad 30s• DTF• Cash / Atm BCA• Bebas kirim daerah Kediri ( Luar Kediri bisa kirim via JNE/JNT )', NULL, '2023-06-09 02:28:43'),
(3, 'Addict_Clothing_V.3_S.png', 'T Shirt Addict Clothing V.3 - S', '135.000', 'Vol #3PRE ORDER - ADDICT CLOTHING• Black Colour• Local Size• Catton Combad 30s• DTF / DTG• Cash / Atm BCA• Bebas kirim daerah Kediri ( Luar Kediri bisa kirim via JNE/JNT )', NULL, '2023-06-09 02:28:46'),
(4, 'Astronot_Desain_M.png', 'T-shirt Streetwear // Astronot Desain - M', '90.000', 'Vol #2PRE ORDER - ASTRONAUTPesan dahulu barang ready setelah 3-4 hari pemesnan.Keterangan :• Black Colour• Local Size S - XXXL• Catton Combad 30s• Plastisol• Bebas kirim daerah Kediri ( Luar Kediri bisa kirim via JNE/JNT )', NULL, '2023-06-09 02:28:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `barang_id`, `created_at`, `updated_at`) VALUES
(7, 12, 2, '2023-05-23 06:02:41', '2023-05-23 06:02:41'),
(8, 18, 2, '2023-06-08 02:05:40', '2023-06-08 02:05:40'),
(9, 11, 1, '2023-06-09 01:28:48', '2023-06-09 01:28:48'),
(10, 20, 2, '2023-06-10 07:57:40', '2023-06-10 07:57:40'),
(11, 19, 2, '2023-06-11 00:45:07', '2023-06-11 00:45:07'),
(12, 19, 3, '2023-06-11 00:45:15', '2023-06-11 00:45:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2023_04_22_021535_create_barangs_table', 1),
(13, '2023_05_22_113827_create_favorites_table', 2),
(14, '2023_05_23_140407_add_phone_number_and_address_to_users_table', 3),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(16, '2023_05_26_162033_create_pesanans_table', 5),
(17, '2023_05_26_170711_create_pesanans_table', 6),
(18, '2023_05_27_024425_create_checkout_table', 7),
(19, '2023_05_27_034858_add_status_to_checkouts', 8),
(20, '2023_05_27_050325_add_table_to_checkouts', 9),
(21, '2023_05_27_124702_add_table_to_checkouts', 10),
(22, '2023_05_27_130341_create_pesanan_table', 11),
(23, '2023_05_29_125457_add_table_to_pesanan', 12),
(24, '2023_05_31_033247_tambah_kolom_pesanan', 13),
(25, '2023_05_31_114328_tambah_kolom_pesanan_ongkir', 14),
(26, '2023_05_31_134735_tambah_kolom_pesanan_ongkir', 15),
(27, '2023_05_31_140116_tambah_kolom_pesanan_total', 16),
(28, '2016_06_01_000001_create_oauth_auth_codes_table', 17),
(29, '2016_06_01_000002_create_oauth_access_tokens_table', 17),
(30, '2016_06_01_000003_create_oauth_refresh_tokens_table', 17),
(31, '2016_06_01_000004_create_oauth_clients_table', 17),
(32, '2016_06_01_000005_create_oauth_personal_access_clients_table', 17),
(33, '2023_06_09_105109_tambah_kolom_bukti_ke_pesanan', 18),
(34, '2023_06_10_073515_add_media_to_bukti_table', 19),
(35, '2023_06_10_141633_create_user_admins_table', 20),
(36, '2023_06_10_143104_add_role_to_users_table', 21),
(37, '2023_06_14_121950_add_api_token_on_users', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\User', 11, 'authToken', 'bbbdb79f4c352c529d551deb8a2db2eb4ccacb6b0afdb5c359de3571ed5e6998', '[\"*\"]', NULL, '2023-05-26 07:03:22', '2023-05-26 07:03:22'),
(2, 'App\\User', 11, 'authToken', 'dd62a3dbed4caff9ace6288cf83654b0530dcc83b93f9918ba061c1a0e9f7989', '[\"*\"]', NULL, '2023-06-09 00:35:03', '2023-06-09 00:35:03'),
(3, 'App\\User', 11, 'authToken', '7d08a1d71089492f7a46a15cf7010eacac2fed8d5d94136d863f91db27421b39', '[\"*\"]', NULL, '2023-06-09 00:36:09', '2023-06-09 00:36:09'),
(4, 'App\\User', 11, 'authToken', '69b3aad476f546b70f36fd1874e1a14a5d9835321448cab54e0ca2cbccf95652', '[\"*\"]', NULL, '2023-06-09 01:08:40', '2023-06-09 01:08:40'),
(5, 'App\\User', 11, 'authToken', '1c774876bd7378e89535fce18bee76b39a82da3a11daf19917ed6b88ac431b9f', '[\"*\"]', NULL, '2023-06-13 20:18:51', '2023-06-13 20:18:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'menunggu pembayaran',
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `user_id`, `barang_id`, `status`, `alamat`, `provinsi`, `kabupaten`, `kode_pos`, `metode_pembayaran`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(17, 11, 3, 'Pembayaran Diterima', 'Wonoayu Gempol Rt4 Rw6', 'Jawa Timur', 'Pasuruan', '67155', 'Cash on Delivery (COD)', '081234567890', '2023-06-10 04:42:28', '2023-06-11 09:04:02'),
(18, 11, 3, 'menunggu pembayaran', 'Wonoayu Gempol Rt4 Rw6', 'Jawa Timur', 'Pasuruan', '112222', 'Cash on Delivery (COD)', '081234567890', '2023-06-10 07:56:17', '2023-06-10 07:56:17'),
(19, 20, 3, 'menunggu pembayaran', 'aaaaaaaaaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaaaaaaa', '222222222222222', 'Cash on Delivery (COD)', '081234567890', '2023-06-10 07:58:18', '2023-06-10 07:58:18'),
(20, 19, 3, 'menunggu pembayaran', 'Sidoarjo', 'Jawa Timur', 'Sidoarjo', '67222', 'Cash on Delivery (COD)', '0812308987654', '2023-06-11 01:06:04', '2023-06-11 01:06:04'),
(21, 19, 2, 'menunggu pembayaran', 'coba', 'coba', 'coba', '111111', 'Cash on Delivery (COD)', '081234567890', '2023-06-11 09:03:32', '2023-06-11 09:03:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `api_token` varchar(80) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `api_token`, `phone_number`, `address`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(3, 'aaaaa', 'aaaa@gmail.com', NULL, '$2y$10$teX0noh6nH/iyxeHWQ7Gfe/.Trg990QeCzQMlkg.0Ri/xMgiu4H6W', NULL, NULL, NULL, NULL, '2023-05-02 20:39:27', '2023-05-02 20:39:27', 'user'),
(4, 'coba1', 'coba1@gmail.com', NULL, '$2y$10$U3WNJuLdWSXQcxSOrwCJAu8JAgX.1oCAsp/21n/XM5iTSBHUk.9Ge', NULL, NULL, NULL, NULL, '2023-05-05 21:50:38', '2023-05-05 21:50:38', 'user'),
(5, 'QWERTY', 'qwerty1234@gmail.com', NULL, '$2y$10$h24IWk4YTzc6WryRkWKfBeOtAAIvemPce4Xtpl6u8DFd85VNiBOEa', NULL, NULL, NULL, NULL, '2023-05-07 18:24:37', '2023-05-07 18:24:37', 'user'),
(6, 'Bilal Shandy', 'bilalshandy@gmail.com', NULL, '$2y$10$uyTggy31cM6VtiuNnANSqOYQ5yGNjDOPzAl.tniWJ/AGA3MuC00FO', NULL, NULL, NULL, NULL, '2023-05-09 05:40:03', '2023-05-09 05:40:03', 'user'),
(8, 'Bilal Shandyarta', '44006bilal@gmail.com', NULL, '$2y$10$Y7cHDbw3yHEdFEHhmTDaF.QIh4eCVa/TlYgc5qDQh7J0ki/BoXt4K', NULL, NULL, NULL, NULL, '2023-05-13 04:38:57', '2023-05-13 04:38:57', 'user'),
(9, 'Bilal Shandy', 'bilalshandy04@gmail.com', NULL, '$2y$10$A6IJ2mc3dOl5di8KVmRtr./5BYWtNfjgWeIvE5hMJ/t1Gr4hy1VNS', NULL, NULL, NULL, NULL, '2023-05-17 23:55:43', '2023-05-17 23:55:43', 'user'),
(10, 'coba', '44006piyu@gmail.com', NULL, '$2y$10$wzkZluSqbQZnLUIho3rdpeY7t5N3zAuSU6VrSpZVScraBwvh4soPG', NULL, NULL, NULL, NULL, '2023-05-19 00:21:56', '2023-05-19 00:21:56', 'user'),
(11, 'Akun Percobaan', 'akuncoba@gmail.com', NULL, '$2y$10$O1cKGZYYDUlXRJ2uGQDeYOb9quuS761JKfg/ZT9KryxQTl60x9166', NULL, '098765432123', 'Wonoayu', NULL, '2023-05-21 05:42:43', '2023-06-08 00:56:21', 'user'),
(12, 'AKUN COBA 2', 'akuncoba2@gmail.com', NULL, '$2y$10$E71lHtmFA7AmSMbnEOgNv.Vzbn/bvXBBgSxPjGGBeqnJXhLyJHGUK', NULL, NULL, NULL, NULL, '2023-05-23 05:33:46', '2023-05-23 05:33:46', 'user'),
(14, 'CobaAPI', 'bilalapi@gmail.com', NULL, '$2y$10$/f37WyKLHFnyppY7/fVlIukwB3SvAnsfKlaONtbRhVETGEoAsn6C.', NULL, NULL, 'sidokare', NULL, '2023-05-23 20:36:02', '2023-05-23 20:36:02', 'user'),
(15, 'CobaAPI2', 'bilalapi2@gmail.com', NULL, '$2y$10$WSdxLvwvX9FKaZER/1HbN.hKv/5vdT50b/Kmis6s4/pZYrL5mNTs2', NULL, NULL, 'sidokare', NULL, '2023-05-23 21:34:38', '2023-05-23 21:34:38', 'user'),
(16, 'CobaAPI3', 'bilalapi3@gmail.com', NULL, '$2y$10$B9M8pHel/UEhkNN1RVllzeBa3ioCs49URr5s55Gf/DRDP0H6eIJ/C', NULL, NULL, 'sidokare', NULL, '2023-05-23 21:49:41', '2023-05-23 21:49:41', 'user'),
(17, 'CobaAPI4', 'bilalapi4@gmail.com', NULL, '$2y$10$px6JafJ1OpXcsW7SOQqnCu1AGSASZ6pN6svtKaMKV.BwhblBACM96', NULL, '098765432123', 'sidokare', NULL, '2023-06-08 02:01:04', '2023-06-08 02:01:04', 'user'),
(18, 'dev', 'dev@gamil.com', NULL, '$2y$10$2.Kf2./MBJ2ZXVNgQHO0lOoFfKUBZTqelMXay4LlbqLVldh.s48sG', NULL, NULL, NULL, NULL, '2023-06-08 02:05:18', '2023-06-08 02:05:18', 'user'),
(19, 'Admin', 'admin@gmail.com', NULL, '$2a$09$IRN9K.5jB8f.YkU4eJscmuIKBGgXwl/FVc47J4GIFeUzqw6RXxPCC', NULL, NULL, NULL, NULL, NULL, NULL, 'admin'),
(20, 'LaMi', 'lami@gmail.com', NULL, '$2y$10$VY1SfCT/s8.uciK2oaiC2ugUE9BnJ2LebI0FFRhLHJ9H6a4u/2AwG', NULL, NULL, NULL, NULL, '2023-06-10 07:57:22', '2023-06-10 07:57:22', 'user'),
(21, 'mencoba', 'mencoba@gmail.com', NULL, '$2y$10$eKgO1BT1m.KjQWI.2QYhBeY/EIA3kY7ur07tmxP6mEloYOFr1DE36', 'vxdCr9CEwewJ1Pn4o49Jgvgoalz9uuQHidhtlMSYb3zLev3xPeni0FDIlizABYsLDOtZMuOmuAlvRzes', NULL, NULL, NULL, '2023-06-14 05:34:36', '2023-06-14 05:34:36', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admins`
--

CREATE TABLE `user_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_barang_id_foreign` (`barang_id`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_user_id_foreign` (`user_id`),
  ADD KEY `pesanan_barang_id_foreign` (`barang_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- Indeks untuk tabel `user_admins`
--
ALTER TABLE `user_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_admins_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id_barang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_admins`
--
ALTER TABLE `user_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id_barang`),
  ADD CONSTRAINT `pesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
