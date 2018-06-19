-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2018 at 06:05 PM
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
-- Database: `studija`
--

-- --------------------------------------------------------

--
-- Table structure for table `atsiliepimai`
--

CREATE TABLE `atsiliepimai` (
  `id` int(11) NOT NULL,
  `autorius` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tekstas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atsiliepimai`
--

INSERT INTO `atsiliepimai` (`id`, `autorius`, `tekstas`) VALUES
(1, '‎Vytautė Jurgaitytė Veličkienė', 'Rekomenduoju šią nuostabią vietelę savo brangenybėms ! Net širdies neskauda palikti savo mažylio ,kai matai spindinčias vaiko akytes ir krykštavimus pamačius kur atvažiavo , kaip nekantrauja greičiau įbėgti į patalpą ir pradėti žaisti, o žaislų čia netrūksta ... Manau gerai pakeisti aplinką tiek vaikučiui, tiek tėveliams gerą pusdienį spėti susitvarkyti reikaliukus. Auklės nuostabios , šiltos, nuoširdžios ir nepasikėlę. Labai džiaugiames atradę šią vietelę. Kas dar labai žavi , kad nėra griežtų nustatymų kad vaikutis lankysis 5d per savaitę, o net ir extra reikalui esant susisiekus susitari ir atveži. ☺'),
(2, '‎Rasa Čepulionienė', 'Esame kartu nuo pat pirmųjų Smalsių šnekučių darbo valandų. Išbandėme ir pabuvimą kartu su mamyte ir palikimą keletui valandų ir mini darželį! Esame labai patenkinti! Noriai žingsniuojam į šią vietą☺ nuostabus bendravimas, originalūs užsiėmimai, didelis dėmesys vaikui! Labai džiaugiamės, kad Jūs esate, visiems tikrai rekomenduojame. ☺');

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `id` int(6) NOT NULL,
  `vardas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pavarde` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefonas` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `darbuotojai`
--

INSERT INTO `darbuotojai` (`id`, `vardas`, `pavarde`, `telefonas`) VALUES
(1, 'Eglė', 'Krivickaitė-Leišienė', '(8-620)97729'),
(2, 'Augustė', 'Kunickytė', '+370(672)52502');

-- --------------------------------------------------------

--
-- Table structure for table `kainos`
--

CREATE TABLE `kainos` (
  `id` int(6) NOT NULL,
  `laikotarpis` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kaina` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kainos`
--

INSERT INTO `kainos` (`id`, `laikotarpis`, `kaina`) VALUES
(1, 'valanda', 3),
(2, 'pusei dienos savaitė', 50),
(3, 'pusei dienos mėnuo', 135);

-- --------------------------------------------------------

--
-- Table structure for table `tikslai`
--

CREATE TABLE `tikslai` (
  `id` int(11) NOT NULL,
  `tikslas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tikslai`
--

INSERT INTO `tikslai` (`id`, `tikslas`) VALUES
(1, 'Ugdyti vaikučių asmenybę, savarankiškumą ir pasitikėjimą savimi\r\n'),
(2, 'lavinti vaizduotę ir kūrybiškumą\r\n'),
(3, 'skatinti smalsumą ir iniciatyvumą\r\n'),
(4, 'suteikti laisvę reikšti mintis ir mokytis \r\n'),
(5, 'padėti įgyti komunikacinių gebėjimų\r\n'),
(6, 'organizuoti vaikų ir tėvų lavinamuosius ugdomuosius užsiėmimus\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `created`, `modified`, `status`) VALUES
(2, 'Tomas', 'RiabÄikovas', 'voras19@gmail.com', 'c2dca159fe198e96a63caacd0ba3e071', '68289415', '2018-06-18 07:49:42', '2018-06-18 07:49:42', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kainos`
--
ALTER TABLE `kainos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tikslai`
--
ALTER TABLE `tikslai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kainos`
--
ALTER TABLE `kainos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tikslai`
--
ALTER TABLE `tikslai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
