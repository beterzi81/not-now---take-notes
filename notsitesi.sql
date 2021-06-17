-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2021, 16:13:45
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `notsitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlar`
--

CREATE TABLE `notlar` (
  `Not_Baslik` varchar(45) NOT NULL DEFAULT 'Başlıksız Not',
  `Not_No` int(11) NOT NULL,
  `Not_Kendi` text NOT NULL,
  `Not_Tarih` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `Uye_ID` varchar(45) NOT NULL,
  `Uye_Sifre` varchar(45) NOT NULL,
  `Uye_Adi` varchar(256) NOT NULL,
  `Uye_Soyadi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_not`
--

CREATE TABLE `uye_not` (
  `Uye_ID` varchar(45) NOT NULL,
  `Not_Baslik` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `notlar`
--
ALTER TABLE `notlar`
  ADD PRIMARY KEY (`Not_Baslik`),
  ADD KEY `aa` (`Not_No`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`Uye_ID`);

--
-- Tablo için indeksler `uye_not`
--
ALTER TABLE `uye_not`
  ADD KEY `Uye_ID` (`Uye_ID`),
  ADD KEY `Not_Baslik` (`Not_Baslik`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `notlar`
--
ALTER TABLE `notlar`
  MODIFY `Not_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `uye_not`
--
ALTER TABLE `uye_not`
  ADD CONSTRAINT `uye_not_ibfk_1` FOREIGN KEY (`Uye_ID`) REFERENCES `uye` (`Uye_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `uye_not_ibfk_2` FOREIGN KEY (`Not_Baslik`) REFERENCES `notlar` (`Not_Baslik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
