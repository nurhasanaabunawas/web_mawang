-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 10:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_mawang`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_01_202532_create_wilayah_administrasi_table', 1),
(6, '2021_10_02_142537_create_wilayah_admins_table', 2),
(7, '2021_10_02_193520_create_pemerintahans_table', 3),
(8, '2021_10_03_064800_create_penduduks_table', 3),
(9, '2021_10_03_142212_create_penduduks_table', 4),
(10, '2021_10_03_143147_create_penduduks_table', 5),
(11, '2021_10_03_145449_create_penduduks_table', 6),
(12, '2021_10_03_162743_create_login_table', 7),
(13, '2021_10_03_163209_create_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemerintahans`
--

CREATE TABLE `pemerintahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemerintahans`
--

INSERT INTO `pemerintahans` (`id`, `nama`, `nip`, `jabatan`, `jenis_kelamin`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'AIPDA Muh. Jufri, S.H.', '-', 'Bhabinkamtibmas', 'Laki-Laki', 'Bukit Tamarunang', '2021-10-03 11:10:14', '2021-10-03 11:33:14'),
(3, 'SERTU M. Rahmat', '-', 'Babinsa', 'Laki-Laki', 'Antang', '2021-10-03 11:10:46', '2021-10-03 11:10:46'),
(4, 'Fachruddin, S.Sos', '198509292011012031', 'Sekretaris Kelurahan', 'Laki-Laki', 'Btn. Griya Raihan Pratama', '2021-10-03 11:11:49', '2021-10-03 11:11:49'),
(5, 'Ira Darmawanti R., S.E', '198509292011012031', 'Kepala Seksi Pemerintahan', 'Perempuan', 'Btn. Bumi Batara Mawang', '2021-10-03 11:12:39', '2021-10-03 11:12:39'),
(6, 'Mustari, S.Sos', '198310062010011020', 'Kepala Seksi Ketentraman dan Ketertiban', 'Laki-Laki', 'Dusun Berdikari II', '2021-10-03 11:13:23', '2021-10-03 11:13:23'),
(7, 'Thamrin, S.Sos', '196903281991031008', 'Kepala Seksi Pemberdayaan dan Pelayanan Masyarakat', 'Laki-Laki', 'Jl. Beringin, Kel. Tombolo', '2021-10-03 11:14:22', '2021-10-03 11:14:22'),
(8, 'Nurul Khalifah', '-', 'Staff Honorer', 'Perempuan', 'Jl. Poros Malino', '2021-10-03 11:15:19', '2021-10-03 11:15:19'),
(9, 'Supiani, S.M.', '197109242014092001', 'Staff PNS', 'Perempuan', 'Jl. Damai I', '2021-10-03 11:16:08', '2021-10-03 11:16:08'),
(10, 'Muh. Chaidir Ali', '-', 'Staff Honorer', 'Laki-Laki', 'Jl. Poros Malino', '2021-10-03 11:16:39', '2021-10-03 11:16:39'),
(11, 'Iswadi, SH.', '19770508 200604 1 010', 'Kepala Kelurahan', 'Laki-Laki', 'Jl. Ketilang I No. 18, Bonto Bontoa', '2021-10-03 11:34:57', '2021-10-03 11:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `penduduks`
--

CREATE TABLE `penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perincian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lingkungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `kk` bigint(20) NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_akta_kelahiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduks`
--

INSERT INTO `penduduks` (`id`, `nama`, `perincian`, `status`, `bulan`, `nama_lingkungan`, `jenis_kelamin`, `nik`, `kk`, `nama_ayah`, `nama_ibu`, `no_akta_kelahiran`, `usia`, `kota`, `created_at`, `updated_at`) VALUES
(2, 'Muh Tamsir', 'Pendatang', 'WNI', 'Januari', '-', 'Laki-Laki', 7306082708190006, 7306081305990002, 'Muh Tasry', 'Tati', '-', '-', 'Paccinongan', '2021-10-03 11:56:48', '2021-10-03 11:56:48'),
(3, 'Yustika Amanda', 'Pendatang', 'WNI', 'Januari', '-', 'Perempuan', 7306085404990004, 7306082708190006, 'Muh Arifin Saleh', 'Mantasia Dg Calla', '-', '-', 'Paccinongan', '2021-10-03 11:59:02', '2021-10-03 11:59:02'),
(4, 'Muh Fadhil Yustam', 'Pendatang', 'WNI', 'Januari', '-', 'Laki-Laki', 7306082910190001, 7306082708190006, 'Muh Tamsir', 'Yustika Amanda', '-', '-', 'Paccinongan', '2021-10-03 12:00:31', '2021-10-03 12:00:31'),
(5, 'Rahmat', 'Pindah', 'WNI', 'Januari', 'Biring-Balang', 'Laki-Laki', 7306082406110014, 7306080210460004, 'Drs. Baharuddin MH', 'Muliana', '-', '-', 'Moneobalang', '2021-10-03 12:16:17', '2021-10-03 12:16:17'),
(6, 'Wahyu Hariya Tendika', 'Pindah', 'WNI', 'Januari', '-', 'Laki-Laki', 6409012102960006, 7306082891000030, 'Paeran', 'Hariyati', '-', '-', 'Balikpapan', '2021-10-03 12:18:14', '2021-10-03 12:18:14'),
(7, 'Budu', 'Pindah', 'WNI', 'Januari', 'Biring-Balang', 'Laki-Laki', 7306081112620003, 7306082801654521, 'Dg Bayyong', 'Dg Ngiji', '-', '-', 'Bontoramba', '2021-10-03 12:19:32', '2021-10-03 12:19:32'),
(8, 'Nurbaya', 'Pindah', 'WNI', 'Januari', 'Biring-Balang', 'Perempuan', 7306085707650004, 7306082801654521, 'Dg Tainang', 'Dg Tainang', '-', '-', 'Bontoramba', '2021-10-03 12:22:54', '2021-10-03 12:22:54'),
(9, 'Rusly', 'Pindah', 'WNI', 'Januari', 'Biring-Balang', 'Perempuan', 7306086301010001, 7306082801654521, 'Budu', 'Nurbaya', '-', '-', 'Bontoramba', '2021-10-03 12:24:15', '2021-10-03 12:24:15'),
(10, 'Risma Niswati', 'Pindah', 'WNI', 'Januari', 'Biring-Balang', 'Perempuan', 7306082004070009, 7306082801654521, 'Budu', 'Nurbaya', '-', '-', 'Bontoramba', '2021-10-03 12:25:14', '2021-10-03 12:25:14'),
(11, 'Rifai', 'Pindah', 'WNI', 'Januari', 'Biring-Balang', 'Laki-Laki', 0, 7306082801654521, 'Budu', 'Nurbaya', '-', '-', 'Bontoramba', '2021-10-03 12:26:48', '2021-10-03 12:26:48'),
(12, 'Indah', 'Pindah', 'WNI', 'Januari', 'Buttadidi', 'Perempuan', 7306064187790060, 7306082601180004, 'Sulwan', 'Osna', '-', '-', 'Kendari', '2021-10-03 12:28:09', '2021-10-03 12:29:52'),
(13, 'Deviyanti', 'Pindah', 'WNI', 'Januari', 'Buttadidi', 'Perempuan', 7306064868050001, 7306082601180004, 'Pudding', 'Indah', '-', '-', 'Kendari', '2021-10-03 12:29:34', '2021-10-03 12:29:34'),
(14, 'Divayanti', 'Pindah', 'WNI', 'Januari', 'Buttadidi', 'Perempuan', 7306064509090001, 7306082601180004, 'Paeran', 'Indah', '-', '-', 'Kendari', '2021-10-03 12:31:01', '2021-10-03 12:31:01'),
(15, 'Muhammad Alif Qhairan', 'Pindah', 'WNI', 'Januari', 'Buttadidi', 'Laki-Laki', 7306080801020001, 7306082306160005, 'Hasan Asharu', 'Sinar', '-', '-', 'Kalimantan Timur', '2021-10-03 12:32:20', '2021-10-03 12:32:20'),
(16, 'P Dg Bombong', 'Meninggal', 'WNI', 'Januari', 'Buttadidi', 'Laki-Laki', 7306081212410001, 7306082801054320, '-', '-', '-', '78 Tahun', '-', '2021-10-03 12:34:12', '2021-10-03 12:34:12'),
(17, 'Drs. A Halim Sanaba', 'Meninggal', 'WNI', 'Januari', 'Biring-Balang', 'Laki-Laki', 7306082510460001, 0, '-', '-', '-', '74 Tahun', '-', '2021-10-03 12:35:16', '2021-10-03 12:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_admins`
--

CREATE TABLE `wilayah_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` int(11) NOT NULL,
  `rt` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayah_admins`
--

INSERT INTO `wilayah_admins` (`id`, `nama_wilayah`, `nama_ketua_rw`, `nama_ketua_rt`, `rw`, `rt`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Buttadidi', 'Muis Lasang', 'Salma Dg. Bau', 1, 1, NULL, '2021-10-03 11:38:19', '2021-10-03 11:38:19'),
(4, 'Buttadidi', 'Muis Lasang', 'Asmawati Talli', 1, 2, NULL, '2021-10-03 11:39:09', '2021-10-03 11:39:09'),
(5, 'Buttadidi', 'Muis Lasang', 'Kartini Hamid', 1, 3, NULL, '2021-10-03 11:39:41', '2021-10-03 11:39:41'),
(6, 'Buttadidi', 'Muis Lasang', 'AIPTU Darmono', 1, 7, NULL, '2021-10-03 11:40:09', '2021-10-03 11:40:09'),
(7, 'Buttadidi', 'Muis Lasang', 'Saharuddin P. Mangasa', 1, 8, NULL, '2021-10-03 11:41:00', '2021-10-03 11:41:00'),
(8, 'Buttadidi', 'Muis Lasang', 'Saleh Dg. Tammu', 1, 10, NULL, '2021-10-03 11:41:39', '2021-10-03 11:41:39'),
(9, 'Buttadidi', 'Hendra', 'Muh. Rusdy Dg. Nassa', 2, 4, NULL, '2021-10-03 11:44:10', '2021-10-03 11:44:10'),
(10, 'Buttadidi', 'Hendra', 'Muslimin', 2, 5, NULL, '2021-10-03 11:44:39', '2021-10-03 11:44:39'),
(11, 'Buttadidi', 'Hendra', 'Ramli Bantang', 2, 6, NULL, '2021-10-03 11:46:39', '2021-10-03 11:46:39'),
(12, 'Buttadidi', 'Hendra', 'Syaripudin Dg Se\'re', 2, 9, NULL, '2021-10-03 11:47:14', '2021-10-03 11:47:14'),
(13, 'Biring Balang', 'Hasan Tata', 'Abd. Majid C', 3, 1, NULL, '2021-10-03 11:48:12', '2021-10-03 11:48:12'),
(14, 'Biring Balang', 'Hasan Tata', 'Alimuddin C', 3, 2, NULL, '2021-10-03 11:48:44', '2021-10-03 11:48:44'),
(15, 'Biring Balang', 'Hasan Tata', 'Syaifullah', 3, 3, NULL, '2021-10-03 11:49:11', '2021-10-03 11:49:11'),
(16, 'Biring Balang', 'Hasan Tata', 'AIPTU Haerun', 3, 7, NULL, '2021-10-03 11:49:40', '2021-10-03 11:49:40'),
(17, 'Biring Balang', 'Hasan Tata', 'Hendra', 3, 8, NULL, '2021-10-03 11:50:03', '2021-10-03 11:50:03'),
(18, 'Biring Balang', 'Herman Paewa', 'Usman Ngalle', 4, 4, NULL, '2021-10-03 11:50:55', '2021-10-03 11:50:55'),
(19, 'Biring Balang', 'Herman Paewa', 'Abd. Halik Dg. Sigallo', 4, 5, NULL, '2021-10-03 11:51:34', '2021-10-03 11:51:34'),
(20, 'Biring Balang', 'Herman Paewa', 'Baharuddin', 4, 6, NULL, '2021-10-03 11:51:55', '2021-10-03 11:51:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemerintahans`
--
ALTER TABLE `pemerintahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah_admins`
--
ALTER TABLE `wilayah_admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemerintahans`
--
ALTER TABLE `pemerintahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wilayah_admins`
--
ALTER TABLE `wilayah_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
