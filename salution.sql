-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for salution
CREATE DATABASE IF NOT EXISTS `salution` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `salution`;

-- Dumping structure for table salution.company_profile
CREATE TABLE IF NOT EXISTS `company_profile` (
  `Logo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Foto_desc` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table salution.company_profile: ~0 rows (approximately)
INSERT INTO `company_profile` (`Logo`, `Foto_desc`, `Deskripsi`) VALUES
	('', 'img/tentang-kami.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio soluta nisi doloribus deserunt explicabo neque!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Est praesentium modi natus quae quidem accusantium ab sequi dolorem aspernatur nobis.');

-- Dumping structure for table salution.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `No` int NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `Phone` varchar(50) NOT NULL DEFAULT '0',
  `Pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`No`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table salution.contact: ~0 rows (approximately)
INSERT INTO `contact` (`No`, `Nama`, `Email`, `Phone`, `Pesan`) VALUES
	(12, 'Azzam Shidqi', 'muhammadazzamshidqi935@gmail.com', '0878', 'Tidak Diisi'),
	(13, 'Muhammad Azzam', 'muhammadazzamshidqi935@gmail.com', '0878', 'A');

-- Dumping structure for table salution.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `Nama_Produk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Foto_Produk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Harga_Produk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table salution.produk: ~4 rows (approximately)
INSERT INTO `produk` (`Nama_Produk`, `Foto_Produk`, `Harga_Produk`) VALUES
	('Mie Gomak', 'img/menu/Menu-1.jpg', '25.000'),
	('Kembung Beletok', 'img/menu/Menu-2.jpg', '35.000'),
	('Nasi Gemuk', 'img/menu/Menu-3.jpg', '30.000'),
	('Engkot Keumamah', 'img/menu/Menu-4.jpg', '40.000');

-- Dumping structure for table salution.team_profile
CREATE TABLE IF NOT EXISTS `team_profile` (
  `card_content` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `FB_profile` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `IG_profile` text COLLATE utf8mb4_general_ci NOT NULL,
  `Nama_tim` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Role` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Foto_tim` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `height` int DEFAULT NULL,
  `id_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table salution.team_profile: ~4 rows (approximately)
INSERT INTO `team_profile` (`card_content`, `FB_profile`, `IG_profile`, `Nama_tim`, `Role`, `Foto_tim`, `height`, `id_name`) VALUES
	('content', '', 'https://www.instagram.com/azzamshidqi26/', 'M Azzam S', 'Susah tidur', 'img/profile/Azzam.jpg', NULL, NULL),
	('content-dua', '', 'https://www.instagram.com/nhda.kh/', 'Nahda Kh', 'Front End Developer', 'img/profile/Nahda.jpg', 100, 'img-nahda'),
	('content-tiga', '', 'https://www.instagram.com/putrideaamanda_/', 'Putri Dea A', 'Product Designer', 'img/profile/Dea.jpg', NULL, NULL),
	('content-empat', '', 'https://www.instagram.com/ramlan_n/', 'M Ramlan D', 'Network Administrator', 'img/profile/Ramlan.jpg', NULL, NULL);

-- Dumping structure for table salution.web_config
CREATE TABLE IF NOT EXISTS `web_config` (
  `no` int NOT NULL AUTO_INCREMENT,
  `alamat` text,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table salution.web_config: ~0 rows (approximately)
INSERT INTO `web_config` (`no`, `alamat`, `phone`, `email`) VALUES
	(1, 'South Tangerang, Indonesia', '(+62) 813 8567 4562', 'info@SoluTion.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
