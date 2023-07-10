-- --------------------------------------------------------
-- Host:                         naura.tipnl.com
-- Server version:               10.5.20-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table tipn3594_naura.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tipn3594_naura.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.menus: ~9 rows (approximately)
REPLACE INTO `menus` (`id`, `nama_menu`, `harga`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
	(16, 'Kebab Ori', 10000, 'isi daging dan sayur', 'images/menu/Kebab Ori.png', '2023-07-07 03:57:48', '2023-07-07 03:57:48'),
	(17, 'kebab special', 18000, 'kebab special for you', 'images/menu/kebab special.png', '2023-07-07 03:59:08', '2023-07-07 03:59:08'),
	(18, 'Slice kebab', 15000, 'potongan kebab untuk keluarga', 'images/menu/Slice kebab.png', '2023-07-07 04:01:11', '2023-07-07 04:01:11'),
	(19, 'Kebab mini', 12000, 'harga bersahabat', 'images/menu/Kebab mini.png', '2023-07-07 04:09:22', '2023-07-07 04:09:22'),
	(20, 'Kebab Komplit', 20000, 'semua ada', 'images/menu/Kebab Komplit.png', '2023-07-07 04:10:12', '2023-07-07 04:10:12'),
	(21, 'Burger ori', 12000, 'wenak banget', 'images/menu/Burger ori.png', '2023-07-07 04:11:11', '2023-07-07 04:11:11'),
	(22, 'Cheese Burger', 18000, 'kejunya meleleh di mulut', 'images/menu/Cheese Burger.png', '2023-07-07 04:11:59', '2023-07-07 04:11:59'),
	(23, 'Burger Kentang', 15000, 'Burger  lengkap dengan kentang', 'images/menu/Burger Kentang.png', '2023-07-07 04:13:41', '2023-07-07 04:13:41'),
	(33, 'tes', 10000, 'tes', 'images/menu/tes.png', '2023-07-08 03:08:19', '2023-07-08 03:08:19');

-- Dumping structure for table tipn3594_naura.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.migrations: ~7 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_07_05_084305_create_menus_table', 1),
	(7, '2023_07_06_103628_create_orders_table', 1);

-- Dumping structure for table tipn3594_naura.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(255) NOT NULL,
  `nama_pesanan` varchar(255) NOT NULL,
  `nohp` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.orders: ~11 rows (approximately)
REPLACE INTO `orders` (`id`, `nama_pemesan`, `nama_pesanan`, `nohp`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'naura', 'ayam', 7578578, 'bayu', '2023-07-07 02:02:06', '2023-07-07 02:02:06'),
	(3, 'naura', 'ayam', 7578578, 'bayu', '2023-07-07 07:03:16', '2023-07-07 07:03:16'),
	(5, 'naura', 'burger', 82213, 'lhokseumawe', '2023-07-07 23:56:15', '2023-07-07 23:56:15'),
	(6, 'naura', 'burger special', 82213, 'lhokseumawe', '2023-07-07 23:56:42', '2023-07-07 23:56:42'),
	(7, 'Dek wahyu', 'burger keju', 78678, 'indramayu', '2023-07-08 01:54:04', '2023-07-08 01:54:04'),
	(8, 'Fadila', 'slice kebab', 823, 'jakarta', '2023-07-08 01:54:28', '2023-07-08 01:54:28'),
	(9, 'rifky', 'burger special', 7578578, 'bayu', '2023-07-08 01:54:48', '2023-07-08 01:54:48'),
	(10, 'sehun', 'kebab ori', 42342, 'korea', '2023-07-08 01:55:27', '2023-07-08 01:55:27'),
	(11, 'nyak May', 'kebab komplit', 897, 'simpang mamplam', '2023-07-08 02:03:34', '2023-07-08 02:03:34'),
	(12, 'Kim Taehyung', 'burger keju', 88653, 'bandung', '2023-07-08 02:04:30', '2023-07-08 02:04:30'),
	(13, 'Muna', '1', 81356, 'Punteut', '2023-07-09 07:31:38', '2023-07-09 07:31:38');

-- Dumping structure for table tipn3594_naura.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.password_resets: ~0 rows (approximately)

-- Dumping structure for table tipn3594_naura.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tipn3594_naura.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table tipn3594_naura.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_naura.users: ~12 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'wahyu', 'wahyu@gmail.com', NULL, '$2y$10$6O6NiucTL/HdT0o4qulXiekDYNfjvuBA31AfHDeN42T3o6ZurR4QK', NULL, '2023-07-06 20:55:30', '2023-07-06 20:55:30'),
	(2, 'admin', 'admin@admin.com', NULL, '$2y$10$sTEMqnSy1n0osXJlwqn3pup.5kdpoVDT1v7.ypUhagWHN5hhOd3fi', NULL, '2023-07-07 02:22:18', '2023-07-07 02:22:18'),
	(3, 'amir', 'amir@gmail.com', NULL, '$2y$10$jRqHAuZ5RdSA9Tzs0bQ7UORD0DJBW8A2pEHpfcsjPQ/hgYMO1UfL6', NULL, '2023-07-07 02:50:27', '2023-07-07 02:50:27'),
	(4, 'dekwahyu', 'dekwahyu@gmail.com', NULL, '$2y$10$J4mPOBDLBZGSC05UgNxDW.f0bP4ksKxxcB4O7sbLtzocDl8/cDdwe', NULL, '2023-07-07 10:03:31', '2023-07-07 10:03:31'),
	(5, 'qnau', 'nau@gamil.com', NULL, '$2y$10$QYs7QzQ0SI0Bo2ckS4/G.eB68IY.MsWzAIXHQMJXgVoNR.UmQezgO', NULL, '2023-07-07 22:24:24', '2023-07-07 22:24:24'),
	(6, 'naura', 'naura@naura.com', NULL, '$2y$10$ocDzvVG1KTSquxlGvsMuOeFP55j0eOF2EizEDXPVNthlEF3OkmrKy', 'FR59xeex18nLsr7bi200IuV7dzAiUSSmrpFckyD4ZWu1kUEN7EZMoZ9Gxrmm', '2023-07-07 22:26:35', '2023-07-07 22:26:35'),
	(7, 'abc', 'abc@gmail.com', NULL, '$2y$10$L4CMunXgbuma6W2u/JdlNOp.ejgKGK8VHtI6oF.ivwF/PF374cr3e', NULL, '2023-07-08 01:06:53', '2023-07-08 01:06:53'),
	(8, 'admin1', 'admin1@admin.com', NULL, '$2y$10$URHxuMKUQxeG0Feud11MP.6W/ph0.SmFNVKAlLP1K5wAwjiJnSyEW', NULL, '2023-07-08 02:24:01', '2023-07-08 02:24:01'),
	(9, 'naura', 'naura@gmail.com', NULL, '$2y$10$72aRuhMlMyjxPx8DMtIDDunp8twwEJqpqSx.LXPYecXTmL1zrkMFu', NULL, '2023-07-08 03:05:22', '2023-07-08 03:05:22'),
	(10, 'Naura', 'nauraa@gmail.com', NULL, '$2y$10$rbvr/cv3EIsNysh3QHS//eCsHKHLTGK0ZjeeXwujQkCSMdACsYeXu', NULL, '2023-07-08 06:03:10', '2023-07-08 06:03:10'),
	(11, 'admin', 'admin2@admin.com', NULL, '$2y$10$6zhOAFsWGl4wqCLcI0H7AeRG.yNFVgJAGBVV3Z.sHp91E/WlR71aG', NULL, '2023-07-08 06:41:57', '2023-07-08 06:41:57'),
	(12, 'Muna', 'muna@gmail.com', NULL, '$2y$10$/ev8.uKMIOSG8Jn29nkgS.dWtPZEeY2sPJUdpJZtYAL9Gple1.IXW', NULL, '2023-07-09 07:30:40', '2023-07-09 07:30:40');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
