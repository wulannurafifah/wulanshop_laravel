-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 08.22
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wulanshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adbrands`
--

CREATE TABLE `adbrands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adbrands`
--

INSERT INTO `adbrands` (`id`, `brand_title`, `created_at`, `updated_at`) VALUES
(1, 'Zara', '2022-12-31 09:39:26', '2022-12-31 09:39:26'),
(2, 'Stradivarius', '2022-12-31 09:39:42', '2022-12-31 09:39:42'),
(3, 'Sony', '2022-12-31 09:39:50', '2022-12-31 09:39:50'),
(4, 'Iphone', '2022-12-31 09:40:13', '2022-12-31 09:40:13'),
(5, 'Samsung', '2022-12-31 09:40:24', '2022-12-31 09:40:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adcategories`
--

CREATE TABLE `adcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adcategories`
--

INSERT INTO `adcategories` (`id`, `cat_title`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian Wanita', '2022-12-31 09:41:01', '2022-12-31 09:41:01'),
(2, 'Pakaian Pria', '2022-12-31 09:41:11', '2022-12-31 09:41:11'),
(3, 'Barang Elektronik', '2022-12-31 09:41:22', '2022-12-31 09:41:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ademailinfos`
--

CREATE TABLE `ademailinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ademailinfos`
--

INSERT INTO `ademailinfos` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'wulannurafifah476@gmail.com', '2022-12-31 09:42:06', '2022-12-31 09:42:06'),
(2, 'wulannurafifah0@gmail.com', '2022-12-31 09:42:14', '2022-12-31 09:42:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adlogshops`
--

CREATE TABLE `adlogshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adlogshops`
--

INSERT INTO `adlogshops` (`id`, `user_id`, `action`, `date`, `created_at`, `updated_at`) VALUES
(2, '1', 'Dress Elegant Wanita', '2 Januari 2022', '2023-01-04 22:02:04', '2023-01-04 22:02:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admininfos`
--

CREATE TABLE `admininfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admininfos`
--

INSERT INTO `admininfos` (`id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
(2, 'wulan', 'wulannurafifah0@gmail.com', 'wulan', '2023-01-04 22:01:23', '2023-01-04 22:01:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adorderinfos`
--

CREATE TABLE `adorderinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adorderinfos`
--

INSERT INTO `adorderinfos` (`id`, `id_user`, `first_name`, `email`, `address`, `jumlah_produk`, `total_harga`, `created_at`, `updated_at`) VALUES
(2, 1, 'Wulan', 'wulannurafifah0@gmail.com', 'Jl. Melati no 35 Semarang', 1, 100000, '2023-01-04 22:00:59', '2023-01-04 22:00:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adorderproducts`
--

CREATE TABLE `adorderproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_pro_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adorderproducts`
--

INSERT INTO `adorderproducts` (`id`, `order_pro_id`, `order_id`, `product_id`, `qty`, `jml`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 100000, '2023-01-04 21:59:42', '2023-01-04 21:59:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adorders`
--

CREATE TABLE `adorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` int(11) NOT NULL,
  `p_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adorders`
--

INSERT INTO `adorders` (`id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 1, 'complete', '2023-01-04 22:02:47', '2023-01-10 23:05:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adproducts`
--

CREATE TABLE `adproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` longtext NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adproducts`
--

INSERT INTO `adproducts` (`id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_image`, `product_keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 'Zara', 'Dress Elegant Wanita', 100000, 'dress.jpg', 'Pakaian Wanita', '2022-12-31 09:18:16', '2023-01-10 22:44:30'),
(2, 1, 'Stradivarius', 'Dress Winter', 150000, 'dress_winter.jpg', 'Pakaian Wanita', '2022-12-31 09:19:55', '2022-12-31 09:19:55'),
(3, 2, 'Zara', 'Jaket Pria', 100000, 'jaket_pria.jpg', 'Pakaian Pria', '2022-12-31 09:26:27', '2022-12-31 09:26:27'),
(4, 2, 'Stradivarius', 'Winter Sweater Pria', 175000, 'winter_sweater.jpg', 'Pakaian Pria', '2022-12-31 09:27:33', '2022-12-31 09:27:33'),
(5, 3, 'Sony', 'Handphone Sony Experia', 2000000, 'sony_experia.png', 'Barang Elektronik', '2022-12-31 09:30:58', '2022-12-31 09:30:58'),
(6, 3, 'Iphone', 'Handphone Iphone 6s', 5000000, 'iphone_6s.png', 'Barang Elektronik', '2022-12-31 09:32:11', '2022-12-31 09:32:11'),
(7, 3, 'Samsung', 'Handphone Samsung Galaxy Note 3 Neo', 5000000, 'samsunggalaxy_note3neo.jpg', 'Barang Elektronik', '2022-12-31 09:33:29', '2022-12-31 09:33:29'),
(8, 4, 'Iphone', 'Ipad Air', 22000000, 'Ipad_air.png', 'Barang Elektronik', '2022-12-31 09:34:44', '2022-12-31 09:34:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduserinfos`
--

CREATE TABLE `aduserinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address1` longtext NOT NULL,
  `address2` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aduserinfos`
--

INSERT INTO `aduserinfos` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(1, 'Wulan', 'Afifah', 'wulannurafifah0@gmail.com', 'wulan', 8564567, 'Jl. Melati no 35 Semarang', '52342', '2023-01-04 21:57:55', '2023-01-04 21:57:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_12_15_063755_create_users_table', 1),
(5, '2022_12_15_075020_create_adstudents_table', 1),
(6, '2022_12_27_064650_create_adproducts_table', 1),
(7, '2022_12_27_095924_create_adbrands_table', 1),
(8, '2022_12_28_022125_create_ademailinfos_table', 1),
(9, '2022_12_28_034918_create_aduserinfos_table', 1),
(10, '2022_12_28_041546_create_adcategories_table', 1),
(11, '2022_12_28_044151_create_adorderproducts_table', 1),
(12, '2022_12_28_230514_create_adorderinfos_table', 1),
(13, '2022_12_29_030747_create_admininfos_table', 2),
(14, '2022_12_29_045247_create_adlogshops_table', 3),
(15, '2022_12_29_074716_create_adorders_table', 4),
(16, '2022_12_29_081824_create_adorders_table', 5),
(17, '2022_12_29_141824_create_adproducts_table', 6),
(18, '2022_12_29_142011_create_adproducts_table', 7),
(19, '2022_12_29_142226_create_adproducts_table', 8),
(20, '2022_12_31_160908_create_adproducts_table', 9);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adbrands`
--
ALTER TABLE `adbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adcategories`
--
ALTER TABLE `adcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ademailinfos`
--
ALTER TABLE `ademailinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adlogshops`
--
ALTER TABLE `adlogshops`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admininfos`
--
ALTER TABLE `admininfos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adorderinfos`
--
ALTER TABLE `adorderinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adorderproducts`
--
ALTER TABLE `adorderproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adorders`
--
ALTER TABLE `adorders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adproducts`
--
ALTER TABLE `adproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aduserinfos`
--
ALTER TABLE `aduserinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adbrands`
--
ALTER TABLE `adbrands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `adcategories`
--
ALTER TABLE `adcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ademailinfos`
--
ALTER TABLE `ademailinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adlogshops`
--
ALTER TABLE `adlogshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admininfos`
--
ALTER TABLE `admininfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adorderinfos`
--
ALTER TABLE `adorderinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adorderproducts`
--
ALTER TABLE `adorderproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `adorders`
--
ALTER TABLE `adorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adproducts`
--
ALTER TABLE `adproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `aduserinfos`
--
ALTER TABLE `aduserinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
