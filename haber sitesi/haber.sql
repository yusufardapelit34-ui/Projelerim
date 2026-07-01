-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Haz 2023, 22:13:41
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `haber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `kullanici` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(80) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullanici`, `sifre`) VALUES
('yusuf', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber`
--

CREATE TABLE `haber` (
  `haberid` int(11) NOT NULL,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `fotourl` varchar(40) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haber`
--

INSERT INTO `haber` (`haberid`, `baslik`, `icerik`, `fotourl`) VALUES
(1, 'İç Donanım Sürücülerini Monte Etmek', '<h1>İç donanım sürücülerini monte etmek, genellikle işletim sistemi kurulumu veya donanım değişiklikleri sonrasında yapılması gereken bir işlemdir. İşte iç donanım sürücülerini monte etmek için izlenebilecek adımlar:</h1>\r\n<br>\r\n', ''),
(2, 'Yusuf Arda', '<h2>İç donanım sürücülerini monte etmek, genellikle işletim sistemi kurulumu veya donanım değişiklikleri sonrasında yapılması gereken bir işlemdir. İşte iç donanım sürücülerini monte etmek için izlenebilecek adımlar için Altındaki Linke Basınız:<h2>\r\n<br>\r\n<hr>\r\n<h1>Nasılsın Taşaklı Yusuf</h1>\r\n<ul>\r\n<li>selam taşaklı yusuf</li>\r\n</ul>', 'resim/0.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` int(30) NOT NULL,
  `eposta` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haber`
--
ALTER TABLE `haber`
  ADD PRIMARY KEY (`haberid`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haber`
--
ALTER TABLE `haber`
  MODIFY `haberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
