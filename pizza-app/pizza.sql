-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2026. Nov 01. 18:10
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `pizza`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pizzak`
--

CREATE TABLE `pizzak` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) NOT NULL,
  `feltet` text NOT NULL,
  `ar` int(11) NOT NULL,
  `akcios` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `pizzak`
--

INSERT INTO `pizzak` (`id`, `nev`, `feltet`, `ar`, `akcios`) VALUES
(1, 'Margherita', 'paradicsom, mozzarella, bazsalikom', 2600, '0'),
(2, 'Songoku', 'sonka, gomba, kukorica', 2400, '1'),
(3, 'Nutella', 'nutella, banánkarikák', 2800, '0'),
(4, 'Bolognai', 'bolognai ragu, sajt', 2600, '1'),
(5, 'Gombás', 'gomba, sajt', 2600, '0'),
(6, 'Hawaii', 'sonka, ananász, sajt', 2400, '1'),
(7, 'Húsimádó', 'bolognai ragu, szalámi, sonka, gomba, bacon, sajt', 3200, '0'),
(8, 'Magyaros', 'paprikás szalámi, hagyma, TV paprika, bacon, sajt', 3200, '0'),
(9, 'Mexikói', 'bolognai ragu, bab, kukorica, sajt', 3200, '0'),
(10, 'Négy évszak', 'sonka, gomba, kukorica, bacon, kagyló, olívabogyó, szalámi, zöldborsó, sajt', 3200, '0'),
(11, 'Palermo', 'bacon, sonka, hagyma, gomba, tükörtojás, sajt', 3200, '0'),
(12, 'Tengergyümölcse', 'garnélarák, kagyló, tintahal, polip, olívabogyó, sajt', 3200, '0'),
(13, 'Vegetáriánus', 'gomba, kukorica, borsó, paprika, sajt', 2400, '1'),
(14, 'Kolbi', 'parasztkolbász, lilahagyma, főtt tojás, mozzarella sajt', 2600, '1'),
(15, 'Négysajtos', 'paradicsomkarika, füstölt sajt, camembert sajt, feta sajt, mozzarella sajt', 2800, '0'),
(16, 'Mackó', 'sonka, paprikás szalámi, medve sajt, mozzarella sajt', 3000, '0'),
(17, 'Texas', 'bacon, szalámi, jalapeno, mozzarella sajt', 3000, '0'),
(18, 'Maffiózó', 'sonka, tarja, vöröshagyma, füstölt sajt', 3000, '0'),
(19, 'Extra húsimádó', 'tarja, bacon, virsli, paprikás szalámi, gyros hús, kolbász, vöröshagyma, mozzarella sajt', 3500, '0'),
(20, 'Piedone', 'bacon, vöröshagyma, bab, mozzarella sajt', 3000, '0');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `pizzak`
--
ALTER TABLE `pizzak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `pizzak`
--
ALTER TABLE `pizzak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
