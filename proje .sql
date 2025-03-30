-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Oca 2024, 17:07:27
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'bashar', '225580', 'admin'),
(2, 'admin', '1234', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(50) NOT NULL,
  `msg_adi` varchar(50) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `mesaj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `msg_adi`, `eposta`, `mesaj`) VALUES
(1, 'bashar ALkhawlani', 'bashar.yousuf@gmail.com', 'harikasiniz'),
(2, 'ahmed', 'Ahmed@yahoo.com', 'guzelmis'),
(3, 'mohammed', 'ahmed', 'i want to go to dubai,,'),
(25, 'hamdan', 'hamdan@gmail.com', 'benimle irtibat gecrbilir misiniz?');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri_hizmet`
--

CREATE TABLE `musteri_hizmet` (
  `mus_id` int(50) NOT NULL,
  `mus_adi` varchar(50) NOT NULL,
  `mus_soyadi` varchar(50) NOT NULL,
  `mus_numarasi` varchar(50) NOT NULL,
  `mus_uyuruk` varchar(50) NOT NULL,
  `mus_hizmet` varchar(100) NOT NULL,
  `mus_cinsiyet` tinyint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `musteri_hizmet`
--

INSERT INTO `musteri_hizmet` (`mus_id`, `mus_adi`, `mus_soyadi`, `mus_numarasi`, `mus_uyuruk`, `mus_hizmet`, `mus_cinsiyet`) VALUES
(18, 'bashar', 'Yousef', '+905319453471', 'YEMEN', 'fethiye', 1),
(19, 'Ali', 'Veli', '+9065677678', 'Turk', 'uludag', 1),
(20, 'Fatima', 'Mohsen', '+90765586890', 'Turk', 'tayland', 2),
(22, 'yousef', 'alkhawlanı', '0096777479304', 'Yemen', 'dubai', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `musteri_hizmet`
--
ALTER TABLE `musteri_hizmet`
  ADD PRIMARY KEY (`mus_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `musteri_hizmet`
--
ALTER TABLE `musteri_hizmet`
  MODIFY `mus_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
