-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                8.0.30 - MySQL Community Server - GPL
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- rentacar.arabalar: ~6 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `arabalar` (`plaka`, `km`, `model`, `renk`, `fiyat`, `otomatik`, `depozito`, `yakitturu`, `motorgucu`, `yas`, `saseno`) VALUES
	('06ATA981', 150000, 'Bmw', 'Siyah', 4500, 'E', 2500, 'Dizel', 230, 3, 72839023941),
	('09ANA219', 40000, 'Bajaj', 'Lacivert', 3000, 'H', 2000, 'Benzin', 155, 5, 8395388523),
	('16BAB63', 1300, 'Tesla', 'Beyaz', 9500, 'E', 7000, 'Elektrik', 360, 1, 1738492830),
	('34TEZ88', 25000, 'Renault', 'Sarı', 3000, 'H', 2500, 'Dizel', 135, 4, 829487359273),
	('35AU234', 147000, 'Mercedes', 'Siyah', 7500, 'E', 6000, 'Dizel', 270, 3, 3452781937),
	('43KS111', 300000, 'Opel', 'Kırmızı', 5500, 'H', 2500, 'Dizel', 125, 5, 148374752);

-- rentacar.kiralama: ~6 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `kiralama` (`tcno`, `plaka`, `saseno`, `baslangic`, `bitis`, `ucret`) VALUES
	(2773843929, '16BAB63', 1738492830, '2024-11-27 00:00:00', '2024-11-30 00:00:00', 19500),
	(19129447894, '09ANA219', 8395388523, '2024-12-10 00:00:00', '2024-12-17 00:00:00', 13000),
	(7329298481, '43KS111', 148374752, '2024-11-25 00:00:00', '2024-11-27 00:00:00', 10500),
	(736294917374, '35AU234', 3452781937, '2024-12-17 00:00:00', '2024-12-20 00:00:00', 23500),
	(32032846592, '06ATA981', 72839023941, '2024-11-28 00:00:00', '2024-11-30 00:00:00', 12500),
	(26371839346, '34TEZ88', 829487359273, '2025-01-03 00:00:00', '2025-01-09 00:00:00', 24000);

-- rentacar.musteriler: ~8 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `musteriler` (`tcno`, `ehliyetbilgileri`, `tlf`, `adi`, `soyadi`, `email`) VALUES
	(2748535923, '{"Sinif: ": "A"}', '0563728312', 'Merve', 'Kaya', 'mervekaya@hotmail.com'),
	(2773843929, '{"Sinif: ": "C"}', '05337281231', 'Nihat', 'Tunalı', 'nihattunali@outlook.com'),
	(2849402848, '{"Sinif: ": "B"}', '05356782635', 'Cem', 'Filiz', 'cemfilizz@icloud.com'),
	(7329298481, '{"Sinif: ": "A"}', '05362728194', 'Esra', 'Taşdelen', 'esratasdelen@gmail.com'),
	(19129447894, '{"Sinif: ": "C"}', '0555738294', 'Mert', 'Önel', 'merttonell@gmail.com'),
	(26371839346, '{"Sinif: ": "D"}', '05416732851', 'Utku', 'Durmaz', 'utkudurmazz@hotmail.com'),
	(32032846592, '{"Sinif: ": "B"}', '05531397494', 'Sıla', 'Durmaz', 'siladurmazz28@gmail.com'),
	(736294917374, '{"Sinif: ": "A"}', '05447382946', 'Asya', 'Bora', 'asyabora@outlook.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
