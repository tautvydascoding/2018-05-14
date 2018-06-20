-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2018 at 06:38 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mildosprojektas`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id` int(6) NOT NULL,
  `imageName` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id`, `imageName`) VALUES
(1, '216b465037190838007a4dadf84674c4.jpg'),
(2, '315-20170516-gdj3rw.jpg'),
(3, '2899-testosterone_khac_kich_duc.jpg'),
(4, '340978.jpg'),
(5, '943812.jpg'),
(6, '5538438-girl-wallpaper-hd.jpg'),
(7, '6341673-1-ivorycombo.jpg'),
(8, '33436608_10214576143670863_4701613652829011968_n.jpg'),
(9, '33864837_10155362766476105_2563844134225838080_n.jpg'),
(10, '33922826_10156395116606740_6175127193039929344_n.jpg'),
(11, '33964993_1629388650489831_3806024576891092992_n.jpg'),
(12, '36200929-wallpapers-girl.jpg'),
(13, '76344779.jpg'),
(14, '164144784-child-wallpapers.jpg'),
(15, 'hairstyles-for-men-with-glasses-best-25-men-in-glasses-ideas-on-pinterest-mens-glasses-styles-2018-hairstyles-male.jpg'),
(16, 'Baby-Girl-Teddy-Bear-Wallpaper-1920x1080.jpg'),
(17, 'Beautiful-girl-on-the-road-with-bike-in-summers-wear-shorts-4k-wallpaper-1920x1200.jpg'),
(18, 'cvetenie.jpg'),
(19, 'priroda-plate-leto-babocka-devocka-rebenok-travy-bant-malyska.jpg'),
(20, 'BSbblp4t_785625_23278.jpg'),
(21, 'D25_60_264_1200.jpg'),
(22, 'Lisa-Holloway-children-nature-3695822.jpg'),
(23, '???.jpg'),
(24, 'vy-lyubite-drug-druga.jp'),
(25, 'images (5).jpg'),
(26, 'images (1).jpg'),
(27, '4112715200_8e3d7b6b9d_o.jpg'),
(28, 'dicintai-istri.jpg'),
(29, 'how-to-use-bumble.jpg'),
(30, 'weltknuddeltag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(6) NOT NULL,
  `paslaugos` varchar(50) DEFAULT NULL,
  `kainos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `paslaugos`, `kainos`) VALUES
(1, 'Asmenin? fotosesija', '100 - 250 Eur'),
(2, 'Draug? fotosesija', '80 - 150 Eur'),
(3, 'Krikštyn? fotosesija', '80 - 150 Eur'),
(4, 'Šeimos fotosesija', '80 - 200 Eur'),
(5, 'Vestuvi? fotosesija', 'Kaina sutartin?'),
(6, 'Draug? fotosesija', 'Kaina sutartin?'),
(7, 'Priešvestuvin? fotosesija', '80 - 200 Eur'),
(8, 'Gražiausi? nuotrauk? foto filmas', '50 - 100 Eur'),
(9, 'Švent?s fotosesija', '50 - 150 Eur'),
(10, 'Foto knygos', '100 - 150 Eur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
