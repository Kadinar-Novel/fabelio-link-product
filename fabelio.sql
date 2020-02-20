-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table fabelio.page_link
CREATE TABLE IF NOT EXISTS `page_link` (
  `idPageLink` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPageLink`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fabelio.page_link: ~0 rows (approximately)
DELETE FROM `page_link`;
/*!40000 ALTER TABLE `page_link` DISABLE KEYS */;
INSERT INTO `page_link` (`idPageLink`, `nama`, `page_link`) VALUES
	(3, 'Sofa', 'https://fabelio.com/cp/ruang-tamu/sofa.html'),
	(4, 'Kursi', 'https://fabelio.com/cp/ruang-makan/kursi.html'),
	(5, 'Kasur', 'https://fabelio.com/perbandingan-kasur');
/*!40000 ALTER TABLE `page_link` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
